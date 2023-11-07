// show popup - add category
$("#popup-content").slideUp();
$("#_open_btn_pop").on("click", function () {
  $("#add_category_btn").attr("value","save");
  $("#heading-content").html(`Add Category
  <span class="close-icon" id="open-close">&times;</span>`);
  $("#c_name").val("");
  $("#c_desc").val("");
  $("#popup-container").attr("data-popup-state", "add");
  $("#popup-container").css("display", "flex");
  $("#popup-content").slideDown();
  $("#c_name").focus();
});

// hide popup - add category
$(document).on("click","#open-close", function () {
  $("#popup-content").slideUp();
  $("#popup-container").css("display", "none");
});

$("#popup-container").on("click", function (e) {
  if (e.target.id == "popup-container") {
    $("#popup-content").slideUp();
    $("#popup-container").css("display", "none");
  }
});

// edit category event listeners
$(document).on("click","._user_edit_btn",function() {
  $("#add_category_btn").attr("value","update");
  $("#heading-content").html(` Update Category
  <span class="close-icon" id="open-close">&times;</span>`);
  $("#popup-container").attr("data-popup-state", "update");
  $("#popup-container").css("display", "flex");
  $("#popup-content").slideDown();

  
  var id = $(this).attr('id');
  
  // load category
  $.ajax({
    url:"backend/categories/loadEditCategory.php",
    type:"post",
    dataType:"JSON",
    data:{
      c_id:id
    },
    beforeSend:function(){
     $("#over_lay").css("display","flex");
    },
    success:function(resp){
     $("#over_lay").css("display","none");
      if("error" in resp){
        alert(resp.data);
      }else{
        $("#c_name").attr("data-cid","update"+resp.c_id);
        $("#c_name").val(resp.c_name);
        $("#c_desc").val(resp.c_desc);
      }
   }
});



});