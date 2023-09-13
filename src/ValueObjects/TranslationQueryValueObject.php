<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

class TranslationQueryValueObject
{
    public function __construct(
        protected readonly int $resourceId,
        protected readonly string $languageCode,
        protected readonly string $resource,
        protected readonly ?string $key = null,
        protected readonly array $orderBy = [],
        protected readonly int $page = 0,
        protected readonly int $first = 10,
    ){
    }

    /**
     * @return array
     */
    public function getOrderBy(): array
    {
        return $this->orderBy;
    }

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @return int
     */
    public function getResourceId(): int
    {
        return $this->resourceId;
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
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getFirst(): int
    {
        return $this->first;
    }
}
