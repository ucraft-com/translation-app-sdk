<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/translation.proto

namespace TranslationPackage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>translationPackage.TranslationItem</code>
 */
class TranslationItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>string value = 3;</code>
     */
    protected $value = '';
    /**
     * Generated from protobuf field <code>string language_code = 4;</code>
     */
    protected $language_code = '';
    /**
     * Generated from protobuf field <code>string resource = 5;</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>string resource_id = 6;</code>
     */
    protected $resource_id = '';
    /**
     * Generated from protobuf field <code>string created_at = 7;</code>
     */
    protected $created_at = '';
    /**
     * Generated from protobuf field <code>map<string, string> params = 8;</code>
     */
    private $params;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $key
     *     @type string $value
     *     @type string $language_code
     *     @type string $resource
     *     @type string $resource_id
     *     @type string $created_at
     *     @type array|\Google\Protobuf\Internal\MapField $params
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Translation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 3;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource = 5;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource_id = 6;</code>
     * @return string
     */
    public function getResourceId()
    {
        return $this->resource_id;
    }

    /**
     * Generated from protobuf field <code>string resource_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_at = 7;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> params = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generated from protobuf field <code>map<string, string> params = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->params = $arr;

        return $this;
    }

}
