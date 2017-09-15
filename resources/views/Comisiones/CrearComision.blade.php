@extends('layouts.app')

@section("styles")
    <link rel="stylesheet" href="{{ asset('libs/adminLTE/plugins/icheck/skins/square/green.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/adminLTE/plugins/toogle/css/bootstrap-toggle.min.css') }}">
@endsection

@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Crear Comision</h3>
        </div>
        <div class="box-body">
            <form id="crearComision" method="post" action="#">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Nombre Comision</label>
                            <input type="text" class="form-control" placeholder="Ingrese un nombre" id="nombre"
                                   name="nombre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" id="crearComision" name="crearComision" class="btn btn-primary">Crear
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-solid box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Listado Comisiones</h3>
        </div>
        <div class="box-body">
            <table id="listadoComisiones"
                   class="table table-striped table-bordered table-condensed table-hover dataTable text-center">
                <thead class="text-bold">
                <tr>
                    <th>Nombre Documento</th>
                    <th>Permanente</th>
                    <th>Integrantes</th>
                    <th>Estado</th>
                    <th>Fecha Creacion</th>
                    <th>Fecha Ultimo Acceso</th>
                </tr>
                </thead>

                <tbody id="cuerpoTabla">
                <tr>
                    <td>Comision de Legislacion</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de Presupuesto</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de Convenios</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de arte y cultura</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de arte y cultura</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de arte y cultura</td>
                    <td><input type="checkbox" class="cajetin"></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision Temporal A</td>
                    <td></td>
                    <td>15</td>
                    <td><input type="checkbox" id="#t1" name="t1" class="toogle" data-size="mini" data-onstyle="success" data-offstyle="danger" checked></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de arte y cultura</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision de arte y cultura</td>
                    <td><input type="checkbox" class="cajetin" checked></td>
                    <td>15</td>
                    <td></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                <tr>
                    <td>Comision Temporal</td>
                    <td></td>
                    <td>15</td>
                    <td><input type="checkbox" id="#t1" name="t1" class="toogle" data-size="mini" data-onstyle="success" data-offstyle="danger"></td>
                    <td>01/01/2017</td>
                    <td>01/01/1999</td>
                </tr>
                </tbody>

            </table>

        </div>
    </div>

@endsection

@section("js")
    <!-- iCheck -->
    <script src="{{ asset('libs/adminLTE/plugins/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('libs/adminLTE/plugins/toogle/js/bootstrap-toggle.min.js') }}"></script>
@endsection

@section("scripts")
    <script type="text/javascript">

        $(function () {
            $('.cajetin').iCheck({
                checkboxClass: 'icheckbox_square-green',
                increaseArea: '20%' // optional
            });

            $('.toogle').bootstrapToggle({
                on: 'Activa',
                off: 'Inactiva'
            });
        });

    </script>
@endsection