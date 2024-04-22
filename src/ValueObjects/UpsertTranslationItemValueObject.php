<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

/**
 * UpsertTranslationItemValueObject holds values for upserting translation item.
 */
class UpsertTranslationItemValueObject
{
    public function __construct(
        protected readonly string $value,
        protected readonly string $languageCode,
        protected readonly string $key,
        protected readonly string $editorName,
        protected readonly ?string $resource,
        protected readonly ?int $resourceId,
        protected readonly ?int $translationId,
        protected readonly ?array $params,
    ) {
    }

    /**
     * @return string|null
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }

    /**
     * @return bool
     */
    public function hasResource(): bool
    {
        return !empty($this->getResource());
    }

    /**
     * @return int|null
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * @return bool
     */
    public function hasResourceId(): bool
    {
        return !empty($this->getResourceId());
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getEditorName(): string
    {
        return $this->editorName;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * @return bool
     */
    public function hasTranslationId(): bool
    {
        return !empty($this->getTranslationId());
    }

    /**
     * @return int|null
     */
    public function getTranslationId(): ?int
    {
        return $this->translationId;
    }

    /**
     * @return array|null
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * @return bool
     */
    public function hasParams(): bool
    {
        return !empty($this->getParams());
    }
}
