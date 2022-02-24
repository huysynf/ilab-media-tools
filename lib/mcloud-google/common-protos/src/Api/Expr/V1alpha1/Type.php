<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace MediaCloud\Vendor\Google\Api\Expr\V1alpha1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a CEL type.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Type</code>
 */
class Type extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    protected $type_kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Protobuf\GPBEmpty $dyn
     *           Dynamic type.
     *     @type int $null
     *           Null value.
     *     @type int $primitive
     *           Primitive types: `true`, `1u`, `-2.0`, `'string'`, `b'bytes'`.
     *     @type int $wrapper
     *           Wrapper of a primitive type, e.g. `google.protobuf.Int64Value`.
     *     @type int $well_known
     *           Well-known protobuf type such as `google.protobuf.Timestamp`.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\ListType $list_type
     *           Parameterized list with elements of `list_type`, e.g. `list<timestamp>`.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\MapType $map_type
     *           Parameterized map with typed keys and values.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\FunctionType $function
     *           Function type.
     *     @type string $message_type
     *           Protocol buffer message type.
     *           The `message_type` string specifies the qualified message type name. For
     *           example, `google.plus.Profile`.
     *     @type string $type_param
     *           Type param type.
     *           The `type_param` string specifies the type parameter name, e.g. `list<E>`
     *           would be a `list_type` whose element type was a `type_param` type
     *           named `E`.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type $type
     *           Type type.
     *           The `type` value specifies the target type. e.g. int is type with a
     *           target type of `Primitive.INT`.
     *     @type \MediaCloud\Vendor\Google\Protobuf\GPBEmpty $error
     *           Error type.
     *           During type-checking if an expression is an error, its type is propagated
     *           as the `ERROR` type. This permits the type-checker to discover other
     *           errors present in the expression.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\AbstractType $abstract_type
     *           Abstract, application defined type.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * Dynamic type.
     *
     * Generated from protobuf field <code>.google.protobuf.Empty dyn = 1;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\GPBEmpty
     */
    public function getDyn()
    {
        return $this->readOneof(1);
    }

    /**
     * Dynamic type.
     *
     * Generated from protobuf field <code>.google.protobuf.Empty dyn = 1;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setDyn($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null = 2;</code>
     * @return int
     */
    public function getNull()
    {
        return $this->readOneof(2);
    }

    /**
     * Null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNull($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Protobuf\NullValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Primitive types: `true`, `1u`, `-2.0`, `'string'`, `b'bytes'`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.PrimitiveType primitive = 3;</code>
     * @return int
     */
    public function getPrimitive()
    {
        return $this->readOneof(3);
    }

    /**
     * Primitive types: `true`, `1u`, `-2.0`, `'string'`, `b'bytes'`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.PrimitiveType primitive = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPrimitive($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_PrimitiveType::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Wrapper of a primitive type, e.g. `google.protobuf.Int64Value`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.PrimitiveType wrapper = 4;</code>
     * @return int
     */
    public function getWrapper()
    {
        return $this->readOneof(4);
    }

    /**
     * Wrapper of a primitive type, e.g. `google.protobuf.Int64Value`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.PrimitiveType wrapper = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWrapper($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_PrimitiveType::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Well-known protobuf type such as `google.protobuf.Timestamp`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.WellKnownType well_known = 5;</code>
     * @return int
     */
    public function getWellKnown()
    {
        return $this->readOneof(5);
    }

    /**
     * Well-known protobuf type such as `google.protobuf.Timestamp`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.WellKnownType well_known = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWellKnown($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_WellKnownType::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Parameterized list with elements of `list_type`, e.g. `list<timestamp>`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.ListType list_type = 6;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\ListType
     */
    public function getListType()
    {
        return $this->readOneof(6);
    }

    /**
     * Parameterized list with elements of `list_type`, e.g. `list<timestamp>`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.ListType list_type = 6;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\ListType $var
     * @return $this
     */
    public function setListType($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_ListType::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Parameterized map with typed keys and values.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.MapType map_type = 7;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\MapType
     */
    public function getMapType()
    {
        return $this->readOneof(7);
    }

    /**
     * Parameterized map with typed keys and values.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.MapType map_type = 7;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\MapType $var
     * @return $this
     */
    public function setMapType($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_MapType::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Function type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.FunctionType function = 8;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\FunctionType
     */
    public function getFunction()
    {
        return $this->readOneof(8);
    }

    /**
     * Function type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.FunctionType function = 8;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\FunctionType $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_FunctionType::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Protocol buffer message type.
     * The `message_type` string specifies the qualified message type name. For
     * example, `google.plus.Profile`.
     *
     * Generated from protobuf field <code>string message_type = 9;</code>
     * @return string
     */
    public function getMessageType()
    {
        return $this->readOneof(9);
    }

    /**
     * Protocol buffer message type.
     * The `message_type` string specifies the qualified message type name. For
     * example, `google.plus.Profile`.
     *
     * Generated from protobuf field <code>string message_type = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Type param type.
     * The `type_param` string specifies the type parameter name, e.g. `list<E>`
     * would be a `list_type` whose element type was a `type_param` type
     * named `E`.
     *
     * Generated from protobuf field <code>string type_param = 10;</code>
     * @return string
     */
    public function getTypeParam()
    {
        return $this->readOneof(10);
    }

    /**
     * Type param type.
     * The `type_param` string specifies the type parameter name, e.g. `list<E>`
     * would be a `list_type` whose element type was a `type_param` type
     * named `E`.
     *
     * Generated from protobuf field <code>string type_param = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeParam($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Type type.
     * The `type` value specifies the target type. e.g. int is type with a
     * target type of `Primitive.INT`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type type = 11;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type
     */
    public function getType()
    {
        return $this->readOneof(11);
    }

    /**
     * Type type.
     * The `type` value specifies the target type. e.g. int is type with a
     * target type of `Primitive.INT`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type type = 11;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Error type.
     * During type-checking if an expression is an error, its type is propagated
     * as the `ERROR` type. This permits the type-checker to discover other
     * errors present in the expression.
     *
     * Generated from protobuf field <code>.google.protobuf.Empty error = 12;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\GPBEmpty
     */
    public function getError()
    {
        return $this->readOneof(12);
    }

    /**
     * Error type.
     * During type-checking if an expression is an error, its type is propagated
     * as the `ERROR` type. This permits the type-checker to discover other
     * errors present in the expression.
     *
     * Generated from protobuf field <code>.google.protobuf.Empty error = 12;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Abstract, application defined type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.AbstractType abstract_type = 14;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\AbstractType
     */
    public function getAbstractType()
    {
        return $this->readOneof(14);
    }

    /**
     * Abstract, application defined type.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type.AbstractType abstract_type = 14;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type\AbstractType $var
     * @return $this
     */
    public function setAbstractType($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1alpha1\Type_AbstractType::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeKind()
    {
        return $this->whichOneof("type_kind");
    }

}

