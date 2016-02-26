<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<script>
	
</script>
<script>
function verifyLogin(){
  		
  			var user = document.getElementById('txtuser').value;
  			var pass = document.getElementById('txtpass').value;
  			//ajax
	  		if(window.XMLHttpRequest)
	        	xmlhttp = new XMLHttpRequest();
	      	else
	        	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

	      		xmlhttp.onreadystatechange = function(){
	           if(xmlhttp.readyState==4 && xmlhttp.status==200){
                if(xmlhttp.responseText=="Success")
                 	document.location.href = "index.php";
             }
             else
	             document.getElementById("result").innerHTML = xmlhttp.responseText;
		    }
		      xmlhttp.open("GET","verifylogin.php?user="+user+"&pass="+pass,true);
		      xmlhttp.send();
	  	}

</script>