@include('/components/header')

<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <div class="">
                    <h2>Beauty Shop</h2>
                    <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
                        Teléfono: +57 334 5678901
                    </p>
                </div>
            </div>
            <div class="col-7">
                <form class="form" id="formularioContactanos" method="POST" action="/contactanos/guardar-datos">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control" />
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname">Apellido</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="document">Documento</label>
                                <input type="number" id="document" name="document" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" id="email" name="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="number" id="phone" name="phone" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Asunto</label>
                                <input type="text" id="subject" name="subject" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>


@push('scripts')
    @vite('resources/js/contactanos.js')
@endpush

@include('/components/footer')
