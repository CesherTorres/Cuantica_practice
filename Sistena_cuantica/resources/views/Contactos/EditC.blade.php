<div class="container">
    <div class="modal fade" id="editCliente{{$cliente->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                Nuevo Cliente
                <button class="close" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/cliente/{{$cliente->id}}">
                        @method('PUT')
                        @csrf

                        <div class="container border border-top-0 border-primary shadow">
                                <div align="center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Cliente
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Proveedor
                                        </label>
                                    </div>
                                </div>
                                <div class="dropdown ; text-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fas fa-arrow-up"></i>
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Número (RUC, DNI, Etc.)</label>
                                            <input type="text" name="NumeroD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->Ndato}}">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tipo de identificación</label>
                                        <select type="text" name="TipoI" class="form-select" aria-label="Default select example" value="{{$cliente->TipoIdentificacion}}">
                                            <option selected></option>
                                            <option value="1">RUC - Registro Unico de Contribuyente</option>
                                            <option value="2">DNI - Documento Nacional de Identidad</option>
                                            <option value="3">CE - Carnet de Extranjeria</option>
                                        </select>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Razón social o nombre completo </label>
                                        <input type="text" name="razonS" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->Rsocial}}">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Dirección completa</label>
                                        <input type="text" name="direccionC" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->DireccionC}}">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->correo}}">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Celular</label>
                                                <input type="text" name="celular" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->celular}}">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Teléfono 1</label>
                                                <input type="text" name="Telefono1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->telefono1}}">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Teléfono 2</label>
                                                <input type="text" name="Telefono2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$cliente->telefono2}}">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div align="center">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                                <br>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>