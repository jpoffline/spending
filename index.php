<html>
<head>

  <?php

    $page_id = 'Spend';
    include('common_header.php');

  ?>

</head>

<body>
<div class="container">

  <?php

    include('menu.php');
  ?>

  <h1>Declare spend</h1>

<div class="form-group">
  <label for="radios">Select spending category</label>
      <?php
        echo render_category_selection_radios($xml_spending_ji);
      ?>
    </div>

  <form>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input id="amount" type="number" class="form-control" placeholder="Enter amount spent">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input id="description" type="text" class="form-control" placeholder="Enter desciption of item">
    </div>
    <?php
      echo "<input class = 'button' id='submit' onclick=\"read_user_spent_item_input('" .$xml_spending_ji. "')\" type='button' value='Submit'>";
    ?>
  </form>


  <h2>Add to wishlist</h2>
  <form>
    <div class="form-group">
      <label for="wishlist_desc">Description</label>
      <input id="wishlist_desc" type="text" class="form-control" placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="wishlist_cost">Approx cost</label>
      <input id="wishlist_cost" type="number" class="form-control" placeholder="Enter approx cost of item">
    </div>
    <?php
      echo "<input class = 'button' id='submit' onclick=\"read_new_wishlist_item('" .$xml_wishlist_file. "')\" type='button' value='Submit'>";
    ?>
  </form>


  


  <?php include('php/bring_forward_existing_file.php');
    bring_forward_existing_file($xml_spending_ji, "tmp.xml");
  ?>



  <?php
    include('common_footer.php');
  ?>


</div>


</body>
</html>
