<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk;

use Google\Protobuf\Int32Value;
use TranslationPackage\OrderBy;
use Uc\TranslationAppSdk\Enums\ColumnEnum;
use Uc\TranslationAppSdk\Enums\OrderByEnum;
use Uc\TranslationAppSdk\ValueObjects\TranslationItemValueObject;
use Uc\TranslationAppSdk\ValueObjects\TranslationQueryValueObject;
use TranslationPackage\TranslationClient;
use TranslationPackage\TranslationItem;
use TranslationPackage\TranslationQuery;

class TranslationAppClient
{
    public function __construct(protected TranslationClient $client)
    {
    }

    /**
     * Get paginated translations.
     *
     * @param \Uc\TranslationAppSdk\ValueObjects\TranslationQueryValueObject $valueObject
     *
     * @return array
     */
    public function getTranslations(TranslationQueryValueObject $valueObject): array
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
            $orderBy->setColumn(ColumnEnum::tryFrom($inputOrder['column'])->value);
            $orderBy->setOrder(OrderByEnum::tryFrom($inputOrder['order'])->value);
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
                    'editor'             => $translationItem->getEditor(),
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
     * @param \Uc\TranslationAppSdk\ValueObjects\TranslationItemValueObject $valueObject
     *
     * @return array
     */
    public function updateOrCreate(TranslationItemValueObject $valueObject): array
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
        $data->setUpdatedAt($valueObject->getUpdatedAt());
        $data->setEditor($valueObject->getEditor());
        $data->setLanguageCode($valueObject->getLanguageCode());
        $data->setResource($valueObject->getResource());
        $data->setResourceId($valueObject->getResourceId());
        $data->setTranslationEntryId($valueObject->getTranslationEntryId());

        [$data, $metadata] = $this->client->UpdateTranslation($data)->wait();
        $processedData = null;

        if ($data) {
            $processedData = [
                'translationEntryId' => $data->getTranslationEntryId(),
                'value'              => $data->getValue(),
                'updatedAt'          => $data->getUpdatedAt(),
                'editor'             => $data->getEditor(),
                'params'             => $data->getParams(),
                'languageCode'       => $data->getLanguageCode(),
                'translationId'      => $data->getTranslationId()?->getValue()
            ];
        }

        return ['data' => $processedData, 'metadata' => $metadata];
    }
}
