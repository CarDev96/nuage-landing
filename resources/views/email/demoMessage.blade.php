<!--Left Col-->
<div class="w-full md:w-2/5 text-white xl:ml-48">
	<h2>Hola! Se ha registrado un nuevo prospecto</h2>
    <p>Estos son los datos del usuario que ha solicitado su demostración:</p> <br>
    <ul>
        <li>Nombre: {{ $data['full_name'] }}</li>
        <li>Teléfono: {{ $data['phone'] }}</li>
        <li>Correo: {{ $data['email'] }}</li>
        <li>Ciudad: {{ $data['city'] }}</li>
    </ul>
	<br>
    <p>Te recomendamos darle seguimiento lo más pronto posible</p>
</div>
<!--Right Col-->
