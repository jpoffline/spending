<html>

<head>
  <?php

    $page_id = 'Analysis';

    include('common_header.php');
  ?>
</head>

<body>
  <div class="container">
    <?php
      include('menu.php');
    ?>
    <h1>Spending analytics</h1>

    <h2>Overview</h2>
    <?php
      render_spending_table_simple($xml_spending_ji);
    ?>


    <h2>Summary per category</h2>
    <?php
      echo summarise_per_category($xml_spending_ji);
    ?>

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
