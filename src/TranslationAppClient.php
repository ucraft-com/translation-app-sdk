<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk;

use Google\Protobuf\Int32Value;
use TranslationPackage\OrderBy;

use TranslationPackage\OrderByColumn;
use TranslationPackage\OrderByDirection;
use Uc\TranslationAppSdk\ValueObjects\UpsertTranslationItemValueObject;
use Uc\TranslationAppSdk\ValueObjects\QueryTranslationItemsValueObject;
use TranslationPackage\TranslationClient;
use TranslationPackage\TranslationItem;
use TranslationPackage\TranslationQuery;

/**
 * TranslationAppClient is a client to work with rpc methods.
 */
class TranslationAppClient
{
    public function __construct(protected TranslationClient $client)
    {
    }

    /**
     * Get paginated translations.
     *
     * @param \Uc\TranslationAppSdk\ValueObjects\QueryTranslationItemsValueObject $valueObject
     *
     * @return array
     */
    public function getTranslations(QueryTranslationItemsValueObject $valueObject): array
    {
        $request = new TranslationQuery();
        $request->setResourceId($valueObject->getResourceId());
        $request->setResource($valueObject->getResource());
        $request->setLanguageCode($valueObject->getLanguageCode());
        $request->setKey($valueObject->getKey());
        $request->setPage($valueObject->getPage());
        $request->setFirst($valueObject->getFirst());

        if ($inputOrder = $valueObject->getOrderBy()) {
            $orderBy = new OrderBy();
            $orderBy->setColumn(OrderByColumn::value($inputOrder['column']));
            $orderBy->setOrder(OrderByDirection::value($inputOrder['order']));
            $request->setOrderBy($orderBy);
        }

        [$data, $metadata] = $this->client->getTranslations($request)->wait();

        $processedData = [];

        if ($data) {
            /** @var TranslationItem $translationItem */
            foreach ($data->getItems() as $translationItem) {
                $processedData[] = [
                    'translationId'      => $translationItem->getTranslationId()?->getValue(),
                    'key'                => $translationItem->getKey(),
                    'value'              => $translationItem->getValue(),
                    'defaultValue'       => $translationItem->getDefaultValue(),
                    'updatedAt'          => $translationItem->getUpdatedAt(),
                    'editorName'         => $translationItem->getEditorName(),
                    'params'             => $translationItem->getParams(),
                    'languageCode'       => $translationItem->getLanguageCode(),
                    'translationEntryId' => $translationItem->getTranslationEntryId(),
                ];
            }
        }

        return ['data' => $processedData, 'total' => $data?->getTotal() ?? 0, 'metadata' => $metadata];
    }

    /**
     * Update translation if id exists, or create new one.
     *
     * @param \Uc\TranslationAppSdk\ValueObjects\UpsertTranslationItemValueObject $valueObject
     *
     * @return array
     */
    public function upsert(UpsertTranslationItemValueObject $valueObject): array
    {
        $data = new TranslationItem();

        if ($valueObject->hasTranslationId()) {
            $int32Value = new Int32Value();
            $int32Value->setValue($valueObject->getTranslationId()); // Set the integer value
            $data->setTranslationId($int32Value);
        }

        if ($valueObject->hasParams()) {
            $data->setParams($valueObject->getParams());
        }

        $data->setValue($valueObject->getValue());
        $data->setEditorName($valueObject->getEditorName());
        $data->setLanguageCode($valueObject->getLanguageCode());
        $data->setResource($valueObject->getResource());
        $data->setResourceId($valueObject->getResourceId());
        $data->setTranslationEntryId($valueObject->getTranslationEntryId());

        [$data, $metadata] = $this->client->UpsertTranslation($data)->wait();
        $processedData = null;

        if ($data) {
            $processedData = [
                'translationEntryId' => $data->getTranslationEntryId(),
                'value'              => $data->getValue(),
                'updatedAt'          => $data->getUpdatedAt(),
                'editorName'         => $data->getEditorName(),
                'params'             => $data->getParams(),
                'languageCode'       => $data->getLanguageCode(),
                'translationId'      => $data->getTranslationId()?->getValue()
            ];
        }

        return ['data' => $processedData, 'metadata' => $metadata];
    }
}
