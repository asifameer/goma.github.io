<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Markdown</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- list.js -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="page-header">
					<h1>Use of list.js</h1>
				</div>
				<div><div id="users">

  <input class="search" placeholder="Search" autofocus="true" />
  <br>
  <button class="sort" data-sort="name">
    Sort
  </button>

  <ul class="list">
    <li>
      <h3 class="name">Jonny Stromberg</h3>
      <p class="born">1986</p>
    </li>
    <li>
      <h3 class="name">Jonas Arnklint</h3>
      <p class="born">1985</p>
    </li>
    <li>
      <h3 class="name">Martina Elm</h3>
      <p class="born">1986</p>
    </li>
    <li>
      <h3 class="name">Gustaf Lindqvist</h3>
      <p class="born">1983</p>
    </li>
  </ul>

</div>
<script>
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>
</div>
				
				
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>