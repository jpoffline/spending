<html>

<head>
  <?php

    $page_id = 'Shopping list';

    include('common_header.php');
  ?>
</head>

<body>
  <div class="container">
    <?php
      include('menu.php');
    ?>

    <?php
      //include('test_code.php');
      //echo gen_shopping_list_group_cats('data/test_wish.xml');
    ?>

    <h2>Add to shopping list</h2>
    <form>
      <div class="form-group">
        <label for="shoppinglist_desc">Category</label>
        <input id="shoppinglist_desc" type="text" class="form-control" placeholder="Enter category (e.g., Fruit and veg, Frozen)">
      </div>
      <div class="form-group">
        <label for="shoppinglist_item">Item name</label>
        <input id="shoppinglist_item" type="text" class="form-control" placeholder="Enter item name (e.g., Apple, Milk)">
      </div>
      <?php
        echo "<input class = 'button' id='submit' onclick=\"read_new_shopping_list_item('" .$xml_shopping_list. "')\" type='button' value='Add'>";
      ?>
    </form>

    <h2>View and remove from shopping list</h2>
    <?php
      echo gen_shopping_list_group_cats($xml_shopping_list);
    ?>
    <?php
      echo "<input class = 'button' id='submit' onclick=\"clear_bought_shopping_list_items('" .$xml_shopping_list. "')\" type='button' value='Clear bought items'>";
    ?>

    <?php


      include('common_footer.php');
    ?>
  </div>
</body>
</html>
