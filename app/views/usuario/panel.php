<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
	<title> <?php echo APPNAME ?> </title>
</head>
<body>
	<div id="wrapper" class="flex flex-col w-full mx-auto min-h-screen">

		<nav id="custom-navbar" class="flex p-1 bg-primary text-xl justify-around">
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Proyecto: Blog LXDE </a>

			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Progress: 20%</a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Pending Hours: 64 hrs</a>
			<a href="#" class="bg-cta hover:bg-primaryLight hover:text-white hover:font-bold"><?php echo $_SESSION['user_nombre']; ?></a>
		</nav>
		
		<div class="grid grid-cols-2 gap-4 p-2">

			<div class="flex flex-col h-96 border rounded-xl px-2">
				<h3>RESUMEN </h3>
				<div id="card">
					<div id="card-header"></div>
					<div id="card-body">
						<p>Nombre del proyecto</p>
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

			<div class="flex flex-col h-96 border rounded-xl px-2">
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

		<div class="flex justify-between p-4">

			<div class="px-4">
				<h3>SPRINT 01</h3>
				<button class="bg-neutral">GO TO</button>
				<p>total tareas</p>
				<p>Porcentaje de avance: </p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam facere quod odio dolor cupiditate consequuntur enim, dolorum at voluptatem incidunt qui, tempore beatae perferendis minima nesciunt harum assumenda quo amet?</div>

			<div class="px-4">
				<h3>SPRINT 02</h3>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam facere quod odio dolor cupiditate consequuntur enim, dolorum at voluptatem incidunt qui, tempore beatae perferendis minima nesciunt harum assumenda quo amet?</div>

			<div class="px-4 bg-cta">
				<h3>SPRINT 03</h3>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam facere quod odio dolor cupiditate consequuntur enim, dolorum at voluptatem incidunt qui, tempore beatae perferendis minima nesciunt harum assumenda quo amet?
			</div>

		</div>

		<footer class="w-full mt-auto bg-primaryDark">
			<div class="text-center">
				<?php echo APPNAME; ?>
			</div>
		</footer>
	</div>
</body>
</html>