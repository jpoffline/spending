
<?php



function render_spending_table_simple($xml_file_name){


  include('string_manips.php');


  $xml = simplexml_load_file($xml_file_name);
  echo "<b>Overview period:</b> ".$xml->meta->start_date. " -> ";
  echo $xml->meta->end_date."<br>";
  echo "<b>Income</b> ". to_money($xml->meta->income->total)."<br>";

  $total_spent = 0.0;
  $spending_summary = "<table class = \"table table-hover\">";
  $spending_summary .= "<thead>";
  $spending_summary .= "<tr>";
  $spending_summary .= "<th>Date</th>";
  $spending_summary .= "<th>Category</th>";
  $spending_summary .= "<th>Amount</th>";
  $spending_summary .= "<th>Description</th>";
  $spending_summary .= "</tr></thead><tbody>";
  foreach($xml->spending->children() as $thing){

    $this_item_summary =  "<tr>";
    $this_item_summary .= "<td>".$thing->date . "</td>";
    $this_item_summary .= "<td>". icon_from_category($thing->category). $thing->category. "</td>";
    $this_item_summary .= "<td>" . to_money($thing->amount)."</td>";
    $this_item_summary .= "<td>" . $thing->description."</td>";
    $this_item_summary .= "</tr>";
    $spending_summary .= $this_item_summary;
    $total_spent = $total_spent + to_float($thing->amount);
  }
  echo "Total spent this month: ". to_money($total_spent). "<br>";
  echo "Summary of spending:<br>".$spending_summary."</tbody></table>";
}

?>
