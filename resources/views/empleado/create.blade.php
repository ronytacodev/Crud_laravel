Formulario de creación de empleados

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form', ['modo' => 'Crear']);

</form>