@extends('home')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card" style="width: 50%;">
        <h1 class="text-center pt-3">Detalles Película</h1>
        <h4 class="text-center pt-3">{{$id}}</h1>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTitle" value="{{$nombre}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSynopsis" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputSynopsis" aria-label="With textarea" value="{{$sinopsis}}">></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Seleccione la imagen</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-danger me-2" onclick="history.back()">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection