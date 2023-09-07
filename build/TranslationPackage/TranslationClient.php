<?php
// GENERATED CODE -- DO NOT EDIT!

namespace TranslationPackage;

/**
 */
class TranslationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \TranslationPackage\TranslationItem $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTranslation(\TranslationPackage\TranslationItem $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/translationPackage.Translation/UpdateTranslation',
        $argument,
        ['\TranslationPackage\TranslationItem', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \TranslationPackage\TranslationQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTranslations(\TranslationPackage\TranslationQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/translationPackage.Translation/GetTranslations',
        $argument,
        ['\TranslationPackage\TranslationItems', 'decode'],
        $metadata, $options);
    }

}
