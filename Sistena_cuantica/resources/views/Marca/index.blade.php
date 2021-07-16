@extends('plantilla.principal')

@section('title', 'Marca - Nuevo')

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
                    <h3 class="card-title">Nueva Marca</h3>
                </div>
                <div class="card-body">
                    <div class="pt-5">          
                        <div class="container">  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Ingresa la marca</label>
                                                <input type="text" name="NumeroD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td>sss</td>
                                                    <td>ss</td>
                                                    <td>sss</td>
                                                    </tr>
                                                </tbody>
                                            <table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="ima">
                                <img src="/ImageDecorativa/marcas.png" style="width: 300px; height:300px">
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection