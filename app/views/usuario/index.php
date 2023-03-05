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

			<a href="<?php echo URLROOT; ?>/usuarios/index" class="hover:bg-primaryLight hover:text-white hover:font-bold"> <?php echo APPNAME; ?> </a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Pending Projects: 06</a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Completed Projects: 04</a>
			<a href="<?php echo URLROOT; ?>/usuarios/calcular" class="hover:bg-primaryLight hover:text-white hover:font-bold">Cotizar</a>
			<a href="#" class="bg-cta hover:bg-primaryLight hover:text-white hover:font-bold"><?php echo $_SESSION['user_nombre']; ?></a>
		</nav>
<!-- 		<pre>
		<?php print_r($data) ?>
		</pre> -->
		<div class="grid gap-8 grid-cols-2 p-4 ">
			<?php foreach($data['projects'] as $row) : ?>

			<div class="flex p-3 space-x-2  rounded-lg border border-l-4 border-primaryDark bg-neutralLight shadow-lg">

				<div class="flex flex-col space-y-2 w-1/2 justify-between ">

					<div class="flex justify-between px-2 py-1 rounded-lg hover:bg-neutral">
						<h2 class="text-lg font-bold"> <?php echo $row->name ?> 
						</h2>
						<div class="rounded-full px-2 text-lg hover:bg-ctaLight">
							<a href="<?php echo URLROOT; ?>/usuarios/panel/<?php echo $row->id ?>">
								<i class="fas fa-arrow-up-right-from-square"></i>
							</a>
							
						</div>
					</div>

					<a href="<?php echo URLROOT; ?>/usuarios/panel">
						Lenguajes: <?php echo $row->languages ?>
						<i class="fa-brands fa-php fa-2x"></i>
					</a>

					<div class="bg-primary border text-dark">
						Total de horas: <?php echo $row->hours ?> 
					</div>

				</div>
			

				<div class="flex w-1/2 flex-col text-sm text-dark">

					<?php for ($i=0; $i < count($data['sprints'][$row->id]); $i++) : ?>
					<div class="flex items-center justify-between px-2 py-1 rounded-lg hover:bg-neutral">
						<p> Sprint <?php echo $data['sprints'][$row->id][$i]->sprint_num ?> </p>
					<p>Stories: 0<?php echo $data['sprints'][$row->id][$i]->stories ?></p>
						<p>Estim: <?php echo $data['sprints'][$row->id][$i]->hours ?> hrs</p>
						<div class="rounded-full px-2 text-lg hover:bg-ctaLight">
							<a href="<?php echo URLROOT; ?>/usuarios/panel/<?php echo $data['sprints'][$row->id][$i]->project_id; ?>/<?php echo $data['sprints'][$row->id][$i]->sprint_num ?>">
								<i class="fas fa-arrow-up-right-from-square"></i>
							</a>
							
						</div>
					</div>
				<?php endfor; ?>


				</div>

					
			</div>

<?php endforeach; ?>
		</div>

				
	</div>



		<footer class="w-full mt-auto bg-primaryDark">
			<div class="text-center">
				<?php echo APPNAME; ?>
			</div>
		</footer>
	</div>



	<!-- <div class="grid grid-cols-4 gap-4 p-2 rounded-lg hover:bg-neutral">
							<a href="<?php echo URLROOT; ?>/usuarios/panel">
								<i class="fa-brands fa-square-js fa-2x"></i>
							</a>
							<a href="<?php echo URLROOT; ?>/usuarios/panel">
								<i class="fa-brands fa-react fa-2x"></i>
							</a>
							<a href="<?php echo URLROOT; ?>/usuarios/panel">
								<i class="fa-brands fa-telegram fa-2x"></i>
							</a>
						
						<a href="<?php echo URLROOT; ?>/usuarios/panel" class="text-cta">
							<i class="fa-brands fa-github fa-2x"></i>
						</a>


						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-php fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel" class="text-cta">
							<i class="fa-brands fa-html5 fa-2x "></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-telegram fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-php fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-linkedin fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-wordpress fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-docker fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-android fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-shopify fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-codepen fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-python fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-linux fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-node fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-java fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-discord fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-ubuntu fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-css3 fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-git fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-sass fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-node-js fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-laravel fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-bitcoin fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-bootstrap fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fa-brands fa-angular fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-file fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-clipboard fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-clock fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-film fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-gear fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-lock fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-tag fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-camera fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-address-book fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-layer-group fa-2x"></i>
						</a>

						<a href="<?php echo URLROOT; ?>/usuarios/panel">
							<i class="fas fa-check fa-2x"></i>
						</a>
					</div> -->

	<script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>