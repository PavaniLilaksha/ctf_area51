<html>
<head>
    <title>Level 02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style="background-color: red">
<script>
    swal("Hello !", "Welcome to level 02 !", "info");
</script>
<div>
    <img class="center" style="background-size: cover" src="https://miro.medium.com/max/1600/1*fApaeq6-ht-s6Cdu6qdlrQ.gif">
</div>
            <form>
                <li class="folders" hidden>
                    <a href="level_2.txt" target="_blank" title="files/Archives" class="folders" hidden>
                        <span class="name" hidden>Click me</span>
                    </a>
                </li>
            </form>
<a href="submit_2.php">Click me to submit flag</a>
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
