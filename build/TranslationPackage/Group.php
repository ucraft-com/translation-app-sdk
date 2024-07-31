<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/translation.proto

namespace TranslationPackage;

use UnexpectedValueException;

/**
 * Protobuf type <code>TranslationPackage.Group</code>
 */
class Group
{
    /**
     * in case of 0 it is not sending data, this field is skipping 0 value
     *
     * Generated from protobuf enum <code>UNSPECIFIED_GROUP = 0;</code>
     */
    const UNSPECIFIED_GROUP = 0;
    /**
     * Generated from protobuf enum <code>DEFAULTS = 1;</code>
     */
    const DEFAULTS = 1;
    /**
     * Generated from protobuf enum <code>CHECKOUT = 2;</code>
     */
    const CHECKOUT = 2;

    private static $valueToName = [
        self::UNSPECIFIED_GROUP => 'UNSPECIFIED_GROUP',
        self::DEFAULTS => 'DEFAULTS',
        self::CHECKOUT => 'CHECKOUT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

