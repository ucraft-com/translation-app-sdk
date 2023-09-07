<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk;

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
        $request->setLanguageCode($valueObject->getLanguageCode());
        $request->setResource($valueObject->getResource());
        $request->setPage($valueObject->getPage());
        $request->setFirst($valueObject->getFirst());

        [$data, $metadata] = $this->client->getTranslations($request)->wait();

        return ['data' => $data?->getItems(), 'metadata' => $metadata];
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
        if ($valueObject->hasId()) {
            $data->setId($valueObject->getId());
        }
        if ($valueObject->hasParams()) {
            $data->setParams($valueObject->getParams());
        }
        $data->setKey($valueObject->getKey());
        $data->setValue($valueObject->getValue());
        $data->setCreatedAt($valueObject->getCreatedAt());
        $data->setResource($valueObject->getResource());
        $data->setResourceId($valueObject->getResourceId());
        $data->setLanguageCode($valueObject->getLanguageCode());

        [$data, $metadata] = $this->client->UpdateTranslation($data)->wait();
        $processedData = null;

        if ($data) {
            $processedData = [
                'id'           => $data->getId(),
                'key'          => $data->getKey(),
                'value'        => $data->getValue(),
                'createdAt'    => $data->getCreatedAt(),
                'resource'     => $data->getResource(),
                'resourceId'   => $data->getResourceId(),
                'params'       => $data->getParams(),
                'languageCode' => $data->getLanguageCode(),
            ];
        }

        return ['data' => $processedData, 'metadata' => $metadata];
    }
}
