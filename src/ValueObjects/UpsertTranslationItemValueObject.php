<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

use TranslationPackage\Group;

/**
 * UpsertTranslationItemValueObject holds values for upserting translation item.
 */
readonly class UpsertTranslationItemValueObject
{
    public function __construct(
        protected string $value,
        protected string $languageCode,
        protected string $key,
        protected string $editorName,
        protected ?string $resource,
        protected ?int $resourceId,
        protected ?int $id,
        protected ?array $params,
        protected ?int $group,
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
     * @return int|null
     */
    public function getGroup(): ?int
    {
        return $this->group;
    }

    /**
     * @return bool
     */
    public function hasGroup(): bool
    {
        return !empty($this->getGroup());
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
    public function hasId(): bool
    {
        return !empty($this->getId());
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
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
