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
        $request->setSearch($valueObject->getSearch());
        $request->setPage($valueObject->getPage());
        $request->setFirst($valueObject->getFirst());

        if ($inputOrder = $valueObject->getOrderBy()) {
            $orderBy = new OrderBy();
            $orderBy->setColumn(OrderByColumn::value($inputOrder['column']));
            $orderBy->setOrder(OrderByDirection::value($inputOrder['order']));
            $request->setOrderBy($orderBy);
        }

        [$data, $metadata] = $this->client->GetTranslations($request)->wait();

        $processedData = [];

        if ($data) {
            /** @var TranslationItem $translationItem */
            foreach ($data->getItems() as $translationItem) {
                $processedData[] = [
                    'id'           => $translationItem->getId()?->getValue(),
                    'key'          => $translationItem->getKey(),
                    'value'        => $translationItem->getValue(),
                    'defaultValue' => $translationItem->getDefaultValue(),
                    'updatedAt'    => $translationItem->getUpdatedAt(),
                    'editorName'   => $translationItem->getEditorName(),
                    'params'       => $translationItem->getParams(),
                    'languageCode' => $translationItem->getLanguageCode(),
                ];
            }
        }

        return ['data' => $processedData, 'total' => $data?->getTotal() ?? 0, 'metadata' => $metadata];
    }

    /**
     * Find all translations, without pagination.
     *
     * @param \Uc\TranslationAppSdk\ValueObjects\QueryTranslationItemsValueObject $valueObject
     *
     * @return array
     */
    public function findAll(QueryTranslationItemsValueObject $valueObject): array
    {
        $request = new TranslationQuery();
        $request->setResourceId($valueObject->getResourceId());
        $request->setResource($valueObject->getResource());
        $request->setLanguageCode($valueObject->getLanguageCode());
        $request->setFindAll($valueObject->getFindAll());
        $request->setGroup($valueObject->getGroup());

        [$data, $metadata] = $this->client->GetTranslations($request)->wait();

        $processedData = [];

        if ($data) {
            /** @var TranslationItem $translationItem */
            foreach ($data->getItems() as $translationItem) {
                $processedData[$translationItem->getKey()] = $translationItem->getValue();
            }
        }

        return ['data' => $processedData, 'metadata' => $metadata];
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

        if ($valueObject->hasId()) {
            $int32Value = new Int32Value();
            $int32Value->setValue($valueObject->getId()); // Set the integer value
            $data->setId($int32Value);
        }

        if ($valueObject->hasParams()) {
            $data->setParams($valueObject->getParams());
        }

        if ($valueObject->hasResource()) {
            $data->setResource($valueObject->getResource());
        }

        if ($valueObject->getResourceId()) {
            $data->setResourceId($valueObject->getResourceId());
        }

        $data->setKey($valueObject->getKey());
        $data->setValue($valueObject->getValue());
        $data->setEditorName($valueObject->getEditorName());
        $data->setLanguageCode($valueObject->getLanguageCode());

        [$data, $metadata] = $this->client->UpsertTranslation($data)->wait();
        $processedData = null;

        if ($data) {
            $processedData = [
                'key'          => $data->getKey(),
                'value'        => $data->getValue(),
                'updatedAt'    => $data->getUpdatedAt(),
                'editorName'   => $data->getEditorName(),
                'params'       => $data->getParams(),
                'languageCode' => $data->getLanguageCode(),
                'id'           => $data->getId()?->getValue()
            ];
        }

        return ['data' => $processedData, 'metadata' => $metadata];
    }
}
