<html>
<head>
    <title></title>
           <script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
    
    $(document).ready(function() {
        $("#result").load("ver.php");
});

setInterval(function() {$("#result").load('ver.php');}, 1000);
    </script>
    
    </head>

    
    <body>
     <div id="result"></div>//Verinin Çekildiği Kısım
    
    </body>
</html>