@extends('onefolder.master')
@section('content')
<div class="row" style="margin-top: 103px;">
@foreach($choices as $ch)

    <div class="col-sm-3">
        <div class="card">
            <img src="{{asset('/uploads/profile/'.$ch->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$ch->name}} </h5>
                <p class="card-text">
                <h5 class="card-title"></h5>
                <h5 class="card-text">{{$ch->name1}} </h5>
                <h5 class="card-text">{{$ch->price1}} </h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection