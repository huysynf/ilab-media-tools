<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/type/log_severity.proto

namespace MediaCloud\Vendor\Google\Cloud\Logging\Type;

use UnexpectedValueException;

/**
 * The severity of the event described in a log entry, expressed as one of the
 * standard severity levels listed below.  For your reference, the levels are
 * assigned the listed numeric values. The effect of using numeric values other
 * than those listed is undefined.
 * You can filter for log entries by severity.  For example, the following
 * filter expression will match log entries with severities `INFO`, `NOTICE`,
 * and `WARNING`:
 *     severity > DEBUG AND severity <= WARNING
 * If you are writing log entries, you should map other severity encodings to
 * one of these standard levels. For example, you might map all of Java's FINE,
 * FINER, and FINEST levels to `LogSeverity.DEBUG`. You can preserve the
 * original severity level in the log entry payload if you wish.
 *
 * Protobuf type <code>google.logging.type.LogSeverity</code>
 */
class LogSeverity
{
    /**
     * (0) The log entry has no assigned severity level.
     *
     * Generated from protobuf enum <code>DEFAULT = 0;</code>
     */
    const PBDEFAULT = 0;
    /**
     * (100) Debug or trace information.
     *
     * Generated from protobuf enum <code>DEBUG = 100;</code>
     */
    const DEBUG = 100;
    /**
     * (200) Routine information, such as ongoing status or performance.
     *
     * Generated from protobuf enum <code>INFO = 200;</code>
     */
    const INFO = 200;
    /**
     * (300) Normal but significant events, such as start up, shut down, or
     * a configuration change.
     *
     * Generated from protobuf enum <code>NOTICE = 300;</code>
     */
    const NOTICE = 300;
    /**
     * (400) Warning events might cause problems.
     *
     * Generated from protobuf enum <code>WARNING = 400;</code>
     */
    const WARNING = 400;
    /**
     * (500) Error events are likely to cause problems.
     *
     * Generated from protobuf enum <code>ERROR = 500;</code>
     */
    const ERROR = 500;
    /**
     * (600) Critical events cause more severe problems or outages.
     *
     * Generated from protobuf enum <code>CRITICAL = 600;</code>
     */
    const CRITICAL = 600;
    /**
     * (700) A person must take an action immediately.
     *
     * Generated from protobuf enum <code>ALERT = 700;</code>
     */
    const ALERT = 700;
    /**
     * (800) One or more systems are unusable.
     *
     * Generated from protobuf enum <code>EMERGENCY = 800;</code>
     */
    const EMERGENCY = 800;

    private static $valueToName = [
        self::PBDEFAULT => 'PBDEFAULT',
        self::DEBUG => 'DEBUG',
        self::INFO => 'INFO',
        self::NOTICE => 'NOTICE',
        self::WARNING => 'WARNING',
        self::ERROR => 'ERROR',
        self::CRITICAL => 'CRITICAL',
        self::ALERT => 'ALERT',
        self::EMERGENCY => 'EMERGENCY',
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

