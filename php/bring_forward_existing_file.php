
<?php

  function bring_forward_existing_file($xml_filename, $new_name){

    $xml = simplexml_load_file($xml_filename);

    foreach($xml->meta->categories->children() as $cat){
      $cat->remaining = $cat->budget;
      $cat->spent = 0.0;
    }
    
    unset($xml->spending);

    $xml->addChild('spending');
    $xml->asXML($new_name);
    pretty_dump_xml($new_name);

  }

?>
