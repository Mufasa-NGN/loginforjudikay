

$(document).ready(function () {
    $(".alertforpassword").hide();

    
    $(".signupform").submit(function (e) { 
        var password = $(".password").val();
        var cpassword = $(".cpassword").val();
        
        if (password !== cpassword) {
            e.preventDefault();
                $(".alertforpassword").show();
                $(".alertforpassword").html("Password Do Not Match!");
        } 
        

        
    });

});


