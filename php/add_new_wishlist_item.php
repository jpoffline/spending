
<?php


  function add_new_wishlist_item($wishlist_desc, $date_added, $wishlist_cost, $wishlist_xml){
      
      $xmldata = simplexml_load_file($wishlist_xml);

      $entry = $xmldata->items->addChild('item');

      $entry_data = $entry->addChild('name',$wishlist_desc);
      $entry_data = $entry->addChild('date_added',$date_added);
      $entry_data = $entry->addChild('approx_cost',$wishlist_cost);
      $xmldata->asXML($wishlist_xml);

      pretty_dump_xml($wishlist_xml);

  }

?>
