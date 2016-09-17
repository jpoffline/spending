<?php

  function summarise_per_category($xml_file_name){



    $xml = simplexml_load_file($xml_file_name);
    $return = "<table class = \"table table-hover\">";
    $return .= "<thead><tr>";
    $return .= "<th>" ."Category" . "</th> ";
    $return .= "<th>". "Budget" ."</th> ";
    $return .= "<th>". "Remaining" . "</th>";
    $return .= "<th>". "Spent fraction" . "</th>";
    $return .= "</tr></thead>";

    $return .= "<tbody>";

    foreach($xml->meta->categories->children() as $cat){
      $return .= "<tr>";
      $return .= "<td>" .icon_name_to_icon($cat->icon). $cat["name"] . "</td> ";
      $return .= "<td>". to_money($cat->budget) ."</td> ";
      $remaining = to_float($cat->budget) - to_float($cat->spent);
      if($remaining > 0){
        $return .= "<td class = 'positive_money'>". to_money($remaining) . "</td>";
      }else {
        $return .= "<td class = 'negative_money'>". to_money($remaining) . "</td>";
      }
      $return .= "<td>". round(to_float($cat->spent) / to_float($cat->budget) * 100,1) . "%" . "</td>";
      $return .=  "</tr>";

    }
    $return .=  "</tbody></table>";

    return $return;

  }

?>
