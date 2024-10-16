<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/translation.proto

namespace TranslationPackage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TranslationPackage.TranslationItem</code>
 */
class TranslationItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 1;</code>
     */
    protected $id = null;
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>string value = 3;</code>
     */
    protected $value = '';
    /**
     * Generated from protobuf field <code>.TranslationPackage.Group group = 4;</code>
     */
    protected $group = 0;
    /**
     * Generated from protobuf field <code>string default_value = 5;</code>
     */
    protected $default_value = '';
    /**
     * Generated from protobuf field <code>string language_code = 6;</code>
     */
    protected $language_code = '';
    /**
     * Generated from protobuf field <code>string editor_name = 7;</code>
     */
    protected $editor_name = '';
    /**
     * Generated from protobuf field <code>string resource = 8;</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>int32 resource_id = 9;</code>
     */
    protected $resource_id = 0;
    /**
     * Generated from protobuf field <code>string updated_at = 10;</code>
     */
    protected $updated_at = '';
    /**
     * Generated from protobuf field <code>map<string, string> params = 11;</code>
     */
    private $params;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $id
     *     @type string $key
     *     @type string $value
     *     @type int $group
     *     @type string $default_value
     *     @type string $language_code
     *     @type string $editor_name
     *     @type string $resource
     *     @type int $resource_id
     *     @type string $updated_at
     *     @type array|\Google\Protobuf\Internal\MapField $params
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Translation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 1;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 1;</code>
     * @return int|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 1;</code>
     * @param int|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

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
     * Generated from protobuf field <code>.TranslationPackage.Group group = 4;</code>
     * @return int
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Generated from protobuf field <code>.TranslationPackage.Group group = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkEnum($var, \TranslationPackage\Group::class);
        $this->group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_value = 5;</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * Generated from protobuf field <code>string default_value = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string language_code = 6;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Generated from protobuf field <code>string language_code = 6;</code>
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
     * Generated from protobuf field <code>string editor_name = 7;</code>
     * @return string
     */
    public function getEditorName()
    {
        return $this->editor_name;
    }

    /**
     * Generated from protobuf field <code>string editor_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEditorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->editor_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resource = 8;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 8;</code>
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
     * Generated from protobuf field <code>int32 resource_id = 9;</code>
     * @return int
     */
    public function getResourceId()
    {
        return $this->resource_id;
    }

    /**
     * Generated from protobuf field <code>int32 resource_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceId($var)
    {
        GPBUtil::checkInt32($var);
        $this->resource_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 10;</code>
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> params = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generated from protobuf field <code>map<string, string> params = 11;</code>
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

