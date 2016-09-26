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
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="amount">Amount</label>
          <input id="amount" type="number" class="form-control" placeholder="Enter amount spent">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="description">Description</label>
          <input id="description" type="text" class="form-control" placeholder="Enter desciption of item">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <?php
          echo "<input class = 'btn btn-info' id='submit' onclick=\"read_user_spent_item_input('" .$xml_spending_ji. "')\" type='button' value='Submit'>";
        ?>
      </div>
    </div>
  </form>

  



  <?php
    include('common_footer.php');
  ?>


</div>


</body>
</html>
