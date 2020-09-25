<?php
/**
 * EmailReportResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transactional API
 *
 * # Introduction    This API is a service provided by [E-goi](www.e-goi.com) to send transactional messages.    Transactional Messaging is a 1-to-1 communication channel, usually from an organization directed to a specific consumer.   They can be triggered by:    * __Actions__ - The consumer interacts with the organization (ie.: online shopping);  * __Time__ - The consumer's actions are time-bounded by the organization (ie.: period of inactivity).    Because of the nature of these messages,   it is expected that the consumer is interested in the content of these messages.   Therefore, they have a different treatment from marketing messages, and have a higher acceptance and opening rate.    >DISCLAIMER  >  >Please notice that this platform is more delicate in regards to the nature and processing of its messages.  >  >It should NOT be used as a mean of mass marketing, scams, phishing or overall unruly behaviour.   >  >Failure to comply may lead to limitation of use and even termination of account.    ***
 *
 * OpenAPI spec version: V2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EmailReportResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailReportResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailReportResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group_id' => 'string',
'group_name' => 'string',
'views_total' => 'int',
'views_unique' => 'int',
'clicks_total' => 'int',
'clicks_unique' => 'int',
'metrics_total' => 'int',
'metrics_processed' => 'int',
'metrics_sent' => 'int',
'event_removed' => 'int',
'event_soft_bounce' => 'int',
'event_hard_bounce' => 'int',
'time_period' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group_id' => null,
'group_name' => null,
'views_total' => 'int32',
'views_unique' => 'int32',
'clicks_total' => 'int32',
'clicks_unique' => 'int32',
'metrics_total' => 'int32',
'metrics_processed' => 'int32',
'metrics_sent' => 'int32',
'event_removed' => 'int32',
'event_soft_bounce' => 'int32',
'event_hard_bounce' => 'int32',
'time_period' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'group_id' => 'groupId',
'group_name' => 'groupName',
'views_total' => 'viewsTotal',
'views_unique' => 'viewsUnique',
'clicks_total' => 'clicksTotal',
'clicks_unique' => 'clicksUnique',
'metrics_total' => 'metricsTotal',
'metrics_processed' => 'metricsProcessed',
'metrics_sent' => 'metricsSent',
'event_removed' => 'eventRemoved',
'event_soft_bounce' => 'eventSoftBounce',
'event_hard_bounce' => 'eventHardBounce',
'time_period' => 'timePeriod'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_id' => 'setGroupId',
'group_name' => 'setGroupName',
'views_total' => 'setViewsTotal',
'views_unique' => 'setViewsUnique',
'clicks_total' => 'setClicksTotal',
'clicks_unique' => 'setClicksUnique',
'metrics_total' => 'setMetricsTotal',
'metrics_processed' => 'setMetricsProcessed',
'metrics_sent' => 'setMetricsSent',
'event_removed' => 'setEventRemoved',
'event_soft_bounce' => 'setEventSoftBounce',
'event_hard_bounce' => 'setEventHardBounce',
'time_period' => 'setTimePeriod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_id' => 'getGroupId',
'group_name' => 'getGroupName',
'views_total' => 'getViewsTotal',
'views_unique' => 'getViewsUnique',
'clicks_total' => 'getClicksTotal',
'clicks_unique' => 'getClicksUnique',
'metrics_total' => 'getMetricsTotal',
'metrics_processed' => 'getMetricsProcessed',
'metrics_sent' => 'getMetricsSent',
'event_removed' => 'getEventRemoved',
'event_soft_bounce' => 'getEventSoftBounce',
'event_hard_bounce' => 'getEventHardBounce',
'time_period' => 'getTimePeriod'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['views_total'] = isset($data['views_total']) ? $data['views_total'] : null;
        $this->container['views_unique'] = isset($data['views_unique']) ? $data['views_unique'] : null;
        $this->container['clicks_total'] = isset($data['clicks_total']) ? $data['clicks_total'] : null;
        $this->container['clicks_unique'] = isset($data['clicks_unique']) ? $data['clicks_unique'] : null;
        $this->container['metrics_total'] = isset($data['metrics_total']) ? $data['metrics_total'] : null;
        $this->container['metrics_processed'] = isset($data['metrics_processed']) ? $data['metrics_processed'] : null;
        $this->container['metrics_sent'] = isset($data['metrics_sent']) ? $data['metrics_sent'] : null;
        $this->container['event_removed'] = isset($data['event_removed']) ? $data['event_removed'] : null;
        $this->container['event_soft_bounce'] = isset($data['event_soft_bounce']) ? $data['event_soft_bounce'] : null;
        $this->container['event_hard_bounce'] = isset($data['event_hard_bounce']) ? $data['event_hard_bounce'] : null;
        $this->container['time_period'] = isset($data['time_period']) ? $data['time_period'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name group_name
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets views_total
     *
     * @return int
     */
    public function getViewsTotal()
    {
        return $this->container['views_total'];
    }

    /**
     * Sets views_total
     *
     * @param int $views_total views_total
     *
     * @return $this
     */
    public function setViewsTotal($views_total)
    {
        $this->container['views_total'] = $views_total;

        return $this;
    }

    /**
     * Gets views_unique
     *
     * @return int
     */
    public function getViewsUnique()
    {
        return $this->container['views_unique'];
    }

    /**
     * Sets views_unique
     *
     * @param int $views_unique views_unique
     *
     * @return $this
     */
    public function setViewsUnique($views_unique)
    {
        $this->container['views_unique'] = $views_unique;

        return $this;
    }

    /**
     * Gets clicks_total
     *
     * @return int
     */
    public function getClicksTotal()
    {
        return $this->container['clicks_total'];
    }

    /**
     * Sets clicks_total
     *
     * @param int $clicks_total clicks_total
     *
     * @return $this
     */
    public function setClicksTotal($clicks_total)
    {
        $this->container['clicks_total'] = $clicks_total;

        return $this;
    }

    /**
     * Gets clicks_unique
     *
     * @return int
     */
    public function getClicksUnique()
    {
        return $this->container['clicks_unique'];
    }

    /**
     * Sets clicks_unique
     *
     * @param int $clicks_unique clicks_unique
     *
     * @return $this
     */
    public function setClicksUnique($clicks_unique)
    {
        $this->container['clicks_unique'] = $clicks_unique;

        return $this;
    }

    /**
     * Gets metrics_total
     *
     * @return int
     */
    public function getMetricsTotal()
    {
        return $this->container['metrics_total'];
    }

    /**
     * Sets metrics_total
     *
     * @param int $metrics_total metrics_total
     *
     * @return $this
     */
    public function setMetricsTotal($metrics_total)
    {
        $this->container['metrics_total'] = $metrics_total;

        return $this;
    }

    /**
     * Gets metrics_processed
     *
     * @return int
     */
    public function getMetricsProcessed()
    {
        return $this->container['metrics_processed'];
    }

    /**
     * Sets metrics_processed
     *
     * @param int $metrics_processed metrics_processed
     *
     * @return $this
     */
    public function setMetricsProcessed($metrics_processed)
    {
        $this->container['metrics_processed'] = $metrics_processed;

        return $this;
    }

    /**
     * Gets metrics_sent
     *
     * @return int
     */
    public function getMetricsSent()
    {
        return $this->container['metrics_sent'];
    }

    /**
     * Sets metrics_sent
     *
     * @param int $metrics_sent metrics_sent
     *
     * @return $this
     */
    public function setMetricsSent($metrics_sent)
    {
        $this->container['metrics_sent'] = $metrics_sent;

        return $this;
    }

    /**
     * Gets event_removed
     *
     * @return int
     */
    public function getEventRemoved()
    {
        return $this->container['event_removed'];
    }

    /**
     * Sets event_removed
     *
     * @param int $event_removed event_removed
     *
     * @return $this
     */
    public function setEventRemoved($event_removed)
    {
        $this->container['event_removed'] = $event_removed;

        return $this;
    }

    /**
     * Gets event_soft_bounce
     *
     * @return int
     */
    public function getEventSoftBounce()
    {
        return $this->container['event_soft_bounce'];
    }

    /**
     * Sets event_soft_bounce
     *
     * @param int $event_soft_bounce event_soft_bounce
     *
     * @return $this
     */
    public function setEventSoftBounce($event_soft_bounce)
    {
        $this->container['event_soft_bounce'] = $event_soft_bounce;

        return $this;
    }

    /**
     * Gets event_hard_bounce
     *
     * @return int
     */
    public function getEventHardBounce()
    {
        return $this->container['event_hard_bounce'];
    }

    /**
     * Sets event_hard_bounce
     *
     * @param int $event_hard_bounce event_hard_bounce
     *
     * @return $this
     */
    public function setEventHardBounce($event_hard_bounce)
    {
        $this->container['event_hard_bounce'] = $event_hard_bounce;

        return $this;
    }

    /**
     * Gets time_period
     *
     * @return string
     */
    public function getTimePeriod()
    {
        return $this->container['time_period'];
    }

    /**
     * Sets time_period
     *
     * @param string $time_period time_period
     *
     * @return $this
     */
    public function setTimePeriod($time_period)
    {
        $this->container['time_period'] = $time_period;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}