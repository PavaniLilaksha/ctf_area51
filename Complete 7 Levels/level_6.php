<html>
<head>
    <title>Level 06</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style="background-color: black; background-image: url(); background-repeat: no-repeat ">
<a href="submit_6.php" hidden></a>
<script>
    swal("Welcome to level 06 !");
</script>



<div class="col-12 row h-100">
    <div class="col-5"></div>
    <div class="col-7 jd-flex justify-content-center align-self-center">
        <div class="align-self-center" >
            <p style="text-align: center; color: white"></p>

            <p style="text-align: center; color: white"></p>
        </div>
    </div>

    <div class="maind" style="width: 50%; margin: 0 auto; text-align: center ; background: rgba(0,0,0,0.9); padding-bottom: 20px;box-shadow: 0px 0px 10px rgba(24,24,24,0.93);">
        <h1 class="header1" style="padding: 10px; background: #a80d00; color: #f1f1f1; font-family: Consolas">Restricted Area! Don't take Images!!!</h1>

        </b> <b style="color: black" ></b> </p>

        <img width="700" height="auto" src="https://media0.giphy.com/media/xTiTnBSIn7vTqCDKJW/giphy.gif?cid=ecf05e4777e850a3c5f6fbc72cccff9158def7d54494454b&rid=giphy.gif" style="margin-top: 20px">

    </div>


</div>
<div >
</div>
<form>
    <li class="folders" hidden>
        <a href="level_6.txt" target="_blank" title="files/Archives" class="folders" hidden>
            <span class="name" hidden>Click me</span>
        </a>
    </li>
</form>

<script>
    $(document).bind("contextmenu",function (e) {
        e.preventDefault();
    });
</script>
<script>
    document.onkeydown = function(e) {
        if(event.keyCode == 123) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }
</script>
</body>


<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="myscript.js" type="text/javascript"></script>
</html>
