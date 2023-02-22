<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		
      <div class="flex items-center w-full sm:w-1/1  mb-1  p-2 border-t border-solid border-slate-200 rounded-b">
	      <div class="flex  w-1/1 px-2 ">
	        <button class="bg-cta border text-white rounded-lg text-center px-5 py-3 text-xl
	          font-bold rounded-xl shadow mb  hover:bg-primaryLight"><a href="<?php echo URLROOT; ?>/usuarios/panel">Go to panel </a> </button>
	      </div>
      </div> 
		<!-- <button class="w-44 rounded-xl bg-cta border"><a href="<?php echo URLROOT; ?>/usuarios/panel">Go to panel </a> </button> -->
       
    
	<div class="px-3 mt-3"> 
		<div class="px-3 mt-3"> 
	      <div class="flex  w-full px-7 space-y mb-1">
	        <div class="p-3"> 
	          <div class="rounded-xl w-full px-2 mx-8 my-2 mt-2 ">      
	            <div class="rounded-xl  w-ful mt-3  mx-20  ">
	              <div class="px-3 mt-3">
	                 <div class="mx-2 my-2 mt-2">
		                 <div class="px-6">
		                    <p class="text-9xl ">Inversión Software</p>
		                  </div>                
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	    
	      <div class="flex  w-full px-7 space-y mb-1">
	        <div class="p-3"> 
	          <div class="rounded-xl w-full px-3 mx-8 my-2 mt-2 ">      
	            <div class="rounded-xl  w-ful mt-3  mx-20  ">
	              <div class="px-3 mt-3">
	                <div class="mx-2 my-2 mt-2">
	                  <div class="px-6">
	                     <p class="text-4xl italic md:not-italic">Cobro de pagar o cobrar un sitio web</p>
	                  </div>                
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
  
		    <div class="rounded-xl w-22 px-2 mx-8 my-2 mt-2 ">      
		      <div class="rounded-xl w-22 mt-3  mx-20  ">
			      <div class="grid grid-cols-2 gap-4 sm:w-1/2 m-2 p-2 rounded-xl w-22 mt-3 py-2 px-2 mx-20 my-2 mt-2 ">
			        <div class="flex flex-col mb-2  leading-normal bg-transparent cursor-pointer group perspective">
			         <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"> 
			            <div class="p-3">            
			              <div class="flex flex-col w-2/1  px-1 space-y mb-1">
			                <label for='' class="mb-3 text-xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Costo hora por trabajo</label>
			                  <div class="flex  items-center space-x-4 px-4 py-2">
				                  <i class="fa-solid fa-dollar-sign"></i>

			                      <input type='' class='shadow appearance-none rounded w-full  py-2 px-3 text-gray-700 mb-1 leading-tight rounded-lg bg-secondary p-3 text-md outline-none' id='' name=''  >
			                  </div>
			              </div>
			            </div>
			          </div>                    
			        </div>

				      <div class="flex flex-col justify-between leading-normal  cursor-pointer group perspective">
				        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
				          <div class="p-3">   
					          <div class="flex flex-col w-2/1 w-full px-1  space-y mb-1">
				              <label for='' class="mb-3 text-xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Horas de trabajo por día</label>
				              <div class="flex  items-center space-x-4 px-4 py-2">

				              <i class="fa-regular fa-clock"></i>
				              <input type='' class='shadow appearance-none rounded w-full  py-2 px-3 text-gray-700 mb-1 leading-tight rounded-lg bg-secondary p-3 text-md outline-none' id='' name=''  >
				              </div>
					          </div>
				          </div>
				        </div>                   
				      </div>
	          </div>
          </div>
        </div>
	      <div class="flex flex-col w-3/1 w-full px-14 ">
	        <div class="flex flex-col w-3/1 w-full px-14 space-y mb-1">
	          <div class="p-3">            
	            <div class="flex flex-col w-3/1 w-full px-14 space-y mb-1">
								<div class="px-3 mt-3">
								  <div class="m-2 p-2 rounded-xl md:mx-4 bg-white shadow"> 
							      <table class="sm:w-1/1 p-3 w-full text-sm text-left text-gray-500 dark:text-gray-400">
							        <thead class=" sm:w-1/1 m-4 p-2 text-xs text-gray-700 uppercase bg-neutralDark">
							            <tr>
							                <th scope="flex-col" class="px-2 py-4">
							                    Total horas
							                </th>
							                <th scope="flex-col" class="px-2 py-3">
							                    Total día
							                </th>
							                <th scope="flex-col" class="px-2 py-3">
							                    Total de semanas
							                </th>
							                <th scope="flex-col" class="px-2 py-3">
							                    Total de meses
							                </th>
							                <th scope="flex-col" class="px-2 py-3">
							                    $costo a pagar
							                </th>
							                <th scope="flex-col" class="px-2 py-3">
							                    $Neto por recibir
							                </th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
							                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							                    
							                </th>
							                <td class="px-6 py-4">
							                    
							                </td>
							                <td class="px-6 py-4">
							                    
							                </td>
							                <td class="px-6 py-4">
							                    
							                </td>
							                 <td class="px-6 py-4">
							                    
							                </td>
							                 <td class="px-6 py-4">
							                    
							                </td>
							            </tr>
							        </tbody>
		               </table>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="flex flex-col w-3/1 w-full px-14 space-y mb-1">
	          <div class="p-3">            
	            <div class="flex flex-col w-3/1 w-full px-14 space-y mb-1">
	              <div class="px-3 mt-3">
				          <div class="m-2 p-2 sm:w-1/1 rounded-xl md:mx-4 bg-neutral shadow"> 
				    	      <h3 class="mb-4 font-semibold text-gray-900 dark:text-white text-dark text-lg font-bold text-center">Seleccionar funcionalidades</h3>
								      <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Acceso utilizando cuentas de correo</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Envío de notificaciones push.</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Panel de configuración.</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>
							        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													  <div class="px-3 mt-3">
								              <div class="m-2 p-2 "> 
														    <div class="flex items-center pl-3">
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Acceso utilizando redes sociales.</span>
																	</label>
														    </div>
												      </div>
						                </div>
								          </li>
													<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
														<div class="px-3 mt-3">
									            <div class="m-2 p-2 ">
													      <div class="flex items-center pl-3">
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Funcionalidad de suscripciones</span>
																	</label>
													      </div>
													    </div>
													  </div>
													</li>
								
													<li class="w-full dark:border-gray-600">
														<div class="px-3 mt-3">
									            <div class="m-2 p-2 "> 
													      <div class="flex items-center pl-3">
													       <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Perfiles de usuario.</span>
																	</label>
													      </div>
													    </div>
													  </div>
													</li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Administración de usuarios.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Funcionalidad Offline.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												        <div class="flex items-center pl-3">
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Posibilidad de compartir en las redes</span>
																	</label>
												        </div>
												      </div>
												    </div>
												  </li>
											</ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicación Hibrida.</span>
																</label>
												      </div>
												    </div>
												  </div>
											  </li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
													    <div class="flex items-center pl-3">
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Geo-Localización.</span>
																	</label>
													    </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
													    <div class="flex items-center pl-3">
													       <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">sociales.</span>
																	</label>
													    </div>
												    </div>
												  </div>
												</li>
										  </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicación Nativa.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white  after:absolute  after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Integración con aplicaciones de terceros. (API)</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												       <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Realidad aumentada.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
											</ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sitio Web 5 a 8 páginas.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Integración con cámara y video.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
													    <div class="flex items-center pl-3">	
													       <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Reporte de errores del sistema</span>
																	</label>
													    </div>
												    </div>
												  </div>
											  </li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Brújula.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Integración con cámara y video.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												       <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Reportes de estadísticas.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white  after:absolute  after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Capacidad de moderar la actividad de la aplicación.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Integración con SMS.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
													    <div class="flex items-center pl-3">
													       <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">¿Necesita un icono?</span>
																	</label>
													    </div>
												    </div>
												  </div>
												</li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Carga de archivos.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Integración de calendario.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												       <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white  after:absolute  after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sincronización a través de distintos dispositivos.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Carrito de compras.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Integración de chat</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
							
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 ">
												      <div class="flex items-center pl-3">
												       <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-4 text-sm font-medium text-gray-900 dark:text-gray-300">Sistema de calificaciones de usuarios</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
						          </ul>
						          <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Certificados de seguridad.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Interfaz de usuario personalizada.</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sistema de retroalimentación.</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Cifrado de datos.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Texto libre de búsqueda.</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Sistema de tickets.</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>			
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Clasificación de contenido con TAGS.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Listas de tareas.</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white  after:absolute  after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-dark text-gray-900 dark:text-gray-300"></span><p>Sistema para administrar el contenido de la aplicación.</p>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Códigos de barra.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Mapas</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Soporte para comentarios</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>
											
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Códigos QR.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Multiples lenguajes</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Soporte para Open Graph</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>

											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Configuraciones de privacidad para usuarios.</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Música y audio.</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Necesita diseño de base de datos</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>
											
											<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
												        
												        <label class="relative inline-flex items-center cursor-pointer">
																	<input type="checkbox" value="" class="sr-only peer">
																	
																	<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																	<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Envio de correos electrónicos</span>
																</label>
												      </div>
												    </div>
												  </div>
												</li>
				
												<li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
												    <div class="flex items-center pl-3">
												    	<div class="px-3 mt-3">
								                <div class="m-2 p-2 "> 
													        <label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Pagos a través de la aplicación.</span>
																	</label>
												        </div>
												      </div>
										        </div>
										      </li>
												<li class="w-full dark:border-gray-600">
													<div class="px-3 mt-3">
								            <div class="m-2 p-2 "> 
												      <div class="flex items-center pl-3">
													    	<label class="relative inline-flex items-center cursor-pointer">
																		<input type="checkbox" value="" class="sr-only peer">
																		<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
																		<span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Funcionalidad para realizar reservas</span>
																</label>
												    	  
												      </div>
												    </div>
												  </div>
											  </li>
						          </ul>


											
										<!-- <div class="flex items-center w-full sm:w-1/1  mb-1 justify-end p-4 border-t border-solid border-slate-200 rounded-b">
					            <div class="flex justify-end w-1/1 px-6 ">
					              <button class="bg-secondary text-white rounded-lg text-center px-8 py-3 text-xl
					              font-bold rounded-xl shadow mb-1 bg-dark hover:bg-primaryLight">Calcular</button>
					            </div>
					          </div> -->
				     </div>
			     </div>
				  </div>
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
</body>
</html>