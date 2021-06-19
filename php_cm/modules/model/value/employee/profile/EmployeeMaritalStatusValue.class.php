<?php

/**
 * Description of EmployeeMaritalStatusValue
 *
 * @author ben.dokter
 */

require_once('application/model/value/BaseValue.class.php');


class EmployeeMaritalStatusValue extends BaseValue
{
    const NOT_MARIED        = 1;
    const LAWFULLY_WEDDED   = 2;
    const PARTNERSHIP       = 3;
    const WIDOWED           = 4;
    const DIVORCED          = 5;

    static function values()
    {
        return array(
            EmployeemaritalStatusValue::NOT_MARIED,
            EmployeemaritalStatusValue::LAWFULLY_WEDDED,
            EmployeemaritalStatusValue::PARTNERSHIP,
            EmployeemaritalStatusValue::WIDOWED,
            EmployeemaritalStatusValue::DIVORCED,
            );
    }

    static function isValidValue($value)
    {
        return self::isAllowedValue($value, self::values(), BaseDatabaseValue::VALUE_REQUIRED);
    }

    function isNotMaried($value)
    {
        return $value == self::NOT_MARIED;
    }

    function isLawfullyWedded($value)
    {
        return $value == self::LAWFULLY_WEDDED;
    }

    function isPartnered($value)
    {
        return $value == self::PARTNERSHIP;
    }

    function isWidowed($value)
    {
        return $value == self::WIDOWED;
    }

    function isDivorced($value)
    {
        return $value == self::DIVORCED;
    }
}

?>
