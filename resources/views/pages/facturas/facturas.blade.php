@extends("theme.$theme.layout")
@section('titulo')
    Facturas | True-Fact
@endsection

@if (Auth::check())
    @section('styles')
        <link href="{{ asset('assets/js/jquery-nestable/jquery.nestable.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset("assets/$theme/css/ace.css") }}" class="ace-main-stylesheet"
            id="main-ace-style" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .table {
                margin-top: 4px;
                margin-bottom: 0px;
            }

            .btn-xs,
            .btn-group-xs>.btn {
                width: 30px;
            }

            .alnright {
                text-align: right;
            }

            .well {
                margin-bottom: 0px;
            }

        </style>
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
                        <h3 class="widget-title">
                            <strong>Crear Factura</strong>
                            
                        </h3>
                        <div class="widget-toolbar">

                            <a href="#" data-action="collapse">
                                <i class="ace-icon fa fa-minus" data-icon-show="fa-plus" data-icon-hide="fa-minus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-11">
                                        @include('pages.facturas.form')
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
                        <h3 class="widget-title">
                            Facturas (Proformas)
                        </h3>
                        <div class="widget-toolbar">

                            <a href="#" data-action="collapse">
                                <i class="ace-icon fa fa-minus" data-icon-show="fa-plus" data-icon-hide="fa-minus"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /section:custom/widget-box.options.collapsed -->
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
