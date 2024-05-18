@include('/components/header')
@push('styles')

@endpush
<div class="container text-center mt-5">
    <div class="row align-items-start">
        <div class="col">
            <img src="{{asset('images/corporal.png')}}" class="card-img-top resaltar" alt="...">
            <p><b>Cuidado corporal</b> </p>
            <p>Con nuestros productos cuidaras tu cuerpo y ayudaras a su embellecimiento y protección</p>
        </div>

        <div class="col">
            <img src="{{asset('images/capilar.png')}}" class="card-img-top resaltar" alt="...">
            <p><b>Cuidado Capilar</b> </p>
            <p>Con nuestros productos vas a cuidar, proteger y mantener tu cabello hermoso y sano</p>

        </div>
        <div class="col">
            <img src="{{asset('images/cosmetico.png')}}" class="card-img-top resaltar" alt="...">
            <p><b>Cosmeticos</b> </p>
            <p> Con nuestros productos podras lograr ese look que siempre has querido</p>
        </div>
    </div>
</div>

@push('scripts')
    @vite('resources/js/categorias.js')
@endpush

@include('/components/footer')
