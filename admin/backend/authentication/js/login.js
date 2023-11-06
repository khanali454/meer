function userAuthenticate(){
    let email = $("#email").val().trim().toLowerCase();
    let password = $("#password").val().trim();
    
    if(email !== ""){
        $("#email").css("background","#ccc");
        $("#email").blur();
        
        if(password !==""){
            $("#password").css("background","#ccc");
            $("#password").blur();
            //  send data
            $.ajax({
             url:"backend/authentication/login.php",
             type:"post",
             data:{
                email:email,
                password:password
             },
             beforeSend:function(){
              $("#overlay").css("display","flex");
              $("#admin_login").html("authenticating...");
            },
            success:function(resp){
                $("#overlay").css("display","none");
                $("#admin_login").html("Sign in");
                if(resp=="ok"){
                    $("#erro_msg").css("display","none");
                    window.location.reload();
                }else if(resp =="not_found"){
                    $("#erro_msg").html("Your email or password is incorrect. Please try again later.");
                    $("#erro_msg").css("display","unset");
                }else{
                    $("#erro_msg").html("Something went wrong. Please try again later.");
                    $("#erro_msg").css("display","unset");
                }
             }
            });
        }else{
            $("#password").css("background","rgba(255,0,0,0.4)");
            $("#password").focus();
        }

    }else{
        $("#email").css("background","rgba(255,0,0,0.4)");
        $("#email").focus();
    }
}
$(document).ready(function() {
    $("#admin_login").on("click",function(e){
      e.preventDefault();
      userAuthenticate();
    });
    
    $("#sign_in_page").on("submit",function(e) {
        e.preventDefault();
        userAuthenticate();
    });

   
});