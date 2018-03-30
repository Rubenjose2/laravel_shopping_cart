@extends('layouts.master') 
@section('title')Laravel Project @endsection 
@section('content') 
@foreach($products->chunk(3) as $productChunk)
<div class="row">
    @foreach($productChunk as $product)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="{{$product->imagePath}}" alt="...">
            <div class="caption">
                <h3>{{$product->title}}</h3>
            <p class="description">{{$product->description}}</p>
                <p>
                    <div class="clearfix">
                    <div class="pull-left price"> $ {{$product->price}}</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Card</a>
                    </div>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach

@endsection