@extends('plantilla.principal')
@section('content')
 
 <br>
        <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">Lista de Contactos</h3>
        </div>
            <div class="card-body">
               
                <br><br>
                    <table id="tcategory" class="table table-striped table-bordered display nowrap" cellspacing="0" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Id</th>
                                <th>Numero</th>
                                <th>Tipo de Identificacion</th>
                                <th>Razon Social o nombre</th>
                                <th>Direccion</th>
                                <th>Correo Electronico</th>
                                <th>Celular</th>
                                <th>Telefono1</th>
                                <th>Telefono2</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                           
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->Ndato}}</td>
                                    <td>{{$cliente->TipoIdentificacion}}</td>
                                    <td>{{$cliente->Rsocial}}</td>
                                    <td>{{$cliente->DireccionC}}</td>
                                    <td>{{$cliente->correo}}</td>
                                    <td>{{$cliente->celular}}</td>
                                    <td>{{$cliente->telefono1}}</td>
                                    <td>{{$cliente->telefono2}}</td>
                                    <td>

                                        <form method="POST" action="{{ route('cliente.destroy',$cliente->id) }}" class="form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editCliente{{$cliente->id}}"><i class="fas fa-user-edit"></i></button>
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </form>
                                        <!--modal-->
                                        @include('Contactos.EditC')
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        
                    </table>
@endsection