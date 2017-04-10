@extends('frontend.layouts.app')

@section('title', app_name() . ' : Male Essentials')

@section('content')

    <div class="row">

        <div class="col-xs-12">

            <div class="alert alert-success" role="alert">
                <strong>Please start by selecting some underwear</strong>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 10%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Your Progress</div>
            </div>
        </div>

        <div class="col-xs-12">

            @foreach ($products as $product)
            <a href="">
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $product->name }}
                            <span class="pull-right">{{ $product->price }}</span>
                        </div>
                        <div class="panel-body">
                            <img src="{{ asset('storage/products/'.$product->image1) }}" width="300px" height="300px"/>
                        </div>
                    </div><!-- panel -->
                </div><!-- col-xs-4 -->
            </a>
            @endforeach

        </div><!-- col-md-12 -->

    </div><!-- row -->

@endsection