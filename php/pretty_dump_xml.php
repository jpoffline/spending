<?php

  function pretty_dump_xml($xml_file_name){
    $dom = new DOMDocument;
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;

    $dom->loadXML(simplexml_load_file($xml_file_name)->asXML());
    $dom->save($xml_file_name);
  }

?>
