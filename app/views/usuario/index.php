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
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold"> <?php echo APPNAME; ?> </a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Pending Projects: 06</a>
			<a href="#" class="hover:bg-primaryLight hover:text-white hover:font-bold">Completed Projects: 04</a>
			<a href="#" class="bg-cta hover:bg-primaryLight hover:text-white hover:font-bold"><?php echo $_SESSION['user_nombre']; ?></a>
		</nav>
		
		<div class="grid gap-4 grid-cols-3 p-4 ">

			<div class="flex flex-col p-3 rounded-xl border border-l-4 shadow-md border-dark">
				<div class="flex justify-between text-primary font-bold text-2xl">
					<h3>Proyecto LXDE Blog</h3>
					<button class="rounded-xl bg-cta border"><a href="<?php echo URLROOT; ?>/usuarios/panel">Go to </a> </button>
				</div>
				<div class="flex justify-between px-2 py-1">
					<p>Sprint 01</p>
					<p>Stories: 5</p>
					<p>Estimated: 16hrs</p>
					<button>Go to</button>
				</div>
				<div class="flex justify-between px-2 py-1">
					<p>Sprint 02</p>
					<p>Stories: 10</p>
					<p>Estimated: 34hrs</p>
					<button>Go to</button>
				</div>
			</div>

			<div class="flex flex-col p-3 rounded-xl border border-l-4 shadow-md border-dark">
				<div class="flex justify-between text-primary font-bold text-2xl">
					<h3>Proyecto LXDE Blog</h3>
					<button class="rounded-xl bg-cta border">Go to </button>
				</div>
				<div class="flex justify-between px-2 py-1">
					<p>Sprint 01</p>
					<p>Stories: 5</p>
					<p>Estimated: 16hrs</p>
					<button>Go to</button>
				</div>
				<div class="flex justify-between px-2 py-1">
					<p>Sprint 02</p>
					<p>Stories: 10</p>
					<p>Estimated: 34hrs</p>
					<button>Go to</button>
				</div>
			</div>

			<div class="flex flex-col p-3 rounded-xl border border-l-4 shadow-md border-dark">
				<div class="flex justify-between text-primary font-bold text-2xl">
					<h3>Proyecto LXDE Blog</h3>
					<button class="rounded-xl bg-cta border">Go to </button>
				</div>
				<div class="flex justify-between px-2 py-1">
					<p>Sprint 01</p>
					<p>Stories: 5</p>
					<p>Estimated: 16hrs</p>
					<button>Go to</button>
				</div>
				<div class="flex justify-between px-2 py-1">
					<p>Sprint 02</p>
					<p>Stories: 10</p>
					<p>Estimated: 34hrs</p>
					<button>Go to</button>
				</div>
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