@extends('frontend.layouts.app')

@section('title', app_name() . ' : Male Essentials')

@section('content')

    <div class="row">

            @component('frontend.includes.navbar')
                @slot('progress_style')
                    width: 30%
                @endslot
                @slot('step')
                    2
                @endslot
                @slot('icon')
                    <img src="<?php echo asset("storage/icon-underwear.png")?>" height="100px" width="100px" style="margin-left:5px;"/>
                @endslot
                @slot('package_name')
                    Essentials - Men
                @endslot
            @endcomponent

    </div>

    <div class="row">
        @foreach ($products as $product)
            <a href="">
                <div class="col-xs-6 col-lg-3 col-md-3">
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

    </div><!-- row -->

@endsection