<?php

  function render_category_selection_radios($xml_filename){

    $xml = simplexml_load_file($xml_filename);

    $nrows_per_col = 1;
    $radios = "<div class=\"container-fluid\">";//''"<table class=\"selection_radios\"><tr>";
    $count = 1;

    foreach($xml->meta->categories->children() as $catn){
      $cat = $catn["name"];
      $this_one = "<div class=\"row\">";
      $this_one .= "<input
                      type=\"radio\"
                      name=\"radio\"
                      id=\"".$cat."\"
                      class=\"radio\"
                      value = \"".$cat."\"/>";
      $this_one .="  <label class=\"radio\" for=\"".$cat."\">".icon_name_to_icon($catn->icon).$cat."</label>";
      $this_one .="</div>";


      if($count % $nrows_per_col == 0){
          //$this_one .= "</tr><tr>";
      }
      $count = $count + 1;
      $radios .= $this_one;

    }
    return $radios . "</tr></div>";

  }

?>
