<!DOCTYPE html>
<html lang="en">
<head>
  <title>PTC Site Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>


  <h1>My PTC Sie</h1>
  

  
<progress value="0" max="5" id="progressBar"></progress>
      
	

	    <div id="load_a_site" width="1000px"
	    height="1000px">
	    		<div> 
        <object type="text/html" data="http://www.learnfromcode.com"  width="100%"
	    height="1000px" style="overflow:auto;border:5px ridge blue">
 </div>
	    </div>





<script type="text/javascript">
	

var timeleft = 5;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBar").value = 5 - --timeleft;
  if(timeleft <= 0)
    clearInterval(downloadTimer);

	if(document.getElementById("progressBar").value==5){
		alert('Ad Viewed');
	}


},1000);



</script>

</body>
</html>
