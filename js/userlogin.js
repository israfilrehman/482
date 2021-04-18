$(document).ready(function(){
    $('#login_btn').click(function(){
        
        $.ajax({
            type: "post",
            url: 'userloginload.php',
            data: {
                email: $("#email").val(),
                password: $("#password").val()
            },
            success: function(data){
                if(data=='success'){
                window.location.replace("userpanel.php");
                }
                else{
                   // alert("Invalid Admin");
                   $("#id").html("Invalid User");
					//window.location.replace("adminlogin.php");
                }
            }
        });
        
    });
});