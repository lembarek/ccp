<?php namespace Ccp;

class ValidationRule extends \Illuminate\Validation\Validator {

     public function validatePhone($attribute, $value, $parameters)
     {
        return preg_match("/^0?[567][0-9]{8}$/", $value);
     }

}

