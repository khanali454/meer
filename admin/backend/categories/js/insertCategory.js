$("#add_category_btn").on("click", function (e) {
  e.preventDefault();
  IntsertCategory();
});

$("#popup-content").on("submit", function (e) {
  e.preventDefault();
  IntsertCategory();
});

function IntsertCategory() {
  let name = $("#c_name").val().toLowerCase().trim();
  let desc = $("#c_desc").val().trim();
  let dataPopupState = $("#popup-container").attr("data-popup-state");
  

  if (name == "") {
    $("#c_name").css("border", "1px solid red");
    $("#c_name").focus();
  } else {
    $("#c_name").css("border", "1px solid #999");
    $("#c_name").blur();

    if (desc == "") {
      $("#c_desc").css("border", "1px solid red");
      $("#c_desc").focus();
    } else {
      $("#c_desc").css("border", "1px solid #999");
      $("#c_desc").blur();

      if(dataPopupState =="add" || dataPopupState =="update"){
        let data_is = new Object();
        if(dataPopupState=="add"){
          data_is = {
            name: name,
            desc: desc,
            dataPopupState:dataPopupState
          };

        }else if(dataPopupState=="update"){
          var c_id = $("#c_name").attr("data-cid");
          data_is = {
            name: name,
            desc: desc,
            dataPopupState:dataPopupState,
            c_id:c_id
          };
        }
       
        
      $.ajax({
        url: "backend/categories/insertCategory.php",
        type: "post",
        data: data_is,
        beforeSend: function () {
          $("#overlay").css("display", "flex");
        },
        success: function (resp) {
          $("#overlay").css("display", "none");
          if (resp == "empty_name") {
            $("#c_name").css("border", "1px solid red");
            $("#c_name").focus();
          } else if (resp == "empty_desc") {
            $("#c_desc").css("border", "1px solid red");
            $("#c_desc").focus();
          } else if (resp == "dup_name") {
              $("#c_name").css("border", "1px solid red");
              $("#c_name").focus();
              alert("Category with this name already exist");
          } else if (resp == "inserted") {
            $("#c_name").val("");
            $("#c_desc").val("");
            alert("New category has been added successfully.");
            loadCategories();
          }else if(resp == "updated"){
            alert("Category has been updated successfully.");
            loadCategories();
          } else {
            alert(resp);
          }
        },
      });
    }
    }
  }
}
