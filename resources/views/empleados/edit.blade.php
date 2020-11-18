seccion para editar empleados
<form action="{{url('/empleados/'.$empleado->id)}}"    method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')  
@include('empleados.form',['Modo'=>'editar'])

   
    
    </form>