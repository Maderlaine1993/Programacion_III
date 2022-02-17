@extends('layouts.base')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <!--Mensaje de Guardar-->
            @if(session('SGuardar'))
                <div class="alert alert-success">
                    {{ session('SGuardar') }}
                </div>
            @endif

            <div class="card">
                <form action=" {{ route('students.save')}}" method="POST">
                    @csrf

                    <div class="card-header text-center"> Registrar Estudiante </div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2"> Nombre </label>
                            <input type="text" name="nombre" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2"> Direccion </label>
                            <input type="text" name="direccion" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2"> Telefono </label>
                            <input type="text" name="telefono" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2"> Correo </label>
                            <input type="text" name="correo" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2"> Jornada </label>
                            <input type="text" name="jornada" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2"> Grado </label>
                            <input type="text" name="grado" class="form-control col-md-9">
                        </div>

                        <div class="row form group">
                            <button type="submit" class="btn btn-primary col-md-9 offset-2"> Guardar Datos </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
