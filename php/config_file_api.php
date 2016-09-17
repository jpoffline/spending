
<?php

  function config_get_current_period($config_xml_file_name){

    $xml = simplexml_load_file($config_xml_file_name);

    return $xml->current_period->file;

  }
  function config_get_wishlist_file($config_xml_file_name){

    $xml = simplexml_load_file($config_xml_file_name);

    return $xml->wishlist->file;

  }


  function config_get_shopping_list_file($config_xml_file_name){
    $xml = simplexml_load_file($config_xml_file_name);

    return $xml->shopping_list->file;
  }

?>
