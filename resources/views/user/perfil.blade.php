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
                                        {{ Auth::user()->names }} {{ Auth::user()->surnames }}
                                    </b>
                                </h3>
                                <h5><i class="fa fa-user"></i> {{ Auth::user()->rol_id }}   </h5> 
                            </div>
                        </div>
                    </div>
                    <div class="biografia-header-right pull-right"> 
                        <div class="btn-group">
                            <button type="button" class="btn  dropdown-toggle bg-yellow" data-toggle="dropdown" style="background: red !important" >
                              Opciones
                            </button>
                            <ul class="dropdown-menu">                           
                                <li><a href="../dado-baja/{{ Auth::user()->id }}">Modificar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="biografia-user-image">
                        <img src="{{ URL::to('/')}}/images/{{ Auth::user()->image}}" width="214" height="214" class="rounded-circle" alt="User Image" />
                    </div>
                </div>
            </div>
        </div>                  
    </section>
@endsection