
<label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" 
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}">
    <br>

    <label for="Apellido">{{'Apellido'}}</label>
    <input type="text" name="Apellido" id="Apellido" 
    value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}">
    <br>

    <label for="Email">{{'Email'}}</label>
    <input type="email" name="Email" id="Email" 
    value="{{isset($empleado->Email)?$empleado->Email:''}}">
    <br>

   <!--  <label for="Direccion">{{'Direccion'}}</label>
    <input type="text" name="Direccion" id="Direccion" 
    value="{{isset($empleado->Direccion)?$empleado->Direccion:''}}">
    <br>

    <label for="Telefono">{{'Telefono'}}</label>
    <input type="number" name="Telefono" id="Telefono" 
    value="{{isset($empleado->Telefono)?$empleado->Telefono:''}}">
--><input  type="submit" value="{{$Modo=='crear' ? 'Agregar Empleado':'Modificar empleado'}}">
    <a href="{{url('/empleados')}}">Volver</a>