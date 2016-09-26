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
<h1>Budget admin</h1>
<h2>Add category</h2>
<form>
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="new_category_name">Category name: </label>
        <input id="new_category_name" type="text" class="form-control" placeholder="Enter new category name">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for = "new_category_icon">Category icon: </label>
        <input id="new_category_icon" type="text" class="form-control" placeholder="Enter icon for new category">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for = "new_category_budget_amount">Budget amount: </label>
        <input id="new_category_budget_amount" type="text" class="form-control" placeholder="Enter budget for new category">
      </div>
    </div>
  </div>
  <?php
    echo "<input class = 'btn btn-info' id='submit' onclick=\"read_user_new_cateory('" .$xml_spending_ji. "')\" type='button' value='Submit'>";
  ?>
</form>

<h2>Change category budget</h2>

  <h2>Bring forward existing budget</h2>

  <form>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="new_budget_start">Start: </label>
          <input id="new_budget_start" type="text" class="form-control" placeholder="Enter new budget start date">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for = "new_budget_end">End: </label>
          <input id="new_budget_end" type="text" class="form-control" placeholder="Enter new budget end date">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for = "new_budget_income">Income: </label>
          <input id="new_budget_income" type="text" class="form-control" placeholder="Enter income for new budget period">
        </div>
      </div>
    </div>
  </form>
  <?php
    echo "<input class = 'btn btn-info' id='submit' onclick=\"bring_existing_budget_forwards('" .$xml_spending_ji. "')\" type='button' value='Submit'>";
  ?>

  <h1></h1>


<?php include('common_footer.php');
?>

</div>
</body>
</html>
