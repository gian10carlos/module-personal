@section('title', 'Modulo Personal | Report Personal')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Reporte Personal</h1>
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
                            <h3 class="card-title">File Export</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="file-datatable"
                                    class="table table-bordered text-nowrap key-buttons border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">NOMBRE</th>
                                            <th class="border-bottom-0">DNI</th>
                                            <th class="border-bottom-0">TELEFONO</th>
                                            <th class="border-bottom-0">AREA</th>
                                            <th class="border-bottom-0">CARGO</th>
                                            <th class="border-bottom-0">ENTRADA</th>
                                            <th class="border-bottom-0">ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataPerson as $dato)
                                            <tr>
                                                <td>{{ $dato->NOMBRE }}</td>
                                                <td>{{ $dato->DNI }}</td>
                                                <td>{{ $dato->TELEFONO }}</td>
                                                <td>{{ $dato->AREA }}</td>
                                                <td>{{ $dato->CARGO }}</td>
                                                <td>{{ $dato->HORA_ENTRADA }}</td>

                                                <td>
                                                    <button type="button" class="btn btn-success"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        data-bs-idPer="{{ $dato->ID_PERSON }}"
                                                        data-bs-idCon="{{ $dato->ID_CONTRATO }}"
                                                        data-bs-nombre="{{ $dato->NOMBRE }}"
                                                        data-bs-telefono="{{ $dato->TELEFONO }}"
                                                        data-bs-id_area="{{ $dato->AREA }}"
                                                        data-bs-id_cargo="{{ $dato->CARGO }}"
                                                        data-bs-hora_entr="{{ $dato->HORA_ENTRADA }}"><i
                                                            class="bi bi-pencil"></i></button>

                                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updateDataPerson') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" id="recipient-person-id" name="recipient-person-id">
                    <input type="hidden" id="recipient-contrato-id" name="recipient-contrato-id">

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="recipient-name" name="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-telefono" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="recipient-telefono" name="recipient-telefono">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-area" class="col-form-label">Area:</label>
                        <input type="text" class="form-control" id="recipient-area" name="recipient-area">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-cargo" class="col-form-label">Cargo:</label>
                        <input type="text" class="form-control" id="recipient-cargo" name="recipient-cargo">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-hora-entrada" class="col-form-label">Hora:</label>
                        <input type="text" class="form-control" id="recipient-hora-entrada"
                            name="recipient-hora-entrada">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../js/modal_report_person.js"></script>

@include('template.footer')
