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
                        <form method="post" action="/cliente">
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
                                            <input type="text" name="NumeroD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tipo de identificación</label>
                                            <select id="select" onChange="mostrar(this.value)" type="text" name="TipoI" class="form-select" aria-label="Default select example">
                                                <option value="1"></option>
                                                <!--vue es un objeto y con el . damos a entender que experience(exp) es una propiedad de ese objeto-->
                                                <option value="2">RUC - Registro Unico de Contribuyente</option>
                                                <option value="3">DNI - Documento Nacional de Identidad</option>
                                                <option value="4">CE - Carnet de Extranjeria</option>
                                                <option value="5">PP - Pasaporte</option>
                                                <option value="6">CDI - Cedula Diplomatica de Identidad</option>
                                            </select>
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Razón social o nombre completo </label>
                                            <input type="text" name="razonS" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="mostrarDD" style="display: none;">
                                    <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Dirección Fiscal</label>
                                        <input type="text" name="direccionF" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Distrito/provincia/Departamento</label>
                                        <input type="text" name="distritoP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Urbanizacion</label>
                                        <input type="text" name="Urbanizacion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Ubigeo INEI</label>
                                            <select type="text" name="TipoI" class="form-select" aria-label="Default select example">
                                                <option value="1"></option>
                                                <!--vue es un objeto y con el . damos a entender que experience(exp) es una propiedad de ese objeto-->
                                                <option value="2">001</option>
                                                <option value="3">002</option>
                                                <option value="4">003</option>
                                            </select>
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="OcultarD">
                                    <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Dirección completa</label>
                                        <input type="text" name="direccionC" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row" id="OcultarP" style="display: none;">
                                    <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Pais</label>
                                        <input type="text" name="PaisCP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Celular</label>
                                                <input type="text" name="celular" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Teléfono 1</label>
                                                <input type="text" name="Telefono1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Teléfono 2</label>
                                                <input type="text" name="Telefono2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
{{-- <script>
$(document).ready(function(){ 
   $('#alternar-respuesta-ej2').on('click',function(){
      $('#respuesta-ej2').toggle('slow');
   });
});
</script> --}}
{{-- <script>
    function toggle() {
        var cont = document.getElementById('cont');
        
        if ((cont.style.display == 'block')) {
            cont.style.display = 'none';
        }
        else {
            cont.style.display = 'block';
        }
    }
</script> --}}
<script>
    function mostrar(id) {
    if (id == "1") {
        $("#mostrarDD").hide();
        $("#OcultarD").show();
        $("#OcultarP").hide();
    }
    if (id == "2") {
        $("#mostrarDD").show();
        $("#OcultarD").hide();
    }
    if (id == "4") {
        $("#OcultarD").show();
        $("#OcultarP").show();
    }
    
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> --}}
@endsection
