@extends('layout.patron')
@section('titulo','Administración de empleados')
@section('contenido')
    <!--Código HTML puro para mostrar el listado empleados-->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Administración de empleados</h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>    
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Listado de empleados</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-keytable" class="table table-striped table-bordered" style="width_100%">
                                        <thead>
                                            <tr>
                                                <th>Nombre(s)</th>
                                                <th>Apellidos(s)</th>
                                                <th>Cédula</th>
                                                <th>Email</th>
                                                <th>Lugar Nacimiento</th>
                                                <th>Sexo</th>
                                                <th>Estado Civil</th>
                                                <th>Teléfono</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        _create_empleados_table
                                            @foreach($empleados as $empleado)
                                                <tr>
                                                    
                                                    <td>{{$empleado->nombres}}</td>
                                                    <td>{{$empleado->apellidos}}</td>
                                                    <td>{{$empleado->cedula}}</td>
                                                    <td>{{$empleado->email}}</td>
                                                    <td>{{$empleado->lugar_nacimiento}}</td>
                                                    <td>{{$empleado->sexo}}</td>
                                                    <td>{{$empleado->estado_civil}}</td>
                                                    <td>{{$empleado->telefono}}</td>

                                                    <!--Agregar columna para editar y eliminar registros-->
                                                    <td>
                                                        <div style="display:flex;">
                                                            <a href="{{url('empleados/'.$empleado->id.'/edit')}}" class='btn btn-secondary'><i class='fas fa-edit'></i></a>
                                                            <form action="{{url('empleados/'.$empleado->id)}}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class='btn btn-danger'><i class="fas fa-trash"></i></button>
                                                            </form>
                                                        </div>
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
            </div>
        </div>    
    </div>
@endsection    

 