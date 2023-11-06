$(document).on("click","._user_delete_btn",function(){
let id = $(this).attr('id');
c_name = $(this).attr('data-name');
$.ajax({
    url:"backend/categories/deleteCategory.php",
    type:"post",
    data:{
       delete:id,
       name:c_name
    },
    beforeSend:function(){
        $("#overlay").css("display","flex");
   },
   success:function(resp){
    console.log(resp);
    $("#overlay").css("display","none");
       if(resp==1){
        loadCategories();
       }else{
        alert("Something went wrong. Please try again later");
       }
   }
});



});