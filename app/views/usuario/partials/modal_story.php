	<!-- modal section -->
	<div id="modal-story" class="hidden fixed inset-0 overflow-y-auto w-full h-screen bg-dark px-2 py-5 bg-opacity-70">
		<form class="flex flex-col w-full mx-auto md:max-w-2xl bg-white shadow rounded-lg" action="" method="post">
			<!-- modal title -->
			<div class="flex justify-between py-2 px-3 border-b md:px-6">
				<input type="hidden" name="story_num" value="<?php  echo $data['newStory'] ?>">

				<h2 class="text-dark text-lg font-bold text-center">
					Add Story n° <?php echo $data['newStory'] ?>
				</h2>
				<button class="btn-close text-xl"><i class="fa-solid fa-cancel"></i></button>
			</div>

			<!-- start modal body -->
			<div class="flex flex-col w-full p-3 space-y-2">
				<!-- title row -->
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="title" class="md:w-full">Title *</label>
						<input type="text" name="title" class="p-2 border outline-none rounded md:w-full">
					</div>
				</div>

				
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="details" class="md:w-full">Details *</label>
						<input type="text" name="details" class="p-2 border outline-none rounded md:w-full">
					</div>
				</div>

				<div class="flex flex-col items-center pt-5 space-y-4 text-white text-lg font-bold md:flex-row md:justify-around md:space-y-0">
					<button name="add_story" type="submit" class="w-full p-3 rounded-xl shadow bg-ctaLight hover:bg-ctaDark md:w-56">Add Story</button>
				</div>

			</div>
			<!-- end modal body -->

		</form>
	</div>