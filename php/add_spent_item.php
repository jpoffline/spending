<?php

  include('pretty_dump_xml.php');

  function add_spent_item($xml2,$name2, $category2, $date2, $amount2, $description2 ){

    $xmldata = simplexml_load_file($xml2);

    foreach($xmldata->meta->categories->children() as $cat){
      if($cat['name'] == (string)$category2){
        $cat->spent = $cat->spent + floatval($amount2);
      }
    }

    $entry = $xmldata->spending->addChild('item');{}
    //$entry->addAttribute('id', '3');
  //  $entry->addAttribute('message', 'Testing');
    $entry_data = $entry->addChild('spender',$name2);
    $entry_data = $entry->addChild('category',$category2);
    $entry_data = $entry->addChild('date',$date2);
    $entry_data = $entry->addChild('amount',floatval($amount2));
    $entry_data = $entry->addChild('description',$description2);
    $xmldata->asXML($xml2);

    pretty_dump_xml($xml2);

  }


?>
