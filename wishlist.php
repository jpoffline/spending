<html>

<head>
  <?php

    $page_id = 'Wish list';

    include('common_header.php');

  ?>
</head>

<body>
  <div class="container">
    <?php
      include('menu.php');
    ?>


    <h2>Add to wishlist</h2>
    <form>
      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <label for="wishlist_desc">Description</label>
            <input id="wishlist_desc" type="text" class="form-control" placeholder="Enter description">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="wishlist_cost">Approx cost</label>
            <input id="wishlist_cost" type="number" class="form-control" placeholder="Enter approx cost of item">
          </div>
        </div>
      </div>
      <?php
        echo "<input class = 'btn btn-info' id='submit' onclick=\"read_new_wishlist_item('" .$xml_wishlist_file. "')\" type='button' value='Submit'>";
      ?>
    </form>


    <h2>Wishlist</h2>
    <?php
      echo gen_wishlist_table($xml_wishlist_file);
    ?>

    <?php
      include('common_footer.php');
    ?>
  </div>
</body>
</html>
