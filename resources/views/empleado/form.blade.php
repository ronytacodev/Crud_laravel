
<h1> {{ $modo }} empleado </h1>

<div class="form-group">
    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoPaterno"> ApellidoPaterno </label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoMaterno"> ApellidoMaterno </label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}" id="ApellidoMaterno">
    <br>
</div>

<label for="Correo"> Correo </label>
<input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
<br>

<label for="Foto"> Foto </label>
@if(isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>

<input type="submit" value="{{$modo}} datos">

<a href="{{url('empleado/')}}"> Regresar </a>

<br>

{{-- me quede en el min 2:11:35 --}}