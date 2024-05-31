<?php

class Validator {
        // ta
  // Pure method - tāpēc static
  static public function string($data, $min = 0, $max = INF) {
   $data = trim($data);

    return  is_string($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
  }
  
  static public function number($data, $min = 0, $max = INF) {
    $data = trim($data);
 
     return  is_numeric($data)
             && $data >= $min
             && $data <= $max;
   }
   static public function date($data, $min = '0001-01-01', $max = '9999-12-31') {
        $data = trim($data);
        return $data != null 
           && strtotime($data)>=strtotime($min)
           && strtotime($data)<=strtotime($max);
   }

   public static function username($data) {
    return filter_var($data);
    
   }

 public static function password($data) {
    // Minimum length requirement
    $minLength = 8;
    
    // Regular expressions for checking password criteria
    
    $lowercaseRegex = '/[a-z]/';
    

    return  strlen($data) >= $minLength &&
            
            preg_match($lowercaseRegex, $data) :
            
 }
}