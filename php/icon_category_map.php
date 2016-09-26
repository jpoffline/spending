<?php

  function icon_from_category($xml, $cat){
    foreach($xml->children() as $test_cat){
      if($test_cat["name"] == $cat){
        return "<i class=\"fa fa-".$test_cat->icon."\"></i>  ";
      }
    }
    return "";
  }

  function icon_name_to_icon($name){
    return "<i class=\"fa fa-".$name."\"></i>  ";
  }

?>
