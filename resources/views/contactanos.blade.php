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
                                <label for="inputName">Nombre</label>
                                <input type="text" id="inputName" class="form-control" />
                            </div>
                            <div class="col-sm-6">
                                <label for="inputLastName">Apellido</label>
                                <input type="text" id="inputLastName" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputDocumento">Documento</label>
                                <input type="number" id="inputDocumento" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">E-Mail</label>
                                <input type="email" id="inputEmail" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputTelefono">Teléfono</label>
                                <input type="number" id="inputTelefono" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputSubject">Asunto</label>
                                <input type="text" id="inputSubject" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Mensaje</label>
                        <textarea id="inputMessage" class="form-control" rows="4"></textarea>
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
