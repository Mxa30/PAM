<?php

/**
 * Description of EmployeeMaritalStateConverter
 *
 * @author ben.dokter
 */

require_once('application/interface/converter/AbstractBaseConverter.class.php');
require_once('modules/model/value/employee/profile/EmployeeMaritalStatusValue.class.php');

class EmployeeMaritalStateConverter extends AbstractBaseConverter
{
    static function display($value, $empty = '-')
    {
        $display = $empty;
        switch($value) {
            case EmployeeMaritalStatusValue::NOT_MARIED:
                $display = TXT_UCF('NOT_MARIED');
                break;
            case EmployeeMaritalStatusValue::LAWFULLY_WEDDED:
                $display = TXT_UCF('LAWFULLY_WEDDED');
                break;
            case EmployeeMaritalStatusValue::PARTNERSHIP:
                $display = TXT_UCF('PARTNERSHIP');
                break;
            case EmployeeMaritalStatusValue::WIDOWED:
                $display = TXT_UCF('WIDOWED');
                break;
            case EmployeeMaritalStatusValue::DIVORCED:
                $display = TXT_UCF('DIVORCED');
                break;
        }
        return $display;
    }

    // default de display
    static function input($value, $empty = '-')
    {
        return self::display($value, $empty);
    }

}

?>
