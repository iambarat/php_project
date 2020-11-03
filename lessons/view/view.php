<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web page</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Submit Your Name</h1>
    <form method="POST" action="/names">
    	<input name="name">
    	<button type="Submit"> Submit </button>

    </form>
    <!-- <h2>
    <form method="POST" action="/names_del">
    	<input name="name">
    	<button type="Submit"> Submit </button>

    </form>
	</h2> -->
    <?php require 'partials/nav.php' ?>


    <?php foreach ($user as $u) : ?>
    	<li><?= $u->name; ?></li>

	<?php endforeach ;?>




	<!-- <nav>
		<ul>
			<li><a href="/view/about.php">About</a></li>
			<li><a href="/view/contact.php">Contact</a></li>
		</ul>
	</nav> -->
 	<!-- <ul>
		<?php foreach ($task as $tasks) : ?>
			<li>
				<?php if($tasks->isCom()) : ?>
					<strike>
				<?= $tasks->desc;  ?> 					
					</strike>
				<?php else : echo $tasks->desc;
					endif; ?>
					
			</li>
		<?php endforeach; ?>
	</ul>
  -->

<!--     <header>
        <h1>
            <?= "My name is " . $_GET['name'] . " and I support $greeting"; ?>
        </h1>
    </header>
    <ul>
    	<?php foreach ($task as $key => $info) : ?>
    		<li><strong><?= ucwords("$key:") ; ?> </strong> <?= $info ; ?> </li>		//normal associative array;
    	<?php endforeach; ?>
    </ul>
	
	<h2>Task Status</h2>
	<ul>
		<li><strong>Title: </strong> <?= $task['title']; ?></li>
		<li><strong>Due: </strong> <?= $task['deadline']; ?></li>									//associative array;
		<li><strong>Done by: </strong> <?= $task['assigned_to']; ?></li>
		<li><strong>Status: </strong> <?= $task['status']? 'Done' . '&#9989' : 'Not done'; ?></li>
	</ul>   -->
<!-- 
 	<ul>
		<?php foreach ($tasks as $task) : ?>
			<li>
				<?php if($task->completed) : ?>
					<strike>
				<?= $task->description;  ?>
					</strike>
				<?php else : echo $task->description;
					endif; ?>
					
			</li>
		<?php endforeach; ?>
	</ul>  -->





</body>
</html>