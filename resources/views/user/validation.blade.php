@extends('layouts.app')
@section('content')
	<section class="container">
		<table class="table table-bordered table-striped">
            <tr>
                <th>Avatar</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td><img src="{{ URL::to('/')}}/images/{{ $user->image}}" class="img-thumbnail" width="75"></td>
                <td>{{$user->names}}</td>
                <td>{{$user->surnames}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->email}}</td>
            </tr>    
            @endforeach
        </table>
	</section>
@endsection