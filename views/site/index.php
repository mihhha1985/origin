<!DOCTYPE html>
<html>
  <head>
    <title>Гостевая книга</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="/tamplate/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/tamplate/css/style.css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
		<div class="row">
			<h3>Гостевая книга</h3>
			<h4>Оставьте ваш коментарий</h4>
			<div class="col-md-8 col-md-offset-2 layout">
				<form id="commentForm">
					<label>Введите ваш email:</label><br />
					<input type="text" name="uemail" placeholder="Email" required/><br />
					<label>Введите ваше сообщение:</label><br />
					<textarea name="ucomment" required></textarea><br />
					<input style="margin-top:10px" class="btn btn-primary" type="submit" value="Отправить"/>
				</form>	
				<h5>Коментарии</h5>
				<div class="comment-layout">
					<?php if(isset($comments) && is_array($comments)): ?>
						<?php foreach($comments as $comment): ?>
							<div class="comment-box">
								<p><?= $comment['comment']; ?></p>
								<h6><?= $comment['created_at']; ?></h6>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/tamplate/js/bootstrap.min.js"></script>
	<script src="/tamplate/js/example.js"></script>
  </body>
</html>

