<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> <?php echo APPNAME ?> </title>

  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
</head>
<body>
	<div id="wrapper" class="flex flex-col w-full mx-auto min-h-screen">

		<nav id="custom-navbar" class="flex p-1 bg-primary text-xl justify-around">
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Proyecto: Blog LXDE </a>

			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Progress: 20%</a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Pending Hours: 64 hrs</a>
			<a href="#" class="bg-cta hover:bg-primaryLight hover:text-white hover:font-bold"><?php echo $_SESSION['user_nombre']; ?></a>
		</nav>

		<!-- resumen calculator -->
		<div class="flex w-full bg-dark text-white justify-between p-2">
			<div class="flex w-44 space-x-2">
				<h2> costo / hora $ </h2>
				<input type="text" id="costo" class="text-sm text-dark outline-none px-2 w-12" value="1.5">
			</div>

			<div class="flex w-44 space-x-2">
				<h2> horas/ dia</h2>
				<input type="text" id="dia" class="text-sm text-dark outline-none px-2 w-12" value="10">
			</div>

			<div class="flex w-44 space-x-2">
				<h2> Total horas</h2>
				<input type="text" id="total_horas" class="text-sm text-dark outline-none px-2 w-12" value="0">
			</div>
			<div class="flex w-44 space-x-2">
				<h2> Total dias</h2>
				<input type="text" id="total_dias" class="text-sm text-dark outline-none px-2 w-12" value="0">
			</div>
			<div class="flex w-44 space-x-2">
				<h2> Total semanas</h2>
				<input type="text" id="total_semanas" class="text-sm text-dark outline-none px-2 w-12" value="0">
			</div>
			<div class="flex w-44 space-x-2">
				<h2> Costo Total $</h2>
				<input type="text" id="total" class="text-sm text-dark outline-none px-2 w-12" value="0">
				<!-- <input type="text" id="ntotal" class="text-sm text-dark outline-none px-2 w-12" > -->
			</div>
			<div class="flex w-44 space-x-2">
				<h2> Valor Neto $</h2>
				<input type="text" id="neto" class="text-sm text-dark outline-none px-2 w-12" value="0" >
			</div>
		</div>
		<!-- calculator section -->
		<div class="grid grid-cols-6">
		
			<div class="col-span-2 text-sm">

				<div id="elements" class="flex flex-col ">
					<div class="flex justify-around">
						<h2 class="text-2xl text-dark font-bold">Calcular Presupuesto</h2>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Acceso utilizando cuentas de correo </p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Envío de notificaciones push.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Panel de configuración.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">12</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Acceso utilizando redes sociales.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Funcionalidad de suscripciones</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Perfiles de usuario</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Administración de usuarios.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Funcionalidad Offline.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Posibilidad de compartir en las redes</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Aplicación Hibrida.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">30</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Geo-Localización.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Aplicación Nativa.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">20</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Integración con aplicaciones de terceros. (API)</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">10</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Sitio Web 5 páginas</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">10</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Reporte de errores del sistema</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Reportes de estadísticas.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Capacidad de moderar la actividad de la aplicación.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Carga de archivos.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">3</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Integración de calendario.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">8</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Carrito de compras.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">12</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Integración de chat</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Interfaz de usuario personalizada. cada/vista</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">3</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Certificados de seguridad.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Sistema de retroalimentación.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Sistema de tickets.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">8</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Clasificación de contenido con TAGS.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Sistema para administrar el contenido de la aplicación.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>


					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Mapas</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Soporte para comentarios</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Multiples lenguajes</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Configuraciones de privacidad para usuarios.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">3</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Necesita diseño de base de datos</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Envio de correos electrónicos</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Pagos a través de la aplicación.</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Funcionalidad para realizar reservas</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">10</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Generar reportes PDF</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">6</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Roles de usuario c/u</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">2</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Sistema de reservas</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">12</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Generar documentacion de sistema</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">8</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Sistema de preventas</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">10</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						<p class="w-full">Hosting $60</p>
						<i class="fas fa-gear"></i>
						<p class="px-3">3</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Dominio $60
						<i class="fas fa-gear"></i>
						<p class="px-3">4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						landing Page ( Dominio Hosting) $120
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Carrito Compra $290
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						SubCategorias x3 $30
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Logo $45
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Banners x9 $50
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Botones personalizados (unidad) $3
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Cargas de productos (unidad) $2
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>

					<div class="flex item px-5 items-center justify-end p-1 bg-neutral">
						Cargas de productos x100 $90
						<i class="fas fa-gear"></i>
						<p>4</p>
					</div>



				</div>

			</div>


			<div class="col-span-4 p-2">
				<div class="flex flex-col space-y-6">

					<button id="btn-print" class="p-2 rounded-xl bg-cta text-white font-bold w-44 hover:bg-ctaDark">
						<i class="fas fa-print "></i>
						Print
					</button>

					<div id="wrapper-form" >

						<!-- encabezado cotizacion -->
						<div id="titulo" class="flex flex-col space-y-2 py-4 px-2">							
								
							<h2 class="text-2xl text-dark font-bold  border-b w-96">Cotización</h2>
							<div class="text-xl px-4 text-dark ">
								Proyecto: <b>Sistema de orden de compra</b>
							</div>
							<div class="flex justify-start items-center space-x-3 px-4 text-dark ">
								<div class="text-xl"> Tecnologías:</div>
								<div class="flex items-center space-x-1 font-bold text-lg">
									<i class="fa-brands fa-php text-3xl"></i>
									<p>7.4 </p>
								</div>
								<div class="flex items-center space-x-1 font-bold text-lg">
									
									<i class="fa-brands fa-square-js  text-3xl"></i>
									<p>ES6</p>
								</div>
								
								
							</div>
							<h2 class="text-xl px-4 text-dark ">Requerimiento del Sprint: <b>02</b></h2>
						</div>

						<!-- detalles de cotizacion -->
						<form action="" id="custom-form" method="post">

							<div class="flex justify-between border border-dark">
								<div class="w-16 text-center text-dark text-xl font-semibold bg-neutralLight">
									<p>Item</p>
								</div>

								<div class="w-full text-center text-dark text-xl font-semibold bg-neutralLight">
									<p>Descripcion</p>
								</div>
								<div class="w-32 text-center text-white text-xl font-semibold bg-dark">
									 <p>Subtotal</p>
								</div>
							</div>
				
						</form>

						<!-- footer de cotizacion -->
						<div id="resultado" class="flex flex-col items-end mt-4 ">
							
							<div class="flex justify-around w-1/3 text-dark text-xl font-semibold bg-neutralLight">
								<p>Total USD </p>
								<p id="total_cotizacion"></p>

							</div>

						</div>

						<!-- autor -->
						
					</div>

					<div id="wrapper-code">

						<h2 class="font-bold">Calculo segun 8 hrs (jornada laboral promedio) </h2>
						<p>Horas de trabajo por dia = 8 hrs</p>
						<p>Dias de trabajo por semana = 5 dias</p>
						<p>Dias de trabajo por mes = 20 dias</p>
						<br>

						<h2>Costos fijos : Agua, luz, internet, gas, alquiler, hosting</h2>
						<p>valor de jornada = costos fijos / dias habiles * mes</p>
						<h3>valor de jornada = 50+50+100+50+400+150 / 20 = 800/20 = 40</h3>
						<br>

						<h2> Calculo de horas para presupuesto = jornada / horas</h2>
						<p>horas = 40 / 8 = 5  (calculo basico para no perder dinero) </p>
						<br>

						<p>El tiempo cuenta desde que se tiene todo el material</p>

						<h2>calculo de horas por pieza = (jornada * dias proyectado ) / numero de piezas</h2>
						<p>horas por pieza = (40 * 15) / 3 = 600 / 3 = 200</p>
						<br>

						<h2>sueldo mensual = costos fijos + sueldo promedio</h2>
						<p>sueldo mensual = 800 + 1500 = 2300</p>
						<p>precio hora de trabajo = sueldo mensual / 5 dias * 8 hrs * 4 semanas</p>
						<p>precio hora de trabajo = 2300 /160 = 14.5</p>
						<br>

						<p>considerar los condicionantes antes de definir el costo final</p>
					</div>
					
				</div>
			</div>

		</div>



      
    <footer class="w-full mt-auto bg-primaryDark">
			<div class="text-center">
				<?php echo APPNAME; ?>
			</div>
		</footer>
	</div>

	<script src="<?php echo URLROOT; ?>/js/calcular.js"></script>


</body>
</html>