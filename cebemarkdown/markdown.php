
<?php
require_once 'vendor\autoload.php';
$parser = new \cebe\markdown\GithubMarkdown();
 // Get contents of markdown.md file in a var $markdown
$markdown = file_get_contents('markdown.md');
// Output html to a var $my_text
$my_text = $parser->parse($markdown); 
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
	<script>
		$(document).ready(function() {
			$('#md').load('markdown.md');
		});
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="page-header">
					<h1>Markdown</h1>
				</div>
				<div><?=$my_text?></div>
				
				
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
