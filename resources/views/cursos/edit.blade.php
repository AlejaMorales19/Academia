@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')



<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <br>
        <h2>Formulario para la edicion del curso</h2>
        <div class="form-group">
            <label for="nombre">Edita el nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Edita la descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="duracion">Edita la duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue la imagen del curso</label> <br>
            <img style="height:100px; width:100px" src="{{ Storage::url($cursito->imagen )}}" class="card-img-top" alt".."><br><br>
            <input id="imagen" type="file" name="imagen" value="{{$cursito->imagen}}">
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>

</form>

@endsection

