@section('title', 'Modulo Personal | Registro')

@include('template.header')

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Datos Familiares</h1>
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
                            <h4 class="card-title">Datos Familiares</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('formFamily') }}" class="form-horizontal row">
                                @csrf
                                {{-- col-left --}}
                                <div class="col-12">
                                    <div class="form-group col-12 d-flex justify-content-between">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Hijo</label>
                                                <select
                                                    class="form-control select2 form-select select2-hidden-accessible"
                                                    data-placeholder="Si / No" tabindex="-1" aria-hidden="true"
                                                    id="hijos" name="hijos">
                                                    <option></option>
                                                    <option value="1">SI</option>
                                                    <option value="2">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex">
                                            <label class="form-label">Num Hijos (<b><i>Menores de 18 años o menor de 24 años si se encuentra estudiando</i></b>)</label>
                                            <div class="col-4">
                                                <input type="number" class="form-control" value="" name="num_hijos" id="num_hijos">
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
