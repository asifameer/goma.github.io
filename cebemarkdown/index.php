<?php
if(isset($_POST['action']) && $_POST['action'] == 'submit'){
	if(empty(trim($_POST['content']))){
		header('Location: .');
	}else{
		$content = trim($_POST['content']);
	}
	
}
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.10.0/css/bootstrap-markdown.min.css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.10.0/js/bootstrap-markdown.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.10.0/js/bootstrap-markdown.min.js"></script>
	<!-- <link rel="stylesheet" href="bootstrap-markdown/css/bootstrap-markdown.min.css">
	<script src="bootstrap-markdown/js/bootstrap-markdown.js"></script> -->
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 com-sm-offset-2">
				<div class="page-header">
					<h1>Markdown</h1>
				</div>
				<form action="" method="POST">
				<textarea name="content" data-provide="markdown-editable" id="content" cols="30" rows="10"></textarea>
				<button type="submit" class="btn btn-default" name="action" value="submit">Submit</button>
				</form>
				<hr>
				<?php if(isset($_POST['action']) && $_POST['action'] == 'submit'):?>
						<div class="well">
							<?=$content?>
						</div>
					<?php endif?>
			</div>
		</div>
	</div>
</body>
</html>