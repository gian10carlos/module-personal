@section('title', 'Modulo Personal | Pago')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Planilla</h1>
                <div>

                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Planilla</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Clasificacion</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Num Empleado</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">RUC</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Nombre o Razon social</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Correo Electronico</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <div class="form-group">
                                        <div class="form-label">Asegurado Salud</div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    name="radios" value="option1" checked>
                                                <span class="custom-control-label">Si</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    name="radios" value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Monto Aportado</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <label class="col-md-3 form-label">BENEFICIOS</label>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Horas extras</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Bonificacion Voluntaria</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Asignacion Familiar</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Sistema de penciones</label>
                                    <div class="col-md-9">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    name="sis_pension" value="option1" checked>
                                                <span class="custom-control-label">ONP</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    name="sis_pension" value="option2">
                                                <span class="custom-control-label">AFP</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Banco</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Cuenta banco</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Estado Actual</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Responsable</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Generar informe</button>
            </div>

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->

@include('template.footer')
