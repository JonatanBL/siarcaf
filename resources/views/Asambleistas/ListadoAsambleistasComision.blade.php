@extends('layouts.app')

@section("content")
    <div class="box box-danger ">
        <div class="box-header with-border">
            <h3 class="box-title">Listado de Asambleistas por Comision</h3>
        </div>
        <div class="box-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($comisiones as $comision)
                    @php $i = 1 @endphp

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="comision{{$comision->id}}">
                            <h4 class="panel-title">
                                <!-- used the next html line to display the element opened by default -->
                            <!--
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$comision->id}}" aria-expanded="true" aria-controls="collapse{{$comision->id}}" class="text-capitalize">
                                    {{ $comision->nombre }}
                                    </a>
-->
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse{{$comision->id}}" aria-expanded="false"
                                   aria-controls="collapse{{$comision->id}}" class="text-capitalize">
                                    {{ $comision->nombre }}
                                </a>
                            </h4>
                        </div>
                        <!-- used the next html line to display the element opened by default -->
                    <!-- <div id="collapse{{$comision->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$comision->id}}"> -->
                        <div id="collapse{{$comision->id}}" class="panel-collapse collapse " role="tabpanel"
                             aria-labelledby="heading{{$comision->id}}">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th style="padding-left: 35px">Imagen</th>
                                            <th>Asambleista</th>
                                            <th>Sector</th>
                                            <th>Cargo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($comision->cargos()->count() > 0)
                                            @php $integrantes = false @endphp
                                            @foreach($cargos as $cargo)
                                                @if($comision->id == $cargo->comision->id && $cargo->activo == 1)
                                                    <tr>
                                                        <td style="vertical-align: middle">{{ $i }}</td>
                                                        <td>
                                                            <div class="center-block">
                                                                <img src="{{ asset('images/default-user.png') }}"
                                                                     class="img-responsives" width="70px"
                                                                     style="margin-left: 25px !important; "
                                                                     alt="User Image">
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle">{{ $cargo->asambleista->user->persona->primer_nombre . " " . $cargo->asambleista->user->persona->segundo_nombre . " " . $cargo->asambleista->user->persona->primer_apellido . " " . $cargo->asambleista->user->persona->segundo_apellido }}</td>
                                                        <td style="vertical-align: middle">{{ $cargo->asambleista->sector->nombre }}</td>
                                                        <td style="vertical-align: middle">{{ $cargo->cargo }}</td>
                                                    </tr>
                                                    @php $i++ @endphp
                                                    @php $integrantes = true @endphp
                                                @endif
                                            @endforeach
                                            @if($integrantes == false)
                                                <tr>
                                                    <td colspan="5" class="">Esta comision no cuenta con asambleistas
                                                    </td>
                                                </tr>
                                            @endif
                                        @else
                                            <tr>
                                                <td colspan="5" class="">Esta comision no cuenta con asambleistas
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

