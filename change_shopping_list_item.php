<?php

  $mode = $_POST['mode'];
  if($mode == 'change'){
    $id = $_POST['id'];
    change_shopping_list_item($id, $_POST['xml']);
  }
  else if($mode == 'clear'){
    clear_bought_items($_POST['xml']);
  }

  function change_shopping_list_item($item_id, $xml_file){
    $xml2 = simplexml_load_file($xml_file);

    foreach($xml2->shopping_list->categories->children() as $item_cat){
      foreach($item_cat->children() as $item){
        if($item['id'] == $item_id){
          if($item['status'] == 'got'){
            $item['status'] = 'new';
          }
          else if($item['status'] == 'new'){
            $item['status'] = 'got';
          }
          break;
        }
      }

    }
    $xml2->asXML($xml_file);
  }



  function clear_bought_items($xml){
    $xml2 = simplexml_load_file($xml);
    $elementsToRemove = array();

    foreach($xml2->shopping_list->categories->children() as $item_cat){
      foreach($item_cat->children() as $item){
        if ($item['status'] == 'got') {
          $item['display'] = 'no';
        }
      }
    }


    include('php/pretty_dump_xml.php');
    $xml2->asXML($xml);
    pretty_dump_xml($xml);
  }



?>
