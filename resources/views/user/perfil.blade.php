@extends('layouts.app')
@section('content')
    <section class="container">
        <!-- /columna de mensaje -->  
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                <div class="box box-widget biografia-user"> 
                    <!-- Nombre y fecha de entrada a la iglesia-->
                    <div class="biografia-user-header bg-yellow" >
                        <div class="biografia-caja">
                            <div class="biografia-caja-header">
                                <h3 class="biografia-user-username capitalize">
                                    <b>
                                        {{ Auth::user()->names }} 
                                    </b>
                                </h3>
                                <h5><i class="fas fa-user-friends"></i> {{ Auth::user()->rol_id }}   </h5> 
                            </div>
                        </div>
                    </div>
                    <div class="biografia-header-right pull-right"> 
                        <div class="btn-group">
                            <button type="button" class="btn  dropdown-toggle bg-yellow text-white" data-toggle="dropdown" style="background: #00a666 !important" >
                              Opciones
                            </button>
                            <ul class="dropdown-menu">                           
                                <li><a class="nav-link" href="../dado-baja/{{ Auth::user()->id }}">Modificar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="biografia-user-image">
                        <img src="{{ URL::to('/')}}/images/{{ Auth::user()->image}}" width="214" height="214" class="rounded-circle" alt="User Image" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel box box-primary">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <h4 class="text-left modal-title">
                            <i class="fa fa-user"></i> 
                            Información Personal
                        </h4>
                    </div>
                    <div class="panel-body">
                        <!-- Datos principales -->
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="page-header">
                                        Información Básica
                                    </h3>
                                    <table class="table-hover" width="100%">
                                        <tbody>
                                            <tr> 
                                                <td>
                                                    <b>Nombre</b>
                                                </td> 
                                                <td> 
                                                    {{ Auth::user()->names }} {{ Auth::user()->surnames }}
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td>
                                                    <b>Edad</b>
                                                </td> 
                                                <td> 
                                                    <span class="badge badge-primary">{{Auth::user()->age}} años</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Email</b>
                                                </td>
                                                <td>
                                                    {{Auth::user()->email}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Estado</b>
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">{{Auth::user()->state_id}} </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Linea</b>
                                                </td>
                                                <td>
                                                    Falta 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Marca</b>
                                                </td>
                                                <td>
                                                    Falta 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                        </div><!-- Fin div panel body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection