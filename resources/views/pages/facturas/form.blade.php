<div class="row">
    <div class="col-sm-12">
        <div class="widget-box widget-color-green" id="widget-box-3">
            <div class="widget-main">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class=""><b>Referencia Aviomar</b></label>
                                    <div>
                                        <input type="text" class="col-sm-8 input-sm" placeholder="" id="cod" name="cod"
                                            required>
                                        <label class="col-sm-1"><b>-</b></label>
                                        <input type="text" class="col-sm-2 input-sm pull-right" placeholder="" id="cod"
                                            name="cod" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class=""><b>Factura Provisional</b></label>
                                    <input type="text" class="form-control input-sm" placeholder="" id="rs" name="es"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label><b>Anexo Factura SUNO</b></label>
                                    <input type="text" class="form-control input-sm" placeholder="" id="telefono"
                                        name="telefono" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label><b>Tipo de Factura</b></label>
                                    <select class="form-control input-sm" style="width: 100%;" id="pais_id"
                                        name="pais_id" required>
                                        <option value="">--Seleccione--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label><b>Plazo</b></label>
                                    <select class="form-control input-sm" style="width: 100%;" id="pais_id"
                                        name="pais_id" required>
                                        <option value="">--Seleccione--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label><b>Fecha</b></label>
                                    <input type="date" id="fecha" name="fecha" class="form-control center input-sm"
                                        placeholder="dd/mm/yyyy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="green smaller lighter"><b>Datos del Agente</b></h4>
                            <div class="well">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="green"><b>Agente: </b></label>
                                        <label class=""><b></b></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="green"><b>Identificacion: </b></label>
                                        <label class=""><b></b></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="green"><b>Cliente: </b></label>
                                        <label class=""><b></b></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="green"><b>Destino: </b></label>
                                        <label class=""><b></b></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9 widget-container-col" id="widget-container-col-3">
        <div class="widget-box widget-color-green" id="widget-box-3">
            <div class="widget-header widget-header-small">
                <h6 class="widget-title">
                    Conceptos F.P.
                </h6>
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
                            <div class="col-sm-4">
                                <label><b>Concepto</b></label>
                                <select class="form-control input-sm" style="width: 100%;" id="agente_id_c"
                                    name="agente_id_c" required>
                                    <option value="">--Seleccione--</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label><b>Detalle</b></label>
                                <input type="text" class="form-control input-sm" placeholder="" id="cod" name="cod"
                                    required>
                            </div>
                            <div class="col-sm-4">
                                <label><b>Valor</b></label>
                                <div>
                                    <input type="text" class="col-sm-9 input-sm" placeholder="" id="cod" name="cod"
                                        required>
                                    <button type="submit" class="btn btn-xs btn-success btn-round pull-right">
                                        <i class="ace-icon fa fa-plus bigger-110 icon-only"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="simple-table" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="70%">Concepto</th>
                                            <th width="20%">Valor</th>
                                            <th width="9%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Customs</td>
                                            <td class='alnright'>$1000</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="ace-icon fa fa-edit bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-minus bigger-130"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Destination Charges</td>
                                            <td class='alnright'>$3000</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="ace-icon fa fa-edit bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-minus bigger-130"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>THC</td>
                                            <td class='alnright'>$500</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="ace-icon fa fa-edit bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-minus bigger-130"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="green bg-warning">
                                        <tr>
                                            <th class='alnright'>Total</th>
                                            <th class='alnright'>$4,500</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3 widget-container-col" id="widget-container-col-3">
        <div class="widget-box widget-color-green" id="widget-box-3">
            <div class="widget-header widget-header-small">
                <h6 class="widget-title">
                    Facturas de la Referencia
                </h6>
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
                            <div class="col-xs-12">
                                <table id="simple-table" class="table  table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>F.P.</th>
                                            <th>Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>41.60.667-00</td>
                                            <td class='alnright'>$4.500</td>
                                        </tr>
                                        <tr>
                                            <td>41.60.667-01</td>
                                            <td class='alnright'>$3.500</td>
                                        </tr>
                                        <tr>
                                            <td>41.60.667-02</td>
                                            <td class='alnright'>$600</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="green bg-warning">
                                        <tr>
                                            <th class='alnright'>Total</th>
                                            <th class='alnright'>$8,600</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.span -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
