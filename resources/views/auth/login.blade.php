@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center">
          <section class="header text-center col-md-12 col-sm-12 title-wrap">
             <div class="title m-b-md">
                <h2>Grunenthal</h2>
             </div>
          </section>
             {{ csrf_field() }}
          <div>
             <hr> 
             <login></login>
          </div>
    </div>
 </div> 
@endsection
