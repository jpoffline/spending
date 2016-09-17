

<?php

  function gen_bootstrap_nav($app_name, $pages_url, $pages_nme, $current){

    $nav = "<div class=\"header clearfix\">";
    $nav.= "<nav>";
    $nav.= "<ul class=\"nav nav-pills pull-right\">";
    $items = "";
    $nitems = sizeof($pages_url);

    for ($i=0; $i<$nitems; $i++) {
       $this_url = $pages_url[$i];
       $this_nme = $pages_nme[$i];
       if($this_nme == $current){
        $items.= "<li role=\"presentation\" class=\"active\"><a href=\"#\">".$this_nme."</a></li>";

      }else{
         $items.= "<li role=\"presentation\"><a href=\"".$this_url."\">".$this_nme."</a></li>";

      }
       $items.= $this;

    }

    $nav.=$items;
    $nav.= "</ul>";
    $nav.= "</nav>";
    //$nav.= "<h3 class=\"text-muted\">".$app_name."</h3>";
    $nav.= "</div>";

    return $nav;
  }

?>
