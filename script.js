
function read_new_wishlist_item(xml_file_name){
  var new_wish_desc = document.getElementById("wishlist_desc").value;
  var new_wish_cost = document.getElementById("wishlist_cost").value;
  var ds = 'wishdesc=' + new_wish_desc + '&wishcost=' + new_wish_cost + '&xmlfile=' + xml_file_name;
  if (new_wish_desc == '' || new_wish_cost == '') {
    alert("Please Fill All Fields");
  } else {
    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "creat_wishlist_item.php",
      data: ds,
      cache: false,
      success: function(html) {
          window.location.reload(true);
      }
    });
  }
  return false;
}




function read_new_shopping_list_item(xml_file_name){
  var cat = document.getElementById("shoppinglist_desc").value;
  var itm = document.getElementById("shoppinglist_item").value;



  if(cat == ''){

    cat = $(".btn_shp_cat").text();
    cat = cat.slice(0, -1);

  }

  var ds = 'cat=' + cat + '&itm=' + itm + '&xmlfile=' + xml_file_name;

  if (cat == '' || itm == '') {
    alert("Please Fill All Fields");
  } else {
    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "add_shopping_list_item.php",
      data: ds,
      cache: false,
      success: function(html) {
          window.location.reload(true);
      }
    });
  }
  return false;
}

function read_user_new_cateory(xml_file_name){
  var new_cat_name = document.getElementById("new_category_name").value;
  var new_cat_budget = document.getElementById("new_category_budget_amount").value;
  var new_cat_icon = document.getElementById("new_category_icon").value;
  var ds = 'catname=' + new_cat_name + '&budgetamount=' + new_cat_budget + '&xmlfile=' + xml_file_name + '&icon=' + new_cat_icon;
  if (new_cat_name == '' || new_cat_budget == '' || new_cat_icon == '') {
    alert("Please Fill All Fields");
  } else {
    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "create_new_cat_item.php",
      data: ds,
      cache: false,
      success: function(html) {
          window.location.reload(true);
      }
    });
  }
  return false;
}

function clear_bought_shopping_list_items(xml_file_name){
  var ds = 'mode=clear&xml=' + xml_file_name;
  $.ajax({
    type: "POST",
    url: "change_shopping_list_item.php",
    data: ds,
    cache: false,
    success: function(html) {
        window.location.reload(true);
    }
  });
}

function bring_existing_budget_forwards(xml_file_name){
  var start = document.getElementById("new_budget_start").value;
  var end = document.getElementById("new_budget_end").value;
  var income = document.getElementById("new_budget_income").value;

  var ds = 'start='+start+'&end='+end+'&income='+income+'&xml=' + xml_file_name;
  //alert(start + end + income);
  $.ajax({
    type: "POST",
    url: "bring_forward_existing_file.php",
    data: ds,
    cache: false,
    success: function(html) {
        window.location.reload(true);
    }
  });
}


function read_user_spent_item_input(xml_file_name) {

  var genders = document.getElementsByName("radio");

  for(var i = 0; i < genders.length; i++) {
     if(genders[i].checked == true) {
         selectedGender = genders[i].value;
         break;
     }
  }

  var name = "Person";
  var amount = document.getElementById("amount").value;
  var description = document.getElementById("description").value;
  var category = selectedGender;//document.getElementById("selected_category").value;
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'name1=' + name + '&amount1=' + amount  + '&description1=' + description  + '&category1=' + category  + '&xmlfile1=' + xml_file_name;
  if (name == '' || amount == '' || description == '' || category == '') {
    alert("Please Fill All Fields");
  } else {
    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "add_spent_item_from_post.php",
      data: dataString,
      cache: false,
      success: function(html) {
          window.location.reload(true);
      }
    });
  }
  return false;

}



jQuery(document).ready(function($) {

  $(".dropdown-menu li a").click(function(){
    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
    $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
  });

    $(".shopping_list-clickable-row").click(function() {

        var id = $(this).data("id");
        var xml = "data/wishlist.xml";
        var dataString = 'id=' + id + '&xml=' + xml + '&mode=change';
        $.ajax({
          type: "POST",
          url: "change_shopping_list_item.php",
          data: dataString,
          cache: false,
          success: function(html) {
              window.location.reload(true);
          }
        });
    });
});
