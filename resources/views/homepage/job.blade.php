<section class="border-b py-8 job bg-fixed" id="job">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-6xl font-light leading-tight text-center text-gray-800">
            ¿Buscas un empleo?
        </h1>
        <div class="w-full mb-4">
			<p class="w-full my-2 text-xl font-thin leading-tight text-center text-gray-800">
				Ahora que NuagePro llegó a Latinoamerica comenzamos a buscar personas emprendedoras <br>
				con la capacidad de administrar toda la zona geográfica en diferentes ciudades del mundo<br>
				¿Te atreves a este desafío?, Ingresa como ejecutivo de ventas y en 7 meses <br>
				conviértete en director regional.

			</p>
        </div>
        <div class="w-full flex flex-col flex-grow flex-shrink">
			<form method="POST" action="{{ route('send') }}" class="w-full max-w-lg mx-auto">
			@csrf
				@if (\Session::has('success'))
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>{{ \Session::get('success') }}</strong>
					</div>
				@endif
				<div class="flex flex-wrap -mx-3 mb-6">
					<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						<input class="block w-full text-gray-900 placeholder-gray-900 border rounded-full py-3 px-4 mb-3 leading-tight focus:outline-none" id="form-input" name="full_name" type="text" placeholder="Nombre">
					</div>
					<div class="w-full md:w-1/2 px-3">
						<input class="block w-full text-gray-900 placeholder-gray-900 border rounded-full py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="form-input" name="email" type="text" placeholder="Correo eléctronico">
					</div>
				</div>
				<div class="flex flex-wrap -mx-3 mb-6">
					<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						<input class="block w-full text-gray-900 placeholder-gray-900 border rounded-full py-3 px-4 mb-3 leading-tight focus:outline-none" id="form-input" type="text" name="age" placeholder="Edad">
					</div>
					<div class="w-full md:w-1/2 px-3">
						<input class="block w-full text-gray-900 placeholder-gray-900 border rounded-full py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="form-input" name="phone" type="text" placeholder="Teléfono">
					</div>
				</div>
				<div class="flex flex-wrap -mx-3 mb-6">
					<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						<select class="block w-full text-gray-900 placeholder-gray-900 border rounded-full py-3 px-4 mb-3 leading-tight focus:outline-none" id="form-input" name="employment">
							<option value="">--Puesto solicitante--</option>
							<option value="Vendedor (Comisionista)">Vendedor (Comisionista)</option>
							<option value="Vendedor sueldo + comision">Vendedor sueldo + comisión</option>
							<option value="Encuestador de campo">Encuestador de campo</option>
							<option value="Vendedor videoconferencia">Vendedor videoconferencia</option>
							<option value="Director regional">Director regional</option>
						</select>
					</div>
					<div class="w-full md:w-1/2 px-3">
						<input class="block w-full text-gray-900 placeholder-gray-900 border rounded-full py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="form-input" name="city" type="text" placeholder="Ciudad">
					</div>
					<div class="w-full md:w-1/2 px-3">
						<input type="hidden" name="subject" value="Postulación vacante representante de ventas">
					</div>
				</div>
				<div class="md:flex md:items-center">
					{{-- <div class="xl:w-49 md:w-40"></div> --}}
					<div class="w-full text-center">
						<button id="navAction" class="mx-auto h-8 lg:mx-0 hover:underline text-white text-small font-semibold border-sesion rounded mt-4 lg:mt-0 py-0 px-8 shadow">Enviar</button>
					</div>
				</div>
			</form>
        </div>
    </div>
</section>
