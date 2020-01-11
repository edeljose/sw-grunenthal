@extends('layouts.app')
@section('content')
	<section class="container">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-md-3">
                <a href="#aboutModal" data-toggle="modal" data-target="#myModal{{$user->id}}"><img src="{{ URL::to('/')}}/images/{{ $user->image}}" name="aboutme" width="140" height="140" class="rounded-circle mx-auto d-block"></a>
                <h2 class="text-center">{{$user->names}} {{$user->surnames}}</h2>
            </div>
            @endforeach
        </div>
        <!-- Modal -->
        @foreach ($users as $modaluser)
        <div class="modal fade" id="myModal{{$modaluser->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel{{$modaluser->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel{{$modaluser->id}}">Más acerca de: {{$modaluser->names}}</h4>
                        </div>
                    <div class="modal-body">
                        <center>
                        <img src="{{ URL::to('/')}}/images/{{ $modaluser->image}}" name="aboutme" width="140" height="140" border="0" class="rounded-circle mx-auto d-block"></a>
                        <h3 class="media-heading">{{$modaluser->names}} {{$modaluser->surnames}}</h3>
                        <span><strong>Edad: </strong></span>
                            <span class="badge badge-primary">{{$modaluser->age}}</span>
                        <span><strong>Estado: </strong></span>
                            <span class="badge badge-danger">{{$modaluser->state_id}}</span>
                        <span><strong>Rol: </strong></span>
                            <span class="badge badge-success">{{$modaluser->rol_id}}</span>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <center>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ver más</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection