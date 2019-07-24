<!DOCTYPE html>
<html>
<head>
<title>Welcome To My Project</title>
<style type="text/css">
div.toggler {
	 border:1px solid #ccc;
	 background:url("<?php echo base_url(); ?>assets/image/gmail2.jpg") 10px 12px #eee no-repeat;
	 cursor:pointer; padding:10px 32px;
}
div.toggler .subject {
	font-weight:bold;
}
div.read {
	color:#666;
}
div.toggler .from, div.toggler .date {
	font-style:italic; font-size:11px;
}
div.contentDiv {
	display: none;
}
#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("https://www.creditmutuel.fr/cmne/fr/banques/webservices/nswr/images/loading.gif") no-repeat center center rgba(0,0,0,0.25)
}
</style>
<script>
function myFunction($id) {
  var x = document.getElementById($id);
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

<script type="text/javascript">
	document.onreadystatechange = function () {
	  var state = document.readyState
	  if (state == 'interactive') {
	       document.getElementById('toggler').style.visibility="hidden";
	  } else if (state == 'complete') {
	      setTimeout(function(){
	         document.getElementsByClassName('interactive');
	         document.getElementById('load').style.visibility="hidden";
	         document.getElementsByClassName('toggler').style.visibility="visible";
	      },1000);
	  }
	}
</script>

</head>
<body>
	<div id="load"></div>
	<div class="container">
		<div class="row">
			<!-- <div class="alert alert-success" id="success-alert">
			  <button type="button" class="close" data-dismiss="alert">x</button>
			  <strong>Success! </strong> Product have added to your wishlist.
			</div> -->
			<div class="content">
				<?php
				foreach ($output as $key => $value) {
					print_r($value);
				}
				?>
			</div>
		</div>
	</div>

</body>
</html>