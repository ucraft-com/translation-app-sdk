<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

class TranslationItemValueObject
{
    public function __construct(
        protected readonly string $key,
        protected readonly string $value,
        protected readonly string $languageCode,
        protected readonly string $updatedAt,
        protected readonly string $resource,
        protected readonly int $resourceId,
        protected readonly string $editor,
        protected readonly int $id,
        protected readonly ?array $params,
    )
    {
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getEditor(): string
    {
        return $this->editor;
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
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * @return int
     */
    public function getResourceId(): int
    {
        return $this->resourceId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
