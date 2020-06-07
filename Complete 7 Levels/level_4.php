<html>
<head>
    <title>Level 04</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style="background-color: black; background-image: url(https://media.giphy.com/media/xTcnSWYZvafyhEACBO/giphy.gif); background-repeat: no-repeat ">
<a href="submit_4.php" hidden></a>
<script>
    swal("Hello !", "Welcome to level 04 !", "info");
</script>



<div class="col-12 row h-100">
    <div class="col-5"></div>
    <div class="col-7 jd-flex justify-content-center align-self-center">
        <div class="align-self-center" >
            <p style="text-align: center; color: white; font-family: Arial; padding: 10px; font-size: xx-large">Think like a Real Hacker.</p>

            <p style="text-align: center; color: white; font-family: Arial; padding: 10px; font-size: xx-large">Everything related about American Standard Code for Information Interchange </p>
        </div>
    </div>

</div>
<div >
</div>
<form>
    <li class="folders" hidden>
        <a href="level_4.1.txt" target="_blank" title="files/Archives" class="folders" hidden>
            <span class="name" hidden>Click me</span>
        </a>
        <a href="level_4.txt" target="_blank" title="files/Archives" class="folders" hidden>
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
