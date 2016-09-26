<?php

  function render_category_selection_radios($xml_filename){

    $xml = simplexml_load_file($xml_filename);

    $nrows_per_col = 3;
    $radios = "<div class=\"container\"><div class=\"row\">";
    $count = 1;

    /*
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          One of three columns
        </div>
        <div class="col-sm-4">
          One of three columns
        </div>
        <div class="col-sm-4">
          One of three columns
        </div>
      </div>
    </div>
*/


    foreach($xml->meta->categories->children() as $catn){
      $cat = $catn["name"];
      $this_one = "";
      $this_one .= "<div class=\"col-sm-4\">";
      $this_one .= "<input
                      type=\"radio\"
                      name=\"radio\"
                      id=\"".$cat."\"
                      class=\"radio\"
                      value = \"".$cat."\"/>";
      $this_one .="  <label class=\"radio\" for=\"".$cat."\">".icon_name_to_icon($catn->icon).$cat."</label>";
      $this_one .="</div>";
      $radios .= $this_one;
      if($count %$nrows_per_col == 0){
        $radios .= "</div><div class=\"row\">";
      }
      $count = $count + 1;
    }
    $radios .= "</div>";
    return $radios;

  }

?>
