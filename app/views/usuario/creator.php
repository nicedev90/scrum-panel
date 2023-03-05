<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
	<title>Form Creator</title>
</head>
<body>
	<div class="grid grid-cols-6 h-screen">
		
		<div class="col-span-2 bg-neutral text-sm">

			<div id="elements" class="flex flex-col bg-neutralDark">
				<div class="flex justify-around">
					<h2 class="text-2xl text-dark font-bold">Form Creator</h2>
					<input type="button" class="p-2 bg-cta text-white" value="custom-form" id="btn-select"> 
				</div>

				<div class="flex flex-col space-y-2 p-2 justify-around">
					<div class="flex items-center justify-around">
						<label for="">Group Name: </label>
						<input id="name-group" type="text" class="rounded-xl p-2 outline-none">
						<button id="btn-group" class="w-max rounded-lg p-2 bg-dark text-white">New Group</button>
					</div>

					<div class="flex items-center justify-around">
						<label for="">Label Name: </label>
						<input id="name-label" type="text" class="rounded-xl p-2 outline-none">
						<button id="btn-label" class="w-max rounded-lg p-2 bg-dark text-white">New Label</button>
					</div>

					<div class="flex items-center justify-around">
						<label for="">Input Name: </label>
						<input id="name-input" type="text" class="rounded-xl p-2 outline-none">
						<button id="btn-input" class="w-max rounded-lg p-2 bg-dark text-white">New Input</button>
					</div>

					<div class="flex items-center justify-around">
						<label for="">Button Name: </label>
						<input id="name-button" type="text" class="w-16 rounded-xl p-2 outline-none">
						<input id="btn-text" type="text" class="w-32 rounded-xl p-2 outline-none" placeholder="button Text">
						<button id="btn-button" class="w-max rounded-lg p-2 bg-dark text-white">New Button</button>
					</div>

				</div>

				<div id="wrapper" class="flex flex-col space-y-2 p-2 justify-around">

				</div>

				
				<div class="flex flex-col space-y-1">

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Main Axis</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">items-start</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">items-center</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">items-end</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Cross Axis</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">justify-around</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">justify-between</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">justify-evenly</button>
					</div>

					<button id="secti" class="flex justify-between p-2 bg-primaryDark text-white">
						<p>Height</p>
						<i class="fa-solid"></i>
					</button>
					<div class="hidden">
						<div id="panel" class="flex p-1 text-white justify-around bg-neutral">
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">h-24</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">h-40</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">h-60</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">h-96</button>
						</div>
					</div>

					<button id="secti" class="flex justify-between p-2 bg-primaryDark text-white">
						<p>Width</p>
						<i class="fa-solid"></i>
					</button>
					<div class="hidden">
						<div id="panel" class="flex p-1 text-white justify-around bg-neutral">
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">w-full</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">w-40</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">w-60</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">w-96</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">w-1/2</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">w-1/3</button>
						</div>
					</div>

					<button id="secti" class="flex justify-between p-2 bg-primaryDark text-white">
						<p>Margin</p>
						<i class="fa-solid"></i>
					</button>
					<div class="hidden">
						<div id="panel" class="flex p-1 text-white justify-around bg-neutral">
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">mx-auto</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">mx-2</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">mx-6</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">mx-10</button>
						</div>
					</div>

					<button id="secti" class="flex justify-between p-2 bg-primaryDark text-white">
						<p>Padding</p>
						<i class="fa-solid"></i>
					</button>
					<div class="hidden">
						<div id="panel" class="flex p-1 text-white justify-around bg-neutral">
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">p-2</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">p-4</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">p-6</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">px-2</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">px-4</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">px-6</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">py-2</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">py-4</button>
							<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">py-6</button>
						</div>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>BackGround</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">bg-primary</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">bg-neutral</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">bg-cta</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>BG Hover</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">hover:bg-primary</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">hover:bg-neutral</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">hover:bg-cta</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Font Style</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">font-light</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">font-bold</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">font-extrabold</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Text Size</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">text-sm</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">text-lg</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">text-xl</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">text-2xl</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Space Y</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">space-y-2</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">space-y-4</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">space-y-6</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">space-y-8</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Rounded</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">rounded-lg</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">rounded-xl</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">rounded-full</button>
					</div>

					<div class="flex items-center justify-between p-2 bg-primaryDark text-white">
						<p>Others</p>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">text-dark</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">outline-none</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">border</button>
						<button id="setClass" class="p-1 rounded-lg bg-ctaDark  hover:bg-ctaLight">border-2</button>
					</div>

				</div>

			</div>

		</div>

		<div class="col-span-4 p-4 bg-neutralLight">
			<div class="flex flex-col space-y-6">

				<div id="wrapper-form">
					<form action="" id="custom-form" class="" method="post">
					</form>
				</div>

				<div id="wrapper-code">
				</div>
				
			</div>
		</div>

	</div>

<script src="<?php echo URLROOT; ?>/js/creator.js"></script>
</body>
</html>