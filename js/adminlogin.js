$(document).ready(function(){
    $('#login_btn').click(function(){
        
        $.ajax({
            type: "post",
            url: 'adminloginload.php',
            data: {
                email: $("#email").val(),
                password: $("#password").val()
            },
            success: function(data){
                if(data=='success'){
                window.location.replace("adminpanel.php");
                }
                else{
                   // alert("Invalid Admin");
                   $("#id").html("Invalid Admin");
					//window.location.replace("adminlogin.php");
                }
            }
        });
        
    });
});