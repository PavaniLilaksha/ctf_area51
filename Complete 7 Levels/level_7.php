<html>
<head>
    <title>Level 07</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style=" background-color: white">
<a href="submit_7.php" hidden></a>
<script>
    swal("Welcome to level 07 !");
</script>
<div class="center" style="margin-left: 35%; margin-top: 5%;">
    <div class="container">
        <div class="col-md-5">
            <h2 style="margin-right: 10px; color: black">Everything Based on Cryptography</h2>
            <br>
            <h2 style="margin-right: 10px; color: black">There can be combination of Encode, Decode, Morse Code, ASCII, Hash, Binary what ever things</h2>
            <img src="/pawani/QR.png" alt="QR Code" style="margin: auto" width="300" height="250"><br><br>

        </div>
    </div>
</div>

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
