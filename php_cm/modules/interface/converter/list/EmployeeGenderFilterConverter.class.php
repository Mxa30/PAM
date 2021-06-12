<?php
require_once('application/interface/converter/AbstractBaseConverter.class.php');

class EmployeeGenderFilterConverter extends AbstractBaseConverter
{

    static function display($value, $empty = '-')
    {
        $display = $empty;
        switch($value) {
            case EmployeeGenderFilterValue::MALE:
                $display = TXT_UCF('FILTER_EMPLOYEES_GENDER_MALE');
                break;
            case EmployeeGenderFilterValue::FEMALE:
                $display = TXT_UCF('FILTER_EMPLOYEES_GENDER_FEMALE');
                break;
            case EmployeeGenderFilterValue::OTHER:
                $display = TXT_UCF('FILTER_EMPLOYEES_GENDER_OTHER');
                break;
        }
        return $display;
    }


    // default de display
    static function input($value, $empty = '-')
    {
        return self::display($value, $empty);
    }

    static function description($value)
    {
        $description = '';
        switch($value) {
            case EmployeeGenderFilterValue::MALE:
                $description = TXT_UCF('FILTER_EMPLOYEES_GENDER_MALE');
                break;
            case EmployeeGenderFilterValue::FEMALE:
                $description = TXT_UCF('FILTER_EMPLOYEES_GENDER_FEMALE');
                break;
            case EmployeeGenderFilterValue::OTHER:
                $description = TXT_UCF('FILTER_EMPLOYEES_GENDER_OTHER');
                break;
        }

        return $description;
    }

}

?>
