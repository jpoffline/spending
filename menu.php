<?php
echo gen_bootstrap_nav(
  "Budget tracker",
  array('index.php', 'shopping_list.php', 'wishlist.php', 'budget_admin.php', 'budget_analytics.php' ),
  array('Spend', 'Shopping list', 'Wish list', 'Admin', 'Analysis'),
  $page_id
);

?>
