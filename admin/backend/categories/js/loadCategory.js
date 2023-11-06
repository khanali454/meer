function loadCategories(){
            //  send request to load
            $.ajax({
             url:"backend/categories/loadCategory.php",
             type:"post",
             dataType:"JSON",
             data:{
                loadC:"true"
             },
             beforeSend:function(){
              $("#loaded_data").html("<tr><td style='text-align:center;padding:10px 0;' colspan=6>Loading...</td></tr>");
            },
            success:function(resp){
               if("error" in resp){
                $("#loaded_data").html(resp.data);
               }else{
                $("#loaded_data").html(resp.data);
                $("#category_count").html(resp.records);
               }
            }
        });
    }
    


loadCategories();

