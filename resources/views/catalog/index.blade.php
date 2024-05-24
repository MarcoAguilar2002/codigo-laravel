@extends('home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-sm-7 col-6">
            <h4 class="page-title">Catálogo</h4>
        </div>
        <div class="col-sm-3 col-6 text-right m-b-30">
            <a href="{{route('create')}}" class="btn btn-primary btn-rounded"><i class="bi bi-plus"></i> Agregar Película</a>
        </div>
    </div>
    
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        
        <div class="row row-cols-2">
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('assets/img/padrino.webp')}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">El Padrino (1972)</h5>
                          <p class="card-text">Sinopsis: La saga épica de la familia Corleone, liderada por Vito Corleone, un poderoso jefe mafioso en Nueva York. La película explora la lucha de poder dentro de la familia y la transición de liderazgo a su hijo Michael.</p>
                          <a class="btn btn-primary" href="catalog/show/12545" role="button">Detalles</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('assets/img/joker.webp')}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Joker (2019)</h5>
                          <p class="card-text">Sinopsis: Arthur Fleck, un comediante fracasado con problemas mentales, se convierte en el infame criminal conocido como el Joker después de ser marginado y rechazado por la sociedad.
                        </p>
                        <a class="btn btn-primary" href="catalog/show/1254545" role="button">Detalles</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('assets/img/star.webp')}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Star Wars: Una nueva esperanza (1977)</h5>
                          <p class="card-text">Sinopsis: Luke Skywalker se une a un grupo de rebeldes para destruir la Estrella de la Muerte y salvar a la galaxia del malvado Imperio Galáctico.
                        </p>
                        <a class="btn btn-primary" href="catalog/show/1254545" role="button">Detalles</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('assets/img/venga.webp')}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Los Vengadores (2012)</h5>
                          <p class="card-text">Sinopsis: Los superhéroes más poderosos de la Tierra deben unirse para detener a Loki y su ejército de alienígenas que intentan conquistar el mundo.
                        </p>
                          <a class="btn btn-primary" href="catalog/show/1254545" role="button">Detalles</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection