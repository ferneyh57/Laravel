@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif

<a href="{{url('/empleados/create')}}">Nuevo</a>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
           <!-- <th>Direccion</th>
            <th>Telefono</th>-->
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Email}}</td>
            <!--<td>{{$empleado->Direccion}}</td>
            <td>{{$empleado->Telefono}}</td>-->
           <td>
           <a href="{{url('/empleados/'.$empleado->id.'/edit')}}">

           Editar</a>
           
            / 
           <form method="POST" action="{{url('/empleados/'.$empleado->id)}}">
           @csrf
           @method('DELETE')  
           
           <button type="submit" onclick="return confirm('Borrar?')">Borrar</button>
           </form>
           </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$empleados->links()}}
