<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/api.proto

namespace MediaCloud\Vendor\GPBMetadata\Google\Protobuf;

class Api
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \MediaCloud\Vendor\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        } \MediaCloud\Vendor\GPBMetadata\Google\Protobuf\SourceContext::initOnce(); \MediaCloud\Vendor\GPBMetadata\Google\Protobuf\Type::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/protobuf/api.protogoogle.protobufgoogle/protobuf/type.proto"�
Api
name (	(
methods (2.google.protobuf.Method(
options (2.google.protobuf.Option
version (	6
source_context (2.google.protobuf.SourceContext&
mixins (2.google.protobuf.Mixin\'
syntax (2.google.protobuf.Syntax"�
Method
name (	
request_type_url (	
request_streaming (
response_type_url (	
response_streaming ((
options (2.google.protobuf.Option\'
syntax (2.google.protobuf.Syntax"#
Mixin
name (	
root (	Bv
com.google.protobufBApiProtoPZ,google.golang.org/protobuf/types/known/apipb�GPB�Google.Protobuf.WellKnownTypesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

