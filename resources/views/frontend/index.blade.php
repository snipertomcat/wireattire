@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">
            @include('includes.partials.home-banner');
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-success" role="alert">
                <strong>Select a package below OR jump right in by clicking:<a href="{{ route('frontend.subscription.showAllproducts') }}"><span class="btn btn-large btn-primary" style="width: 300px; height: 60px; font-size: 30px;">Get Wired</span></a></strong>
            </div>
        </div>
    </div>
    <div class="row">

        <a href="{{ route('frontend.package.essentials.male') }}">
            <div class="col-xs-12 col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-2x fa-mars" aria-hidden="true" style="color:blue"></i>
                        <div class="btn btn-default">{{ trans('strings.frontend.subscriptions.essentials') }} ({{trans('strings.frontend.male')}})</div>
                    </div>

                    <div class="panel-body" style="text-align: center">
                        <img src="<?php echo asset("storage/icon-socks.png")?>" />
                        <img src="<?php echo asset("storage/icon-underwear.png")?>" />
                        <img src="<?php echo asset("storage/icon-tshirt.png")?>" />
                    </div>
                </div><!-- panel -->
            </div><!-- col-xs-12 -->
        </a>

        <a href="{{ route('frontend.package.essentials.female') }}">
            <div class="col-xs-12 col-lg-4 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-2x fa-venus" aria-hidden="true" style="color:deeppink"></i>
                            <button class="btn btn-default">{{ trans('strings.frontend.subscriptions.essentials') }} ({{trans('strings.frontend.female')}})</button>
                        </div>
                        <div class="panel-body" style="text-align: center">
                            <img src="<?php echo asset("storage/icon-socks-female.png")?>" />
                            <img src="<?php echo asset("storage/icon-underwear-female.png")?>"  />
                            <img src="<?php echo asset("storage/icon-bra.png")?>"  />
                            <img src="<?php echo asset("storage/icon-tshirt-female.png")?>" />
                        </div>
                    </div><!-- panel -->
            </div><!-- col-xs-12 -->
        </a>

        <a href="{{ route('frontend.package.essentials.kids') }}">
            <div class="col-xs-12 col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-2x fa-venus" aria-hidden="true" style="color: deeppink"></i> <i class="fa fa-2x fa-mars" aria-hidden="true" style="color: blue"></i>
                        <button class="btn btn-default">{{ trans('strings.frontend.subscriptions.essentials') }} ({{trans('strings.frontend.kids')}})</button>
                        <i class="fa fa-2x fa-child" aria-hidden="true" style="color: #aa4a24"></i>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <img src="<?php echo asset("storage/icon-clothes-kids-boys.png")?>" />
                        <i class="fa fa-5x fa-child" aria-hidden="true" style="height: 100px; width: 90px; color: #7be500; margin-left: 20px;"></i>
                        <img src="<?php echo asset("storage/icon-clothes-kids-girls.png")?>" />
                    </div>
                </div><!-- panel -->
            </div><!-- col-xs-12 -->
        </a>

    </div>
    <div class="row">

        <a href="{{ route('frontend.package.essentials-plus.male') }}">
            <div class="col-xs-12 col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-2x fa-mars" aria-hidden="true" style="color:blue"></i>
                        <button class="btn btn-default"><span style="color: red">{{ trans('strings.frontend.subscriptions.essentials-plus') }}</span> ({{trans('strings.frontend.male')}})</button>
                    </div>

                    <div class="panel-body" style="text-align: center">
                        <img src="<?php echo asset("storage/essentials-plus/icon-jeans-male.png")?>" />
                        <img src="<?php echo asset("storage/essentials-plus/icon-shirt-male.png")?>" style="margin-left: -20px;" />
                        <img src="<?php echo asset("storage/essentials-plus/icon-shorts-male.png")?>" />
                    </div>
                </div><!-- panel -->
            </div><!-- col-xs-12 -->
        </a>

        <a href="{{ route('frontend.package.essentials-plus.female') }}">
            <div class="col-xs-12 col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-2x fa-venus" aria-hidden="true" style="color:deeppink"></i>
                        <button class="btn btn-default"><span style="color: red">{{ trans('strings.frontend.subscriptions.essentials-plus') }}</span> ({{trans('strings.frontend.female')}})</button>
                    </div>

                    <div class="panel-body" style="text-align: center">
                        <img src="<?php echo asset("storage/essentials-plus/icon-jeans-female.png")?>" />
                        <img src="<?php echo asset("storage/essentials-plus/icon-skirt.png")?>" />
                        <img src="<?php echo asset("storage/essentials-plus/icon-dress.png")?>" />
                    </div>
                </div><!-- panel -->
            </div><!-- col-xs-12 -->
        </a>

        <a href="{{ route('frontend.package.essentials-plus.kids') }}">
            <div class="col-xs-12 col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-2x fa-venus" aria-hidden="true" style="color: deeppink"></i> <i class="fa fa-2x fa-mars" aria-hidden="true" style="color: blue"></i>
                        <button class="btn btn-default"><span style="color: red">{{ trans('strings.frontend.subscriptions.essentials-plus') }}</span> ({{trans('strings.frontend.kids')}})</button>
                        <i class="fa fa-2x fa-child" aria-hidden="true" style="color: #aa4a24"></i>
                    </div>

                    <div class="panel-body" style="text-align: center">

                    </div>
                </div>
            </div>
        </a>

    </div><!--row-->
@endsection