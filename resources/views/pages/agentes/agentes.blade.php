@extends("theme.$theme.layout")
@section('titulo')
    Agentes | True-Fact
@endsection

@if (Auth::check())
    @section('styles')
        <link href="{{ asset('assets/js/jquery-nestable/jquery.nestable.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset("assets/$theme/css/ace.css") }}" class="ace-main-stylesheet"
            id="main-ace-style" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endsection

    @section('scriptsPlugins')
        <script src="{{ asset('assets/js/jquery-nestable/jquery.nestable.js') }}" type="text/javascript"></script>
    @endsection

    @section('scripts')

    @endsection
@endif

@section('contenido')
    <div class="main-content">
        <div class="widget-body">
            <div class="col-sm-12 widget-container-col" id="widget-container-col-3">
                <div class="widget-box widget-color-green" id="widget-box-3">
                    <!-- #section:custom/widget-box.options.collapsed -->
                    <div class="widget-header widget-header-small">
                        <h6 class="widget-title">
                            Crear Agente
                        </h6>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-11">
                                        @include('pages.agentes.form')
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="submit" class="col-sm-12 btn btn-app btn-xs btn-success pull-right">
                                            <i class="ace-icon fa fa-check"></i>
                                            <b>Crear</b>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 widget-container-col" id="widget-container-col-3">
                <div class="widget-box widget-color-green" id="widget-box-3">
                    <!-- #section:custom/widget-box.options.collapsed -->
                    <div class="widget-header widget-header-small">
                        <h6 class="widget-title">
                            Listado
                        </h6>
                    </div>

                    <!-- /section:custom/widget-box.options.collapsed -->
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="content">
                                <table id="tabla_paises" class="table text-nowrap table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">
                                                Identificacion
                                            </th>
                                            <th class="center">
                                                Razón Social
                                            </th>
                                            <th class="center">
                                                Correo
                                            </th>
                                            <th class="center">
                                                Direccion
                                            </th>
                                            <th class="center">
                                                Telefono
                                            </th>
                                            <th class="center">
                                                Ciudad
                                            </th>
                                            <th class="center">
                                                Pais
                                            </th>
                                            <th class="center">

                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
