<nav id="header" class="w-full mx-auto z-30 top-0 text-black fixed">
	<div class="w-full container mx-auto flex flex-wrap items-center justify-between">
		<div class="ml-18 md:ml-48 flex items-center mx-auto w-1/2 xl:hidden lg:hidden">
			<a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl xl:w-3/4 md:w-3/4 w-full" href="{{ route('home') }}">
				<img src="/images/brand/nuage_logo.png" class="w-1/3 md:w-1/4 mx-auto">
			</a>
		</div>
		<div class="block lg:hidden pr-12">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
				</svg>
			</button>
		</div>
		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
			<ul class="list-reset lg:flex justify-end text-black items-center text-sm mx-auto xl:ml-84">
				<li class="mr-12">
					<a class="inline-block font-bold no-underline" href="#about-us">Nosotros</a>
				</li>
				<li class="mr-12">
					<a class="inline-block no-underline hover:text-red-700 hover:text-underline" href="#products">Producto</a>
				</li>
				<li class="mr-6 hidden md:block lg:block xl:block">
					<a class="inline-block" href="{{ route('home') }}">
						<img src="/images/brand/nuage_logo.png" class="center-block w-3/4">
					</a>
				</li>
				<li class="mr-12">
					<a class="inline-block no-underline hover:text-red-700 hover:text-underline" href="#job">Bolsa de trabajo</a>
				</li>
				<li class="mr-12">
					<a class="inline-block no-underline hover:text-red-700 hover:text-underline" href="#footer">Solicita una demo</a>
				</li>
			</ul>
			<button id="navAction" class="mx-auto h-8 lg:mx-0 hover:underline text-white text-small font-semibold border-sesion rounded mt-4 lg:mt-0 py-0 px-8 shadow" onclick="window.location='https://app.nuagepro.io'">Login</button>
		</div>
	</div>
</nav>
