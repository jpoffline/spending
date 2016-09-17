<?php

  include('php/add_new_wishlist_item.php');
  $wishlist_desc = $_POST["wishdesc"];
  $wishlist_cost = $_POST["wishcost"];
  $wishlist_xml = $_POST["xmlfile"];
  $date2 = date("d/m/Y");
  
  add_new_wishlist_item($wishlist_desc, $date2,$wishlist_cost, $wishlist_xml);

?>
