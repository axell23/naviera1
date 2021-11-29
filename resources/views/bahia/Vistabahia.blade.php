@extends('layout')
@section('content')
	<div class="container">
        <div class="row">
            @foreach($bahia as $b)
            
                <div class="col-sm-4">
                    
                        @if ($b->estado == "Activo")
                            <div class="card text-white bg-danger mb-3" style="width: 18rem;">
                        @else
                            <div class="card text-white bg-success mb-3" style="width: 18rem;">   
                        @endif
                        <img class="card-img-top" src="{{asset('dist/img/bahia.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Bahia # {{$b->id}}</h5>
                            <p class="card-text">Estado: {{$b->estado}}</p>
                        
                        @if ($b->estado == "Activo")
                            <form method="POST" action="{{route('bah.store')}}">
                                    @csrf 
                                <input type="text" class="form-control" id="bahia" name="bahia" maxlength="25" value ="{{$b->id}}" hidden >
                                <button id="btmsubmitC" name="btmsubmitC" type="submit" class="btn btn-primary" >Terminar proceso</button>
                            </form>                        
                        @endif
                            
                        </div>
                    </div>
                </div>
            
            @endforeach
        </div>
	</div>
@endsection