@section('title', 'Modulo Personal | Registro')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Registro Personal</h1>
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
                            <h4 class="card-title">Datos personales</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('formPersonal') }}" enctype="multipart/form-data"
                                class="form-horizontal row">
                                @csrf
                                {{-- col-left --}}
                                <div class="col-5">
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">DNI</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" placeholder="12345678"
                                                value="" name="dni" id="dni" required>
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Apellido Paterno</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="" name="apell_pat"
                                                id="apell_pat" required>
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Apellido Materno</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="" name="apell_mat"
                                                id="apell_mat" required>
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Nombres</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="" name="nombre"
                                                id="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group d-flex">
                                            <div class="form-label mx-5">Sexo</div>
                                            <div class="custom-controls-stacked d-flex">
                                                <label class="custom-control custom-radio m-3">
                                                    <input type="radio" class="custom-control-input" name="sexo"
                                                        id="sexo" value="MASCULINO">
                                                    <span class="custom-control-label">Masculino</span>
                                                </label>
                                                <label class="custom-control custom-radio m-3">
                                                    <input type="radio" class="custom-control-input" name="sexo"
                                                        id="sexo" value="FEMENINO">
                                                    <span class="custom-control-label">Femenino</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-4 mb-lg-0">
                                        <div class="form-group">
                                            <label class="form-label">Cargar Foto</label>
                                            <input name="foto" id="foto" class="form-control form-control-lg"
                                                type="file" accept=".jpg, .png, .jpeg">
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">RUC</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" placeholder="1234567890"
                                                value="" name="ruc" id="ruc">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Estado Civil</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="Estad. Civil" tabindex="-1" aria-hidden="true"
                                            id="est_civ" name="est_civ">
                                            <option></option>
                                            <option value="SOLTERO">Soltero</option>
                                            <option value="CASADO">Casado</option>
                                        </select>
                                    </div>
                                    <div class="col-12 d-flex">
                                        <div class="col-4">
                                            <div class="form-group m-0">
                                                <div class="form-label">Idiomas</div>
                                                <div class="custom-controls-stacked col-12">
                                                    <div class="col-md-6 d-flex">
                                                        <label class="custom-control custom-checkbox mx-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="idioma1" id="idioma1" value="1">
                                                            <span class="custom-control-label">Ingles</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mx-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="idioma2" id="idioma2" value="2">
                                                            <span class="custom-control-label">Español</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mx-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="idioma3" id="idioma3" value="3">
                                                            <span class="custom-control-label">Italiano</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6 d-flex">
                                                        <label class="custom-control custom-checkbox mx-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="idioma4" id="idioma4" value="4">
                                                            <span class="custom-control-label">Portugues</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mx-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="idioma5" id="idioma5" value="5">
                                                            <span class="custom-control-label">Frances</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mx-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="idioma6" id="idioma6" value="6">
                                                            <span class="custom-control-label">Alemán</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="form-label">Nivel Educativo</label>
                                        <select class="form-control select2 select2-hidden-accessible"
                                            data-placeholder="Grado academico --" tabindex="-1" aria-hidden="true"
                                            name="nivel_educ" id="nivel_educ">
                                            <option></option>
                                            <option value="SUPERIOR UNIVERSITARIO">SUPERIOR UNIVERSITARIO</option>
                                            <option value="SECUNDARIA COMUN">SECUNDARIA COMUN</option>
                                        </select>
                                    </div>

                                    <hr>
                                    <h3>Fecha y Lugar de nacimiento</h3>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Fecha nacimiento</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" value=""
                                                name="fech_nac" id="fech_nac" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Pais</label>
                                        <select class="form-control select2 form-select select2-hidden-accessible"
                                            data-placeholder="Nacionalidad" tabindex="-1" aria-hidden="true"
                                            id="nacionalidad" name="nacionalidad">
                                            <option label="Choose one">
                                            </option>
                                            <option value="1">PERU</option>
                                            <option value="2">ARGENTINA</option>
                                            <option value="3">COLOMBIA</option>
                                            <option value="4">CHILE</option>
                                            <option value="5">VENEZUELA</option>
                                        </select>
                                    </div>
                                    <div class="col-12 d-flex">
                                        <div class="form-group col-4">
                                            <label class="form-label">Region</label>
                                            <select class="form-control select2 form-select select2-hidden-accessible"
                                                data-placeholder="Region" tabindex="-1" aria-hidden="true"
                                                name="regi_nac" id="regi_nac">
                                                <option label=""></option>
                                                @foreach ($regiones as $region)
                                                    <option value="{{ $region->id_region }}">
                                                        {{ $region->region_nomb }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-4">
                                            <label class="form-label">Provincia</label>
                                            <select class="form-control select2 form-select select2-hidden-accessible"
                                                data-placeholder="Provincia" tabindex="-1" aria-hidden="true"
                                                name="prov_nac" id="prov_nac">
                                                <option label=""></option>
                                            </select>
                                        </div>

                                        <div class="form-group col-4">
                                            <label class="form-label">Distrito</label>
                                            <select class="form-control select2 form-select select2-hidden-accessible"
                                                data-placeholder="Distrito" tabindex="-1" aria-hidden="true"
                                                name="dist_nac" id="dist_nac">
                                                <option label=""></option>
                                                <input type="hidden" name="dist_nac_selected" id="dist_nac_selected"
                                                    value="">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- space --}}
                                <div class="col-1"></div>

                                {{-- col-right --}}
                                <div class="col-5">
                                    <h3>Datos de contacto</h3>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Telefono</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" value=""
                                                name="telefono" id="telefono" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label" for="email_lab">Correo Laboral</label>
                                        <div class="col-md-9">
                                            <input type="email" id="email_lab" name="email_lab"
                                                class="form-control" placeholder="email@example.c">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label" for="email_per">Correo Personal</label>
                                        <div class="col-md-9">
                                            <input type="email" id="email_per" name="email_per"
                                                class="form-control" placeholder="email@example.c">
                                        </div>
                                    </div>
                                    <hr>
                                    <h3>Datos de contacto emergencia</h3>
                                    <div class="row">
                                        <div class=" mb-4 ">
                                            <label class="col-md-3 form-label m-0 p-0">Telefono</label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" value=""
                                                    name="telefono_emergencia" id="telefono_emergencia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <h3>Discapacidad</h3>
                                        <div>
                                            <input type="checkbox" id="interes1" name="intereses[]" value="deporte">
                                            <label for="interes1">Discapacidad</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label">Entidad</label>
                                            <select class="form-control select2 form-select select2-hidden-accessible"
                                                tabindex="-1" data-placeholder="Entidad" aria-hidden="true"
                                                name="entidad">
                                                <option></option>
                                                <option value="1">MINISTERIO DE SALUD</option>
                                                <option value="2">ESSALUD</option>
                                                <option value="2">PRIVADO</option>
                                            </select>
                                        </div>
                                        <div class="row col-12">
                                            <div class="col-6 mb-4 d-flex">
                                                <label class="col-md-4 form-label m-0 p-0">N° Carnet Conadis</label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" value=""
                                                        name="num_conadis" id="num_conadis">
                                                </div>
                                            </div>
                                            <div class="col-6 mb-4 d-flex">
                                                <label class="col-md-3 form-label m-0 p-0">Fecha Emision</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" value=""
                                                        name="fech_emi_con" id="fech_emi_con">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mb-4 ">
                                            <label class="col-md-3 form-label m-0 p-0">Nombre Discapacidad</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value=""
                                                    name="discapacidadNombre" id="discapacidadNombre"
                                                    placeholder="Discapcidad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Grado</label>
                                            <select class="form-control select2 form-select select2-hidden-accessible"
                                                tabindex="-1" data-placeholder="Grado Discapacidad"
                                                aria-hidden="true" name="grad_discap" id="grad_discap">
                                                <option></option>
                                                <option value="1">PARCIAL</option>
                                                <option value="2">TOTAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <h3>Datos Domicilio</h3>
                                        <div class="col-12 d-flex">
                                            <div class="form-group col-4">
                                                <label class="form-label">Region</label>
                                                <select
                                                    class="form-control select2 form-select select2-hidden-accessible"
                                                    data-placeholder="Region" tabindex="-1" aria-hidden="true"
                                                    name="regi_dom" id="regi_dom">
                                                    <option label="Choose one">
                                                    </option>

                                                    @foreach ($regiones as $region)
                                                        <option value="{{ $region->id_region }}">
                                                            {{ $region->region_nomb }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <label class="form-label">Provincia</label>
                                                <select
                                                    class="form-control select2 form-select select2-hidden-accessible"
                                                    data-placeholder="Provincia" tabindex="-1" aria-hidden="true"
                                                    name="prov_dom" id="prov_dom">
                                                    <option label=""></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <label class="form-label">Distrito</label>
                                                <select
                                                    class="form-control select2 form-select select2-hidden-accessible"
                                                    data-placeholder="Distrito" tabindex="-1" aria-hidden="true"
                                                    name="dist_dom" id="dist_dom">
                                                    <option label=""></option>
                                                    <input type="hidden" name="dist_dom_selected"
                                                        id="dist_dom_selected" value="">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4 p-5">
                                            <label class="col-md-3 form-label">Direccion</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Jr #"
                                                    name="dire_dom" id="dire_dom" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 d-flex justify-content-end p-5">
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../js/location_nac.js"></script>
<script src="../js/location_dom.js"></script>

@include('template.footer')
