<?php namespace Acme\Validation;

use Respect\Validation\Validator as Valid;

/**
* 		
*/
class Validator
{
    public function isValid($validation_data)
    {
        $errors = [];

        foreach ($validation_data as $name => $value) {
            if (isset($name)) {
                $rules = explode("|", $value);
                foreach ($rules as $rule) {
                    $exploded = explode(":", $rule);
                    switch ($exploded[0]) {
                        case 'min':
                            $min = $exploded[1];
                            if (Valid::string()->length($min)->Validate($_REQUEST[$name]) == false) {
                                $errors[] = $name . " must be at least " . $min . " characters long!";
                            }
                            break;
                        
                        case 'email':
                            if (Valid::email()->Validate($_REQUEST[$name]) == flase) {
                                $errors[] = $name . " must be at valid email address!";
                            }
                            break;
                        
                        case 'equalTo':
                            if (Valid::equals($_REQUEST[$name])->Validate($_REQUEST[$exploded[1]]) == flase) {
                                $errors[] = "Values does not match verification value!";
                            }
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
            } else {
                $errors[] = "No Value Found";
            }
        }
        return $errors;
    }
}
