<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/translation.proto

namespace TranslationPackage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TranslationPackage.TranslationQuery</code>
 */
class TranslationQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    protected $language_code = '';
    /**
     * Generated from protobuf field <code>string resource = 2;</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>int32 resource_id = 3;</code>
     */
    protected $resource_id = 0;
    /**
     * Generated from protobuf field <code>int32 page = 4;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int32 first = 5;</code>
     */
    protected $first = 0;
    /**
     * Generated from protobuf field <code>string search = 6;</code>
     */
    protected $search = '';
    /**
     * Generated from protobuf field <code>.TranslationPackage.OrderBy order_by = 7;</code>
     */
    protected $order_by = null;
    /**
     * Generated from protobuf field <code>bool find_all = 8;</code>
     */
    protected $find_all = false;
    /**
     * Generated from protobuf field <code>.TranslationPackage.TranslationGroup group = 9;</code>
     */
    protected $group = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_code
     *     @type string $resource
     *     @type int $resource_id
     *     @type int $page
     *     @type int $first
     *     @type string $search
     *     @type \TranslationPackage\OrderBy $order_by
     *     @type bool $find_all
     *     @type int $group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Translation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Generated from protobuf field <code>string language_code = 1;</code>
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
     * Generated from protobuf field <code>string resource = 2;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 2;</code>
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
     * Generated from protobuf field <code>int32 resource_id = 3;</code>
     * @return int
     */
    public function getResourceId()
    {
        return $this->resource_id;
    }

    /**
     * Generated from protobuf field <code>int32 resource_id = 3;</code>
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
     * Generated from protobuf field <code>int32 page = 4;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 first = 5;</code>
     * @return int
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Generated from protobuf field <code>int32 first = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFirst($var)
    {
        GPBUtil::checkInt32($var);
        $this->first = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string search = 6;</code>
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Generated from protobuf field <code>string search = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->search = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TranslationPackage.OrderBy order_by = 7;</code>
     * @return \TranslationPackage\OrderBy
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Generated from protobuf field <code>.TranslationPackage.OrderBy order_by = 7;</code>
     * @param \TranslationPackage\OrderBy $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkMessage($var, \TranslationPackage\OrderBy::class);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool find_all = 8;</code>
     * @return bool
     */
    public function getFindAll()
    {
        return $this->find_all;
    }

    /**
     * Generated from protobuf field <code>bool find_all = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setFindAll($var)
    {
        GPBUtil::checkBool($var);
        $this->find_all = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TranslationPackage.TranslationGroup group = 9;</code>
     * @return int
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Generated from protobuf field <code>.TranslationPackage.TranslationGroup group = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkEnum($var, \TranslationPackage\TranslationGroup::class);
        $this->group = $var;

        return $this;
    }

}

