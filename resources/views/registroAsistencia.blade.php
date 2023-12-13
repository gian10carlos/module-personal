@section('title', 'Modulo Personal | Asistencia')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Registro de Asistencia</h1>
                <div>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->

            <div class="col-xl-12 col-md-12 d-flex justify-content-center">
                <form method="post" action="{{ route('registerAsistencia') }}" class="card col-4">
                    @csrf
                    <div class=" card-body">
                        <div class="d-flex justify-content-between">
                            <p>Fecha: {{ $date }}</p>
                            <p>Hora: {{ $time }}</p>
                        </div>
                        <input type="hidden" name="fechaAsistencia" id="fechaAsistencia" value="{{ $date }}">
                        <input type="hidden" name="horaAsistencia" id="horaAsistencia" value="{{ $time }}">
                        <div class="mb-3">
                            <label for="" class="form-label">Tipo Asistencia</label>
                            <select class="form-select form-select-lg" name="typeAsistencia" id="typeAsistencia"
                                required>
                                <option selected>Seleccione ----</option>
                                <option value="1">Entrada</option>
                                <option value="2">Salida</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">DNI</label>
                            <input type="text" name="dniAsistencia" id="dniAsistencia" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Registrar Asistencia</button>
                </form>
            </div>
            <!-- End Row-->

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
            title: 'Operación exitosa desde personal',
            text: "{{ Session::get('success') }}",
            timer: 3000, // 3 segundos
            showConfirmButton: false
        }).then(function() {
            window.location.href = "{{ route('registerAsistencia') }}";
        });
    </script>
@endif

@include('template.footer')
