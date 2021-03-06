<?php
/**
 * ChildNameServer
 *
 * PHP version >=5.5
 *
 * @category Class
 * @package  Pananames
 */

namespace Pananames\Model;

/**
 * ChildNameServer Class Doc Comment
 *
 * @category    Class
 */
class ChildNameServer 
{
	const DISCRIMINATOR = null;

	/**
		* The original name of the model.
		* @var string
		*/
	protected static $swaggerModelName = 'ChildNameServer';

	/**
		* Array of property to type mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerTypes = [
		'hostname' => 'string',
		'ipv4' => 'string',
		'ipv6' => 'string'
	];

	/**
		* Array of property to format mappings. Used for (de)serialization
		* @var string[]
		*/
	protected static $swaggerFormats = [
		'hostname' => null,
		'ipv4' => null,
		'ipv6' => null
	];

	public static function swaggerTypes()
	{
		return self::$swaggerTypes;
	}

	public static function swaggerFormats()
	{
		return self::$swaggerFormats;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attributeMap = [
		'hostname' => 'hostname',
		'ipv4' => 'ipv4',
		'ipv6' => 'ipv6'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = [
		'hostname' => 'setHostname',
		'ipv4' => 'setIpv4',
		'ipv6' => 'setIpv6'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = [
		'hostname' => 'getHostname',
		'ipv4' => 'getIpv4',
		'ipv6' => 'getIpv6'
	];

	public static function attributeMap()
	{
		return self::$attributeMap;
	}

	public static function setters()
	{
		return self::$setters;
	}

	public static function getters()
	{
		return self::$getters;
	}
	
	
	/**
	 * Associative array for storing property values
	 * @var mixed[]
	 */
	protected $container = [];

	/**
	 * boolean
	 */

	public $httpCode;

	/**
	 * Constructor
	 * @param mixed[] $data Associated array of property values initializing the model
	 */
	public function __construct(array $data = null)
	{
		$this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
		$this->container['ipv4'] = isset($data['ipv4']) ? $data['ipv4'] : null;
		$this->container['ipv6'] = isset($data['ipv6']) ? $data['ipv6'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties()
	{
		$invalid_properties = [];

		if ($this->container['hostname'] === null) {
			$invalid_properties[] = "'hostname' can't be null";
		}
		return $invalid_properties;
	}

	/**
	 * validate all the properties in the model
	 * return true if all passed
	 *
	 * @return bool True if all properties are valid
	 */
	public function valid()
	{

		if ($this->container['hostname'] === null) {
			return false;
		}

		return true;
	}

	/**
	 * Gets hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->container['hostname'];
	}

	/**
	 * Sets hostname
	 * @param string $hostname
	 * @return $this
	 */
	public function setHostname($hostname)
	{
		$this->container['hostname'] = $hostname;

		return $this;
	}

	/**
	 * Gets ipv4
	 * @return string
	 */
	public function getIpv4()
	{
		return $this->container['ipv4'];
	}

	/**
	 * Sets ipv4
	 * @param string $ipv4
	 * @return $this
	 */
	public function setIpv4($ipv4)
	{
		$this->container['ipv4'] = $ipv4;

		return $this;
	}

	/**
	 * Gets ipv6
	 * @return string
	 */
	public function getIpv6()
	{
		return $this->container['ipv6'];
	}

	/**
	 * Sets ipv6
	 * @param string $ipv6
	 * @return $this
	 */
	public function setIpv6($ipv6)
	{
		$this->container['ipv6'] = $ipv6;

		return $this;
	}

	public function setHttpCode($code)
	{
		if (empty($code)) {
			throw new \InvalidArgumentException('Invalid HttpCode');
		}

		return $this->httpCode = $code;
	}

	public function getHttpCode()
	{
		return $this->httpCode;
	}

	public function isSuccessful()
	{
		$httpCode = $this->getHttpCode();

		if ($httpCode < 200 || $httpCode >= 300) {
			return false;
		}

		if ($httpCode != 204 && is_null($this->getData())) {
			return false;
		}

		return true;
	}

	public function hasErrors()
	{
		return !$this->isSuccessful();
	}

	/**
	 * Gets the string presentation of the object
	 * @return string
	 */
	public function __toString()
	{
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Pananames\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Pananames\Api\ObjectSerializer::sanitizeForSerialization($this));
	}
}


