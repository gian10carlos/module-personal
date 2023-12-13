@section('title', 'Modulo Personal | Registro')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Datos Pago</h1>
                <div>
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Datos Pago</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('create') }}" class="form-horizontal row">
                                @csrf
                                {{-- col-left --}}

                                <div class="col-12">
                                    <div class="row col-5 mb-4">
                                        <label class="col-md-3 form-label">Salario</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" placeholder="$" value=""
                                                name="salario" id="salario">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="card-pay">
                                            <ul class="tabs-menu nav">
                                                <li class=""><a href="#tab20" class="payment-icon active"
                                                        data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path
                                                                d="M19.5,5h-15C3.119812,5.0012817,2.0012817,6.119812,2,7.5v10c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-10C21.9987183,6.119812,20.880188,5.0012817,19.5,5z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V11h18V17.5z M21,10H3V7.5C3.0009155,6.671936,3.671936,6.0009155,4.5,6h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V10z M6.5,15h4c0.276123,0,0.5-0.223877,0.5-0.5S10.776123,14,10.5,14h-4C6.223877,14,6,14.223877,6,14.5S6.223877,15,6.5,15z">
                                                            </path>
                                                        </svg> Credit Card</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="tab20">
                                                    <div class="form-group">
                                                        <label class="form-label">Nombre Titular Tarjeta</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Nombre Titular Tarjeta" name="nom_titu_tarj"
                                                            id="nom_titu_tarj">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Numero Tarjeta</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero Tarjeta" name="num_tarj"
                                                                id="num_tarj">
                                                            <span class="input-group-text input-text-color">
                                                                <i class="fa fa-cc-visa text-muted"></i> &nbsp; <i
                                                                    class="fa fa-cc-amex text-muted"></i> &nbsp;
                                                                <i class="fa fa-cc-mastercard text-muted"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Expiracion</label>
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control"
                                                                        placeholder="MM" name="expiracion"
                                                                        id="expiracion">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 d-flex p-5">
                                    <div class="col-6">
                                        <a href="{{ route('familyData') }}" class="btn btn-success"><i
                                                class="mx-2 bi bi-chevron-double-left"></i> Volver</a>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->

@if (Session::has('message'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "{{ Session::get('message') }}"
        });
    </script>
@endif

@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Operación exitosaqqq',
            text: "{{ Session::get('success') }}",
            timer: 3000, // 3 segundos
            showConfirmButton: false
        }).then(function () {
            window.location.href = "{{ route('reportPersonal') }}";
        });
    </script>
@endif



@include('template.footer')
