<?php
	$ar = array('index','terms','disclaimer','policy','notfound');
	$c = isset($_REQUEST['c'])?$_REQUEST['c']:'index';
	if(!in_array($c,$ar))
		$c = 'index';
	$file = "/content/$c.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Build a legal website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	 <div class="container">

      <div class="masthead">
        <h3 class="muted">Build a legal website</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li <?if($c=='index'){?> class="active"<?}?>><a href="?c=index">Home</a></li>
                <li <?if($c=='terms'){?> class="active"<?}?>><a href="?c=terms">Terms of Service</a></li>
                <li <?if($c=='disclaimer'){?> class="active"<?}?>><a href="?c=disclaimer">Usage Disclaimer</a></li>
                <li <?if($c=='policy'){?> class="active"<?}?>><a href="?c=policy">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
		
		<p><?include($file)?></p>

      </div>

</body>
</html>