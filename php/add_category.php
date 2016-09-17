
<?php

  //include('pretty_dump_xml.php');

  function add_category($xml_filename, $category, $budget, $icon){

    $xmldata = simplexml_load_file($xml_filename);
    $entry = $xmldata->meta->categories->addChild('category');
    $entry->addAttribute('name', $category);
    $entry->addChild('budget', $budget);
    $entry->addChild('spent', 0);
    $entry->addChild('icon', $icon);
    $xmldata->asXML($xml_filename);

    pretty_dump_xml($xml_filename);


  }
?>
