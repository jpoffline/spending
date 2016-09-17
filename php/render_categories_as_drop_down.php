<?php

  function render_categories_as_drop_down($xml_file_name){

    $xml = simplexml_load_file($xml_file_name);
    echo "1";
    $drop_down = "<select id=\"selected_category\" name=\"selected_category\">";

    foreach($xml->children() as $cat){
      //$this = "<option value='".$cat."'>".$cat."</option>";
      //echo $this;
      echo $cat;
      //$drop_down .= $this;
    }
    //$drop_down .= "</select>";
    //echo $drop_down;


  }

?>
