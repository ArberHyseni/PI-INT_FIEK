<?php
    
    class ValidationResult {

        private $value;                // user input value to be validated 
        private $error_message;         // error message to be displayed
        private $is_valid=true;         // was the value valid

        // constructor 
        public function __construct($value, $error_message,  $is_valid) {  
            
            //check for array
            if(is_array($value)) {

                $this->value = array($value);

            } else {

                $this->value = $value;      

            }  
            
            $this->error_message = $error_message;      
            $this->is_valid = $is_valid;

        }

        // accessors     
        public function getValue() { 
            return $this->value; 
        }   

        public function getError_message() { 
            return $this->error_message; 
        }

        public function is_valid() { 
            return $this->is_valid; 
        }

        //Static method used to check a querystring parameter and return a ValidationResul
        static public function checkParameter($values, $pattern, $errMsg) {  

            $error_message = "";            
            $value = "";      
            $is_valid = true;

            //compare it against a regular expression        
            if (!preg_match($pattern, $values)) {  
                $error_message = $errMsg;                        
                $is_valid = false; 
            }

            return new ValidationResult($values, $error_message, $is_valid);
        }

        static public function NoCheckNeed($values) {

            $error_message = "";            
            $value = "";      
            $is_valid = true;

            return new ValidationResult($values, $error_message, $is_valid);

        }

    }

?>