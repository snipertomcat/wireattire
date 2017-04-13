@extends('frontend.layouts.app')

@section('title', app_name() . ' : Male Essentials')

@section('content')

    <div class="row" style="padding-bottom: 20px;">

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

    @foreach(array_chunk($products, 3) as $threeProducts)
        <div class="row">
            @foreach($threeProducts as $product)
                <a href="" data-toggle="modal" data-target=".product-focus-modal-{{ $product->sku }}">
                    <div class="col-xs-3 col-lg-3 col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="badge pull-right">${{ $product->price }}</span>
                                {{ $product->name }}
                            </div>
                            <div class="panel-body">
                                <img src="{{ asset('storage/products/'.$product->image1) }}" width="300px" height="300px"/>
                            </div>
                        </div><!-- panel -->
                    </div><!-- col-xs-4 -->
                </a>
                <div class="modal fade product-focus-modal-{{ $product->sku }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form name="product-select" class="pull-left">
                                    <input type="hidden" name="sku" value="{{ $product->sku }}" />
                                    <button class="btn btn-primary btn-lg">Select this item</button>
                                    <span class="label label-default">${{ $product->price }}</span>
                                </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
{{--                            <div class="row">
                                <div class="col-sm-4 col-lg-2 col-sm-offset-8 col-lg-offset-1">

                                </div>
                            </div>--}}
                            <div class="row">
                                <div class="col-sm-4 col-lg-10">
                                    {{ $product->description }}
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="pull-left">
                                        <img src="{{ asset('storage/products/' . $product->image1) }}" width="300px" height="300px" />
                                        @if(isset($product->image2))
                                            <img src="{{ asset('storage/products/' . $product->image2) }}" width="300px" height="300px" />
                                        @endif
                                        @if(isset($product->image3))
                                            <img src="{{ asset('storage/products/' . $product->image3) }}" width="300px" height="300px" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

@endsection