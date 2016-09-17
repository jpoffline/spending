<?php

  function icon_from_category($cat){
    if($cat == "Food"){
      return "<i class=\"fa fa-cutlery\"></i>  ";
    }
    else if($cat == "Games"){
      return "<i class=\"fa fa-gamepad\"></i>  ";
    }
    else if($cat == "Drink"){
      return "<i class=\"fa fa-beer\"></i>  ";
    }
    else if($cat == "Entertainment"){
      return "<i class=\"fa fa-tv\"></i>  ";
    }
    else if($cat == "Gifts"){
      return "<i class=\"fa fa-gift\"></i>  ";
    }

    return "";

  }

  function icon_name_to_icon($name){
    return "<i class=\"fa fa-".$name."\"></i>  ";
  }

?>
