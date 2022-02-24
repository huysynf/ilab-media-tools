<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/service.proto

namespace MediaCloud\Vendor\Google\Api;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * `Service` is the root object of Google service configuration schema. It
 * describes basic information about a service, such as the name and the
 * title, and delegates other aspects to sub-sections. Each sub-section is
 * either a proto message or a repeated proto message that configures a
 * specific aspect, such as auth. See each proto message definition for details.
 * Example:
 *     type: google.api.Service
 *     config_version: 3
 *     name: calendar.googleapis.com
 *     title: Google Calendar API
 *     apis:
 *     - name: google.calendar.v3.Calendar
 *     authentication:
 *       providers:
 *       - id: google_calendar_auth
 *         jwks_uri: https://www.googleapis.com/oauth2/v1/certs
 *         issuer: https://securetoken.google.com
 *       rules:
 *       - selector: "*"
 *         requirements:
 *           provider_id: google_calendar_auth
 *
 * Generated from protobuf message <code>google.api.Service</code>
 */
class Service extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The semantic version of the service configuration. The config version
     * affects the interpretation of the service configuration. For example,
     * certain features are enabled by default for certain config versions.
     * The latest config version is `3`.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt32Value config_version = 20;</code>
     */
    private $config_version = null;
    /**
     * The DNS address at which this service is available,
     * e.g. `calendar.googleapis.com`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A unique ID for a specific instance of this message, typically assigned
     * by the client for tracking purpose. If empty, the server may choose to
     * generate one instead.
     *
     * Generated from protobuf field <code>string id = 33;</code>
     */
    private $id = '';
    /**
     * The product title for this service.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * The Google project that owns this service.
     *
     * Generated from protobuf field <code>string producer_project_id = 22;</code>
     */
    private $producer_project_id = '';
    /**
     * A list of API interfaces exported by this service. Only the `name` field
     * of the [google.protobuf.Api][google.protobuf.Api] needs to be provided by the configuration
     * author, as the remaining fields will be derived from the IDL during the
     * normalization process. It is an error to specify an API interface here
     * which cannot be resolved against the associated IDL files.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Api apis = 3;</code>
     */
    private $apis;
    /**
     * A list of all proto message types included in this API service.
     * Types referenced directly or indirectly by the `apis` are
     * automatically included.  Messages which are not referenced but
     * shall be included, such as types used by the `google.protobuf.Any` type,
     * should be listed here by name. Example:
     *     types:
     *     - name: google.protobuf.Int32
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Type types = 4;</code>
     */
    private $types;
    /**
     * A list of all enum types included in this API service.  Enums
     * referenced directly or indirectly by the `apis` are automatically
     * included.  Enums which are not referenced but shall be included
     * should be listed here by name. Example:
     *     enums:
     *     - name: google.someapi.v1.SomeEnum
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Enum enums = 5;</code>
     */
    private $enums;
    /**
     * Additional API documentation.
     *
     * Generated from protobuf field <code>.google.api.Documentation documentation = 6;</code>
     */
    private $documentation = null;
    /**
     * API backend configuration.
     *
     * Generated from protobuf field <code>.google.api.Backend backend = 8;</code>
     */
    private $backend = null;
    /**
     * HTTP configuration.
     *
     * Generated from protobuf field <code>.google.api.Http http = 9;</code>
     */
    private $http = null;
    /**
     * Quota configuration.
     *
     * Generated from protobuf field <code>.google.api.Quota quota = 10;</code>
     */
    private $quota = null;
    /**
     * Auth configuration.
     *
     * Generated from protobuf field <code>.google.api.Authentication authentication = 11;</code>
     */
    private $authentication = null;
    /**
     * Context configuration.
     *
     * Generated from protobuf field <code>.google.api.Context context = 12;</code>
     */
    private $context = null;
    /**
     * Configuration controlling usage of this service.
     *
     * Generated from protobuf field <code>.google.api.Usage usage = 15;</code>
     */
    private $usage = null;
    /**
     * Configuration for network endpoints.  If this is empty, then an endpoint
     * with the same name as the service is automatically generated to service all
     * defined APIs.
     *
     * Generated from protobuf field <code>repeated .google.api.Endpoint endpoints = 18;</code>
     */
    private $endpoints;
    /**
     * Configuration for the service control plane.
     *
     * Generated from protobuf field <code>.google.api.Control control = 21;</code>
     */
    private $control = null;
    /**
     * Defines the logs used by this service.
     *
     * Generated from protobuf field <code>repeated .google.api.LogDescriptor logs = 23;</code>
     */
    private $logs;
    /**
     * Defines the metrics used by this service.
     *
     * Generated from protobuf field <code>repeated .google.api.MetricDescriptor metrics = 24;</code>
     */
    private $metrics;
    /**
     * Defines the monitored resources used by this service. This is required
     * by the [Service.monitoring][google.api.Service.monitoring] and [Service.logging][google.api.Service.logging] configurations.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResourceDescriptor monitored_resources = 25;</code>
     */
    private $monitored_resources;
    /**
     * Billing configuration.
     *
     * Generated from protobuf field <code>.google.api.Billing billing = 26;</code>
     */
    private $billing = null;
    /**
     * Logging configuration.
     *
     * Generated from protobuf field <code>.google.api.Logging logging = 27;</code>
     */
    private $logging = null;
    /**
     * Monitoring configuration.
     *
     * Generated from protobuf field <code>.google.api.Monitoring monitoring = 28;</code>
     */
    private $monitoring = null;
    /**
     * System parameter configuration.
     *
     * Generated from protobuf field <code>.google.api.SystemParameters system_parameters = 29;</code>
     */
    private $system_parameters = null;
    /**
     * Output only. The source information for this configuration if available.
     *
     * Generated from protobuf field <code>.google.api.SourceInfo source_info = 37;</code>
     */
    private $source_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Protobuf\UInt32Value $config_version
     *           The semantic version of the service configuration. The config version
     *           affects the interpretation of the service configuration. For example,
     *           certain features are enabled by default for certain config versions.
     *           The latest config version is `3`.
     *     @type string $name
     *           The DNS address at which this service is available,
     *           e.g. `calendar.googleapis.com`.
     *     @type string $id
     *           A unique ID for a specific instance of this message, typically assigned
     *           by the client for tracking purpose. If empty, the server may choose to
     *           generate one instead.
     *     @type string $title
     *           The product title for this service.
     *     @type string $producer_project_id
     *           The Google project that owns this service.
     *     @type \MediaCloud\Vendor\Google\Protobuf\Api[]|\Google\Protobuf\Internal\RepeatedField $apis
     *           A list of API interfaces exported by this service. Only the `name` field
     *           of the [google.protobuf.Api][google.protobuf.Api] needs to be provided by the configuration
     *           author, as the remaining fields will be derived from the IDL during the
     *           normalization process. It is an error to specify an API interface here
     *           which cannot be resolved against the associated IDL files.
     *     @type \MediaCloud\Vendor\Google\Protobuf\Type[]|\Google\Protobuf\Internal\RepeatedField $types
     *           A list of all proto message types included in this API service.
     *           Types referenced directly or indirectly by the `apis` are
     *           automatically included.  Messages which are not referenced but
     *           shall be included, such as types used by the `google.protobuf.Any` type,
     *           should be listed here by name. Example:
     *               types:
     *               - name: google.protobuf.Int32
     *     @type \MediaCloud\Vendor\Google\Protobuf\Enum[]|\Google\Protobuf\Internal\RepeatedField $enums
     *           A list of all enum types included in this API service.  Enums
     *           referenced directly or indirectly by the `apis` are automatically
     *           included.  Enums which are not referenced but shall be included
     *           should be listed here by name. Example:
     *               enums:
     *               - name: google.someapi.v1.SomeEnum
     *     @type \MediaCloud\Vendor\Google\Api\Documentation $documentation
     *           Additional API documentation.
     *     @type \MediaCloud\Vendor\Google\Api\Backend $backend
     *           API backend configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Http $http
     *           HTTP configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Quota $quota
     *           Quota configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Authentication $authentication
     *           Auth configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Context $context
     *           Context configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Usage $usage
     *           Configuration controlling usage of this service.
     *     @type \MediaCloud\Vendor\Google\Api\Endpoint[]|\Google\Protobuf\Internal\RepeatedField $endpoints
     *           Configuration for network endpoints.  If this is empty, then an endpoint
     *           with the same name as the service is automatically generated to service all
     *           defined APIs.
     *     @type \MediaCloud\Vendor\Google\Api\Control $control
     *           Configuration for the service control plane.
     *     @type \MediaCloud\Vendor\Google\Api\LogDescriptor[]|\Google\Protobuf\Internal\RepeatedField $logs
     *           Defines the logs used by this service.
     *     @type \MediaCloud\Vendor\Google\Api\MetricDescriptor[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Defines the metrics used by this service.
     *     @type \MediaCloud\Vendor\Google\Api\MonitoredResourceDescriptor[]|\Google\Protobuf\Internal\RepeatedField $monitored_resources
     *           Defines the monitored resources used by this service. This is required
     *           by the [Service.monitoring][google.api.Service.monitoring] and [Service.logging][google.api.Service.logging] configurations.
     *     @type \MediaCloud\Vendor\Google\Api\Billing $billing
     *           Billing configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Logging $logging
     *           Logging configuration.
     *     @type \MediaCloud\Vendor\Google\Api\Monitoring $monitoring
     *           Monitoring configuration.
     *     @type \MediaCloud\Vendor\Google\Api\SystemParameters $system_parameters
     *           System parameter configuration.
     *     @type \MediaCloud\Vendor\Google\Api\SourceInfo $source_info
     *           Output only. The source information for this configuration if available.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The semantic version of the service configuration. The config version
     * affects the interpretation of the service configuration. For example,
     * certain features are enabled by default for certain config versions.
     * The latest config version is `3`.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt32Value config_version = 20;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\UInt32Value
     */
    public function getConfigVersion()
    {
        return $this->config_version;
    }

    /**
     * Returns the unboxed value from <code>getConfigVersion()</code>

     * The semantic version of the service configuration. The config version
     * affects the interpretation of the service configuration. For example,
     * certain features are enabled by default for certain config versions.
     * The latest config version is `3`.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt32Value config_version = 20;</code>
     * @return int|null
     */
    public function getConfigVersionUnwrapped()
    {
        $wrapper = $this->getConfigVersion();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The semantic version of the service configuration. The config version
     * affects the interpretation of the service configuration. For example,
     * certain features are enabled by default for certain config versions.
     * The latest config version is `3`.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt32Value config_version = 20;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\UInt32Value $var
     * @return $this
     */
    public function setConfigVersion($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Protobuf\UInt32Value::class);
        $this->config_version = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a MediaCloud\Vendor\Google\Protobuf\UInt32Value object.

     * The semantic version of the service configuration. The config version
     * affects the interpretation of the service configuration. For example,
     * certain features are enabled by default for certain config versions.
     * The latest config version is `3`.
     *
     * Generated from protobuf field <code>.google.protobuf.UInt32Value config_version = 20;</code>
     * @param int|null $var
     * @return $this
     */
    public function setConfigVersionUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \MediaCloud\Vendor\Google\Protobuf\UInt32Value(['value' => $var]);
        return $this->setConfigVersion($wrappedVar);
    }

    /**
     * The DNS address at which this service is available,
     * e.g. `calendar.googleapis.com`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The DNS address at which this service is available,
     * e.g. `calendar.googleapis.com`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A unique ID for a specific instance of this message, typically assigned
     * by the client for tracking purpose. If empty, the server may choose to
     * generate one instead.
     *
     * Generated from protobuf field <code>string id = 33;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique ID for a specific instance of this message, typically assigned
     * by the client for tracking purpose. If empty, the server may choose to
     * generate one instead.
     *
     * Generated from protobuf field <code>string id = 33;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The product title for this service.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The product title for this service.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The Google project that owns this service.
     *
     * Generated from protobuf field <code>string producer_project_id = 22;</code>
     * @return string
     */
    public function getProducerProjectId()
    {
        return $this->producer_project_id;
    }

    /**
     * The Google project that owns this service.
     *
     * Generated from protobuf field <code>string producer_project_id = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setProducerProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->producer_project_id = $var;

        return $this;
    }

    /**
     * A list of API interfaces exported by this service. Only the `name` field
     * of the [google.protobuf.Api][google.protobuf.Api] needs to be provided by the configuration
     * author, as the remaining fields will be derived from the IDL during the
     * normalization process. It is an error to specify an API interface here
     * which cannot be resolved against the associated IDL files.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Api apis = 3;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getApis()
    {
        return $this->apis;
    }

    /**
     * A list of API interfaces exported by this service. Only the `name` field
     * of the [google.protobuf.Api][google.protobuf.Api] needs to be provided by the configuration
     * author, as the remaining fields will be derived from the IDL during the
     * normalization process. It is an error to specify an API interface here
     * which cannot be resolved against the associated IDL files.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Api apis = 3;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\Api[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Protobuf\Api::class);
        $this->apis = $arr;

        return $this;
    }

    /**
     * A list of all proto message types included in this API service.
     * Types referenced directly or indirectly by the `apis` are
     * automatically included.  Messages which are not referenced but
     * shall be included, such as types used by the `google.protobuf.Any` type,
     * should be listed here by name. Example:
     *     types:
     *     - name: google.protobuf.Int32
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Type types = 4;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * A list of all proto message types included in this API service.
     * Types referenced directly or indirectly by the `apis` are
     * automatically included.  Messages which are not referenced but
     * shall be included, such as types used by the `google.protobuf.Any` type,
     * should be listed here by name. Example:
     *     types:
     *     - name: google.protobuf.Int32
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Type types = 4;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\Type[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Protobuf\Type::class);
        $this->types = $arr;

        return $this;
    }

    /**
     * A list of all enum types included in this API service.  Enums
     * referenced directly or indirectly by the `apis` are automatically
     * included.  Enums which are not referenced but shall be included
     * should be listed here by name. Example:
     *     enums:
     *     - name: google.someapi.v1.SomeEnum
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Enum enums = 5;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getEnums()
    {
        return $this->enums;
    }

    /**
     * A list of all enum types included in this API service.  Enums
     * referenced directly or indirectly by the `apis` are automatically
     * included.  Enums which are not referenced but shall be included
     * should be listed here by name. Example:
     *     enums:
     *     - name: google.someapi.v1.SomeEnum
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Enum enums = 5;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\Enum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnums($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Protobuf\Enum::class);
        $this->enums = $arr;

        return $this;
    }

    /**
     * Additional API documentation.
     *
     * Generated from protobuf field <code>.google.api.Documentation documentation = 6;</code>
     * @return \MediaCloud\Vendor\Google\Api\Documentation
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Additional API documentation.
     *
     * Generated from protobuf field <code>.google.api.Documentation documentation = 6;</code>
     * @param \MediaCloud\Vendor\Google\Api\Documentation $var
     * @return $this
     */
    public function setDocumentation($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Documentation::class);
        $this->documentation = $var;

        return $this;
    }

    /**
     * API backend configuration.
     *
     * Generated from protobuf field <code>.google.api.Backend backend = 8;</code>
     * @return \MediaCloud\Vendor\Google\Api\Backend
     */
    public function getBackend()
    {
        return $this->backend;
    }

    /**
     * API backend configuration.
     *
     * Generated from protobuf field <code>.google.api.Backend backend = 8;</code>
     * @param \MediaCloud\Vendor\Google\Api\Backend $var
     * @return $this
     */
    public function setBackend($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Backend::class);
        $this->backend = $var;

        return $this;
    }

    /**
     * HTTP configuration.
     *
     * Generated from protobuf field <code>.google.api.Http http = 9;</code>
     * @return \MediaCloud\Vendor\Google\Api\Http
     */
    public function getHttp()
    {
        return $this->http;
    }

    /**
     * HTTP configuration.
     *
     * Generated from protobuf field <code>.google.api.Http http = 9;</code>
     * @param \MediaCloud\Vendor\Google\Api\Http $var
     * @return $this
     */
    public function setHttp($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Http::class);
        $this->http = $var;

        return $this;
    }

    /**
     * Quota configuration.
     *
     * Generated from protobuf field <code>.google.api.Quota quota = 10;</code>
     * @return \MediaCloud\Vendor\Google\Api\Quota
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Quota configuration.
     *
     * Generated from protobuf field <code>.google.api.Quota quota = 10;</code>
     * @param \MediaCloud\Vendor\Google\Api\Quota $var
     * @return $this
     */
    public function setQuota($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Quota::class);
        $this->quota = $var;

        return $this;
    }

    /**
     * Auth configuration.
     *
     * Generated from protobuf field <code>.google.api.Authentication authentication = 11;</code>
     * @return \MediaCloud\Vendor\Google\Api\Authentication
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * Auth configuration.
     *
     * Generated from protobuf field <code>.google.api.Authentication authentication = 11;</code>
     * @param \MediaCloud\Vendor\Google\Api\Authentication $var
     * @return $this
     */
    public function setAuthentication($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Authentication::class);
        $this->authentication = $var;

        return $this;
    }

    /**
     * Context configuration.
     *
     * Generated from protobuf field <code>.google.api.Context context = 12;</code>
     * @return \MediaCloud\Vendor\Google\Api\Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Context configuration.
     *
     * Generated from protobuf field <code>.google.api.Context context = 12;</code>
     * @param \MediaCloud\Vendor\Google\Api\Context $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Context::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Configuration controlling usage of this service.
     *
     * Generated from protobuf field <code>.google.api.Usage usage = 15;</code>
     * @return \MediaCloud\Vendor\Google\Api\Usage
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Configuration controlling usage of this service.
     *
     * Generated from protobuf field <code>.google.api.Usage usage = 15;</code>
     * @param \MediaCloud\Vendor\Google\Api\Usage $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Usage::class);
        $this->usage = $var;

        return $this;
    }

    /**
     * Configuration for network endpoints.  If this is empty, then an endpoint
     * with the same name as the service is automatically generated to service all
     * defined APIs.
     *
     * Generated from protobuf field <code>repeated .google.api.Endpoint endpoints = 18;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Configuration for network endpoints.  If this is empty, then an endpoint
     * with the same name as the service is automatically generated to service all
     * defined APIs.
     *
     * Generated from protobuf field <code>repeated .google.api.Endpoint endpoints = 18;</code>
     * @param \MediaCloud\Vendor\Google\Api\Endpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\Endpoint::class);
        $this->endpoints = $arr;

        return $this;
    }

    /**
     * Configuration for the service control plane.
     *
     * Generated from protobuf field <code>.google.api.Control control = 21;</code>
     * @return \MediaCloud\Vendor\Google\Api\Control
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Configuration for the service control plane.
     *
     * Generated from protobuf field <code>.google.api.Control control = 21;</code>
     * @param \MediaCloud\Vendor\Google\Api\Control $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Control::class);
        $this->control = $var;

        return $this;
    }

    /**
     * Defines the logs used by this service.
     *
     * Generated from protobuf field <code>repeated .google.api.LogDescriptor logs = 23;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Defines the logs used by this service.
     *
     * Generated from protobuf field <code>repeated .google.api.LogDescriptor logs = 23;</code>
     * @param \MediaCloud\Vendor\Google\Api\LogDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\LogDescriptor::class);
        $this->logs = $arr;

        return $this;
    }

    /**
     * Defines the metrics used by this service.
     *
     * Generated from protobuf field <code>repeated .google.api.MetricDescriptor metrics = 24;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Defines the metrics used by this service.
     *
     * Generated from protobuf field <code>repeated .google.api.MetricDescriptor metrics = 24;</code>
     * @param \MediaCloud\Vendor\Google\Api\MetricDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\MetricDescriptor::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Defines the monitored resources used by this service. This is required
     * by the [Service.monitoring][google.api.Service.monitoring] and [Service.logging][google.api.Service.logging] configurations.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResourceDescriptor monitored_resources = 25;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getMonitoredResources()
    {
        return $this->monitored_resources;
    }

    /**
     * Defines the monitored resources used by this service. This is required
     * by the [Service.monitoring][google.api.Service.monitoring] and [Service.logging][google.api.Service.logging] configurations.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResourceDescriptor monitored_resources = 25;</code>
     * @param \MediaCloud\Vendor\Google\Api\MonitoredResourceDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonitoredResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\MonitoredResourceDescriptor::class);
        $this->monitored_resources = $arr;

        return $this;
    }

    /**
     * Billing configuration.
     *
     * Generated from protobuf field <code>.google.api.Billing billing = 26;</code>
     * @return \MediaCloud\Vendor\Google\Api\Billing
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Billing configuration.
     *
     * Generated from protobuf field <code>.google.api.Billing billing = 26;</code>
     * @param \MediaCloud\Vendor\Google\Api\Billing $var
     * @return $this
     */
    public function setBilling($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Billing::class);
        $this->billing = $var;

        return $this;
    }

    /**
     * Logging configuration.
     *
     * Generated from protobuf field <code>.google.api.Logging logging = 27;</code>
     * @return \MediaCloud\Vendor\Google\Api\Logging
     */
    public function getLogging()
    {
        return $this->logging;
    }

    /**
     * Logging configuration.
     *
     * Generated from protobuf field <code>.google.api.Logging logging = 27;</code>
     * @param \MediaCloud\Vendor\Google\Api\Logging $var
     * @return $this
     */
    public function setLogging($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Logging::class);
        $this->logging = $var;

        return $this;
    }

    /**
     * Monitoring configuration.
     *
     * Generated from protobuf field <code>.google.api.Monitoring monitoring = 28;</code>
     * @return \MediaCloud\Vendor\Google\Api\Monitoring
     */
    public function getMonitoring()
    {
        return $this->monitoring;
    }

    /**
     * Monitoring configuration.
     *
     * Generated from protobuf field <code>.google.api.Monitoring monitoring = 28;</code>
     * @param \MediaCloud\Vendor\Google\Api\Monitoring $var
     * @return $this
     */
    public function setMonitoring($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Monitoring::class);
        $this->monitoring = $var;

        return $this;
    }

    /**
     * System parameter configuration.
     *
     * Generated from protobuf field <code>.google.api.SystemParameters system_parameters = 29;</code>
     * @return \MediaCloud\Vendor\Google\Api\SystemParameters
     */
    public function getSystemParameters()
    {
        return $this->system_parameters;
    }

    /**
     * System parameter configuration.
     *
     * Generated from protobuf field <code>.google.api.SystemParameters system_parameters = 29;</code>
     * @param \MediaCloud\Vendor\Google\Api\SystemParameters $var
     * @return $this
     */
    public function setSystemParameters($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\SystemParameters::class);
        $this->system_parameters = $var;

        return $this;
    }

    /**
     * Output only. The source information for this configuration if available.
     *
     * Generated from protobuf field <code>.google.api.SourceInfo source_info = 37;</code>
     * @return \MediaCloud\Vendor\Google\Api\SourceInfo
     */
    public function getSourceInfo()
    {
        return $this->source_info;
    }

    /**
     * Output only. The source information for this configuration if available.
     *
     * Generated from protobuf field <code>.google.api.SourceInfo source_info = 37;</code>
     * @param \MediaCloud\Vendor\Google\Api\SourceInfo $var
     * @return $this
     */
    public function setSourceInfo($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\SourceInfo::class);
        $this->source_info = $var;

        return $this;
    }

}

