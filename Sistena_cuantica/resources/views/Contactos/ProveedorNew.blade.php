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
                    <h3 class="card-title">Nuevo Contacto</h3>
                </div>
                <div class="card-body">    
                    <div class="pt-5">
                        <div class="container border" style="background: url('/ImageDecorativa/fondo_cabecera.jpg') top left no-repeat;">
                            <br>
                            <img style="height: 80px; width: 80px; background-color: #EFEFEF;" class="card-img-top rounded-circle mx-auto d-block" src="" alt="">
                            <br>
                            <!--<h1 class="text-center">NUEVO CLIENTE</h1>
                            <br>-->
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
                                <div align="center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                <br>
                            </div>
                            @include('/Contactos/ModalC')
                        </form>  
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card --> 
    </div>                     
</section><!-- /.content -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header --> 
</div>

    
@endsection
