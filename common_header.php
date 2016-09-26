<?php


  // File name of the data-containing XML file
  $config_file = 'config.xml';
  include('php/config_file_api.php');
  $xml_spending_ji = config_get_current_period($config_file);//'data/data1.xml';
  $xml_wishlist_file = config_get_wishlist_file($config_file);
  $xml_shopping_list = config_get_shopping_list_file($config_file);


  include('php/pretty_dump_xml.php');
  include('php/render_spending_table_simple.php');
  include('php/find_amount_in_category.php');
  include('php/summarise_per_category.php');
  include('gethint.php');
  include('php/render_category_selection_radios.php');
  include('php/add_category.php');
  include('php/gen_bootstrap_nav.php');
  include('php/icon_category_map.php');
  include('php/gen_wishlist_table.php');
  include('php/gen_shopping_list.php');
  include('php/string_manips.php');

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
echo "<link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">";
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>";
echo "<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>";

echo "<script src=\"script.js\"></script>";
echo "<script src=\"js/js.js\"></script>";

echo "<script src=\"bootstrap-3.3.7-dist/js/bootstrap.js\"></script>";
echo "<script src=\"bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>";


echo "<meta charset=\"utf-8\">";
echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
echo "<link href=\"bootstrap-3.3.7-dist/css/bootstrap.min.css\" rel=\"stylesheet\">";
echo "<link href=\"jumbotron-narrow.css\" rel=\"stylesheet\">";
?>
