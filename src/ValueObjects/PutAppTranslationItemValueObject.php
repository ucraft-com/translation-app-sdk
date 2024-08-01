<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

/**
 * PutAppTranslationItemValueObject holds values for putting app translation item.
 */
class PutAppTranslationItemValueObject
{
    public function __construct(
        protected readonly int $appId,
        protected readonly string $version,
        protected readonly array $data,
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
