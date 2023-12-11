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
                                            <th class="border-bottom-0">Nombre Apellido</th>
                                            <th class="border-bottom-0">DNI</th>
                                            <th class="border-bottom-0">Cargo</th>
                                            <th class="border-bottom-0">Oficina</th>
                                            <th class="border-bottom-0">Horas</th>
                                            <th class="border-bottom-0">Inicio</th>
                                            <th class="border-bottom-0">Num Cuenta</th>
                                            <th class="border-bottom-0">Salario</th>
                                            <th class="border-bottom-0">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 100; $i++)
                                            <tr>
                                                <td>{{ "Nombre" . rand(1, 50) . " Apellido" . rand(1, 50)}}</td>
                                                <td>{{ rand(10000000, 99999999) }}</td>
                                                <td>{{ "Cargo " . rand(8, 10) }}</td>
                                                <td>{{ "Oficina " . rand(8, 10) }}</td>
                                                <td>{{ rand(80, 200) . " horas" }}</td>
                                                <td>{{ rand(1, 15) . "/12/2023" }}</td>
                                                <td>{{ "CC" . rand(1000, 9999) . rand(1000, 9999) . rand(1000, 9999) . rand(1000, 9999) }}</td>
                                                <td>{{ "$" . (rand(30000, 80000) - rand(0, 5000)) }}</td>
                                                <td>
                                                    <button class="btn btn-danger" >Eliminar</button>
                                                    <button class="btn btn-success" >Editar</button>
                                                </td>
                                            </tr>
                                        @endfor
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
