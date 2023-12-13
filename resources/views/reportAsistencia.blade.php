@section('title', 'Modulo Personal | Asistencia')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Asistencia</h1>
                <div>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <form method="post" action="" class="card">
                        <div class=" card-body">
                            <div class="form-group">
                                <label for="" class="form-label">Cargar Registro</label>
                                <input class="form-control form-control-lg" type="file" accept=".pdf, .txt">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-1 m-3">Cargar</button>
                    </form>
                </div>
            </div>
            <!-- End Row-->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabla</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="file-datatable"
                                    class="table table-bordered text-nowrap key-buttons border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">DNI</th>
                                            <th class="border-bottom-0">Fecha inicio</th>
                                            <th class="border-bottom-0">Hora inicio</th>
                                            <th class="border-bottom-0">Fecha salida</th>
                                            <th class="border-bottom-0">Hora salida</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataReportPerson as $asistencia)
                                            <tr>
                                                <td>{{ $asistencia->DNI_PERSON }}</td>
                                                <td>{{ $asistencia->FECHA_ENTRADA }}</td>
                                                <td>{{ $asistencia->HORA_ENTRADA }}</td>
                                                <td>{{ $asistencia->FECHA_SALIDA }}</td>
                                                <td>{{ $asistencia->HORA_SALIDA }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 p-5">
                            <button class="btn btn-danger mt-5">Vaciar tabla</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->

@include('template.footer')
