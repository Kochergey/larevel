@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tovars</div>

                <div class="card-body">
                    @foreach($cats as $cat)
                    <h2 class ='title'> {{$cat->name}}</h2>
                    @foreach($cat->products()->get() as $one)
                    <h4> {{$one->name}}</h4>
                    @if($one->picture != '')
                    <img src ='{{asset('uploads/'.$one->picture)}}'>
                    @endif
                    {!!$one->body!!}
                    <a href="{{asset('basket/add/'.$one->id)}}" class ='add_cart' data id = '{{$one->id}}'>Добавить в корзину</a>
                    <a href="#" data-id="{{$one->id}}" class="prod_more">&nbsp; &nbsp;&nbsp; Подробнее</a>
                    @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection