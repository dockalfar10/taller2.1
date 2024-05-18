<!-- Realizado por:
Sthephani González Pineda
-->
@include('/components/header')
<!--Carrusel o Slider-->

<div id="beautyCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/tienda1.png') }}" class="d-block w-100" alt="Beauty Shop"
                style="width: 700px; height: 400px;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/cuidadoco.png') }}" class="d-block w-100" alt="Beauty Shop"
                style="width: 700px; height: 400px;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/cuidadoca.png') }}" class="d-block w-100" alt="Beauty Shop"
                style="width: 800px; height: 400px;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/cuidadofa.jpg') }}" class="d-block w-100" alt="Beauty Shop"
                style="width: 800px; height: 400px;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/maquillaje.png') }}" class="d-block w-100" alt="Beauty Shop"
                style="width: 800px; height: 400px;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container text-center mt-5">
    <div class="row">

        <div class="col">

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images\categorias.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CATEGORIAS</h5>
                    <p class="card-text">Encuentra tu rutina para sentirse natural y bella</p>
                    <a href="{{ route('inicio.categorias') }}" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>

        <div class="col order-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/productos2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CATALOGO</h5>
                    <p class="card-text">Tienes derecho a sentirte y verte bella</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>

        <div class="col order-1">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/clientes.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CLIENTES SATISFECHOS</h5>
                    <p class="card-text">Nuestra mejor recompensa es verte feliz con nuestro trabajo</p>
                    <a href="#" class="btn btn-primary">Comentarios</a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('/components/footer')
@push('scripts')
    @vite('resources/js/inicio.js')
@endpush
