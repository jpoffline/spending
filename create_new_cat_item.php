<?php

  include('php/add_category.php');
  $new_cat_name = $_POST['catname'];
  $new_cat_budget = $_POST['budgetamount'];
  $new_cat_icon = $_POST['icon'];
  $xml_file = $_POST['xmlfile'];
  add_category($xml_file, $new_cat_name, $new_cat_budget, $new_cat_icon);

?>
