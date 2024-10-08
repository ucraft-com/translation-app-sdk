<?php

declare(strict_types=1);

namespace Uc\TranslationAppSdk\ValueObjects;

/**
 * PutAppTranslationItemValueObject holds values for putting app translation item.
 */
readonly class PutAppTranslationItemValueObject
{
    public function __construct(
        protected string $appId,
        protected string $data,
    ) {
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
}
