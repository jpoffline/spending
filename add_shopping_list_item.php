<?php


  //add_shopping_list_item($_POST['cat'], $_POST['itm'], $_POST['xmlfile']);
  //include('test_code.php');
  add_shopping_list_item_group_category($_POST['cat'], $_POST['itm'], $_POST['xmlfile']);
  //include('php/pretty_dump_xml.php');
  /*
  function add_shopping_list_item($cat, $itm, $xml_file){
    $new_item_id = date("YmdHis");
    $xmldata = simplexml_load_file($xml_file);
    $entry = $xmldata->shopping_list->addChild('item', $itm);
    $entry->addAttribute('id', $new_item_id);
    $entry->addAttribute('category', $cat);
    $entry->addAttribute('status', 'new');
    $xmldata->asXML($xml_file);
    //pretty_dump_xml($xml_file);
  }
  */

  function add_shopping_list_item_group_category($category, $desc, $xml_file){
    include('php/pretty_dump_xml.php');
    $new_item_id = date("YmdHis");
    $xmldata = simplexml_load_file($xml_file);
    $inserted = false;
    foreach($xmldata->shopping_list->categories->children() as $item){
      if($item['category'] == $category){
        $new_item = $item->addChild('item', $desc);
        $new_item->addAttribute('id', $new_item_id);
        $new_item->addAttribute('status', 'new');
        $new_item->addAttribute('display', 'yes');
        $inserted = true;
        break;
      }
    }
    if($inserted){
      // Do nothing...
    }else{
      $new_cat = $xmldata->shopping_list->categories->addChild('cat');
      $new_cat->addAttribute('category',$category);
      $new_cat_item = $new_cat->addChild('item',$desc);
      $new_cat_item->addAttribute('id', $new_item_id);
      $new_cat_item->addAttribute('status', 'new');
      $new_cat_item->addAttribute('display', 'yes');
    }

    $xmldata->asXML($xml_file);
    pretty_dump_xml($xml_file);
    /*$dom = new DOMDocument;
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;

    $dom->loadXML(simplexml_load_file($xml_file)->asXML());
    $dom->save($xml_file);
    */
  }






?>
