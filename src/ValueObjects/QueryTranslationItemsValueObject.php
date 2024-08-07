<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

/**
 * QueryTranslationItemsValueObject holds values for querying translation items.
 */
class QueryTranslationItemsValueObject
{
    public function __construct(
        protected readonly string $languageCode,
        protected readonly ?string $resource = null,
        protected readonly ?int $resourceId = null,
        protected readonly ?string $search = null,
        protected readonly array $orderBy = [],
        protected readonly int $page = 0,
        protected readonly int $first = 10,
        protected readonly bool $findAll = false,
        protected readonly array $groups = [],
        protected readonly array $apps = [],
    ){
    }

    /**
     * @return bool
     */
    public function getFindAll(): bool
    {
        return $this->findAll;
    }

    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @return array
     */
    public function getApps(): array
    {
        return $this->apps;
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
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * @return int|null
     */
    public function getResourceId(): ?int
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
     * @return string|null
     */
    public function getResource(): ?string
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
