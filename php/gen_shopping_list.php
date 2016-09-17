
<?php

  function gen_shopping_list($xml_file){

    $xml = simplexml_load_file($xml_file);

    $shopping_list = "";
    $shopping_list = "<table id=\"example\" class = \"table table-hover\" >";
    $shopping_list .= "<thead><tr>";
    $shopping_list .= "<th>" ."Item" . "</th> ";
    $shopping_list .= "<th>". "Category" ."</th> ";
    $shopping_list .= "</tr></thead>";
    $shopping_list .= "<tbody>";

    $this_item_category = "";

    foreach($xml->shopping_list->children() as $item){

      $cat = $item["category"];
      $catid = $item["id"];
      $status = $item["status"];
      $shopping_list .= "<tr class = \"shopping_list-clickable-row\" data-id=\"".$catid."\">";
      if($status == "got"){
        $cat = "<s>".$cat."</s>";
        $item = "<s>".$item."</s>";
      }
      $shopping_list .= "<td>" . $item . "</td>";
      $shopping_list .= "<td>" . $cat . "</td>";
      $shopping_list .= "</tr>";

    }
    $shopping_list .=  "</tbody></table>";
    return $shopping_list;

  }


  function gen_shopping_list_group_cats($xml_file){

    $xml = simplexml_load_file($xml_file);

    $shopping_list = "";
    $shopping_list = "<table id=\"example\" class = \"table table-hover\" >";
    $shopping_list .= "<thead><tr>";
    $shopping_list .= "<th>". "Category" ."</th> ";
    $shopping_list .= "<th>" ."Item" . "</th> ";
    $shopping_list .= "</tr></thead>";
    $shopping_list .= "<tbody>";

    $this_item_category = "";

    foreach($xml->shopping_list->categories->children() as $item_cat){

      $cat = $item_cat["category"];
      $first = true;
      foreach($item_cat->children() as $item){
        if($item["display"] == "yes"){
          $catid = $item["id"];
          $status = $item["status"];
          $shopping_list .= "<tr class = \"shopping_list-clickable-row\" data-id=\"".$catid."\">";
          if($status == "got"){
            $item = "<div class=\"shopping_list-marked-off-item\">".$item."</div>";
          }
          // Only print the name of the category if its
          // the first time the category has been printed.
          if($first){
            $shopping_list .= "<td>" . $cat . "</td>";
            $first = false;
          }
          else{
            $shopping_list .= "<td></td>";
          }

          $shopping_list .= "<td>" . $item . "</td>";
          $shopping_list .= "</tr>";
        }
      }

    }
    $shopping_list .=  "</tbody></table>";
    return $shopping_list;

  }



?>
