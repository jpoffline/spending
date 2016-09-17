<?php

  function to_money($value){
    # Convert inputted value to a float
    $value = floatval($value);

    # If the float value is negative, then turn positive,
    # before putting the pound sign on.
    if($value < 0){
      $value = -$value;
      return "- ".append_pound(number_format($value, 2));
    }
    else {
      return append_pound(number_format($value, 2));
    }
  }

  function append_pound($value){
    return "<i class=\"fa fa-gbp\"></i>".$value;
  }

  function to_float($value){
    return floatval($value);
  }

?>
