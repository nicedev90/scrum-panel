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

			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Proyecto: <?php echo $data['projects']->name ?> </a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Progress: 20%</a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Pending Hours: 64 hrs</a>
			<a href="#" class="bg-cta hover:bg-primaryLight hover:text-white hover:font-bold"><?php echo $_SESSION['user_nombre']; ?></a>
		</nav>

<!-- 				<pre>
		<?php print_r($data) ?>
		</pre> -->
		
		<div class="grid grid-cols-3 h-96 gap-4 p-2">

			<div class="flex flex-col border rounded-xl px-2">
				<h3>RESUMEN </h3>
				<div id="card">
					<div id="card-header"></div>
					<div id="card-body">
						<p>Nombre del proyecto</p>
						<button id="btn-register" class="px-5 py-2 text-white text-lg rounded-xl bg-cta">new Sprint</button>
						<button id="btn-register" class="px-5 py-2 text-white text-lg rounded-xl bg-cta">new Story</button>
						<p>Detalles del proyecto</p>
						<p>Presupuesto</p>
						<p>Lenguajes a Usar</p>

						<p>Total de horas proyectada: </p>
						<p>Backlog: Total stories</p>
						<p>Tasks: Total tasks</p>
						<p>Fecha de inicio</p>
						<p>Fecha aproximada de finalizacion</p>

						
					</div>
					<div id="card-footer"></div>
				</div>
			</div>

			<div class="flex flex-col border rounded-xl px-2">
				<h3>PROTOTIPO </h3>
				<div id="card">
					<div id="card-header"></div>
					<div id="card-body">
						IMAGEN REFERENCIAL PROTOTIPO
					</div>
					<div id="card-footer"></div>
				</div>
			</div>

			<div class="flex flex-col border rounded-xl px-2">
				<h3>BurnDown Chart </h3>
				<div id="card">
					<div id="card-header"></div>
					<div id="card-body">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam perspiciatis illum temporibus impedit, vero minima, eum fugiat aperiam praesentium incidunt voluptates fuga cum, excepturi voluptatum quibusdam odit eligendi odio, nisi.
					</div>
					<div id="card-footer"></div>
				</div>
			</div>

		</div>

		<div class="grid grid-cols-4 gap-4 p-2">
<?php foreach($data['sprints'] as $row) : ?>
			<div class="p-4 border rounded-xl">
				<div class="flex justify-between">
					<h3>SPRINT <?php echo $row->sprint_num ?></h3>
						<div class="rounded-full px-2 text-lg hover:bg-ctaLight">
							<a href="<?php echo URLROOT; ?>/usuarios/panel/<?php echo $row->project_id ?>/<?php echo $row->sprint_num ?>">
								<i class="fas fa-arrow-up-right-from-square"></i>
							</a>
							
						</div>
				</div>
				<p>Stories: <?php echo $row->stories ?></p>
				<p>Total horas: <?php echo $row->hours ?></p>
				<p>Porcentaje de avance: </p>
				<p>Pending hours: 49 hrs </p>
			</div>
<?php endforeach; ?>


		</div>

		<footer class="w-full mt-auto bg-primaryDark">
			<div class="text-center">
				<?php echo APPNAME; ?>
			</div>
		</footer>
	</div>


<?php require APPROOT . '/views/usuario/partials/modal_story.php' ?>

	<script src="<?php echo URLROOT; ?>/js/main.js"></script>

</body>
</html>