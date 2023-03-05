window.addEventListener('DOMContentLoaded', () => {
	const items = document.querySelectorAll('.item')
	items.forEach(item => {
		item.addEventListener('click', selectItem)
	})

	const btnPrint = document.querySelector('#btn-print')
	btnPrint.addEventListener('click', print)
})

const selectItem = (e) => {
	e.target.classList.toggle('bg-primaryDark')
	e.target.classList.toggle('bg-neutral')
	e.target.classList.toggle('text-white')

	// console.log(e.target)
	addItem(e)
}

const form = document.querySelector('#custom-form')
let total = document.querySelector('#total')

const addItem = (e) => {
	const it = e.target
	let costo = document.querySelector('#costo')

	let description = it.firstElementChild.innerText
	let estimate = it.lastElementChild.innerText

	let subtotal = (parseInt(estimate) * parseFloat(costo.value)).toFixed(2)

	// console.log(price)

	let lastItem = form.lastElementChild.id
	let item 
	// console.log(lastItem)

	if (!lastItem) {
		item = 1
	} else {
		item= +lastItem+1
	}

	const newItem = document.createElement('div')
	newItem.setAttribute('id',item)
	newItem.classList.add('flex','justify-between','border-b')

	const content = ` 
			<div class="w-16 text-center">
				<p>${item}</p>
			</div>

			<div class="w-full px-6">
				<p>${description}</p>
			</div>
			<div class="w-32 text-center">
				 <p>$ ${subtotal}</p>
			</div>



	 `
	newItem.innerHTML = content

	form.append(newItem)

	
	let dia = document.querySelector('#dia')
	let totalHoras = document.querySelector('#total_horas')
	let totalDias = document.querySelector('#total_dias')
	let totalSemanas = document.querySelector('#total_semanas')
	let cotizacion = document.querySelector('#total_cotizacion')

	totalHoras.value = parseInt(totalHoras.value) +parseInt(estimate)

	totalDias.value = parseInt(totalHoras.value) / parseInt(dia.value)

	totalSemanas.value = (parseFloat(totalDias.value) /6).toFixed(2)

	let suma = parseInt(estimate)*parseFloat(costo.value).toFixed(2)

	total.value = (parseFloat(total.value) + parseFloat(suma)).toFixed(2)

	cotizacion.innerHTML = `$ ${total.value}`
	 

}



// let costo = document.querySelector('#costo').value
// const dia = document.querySelector('#dia').value
// const totasHoras = document.querySelector('#total_horas').value
// const totalDias = document.querySelector('#total_dias').value
// const totalSemanas = document.querySelector('#total_semanas').value

// const neto = document.querySelector('#neto').value

// const updateTotal = () => {
// 	// total = +total + price
// 	total.value = price
// 	console.log(total)
// }


const print = () => {
	const printContent = document.querySelector('#wrapper-form').innerHTML
	document.body.innerHTML = `
		<div class="flex flex-col w-full min-h-screen">
			${printContent}

		<div id="author" class="flex flex-col border-dark border-t mt-auto">
			<div class="flex justify-between p-4">
				<p><i class="fa-brands fa-github text-2xl"></i>/nicedev90</p>
				<p>Pag. 01</p>
			</div>
		</div>

	`
	window.print()
	location.href = 'http://192.168.8.100/scrum-panel/usuarios/calcular'
}

