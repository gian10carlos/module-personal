@section('title', 'Modulo Personal | Report Pago')
@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Reporte Pago</h1>
                <div>
                    <ol class="breadcrumb">
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="file-datatable"
                                    class="table table-bordered text-nowrap key-buttons border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">DNI</th>
                                            <th class="border-bottom-0">HORAS</th>
                                            <th class="border-bottom-0">FECHA</th>
                                            <th class="border-bottom-0">NUM CC</th>
                                            <th class="border-bottom-0">SALARIO</th>
                                            <th class="border-bottom-0">SALARIO FINAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($dataPay as $dato)
                                            <tr>
                                                <td>{{ $dato->DNI_PERSON }}</td>
                                                <td>{{ $dato->DIFERENCIA_HORAS }}</td>
                                                <td>{{ $dato->FECHA_ENTRADA }}</td>
                                                <td>{{ $dato->NUMERO_TARJETA }}</td>
                                                <td>{{ $dato->SALARIO }}</td>
                                                <td>{{ $dato->SALARIO_CALCULADO }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 p-4 d-flex justify-content-around">
                            <button class="btn btn-danger">Vaciar Tabla <i class="bi bi-trash"></i></button>
                            <button class="btn btn-warning">Generar Pago <i class="bi bi-cash-coin fs-6 p-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->

@include('template.footer')
