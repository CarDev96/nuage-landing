<footer id="footer">
	<div class="container mx-auto text-white px-8">
		<div class="w-full flex flex-col md:flex-row xl:flex-row py-6 xl:ml-16 xs:hidden">
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">Nosotros</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="w-3/4 text-xs text-gray-1000 text-justify">
							NuagePro es una applicación aprobada en todo el mundo con 14 años de experiencia en informática y en las mejores prácticas comerciales.
						</p>
					</li>
				</ul>
			</div>
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">Quiero una demostración</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="w-3/4 text-xs text-gray-1000 text-justify">
							Llene el siguiente formulario y envíe su información de contacto, para poder agendar una demostración presencial o por videoconferencia, todos sus datos serán tratados conforme a nuestro aviso de privacidad vigente.
						</p>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<form method="POST" action="{{ route('send_demo') }}" class="w-full max-w-lg mx-auto">
						@csrf
							<div class="flex flex-wrap -mx-3 mb-4">
								<div class="w-3/4 md:w-48 lg:w-41 xl:w-41 px-3 mb-6 md:mb-0">
									<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Nombre" name="full_name">
								</div>
								<div class="w-3/4 md:w-48 lg:w-41 xl:w-41 px-3 mb-6 md:mb-0">
									<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Teléfono" name="phone">
								</div>
							</div>
							<div class="flex flex-wrap -mx-3 mb-2">
								<div class="w-3/4 md:w-48 lg:w-41 xl:w-41 px-3 mb-6 md:mb-0">
									<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Correo" name="email">
								</div>
								<div class="w-3/4 md:w-48 lg:w-41 xl:w-41 px-3 mb-6 md:mb-0">
									<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Ciudad" name="city">
								</div>
							</div>
							<div class="mb-6">
								<input type="hidden" name="subject" value="Solicitud de demostración">
							</div>
							<div class="flex items-center justify-between">
								<button class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-3/4">
									¡Solicitar!
								</button>
							</div>
						</form>
					</li>
				</ul>
			</div>
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">APÓYENOS</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="w-3/4 text-xs text-gray-1000 text-justify">
							Envíenos su opinión sobre NuagrePro.io, queremos mejorar nuestro software y brindarle un mejor servicio. ¡Su opinión es importante!
						</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="w-full flex flex-col md:flex-row py-6 xl:ml-16">
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">Legal</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Politicas de privacidad</p>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Terminos de servicio</p>
					</li>
				</ul>
			</div>
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">Ayuda</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Centro de ayuda</p>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Blog</p>
					</li>
				</ul>
			</div>
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">Información</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Sobre NLS</p>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Trabaja con nosotros</p>
					</li>
				</ul>
			</div>
			<div class="flex-1">
				<p class="uppercase md:mb-6 font-bold">Idioma</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">English</p>
					</li>
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<p class="text-xs text-gray-1000 text-justify">Español</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="w-full h-12 mt-2 text-right">
			<p class="text-sm">© 2012-2022 NETWORK LEVEL SYSTEMS . All rights reserved.</p>
		</div>
	</div>
</footer>
