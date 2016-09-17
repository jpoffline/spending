<?php


  include('php/add_spent_item.php');
  $name2 = $_POST['name1'];
  $date2 = date("d/m/Y");
  $amount2 = $_POST['amount1'];
  $description2 = $_POST['description1'];
  $category2 = $_POST['category1'];
  $xml2 = $_POST['xmlfile1'];
  //echo $xml2;
  add_spent_item($xml2, $name2, $category2, $date2, $amount2, $description2);


?>
