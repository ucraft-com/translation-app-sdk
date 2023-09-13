<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

readonly class TranslationQueryValueObject
{
    public function __construct(
        protected int $resourceId,
        protected string $languageCode,
        protected string $resource,
        protected ?string $key = null,
        protected array $orderBy = [],
        protected int $page = 0,
        protected int $first = 10,
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
