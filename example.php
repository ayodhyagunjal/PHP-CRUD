<DOCTYPE html>
<html>
<head>
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div id="loaddata"><h1>this is going to change.</h1></div>
    <button class="btn btn-success" id="btnclick"> click on it </button>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("#btnclick").click(function(){
        $("#loaddata").load('load.html',function(){
            alert("this is done");
        });
            
    });


});



</script>




</body>
</html>