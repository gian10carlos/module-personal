@section('title', 'Modulo Personal | Registro')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Datos Laborales</h1>
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
                            <h4 class="card-title">Datos Laborales</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('formWork') }}" class="form-horizontal row">
                                @csrf
                                {{-- col-left --}}
                                <div class="col-5">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Cargo</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="Tipo..." tabindex="-1" aria-hidden="true"
                                            id="tipo_trabaj" name="tipo_trabaj">
                                            <option label="">
                                            </option>
                                            @foreach ($cargos as $cargo)
                                                <option value="{{ $cargo->id }}">
                                                    {{ $cargo->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label">Condicion Laboral</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="Condicion..." tabindex="-1" aria-hidden="true"
                                            id="cond_lab" name="cond_lab">
                                            <option label="">
                                            </option>
                                            <option value="1">PLAZO FIJO</option>
                                            <option value="2">TEMPORAL</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label">Categoria Remunerativa</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="Categoria..." tabindex="-1" aria-hidden="true"
                                            id="categ_remun" name="categ_remun">
                                            <option label="">
                                            </option>
                                            <option value="1">AUXILIAR</option>
                                            <option value="2">ADMINISTRATIVO</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label">Area</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="Ocupacion..." tabindex="-1" aria-hidden="true"
                                            id="ocupacion" name="ocupacion">
                                            <option label="">
                                            </option>
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}">
                                                    {{ $area->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label">Turno</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="turno..." tabindex="-1" aria-hidden="true" id="turno"
                                            name="turno">
                                            <option label="">
                                            </option>
                                            <option value="1">HORARIO NORMAL</option>
                                            <option value="2">HORARIO LIBRE</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label">Local Ubicacion</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="local ubic..." tabindex="-1" aria-hidden="true"
                                            id="local_ubic" name="local_ubic">
                                            <option label="">
                                            </option>
                                            <option value="1">SEDE CENTRAL</option>
                                            <option value="2">SEDE DISTRITAL</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <h3><b>Datos de la AFP y EPS</b></h3>
                                    <div class="form-group col-12">
                                        <label class="form-label">Regimen Laboral</label>
                                        <select class="form-control select2 select2-hidden-accessible"
                                            data-placeholder="Regimen Laboral --" tabindex="-1" aria-hidden="true"
                                            name="reg_lab" id="reg_lab">
                                            <option></option>
                                            <option value="CO">SPP INTEGRA</option>
                                            <option value="AZ">SPP NO INTEGRA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="form-label">SCTR Salud</label>
                                        <select class="form-control select2 select2-hidden-accessible"
                                            data-placeholder="SCTR Salud --" tabindex="-1" aria-hidden="true"
                                            name="sctr_salud" id="sctr_salud">
                                            <option></option>
                                            <option value="NINGUNO">NINGUNO</option>
                                            <option value="ESSALUD">ESSALUD</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="form-label">Nombre de la EPS</label>
                                        <select class="form-control select2 select2-hidden-accessible"
                                            data-placeholder="EPS ---" tabindex="-1" aria-hidden="true"
                                            name="nom_eps" id="nom_eps">
                                            <option></option>
                                            <option value="CO">RIMAC INTERNACIONAL S.A</option>
                                            <option value="AZ">ESSALUD INTERNACIONAL S.A</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- space --}}
                                <div class="col-1"></div>

                                {{-- col-right --}}
                                <div class="col-5">
                                    <div class="form-group col-12">
                                        <label class="form-label">Situacion de la EPS</label>
                                        <select class="form-control select2 select2-hidden-accessible"
                                            data-placeholder="Situacion de la EPS --" tabindex="-1"
                                            aria-hidden="true" name="sit_eps" id="sit_eps">
                                            <option></option>
                                            <option value="CO">ACTIVO O SUBSIDIADO(EPS/SERV)</option>
                                            <option value="AZ">NO ACTIVO</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <h3 class="mb-5"><b>Datos Contrato</b></h3>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Fecha Contrato</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" value=""
                                                    name="fech_cont" id="fech_cont">
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Fecha Inicio</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" value=""
                                                    name="fech_inic" id="fech_inic">
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Fecha Fin</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" value=""
                                                    name="fech_fin" id="fech_fin">
                                            </div>
                                        </div>
                                        <hr style="margin-top: 50px">
                                        <h3 class="mb-3"><b>Horario</b></h3>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Hora de Entrada (10 min tolerancia
                                                max)</label>
                                            <div class="col-md-9 d-flex">
                                                <input type="time" class="form-control m-2" id="hora_entr"
                                                    name="hora_entr">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Hora de Salida</label>
                                            <div class="col-md-9 d-flex">
                                                <input type="time" class="form-control m-2" id="hora_sali"
                                                    name="hora_sali">
                                            </div>
                                        </div>
                                        <hr style="margin-top: 50px">
                                        <h3 class="mb-3"><b>Lactancia</b></h3>
                                        <label
                                            class="custom-control custom-checkbox mx-3 d-flex col-12 justify-content-end">
                                            <div class="col-6">
                                                <input type="checkbox" class="custom-control-input" value="1" name="lactan"
                                                    id="lactan">
                                                <p class="custom-control-label mx-5">Recibe Lactancia</p>
                                            </div>
                                        </label>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Fecha Inicio</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" value=""
                                                    name="fech_inic_lact" id="fech_inic_lact">
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Fecha Fin</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" value=""
                                                    name="fech_fin_lact" id="fech_fin_lact">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 d-flex justify-content-between p-5">
                                    <a href="{{ route('personalData') }}" class="btn btn-success"><i
                                            class="mx-2 bi bi-chevron-double-left"></i> Volver</a>
                                    <button type="submit" class="btn btn-success">Siguiente<i
                                            class="mx-2 bi bi-chevron-double-right"></i></button>
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

@include('template.footer')
