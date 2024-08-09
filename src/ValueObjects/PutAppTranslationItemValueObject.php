<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

/**
 * PutAppTranslationItemValueObject holds values for putting app translation item.
 */
readonly class PutAppTranslationItemValueObject
{
    public function __construct(
        protected int $appId,
        protected string $version,
        protected array $data,
    ) {
    }

    /**
     * @return int
     */
    public function getAppId(): int
    {
        return $this->appId;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
