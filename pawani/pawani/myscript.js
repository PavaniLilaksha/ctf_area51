$('#login').click(function () {
    var email=$('#email').val();
    var password=$('#password').val();
    var id="login";
    if (email==""){
        swal("Opps !", "Please Enter Username !", "error");
    }else if(password==""){
        swal("Opps !", "Please Enter Password !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,email:email,password:password},
            success:function (data) {
                if (data=="true"){
                    window.location.href="submit_1.php";
                }else if(data=="false"){
                    swal("Opps !", "Try Hard !", "error");
                }
            }
        });
    }
});



$('#submit_1').click(function () {
    var token=$('#token_1').val();
    var id="submit_1";
    if (token==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token:token},
            success:function (data) {
                if (data=="1"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#submit_2').click(function () {
    var token_2=$('#token_2').val();
    var id="submit_2";
    if (token_2==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token_2:token_2},
            success:function (data) {
                if (data=="2"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#submit_3').click(function () {
    var token=$('#token_3').val();
    var id="submit_3";
    if (token==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token:token},
            success:function (data) {
                if (data=="3"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#submit_4').click(function () {
    var token=$('#token_4').val();
    var id="submit_4";
    if (token==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token:token},
            success:function (data) {
                if (data=="4"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#submit_6').click(function () {
    var token=$('#token_6').val();
    var id="submit_6";
    if (token==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token:token},
            success:function (data) {
                if (data=="6"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#submit_7').click(function () {
    var token=$('#token_7').val();
    var id="submit_7";
    if (token==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token:token},
            success:function (data) {
                if (data=="7"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#submit_8').click(function () {
    var token=$('#token_8').val();
    var id="submit_8";
    if (token==""){
        swal("Opps !", "Please Enter Flag !", "error");
    }else{
        $.ajax({
            url:'login.php',
            data:{id:id,token:token},
            success:function (data) {
                if (data=="8"){
                    swal("Congrats !", "Successfully upload the flag !", "success");
                }else if(data=="false"){
                    swal("Opps !", "Invalid Flag !", "error");
                }
            }
        });
    }
});

$('#level_1').click(function () {
    window.location.href="level_1.php";
});

$('#level_2').click(function () {
    window.location.href="level_2.php";
});

$('#level_3').click(function () {
    window.location.href="level_3.php";
});

$('#level_4').click(function () {
    window.location.href="level_4.php";
});

$('#level_5').click(function () {
    window.location.href="level_5.php";
});

$('#level_6').click(function () {
    window.location.href="level_6.php";
});

$('#level_7').click(function () {
    window.location.href="level_7.php";
});

$('#level_8').click(function () {
    window.location.href="level_8.php";
});