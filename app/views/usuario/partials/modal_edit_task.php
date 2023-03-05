	<!-- modal section -->
	<div id="modal-edit-task-<?php echo $row->id ?>" class="hidden fixed inset-0 top-0 overflow-y-auto w-full h-screen bg-dark px-2 py-5 bg-opacity-70">
		<form class="flex flex-col w-full mx-auto md:max-w-2xl bg-white shadow rounded-lg" action="" method="post">
			<!-- modal title -->
			<div class="flex justify-between py-2 px-3 border-b md:px-6">
				<h2 class="text-dark text-lg font-bold text-center">
					Edit Task
				</h2>
				<button class="btn-close text-xl"><i class="fa-solid fa-cancel"></i></button>
			</div>

			<!-- start modal body -->
			<div class="flex flex-col w-full p-3 space-y-2">
				<!-- nombres apellidos row -->
				<input type="hidden" name="id_task" value="<?php echo $row->id ?>">
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="estimate" class="md:w-full">Estimate *</label>
						<input type="text" name="estimate" class="p-2 border outline-none rounded md:w-full" value="<?php echo $row->estimate ?>">
					</div>
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="importance" class="md:w-full">Importance *</label>
						<select name="importance" class="p-2 border outline-none rounded md:w-full">
							<option selected value="<?php echo $row->importance ?>"><?php echo $row->importance ?></option>
							
								<option value="Baja"> Baja</option>
								<option value="Media"> Media</option>
								<option value="Alta"> Alta</option>
							
							
						</select>
					</div>
				</div>

				
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="details" class="md:w-full">Details *</label>
						<input type="text" name="details" class="p-2 border outline-none rounded md:w-full" value="<?php echo $row->details ?>">
					</div>

					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="story_num" class="md:w-full">Story *</label>
						<select name="story_num" class="p-2 border outline-none rounded md:w-full">
							<option selected value="<?php echo $row->story_num ?>"> Story n° <?php echo $row->story_num ?></option>
							<?php foreach($data['stories'] as $row) : ?>
								<option value="<?php echo $row->story_num ?>"> Story n° <?php echo $row->story_num ?></option>
							<?php endforeach; ?>
							
						</select>
					</div>
				</div>


				<div class="flex flex-col items-center pt-5 space-y-4 text-white text-lg font-bold md:flex-row md:justify-around md:space-y-0">
					<button name="edit_task" type="submit" class="w-full p-3 rounded-xl shadow bg-ctaLight hover:bg-ctaDark md:w-56">Add Task</button>
				</div>

			</div>
			<!-- end modal body -->

		</form>
	</div>