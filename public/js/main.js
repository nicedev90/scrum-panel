window.addEventListener('DOMContentLoaded', () => {

	// modal register new client
	const modalStory = document.querySelector('#modal-story')

	const btnStory = document.querySelector('#btn-story')
	btnStory?.addEventListener('click', () => {
		modalStory.classList.toggle('hidden')
	})

	const modalTask = document.querySelector('#modal-task')

	const btnTask = document.querySelector('#btn-task')
	btnTask?.addEventListener('click', () => {
		modalTask.classList.toggle('hidden')
	})

	// const modalEditTask = document.querySelector('#modal-edit-task')

	const btnEditTask = document.querySelectorAll('.btn-edit-task')
	btnEditTask?.forEach( btn => {
		btn.addEventListener('click', (e) => {
			const num = e.target.parentElement.id
			const modalEditTask = document.querySelector('#modal-edit-task-'+num)
			modalEditTask.classList.toggle('hidden')
		})
	})

	const btnDeleteTask = document.querySelectorAll('.btn-delete-task')
	btnDeleteTask?.forEach( btn => {
		btn.addEventListener('click', (e) => {
			const num = e.target.parentElement.id
			console.log(num)
			const modalDeleteTask = document.querySelector('#modal-delete-task-'+num)
			modalDeleteTask.classList.toggle('hidden')
		})
	})

	// const allBtnClose = document.querySelectorAll('.btn-close')
	// allBtnClose.forEach( btn => {
	// 	btn.addEventListener('click', () => {
	// 	modalTask.classList.toggle('hidden')
	// 	})
	// })

})


const modalTask = document.querySelector('#modal-task')

window.addEventListener('click', (e) => {
	if (e.target == modalTask) {
		modalTask.classList.toggle('hidden')
	}
})

const modalStory = document.querySelector('#modal-story')

window.addEventListener('click', (e) => {
	if (e.target == modalStory) {
		modalStory.classList.toggle('hidden')
	}
})

// const modalEditTask = document.querySelector('#modal-edit-task')

// window.addEventListener('click', (e) => {
// 	if (e.target == modalEditTask) {
// 		modalEditTask.classList.toggle('hidden')
// 	}
// })