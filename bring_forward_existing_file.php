
<?php

  bring_forward_existing_file($_POST['xml'], "tmp.xml", $_POST['start'], $_POST['end'], $_POST['income']);

  function bring_forward_existing_file($xml_filename, $new_name, $new_start, $new_end, $new_income){

    $xml = simplexml_load_file($xml_filename);
    $xml->meta->start_date = $new_start;
    $xml->meta->end_date = $new_end;
    $xml->meta->income->total = floatval($new_income);
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
