<?php

namespace XeroPHP\Models\PayrollNZ\Employee;

use XeroPHP\Remote;

class Address extends Remote\Model
{
    /**
     * Address line 1 for employee address (max length = 50).
     *
     * @property string addressLine1
     */

    /**
     * Address line 2 for employee address (max length = 50).
     *
     * @property string addressLine2
     */

    /**
     * City for employee address (max length = 50).
     *
     * @property string city
     */

    /**
     * Suburb for employee address (max length = 50).
     *
     * @property string suburb
     */

    /**
     * Country of HomeAddress.
     *
     * @property string countryName
     */

    /**
     * PostCode for employee address (max length = 4).
     *
     * @property string postCode
     */

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Address';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Address';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_PAYROLL;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods()
    {
        return [
        ];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'addressLine1' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'addressLine2' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'city' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'suburb' => [false, self::PROPERTY_TYPE_ENUM, null, false, false],
            'countryName' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'postCode' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->_data['addressLine1'];
    }

    /**
     * @param string $value
     *
     * @return Address
     */
    public function setAddressLine1($value)
    {
        $this->propertyUpdated('addressLine1', $value);
        $this->_data['addressLine1'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->_data['addressLine2'];
    }

    /**
     * @param string $value
     *
     * @return Address
     */
    public function setAddressLine2($value)
    {
        $this->propertyUpdated('addressLine2', $value);
        $this->_data['addressLine2'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->_data['city'];
    }

    /**
     * @param string $value
     *
     * @return Address
     */
    public function setCity($value)
    {
        $this->propertyUpdated('city', $value);
        $this->_data['city'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuburb()
    {
        return $this->_data['suburb'];
    }

    /**
     * @param string $value
     *
     * @return Address
     */
    public function setSuburb($value)
    {
        $this->propertyUpdated('suburb', $value);
        $this->_data['suburb'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->_data['countryName'];
    }

    /**
     * @param string $value
     *
     * @return Address
     */
    public function setCountryName($value)
    {
        $this->propertyUpdated('countryName', $value);
        $this->_data['countryName'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->_data['postCode'];
    }

    /**
     * @param string $value
     *
     * @return Address
     */
    public function setPostCode($value)
    {
        $this->propertyUpdated('postCode', $value);
        $this->_data['postCode'] = $value;

        return $this;
    }
}
