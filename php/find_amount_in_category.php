<?php

function find_amount_in_category($xmlfile, $category){

  $xml = simplexml_load_file($xmlfile);
  $total = 0.0;
  foreach($xml->spending->children() as $thing){
    if($thing->category == $category){
      $total = $total + floatval($thing->amount);
    }
  }

  return $total;


}

?>
