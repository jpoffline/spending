
<?php

  function gen_wishlist_table($wishlist_file_name){

    $xml = simplexml_load_file($wishlist_file_name);
    $return = "<table class = \"table table-hover\">";
    $return .= "<thead><tr>";
    $return .= "<th>". "Date added" ."</th> ";
    $return .= "<th>" ."Description" . "</th> ";
    $return .= "<th>". "Approx cost" ."</th> ";
    $return .= "</tr></thead>";
    $return .= "<tbody>";

    

    foreach($xml->items->children() as $item){

      $return .= "<tr>";
      $return .= "<td>" . $item ->date_added . "</td>";
      $return .= "<td>" . $item ->name . "</td>";
      $return .= "<td>" . to_money($item ->approx_cost) . "</td>";
      $return .= "</tr>";

    }
    $return .=  "</tbody></table>";
    return $return;

  }

?>
