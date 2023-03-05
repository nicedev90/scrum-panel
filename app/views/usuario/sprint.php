<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
	<title> <?php echo APPNAME ?> </title>
</head>
<body>
	<div id="wrapper" class="flex flex-col w-full mx-auto min-h-screen">

		<nav id="custom-navbar" class="flex p-1 bg-primary text-xl justify-around">
			<a href="<?php echo URLROOT; ?>/usuarios/index" class="hover:bg-primaryLight hover:text-white hover:font-bold">Index  </a>

			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Proyecto: <?php echo $data['project'] ?> </a>

			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Sprint n° <?php echo $data['sprint'] ?></a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Pending Hours Sprint : 64 hrs</a>
			<a href="#" class="bg-cta hover:bg-primaryLight hover:text-white hover:font-bold"><?php echo $_SESSION['user_nombre']; ?></a>
		</nav>
	
<!--  <pre>
		<?php print_r($data) ?>
		</pre> -->

		<div class="grid grid-cols-4 gap-4 p-2 text-center text-white">
			<div class="bg-dark flex justify-around">Stories 	
				<button id="btn-story" type="submit" name="add-story" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
					<i class="fas fa-plus"></i>
				</button>
			</div>

			<div class="bg-dark flex justify-around">Tasks
				<button id="btn-task" type="submit" name="add-task" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
					<i class="fas fa-plus"></i>
				</button>
			</div>

			<div class="bg-dark">In Progress</div>
			<div class="bg-dark">Done</div>
		</div>

		<div class="grid grid-cols-4 gap-4 p-2">
			<!-- columna de stories -->
			<div class="flex flex-col space-y-4">
				<?php foreach($data['stories'] as $row) : ?>

				<div class="flex flex-col space-y-2 p-2 border-l-4 cursor-pointer border-primaryDark shadow-md justify-between border rounded-lg hover:bg-neutralLight">
					<div class="flex justify-between border-b border-dark text-sm">
						<p><i class="fas fa-database"></i> <?php echo $row->story_num ?></p>
						<p>Total : <?php echo $row->hours ?> hrs</p> 
						<p> <?php echo $row->status ?> </p> 
					</div>

					<div class="flex justify-between rounded-lg ">
						<div class="text-lg font-bold">
							<?php echo $row->title ?> 
						</div>
					</div>

					<p><?php echo $row->details ?></p>			

				</div>

				<?php endforeach; ?>
			</div>

			<!-- columna de tasks -->
			<div class="flex flex-col space-y-4">
				<?php foreach($data['tasks'] as $row) : ?>
					<?php if ($row->status == 'Backlog') : ?>
					<div class="flex flex-col space-y-2 p-2 border-l-4  border-primaryDark shadow-md justify-between border rounded-lg bg-neutralLight">
						<div class="flex justify-between border-b border-dark text-sm">
							<p><i class="fas fa-database"></i> <?php echo $row->story_num ?></p>
							<p><?php echo $row->importance ?> </p>
							<p><?php echo $row->estimate ?> hrs</p>							
						</div>

						<div>
							<p><?php echo $row->details ?></p>
						</div>
						
							<form action="" method="post" class="flex justify-around text-lg">
								<!-- <input type="hidden" name="id_story" value="<?php echo $row->story_num ?>"> -->
								<input type="hidden" name="id_task" value="<?php echo $row->id ?>">

								<button id="<?php echo $row->id ?>" type="button" name="edit" class="btn-edit-task hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-edit"></i>
								</button>

								<button type="submit" name="backlog" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-file"></i>
								</button>

								<button type="submit" name="progress" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-gear "></i>
								</button>
								
								<button type="submit" name="done" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-check "></i>
								</button>

								<button id="<?php echo $row->id ?>" type="button" name="delete" class="btn-delete-task hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-trash"></i>
								</button>


							</form>
					</div>
					<?php require APPROOT . '/views/usuario/partials/modal_delete_task.php' ?>
					<?php require APPROOT . '/views/usuario/partials/modal_edit_task.php' ?>

					<?php endif; ?>
				<?php endforeach; ?>
			</div>


			<div class="flex flex-col space-y-4">
				<?php foreach($data['tasks'] as $row) : ?>
					<?php if ($row->status == 'In Progress') : ?>
					<div class="flex flex-col space-y-2 p-2 border-l-4  border-primaryDark shadow-md justify-between border rounded-lg bg-neutral">
						<div class="flex justify-between border-b border-dark test-sm">
							<p><i class="fas fa-database"></i> <?php echo $row->story_num ?></p>
							<p><?php echo $row->importance ?> </p>
							<p><?php echo $row->estimate ?> hrs</p>
							<button class="bg-dark text-white rounded px-3 hover:bg-primaryDark">Started</button>
						</div>

						<div>
							<p><?php echo $row->details ?></p>
						</div>
						
							<form action="" method="post" class="flex justify-around text-lg">
								<!-- <input type="hidden" name="id_story" value="<?php echo $row->story_num ?>"> -->
								<input type="hidden" name="id_task" value="<?php echo $row->id ?>">

								<button id="<?php echo $row->id ?>" type="button" name="edit" class="btn-edit-task hover:bg-cta cursor-pointer px-2 rounded-xl">
										<i class="fas fa-edit"></i>
									</button>

								<button type="submit" name="backlog" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-file"></i>
								</button>

								<button type="submit" name="progress" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-gear "></i>
								</button>
								
								<button type="submit" name="done" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-check "></i>
								</button>

								<button id="<?php echo $row->id ?>" type="button" name="delete" class="btn-delete-task hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-trash"></i>
								</button>


							</form>
					</div>
					<?php require APPROOT . '/views/usuario/partials/modal_delete_task.php' ?>
					<?php require APPROOT . '/views/usuario/partials/modal_edit_task.php' ?>

					<?php endif; ?>
				<?php endforeach; ?>
			</div>

			<div class="flex flex-col space-y-4">
				<?php foreach($data['tasks'] as $row) : ?>
					<?php if ($row->status == 'Done') : ?>
					<div class="flex flex-col space-y-2 p-2 border-l-4  border-primaryDark shadow-md justify-between border rounded-lg bg-ctaLight">
						<div class="flex justify-between border-b border-dark text-sm">
							<p><i class="fas fa-database"></i> <?php echo $row->story_num ?></p>
							<p><?php echo $row->importance ?> </p>
							<p><?php echo $row->estimate ?> hrs</p>
							<button class="bg-dark text-white rounded px-3 hover:bg-primaryDark">Finish <?php echo $row->hours ?> hrs</button> 
						</div>

						<div>
							<p><?php echo $row->details ?></p>
						</div>
						
							<form action="" method="post" class="flex justify-around text-lg">
								<!-- <input type="hidden" name="id_story" value="<?php echo $row->story_num ?>"> -->
								<input type="hidden" name="id_task" value="<?php echo $row->id ?>">

								<button id="<?php echo $row->id ?>" type="button" name="edit" class="btn-edit-task hover:bg-cta cursor-pointer px-2 rounded-xl">
										<i class="fas fa-edit"></i>
									</button>

								<button type="submit" name="backlog" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-file"></i>
								</button>

								<button type="submit" name="progress" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-gear "></i>
								</button>
								
								<button type="submit" name="done" class="hover:bg-cta cursor-pointer px-2 rounded-xl">
									<i class="fas fa-check "></i>
								</button>

								<button id="<?php echo $row->id ?>" type="button" name="delete" class="btn-delete-task hover:bg-cta cursor-pointer px-2 rounded-xl">
										<i class="fas fa-trash"></i>
									</button>


							</form>
					</div>
					<?php require APPROOT . '/views/usuario/partials/modal_delete_task.php' ?>
					<?php require APPROOT . '/views/usuario/partials/modal_edit_task.php' ?>

					<?php endif; ?>
				<?php endforeach; ?>
			</div>

		</div>

		<footer class="w-full mt-auto bg-primaryDark">
			<div class="text-center">
				<?php echo APPNAME; ?>
			</div>
		</footer>
	</div>

	<?php require APPROOT . '/views/usuario/partials/modal_task.php' ?>
	<?php require APPROOT . '/views/usuario/partials/modal_story.php' ?>

	<script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>