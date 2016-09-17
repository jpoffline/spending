<html>
<head>
  <?php

    $page_id = 'Admin';

    include('common_header.php');
  ?>
</head>
<body>
  <div class="container">
  <?php
    include('menu.php');
  ?>

<h1>Add category</h1>
<form>
  <div class="form-group">
    <label for="new_category_name">Category name: </label>
    <input id="new_category_name" type="text" class="form-control" placeholder="Enter new category name">
  </div>
  <div class="form-group">
    <label for = "new_category_budget_amount">Budget amount: </label>
    <input id="new_category_budget_amount" type="text" class="form-control" placeholder="Enter budget for new category">
  </div>
  <div class="form-group">
    <label for = "new_category_icon">Category icon: </label>
    <input id="new_category_icon" type="text" class="form-control" placeholder="Enter icon for new category">
  </div>
  <?php
    echo "<input class = 'button' id='submit' onclick=\"read_user_new_cateory('" .$xml_spending_ji. "')\" type='button' value='Submit'>";
  ?>


<h1>Create new period</h1>

</form>
<?php include('common_footer.php');
?>

</div>
</body>
</html>
