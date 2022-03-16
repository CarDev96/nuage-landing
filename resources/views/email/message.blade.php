<!--Left Col-->
<div class="w-full md:w-2/5 text-white xl:ml-48">
	<h2>Hola! Se ha registrado un nuevo aspirante</h2>
    <p>Estos son los datos del usuario que ha realizado el registro:</p>
    <ul>
        <li>Nombre: {{ $data['full_name'] }}</li>
        <li>Correo: {{ $data['email'] }}</li>
    </ul>
    <p>Y esta es la información registrada:</p>
    <ul>
        <li>Edad: {{ $data['age'] }}</li>
        <li>Teléfono: <a href="https://api.whatsapp.com/send?phone={{ $data['phone'] }}&text=¡Hola! recibí tu cv por medio de nuestro sitio web."></a>{{ $data['phone'] }}</li>
        <li>Puesto solicitado: {{ $data['employment'] }}</li>
        <li>Ciudad: {{ $data['city'] }}</li>
    </ul>
</div>
<!--Right Col-->
