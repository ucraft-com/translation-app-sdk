<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

/**
 * QueryTranslationItemsValueObject holds values for querying translation items.
 */
readonly class QueryTranslationItemsValueObject
{
    public function __construct(
        protected string $languageCode,
        protected ?string $resource = null,
        protected ?int $resourceId = null,
        protected ?string $search = null,
        protected array $orderBy = [],
        protected int $page = 0,
        protected int $first = 10,
        protected bool $findAll = false,
        protected array $groups = [],
        protected array $apps = [],
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
