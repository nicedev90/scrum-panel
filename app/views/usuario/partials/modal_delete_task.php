	<!-- modal section -->
	<div id="modal-delete-task-<?php echo $row->id ?>" class="hidden fixed inset-0 top-0 overflow-y-auto w-full h-screen bg-dark px-2 py-5 bg-opacity-70">
		<form class="flex flex-col w-full mx-auto md:max-w-2xl bg-white shadow rounded-lg" action="" method="post">
			<!-- modal title -->
			<div class="flex justify-between py-2 px-3 border-b md:px-6">
				<input type="hidden" name="id_task" value="<?php echo $row->id ?>">
				<h2 class="text-dark text-lg font-bold text-center">
					SEGURO QUE DESEA ELIMINAR : 
					<?php echo $row->details ?>
				</h2>
				<button class="btn-close text-xl"><i class="fa-solid fa-cancel"></i></button>
			</div>

			<div class="flex flex-col items-center pt-5 space-y-4 text-white text-lg font-bold md:flex-row md:justify-around md:space-y-0">
				<button name="delete_task" type="submit" class="w-full p-3 rounded-xl shadow bg-ctaLight hover:bg-ctaDark md:w-56">Eliminar</button>
			</div>


		</form>
	</div>