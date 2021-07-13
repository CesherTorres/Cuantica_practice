@extends('plantilla.principal')

@section('title', 'Contacto - Nuevo')

@section('content')
<div class="container">
<div class="content-header">
    <div class="container-fluid">
     
        <!-- Main content -->
        <section class="content">
            <div class="form row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title">NUevo Contacto</h3>
                        </div>
                        <div class="card-body">    
                        <div class="pt-5">
        <div class="container border" style="background: url('/ImageDecorativa/fondo_cabecera.jpg') top left no-repeat;">
            <br>
            <img style="height: 40px; width: 40px; background-color: #EFEFEF;" class="card-img-top rounded-circle mx-auto d-block" src="" alt="">
            <br>
            <h1 class="text-center">NUEVO CLIENTE</h1>
            <br>
        </div>
        <form>
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

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Plazo de pago</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Vendedor</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Lista de Precios</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Número (RUC, DNI, Etc.)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    </div>

                    <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tipo de identificación</label>
                        <select class="form-select" aria-label="Default select example">
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
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dirección completa</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Celular</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Teléfono 1</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Teléfono 2</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card --> 
                </div>  

                

            </div> 
                    
        </section><!-- /.content -->
    </div><!-- /.container-fluid -->
</div><!-- /.content-header --> 


    
@endsection
