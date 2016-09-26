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



    <h2>Add to shopping list</h2>
    <form>
      <div class="container">
        <div class="row">
          <div class = "col-sm-4">
            <label for="BUTTON_CATEGORY_SHOPPING_LIST">Category</label>
            <div class="dropdown">
              <button id="BUTTON_CATEGORY_SHOPPING_LIST" class="btn btn_shp_cat btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                Existing categories
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown_shopping_list_cat_selection" id="dropdown_shopping_list_cat_selection">
                <?php
                  echo gen_shopping_list_categories($xml_shopping_list);
                ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
              <label for="shoppinglist_desc">Create new category</label>
              <input id="shoppinglist_desc" type="text" class="form-control" placeholder="Enter category (e.g., Fruit and veg, Frozen)">
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="shoppinglist_item">Item name</label>
              <input id="shoppinglist_item" type="text" class="form-control" placeholder="Enter item name (e.g., Apple, Milk)">
            </div>
          </div>
        </div>
        <?php
          echo "<input class = 'btn btn-info' id='submit' onclick=\"read_new_shopping_list_item('" .$xml_shopping_list. "')\" type='button' value='Add'>";
        ?>
      </div>

    </form>

    <h2>View and remove from shopping list</h2>
    <?php
      echo gen_shopping_list_group_cats($xml_shopping_list);
    ?>
    <?php
      echo "<input class = 'btn btn-info' type='button' id='submit' onclick=\"clear_bought_shopping_list_items('" .$xml_shopping_list. "')\" value='Clear bought items'>";
    ?>
    <h1></h1>
    <?php


      include('common_footer.php');
    ?>
  </div>
</body>
</html>
