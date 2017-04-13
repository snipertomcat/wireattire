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
                <strong>Start by selecting a package</strong>
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
        {{--        <div class="col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-home"></i> {{ trans('navs.general.home') }}
                        </div>

                        <div class="panel-body">
                            {{ trans('strings.frontend.welcome_to', ['place' => app_name()]) }}
                        </div>
                    </div><!-- panel -->

                </div><!-- col-md-10 -->

                @role('Administrator')
                    --}}{{-- You can also send through the Role ID --}}{{--

                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_blade_extensions') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 1: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endauth

                @if (access()->hasRole('Administrator'))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.role_name') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 2: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                @if (access()->hasRole(1))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.role_id') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 3: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                @if (access()->hasRoles(['Administrator', 1]))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.array_roles_not') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 4: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                --}}{{-- The second parameter says the user must have all the roles specified. Administrator does not have the role with an id of 2, so this will not show. --}}{{--
                @if (access()->hasRoles(['Administrator', 2], true))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.array_roles') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                @permission('view-backend')
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.permission_name') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 5: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view-backend']) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endauth

                @if (access()->hasPermission(1))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.permission_id') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 6: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                @if (access()->hasPermissions(['view-backend', 1]))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.array_permissions_not') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 7: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                @if (access()->hasPermissions(['view-backend', 2], true))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.array_permissions') }}</div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif

                <div class="col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-home"></i> Bootstrap Glyphicon {{ trans('strings.frontend.test') }}</div>

                        <div class="panel-body">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon glyphicon-euro" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon glyphicon-cloud" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </div>
                    </div><!-- panel -->

                </div><!-- col-md-10 -->

                <div class="col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-home"></i> Font Awesome {{ trans('strings.frontend.test') }}</div>

                        <div class="panel-body">
                            <i class="fa fa-home"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-pinterest"></i>
                        </div>
                    </div><!-- panel -->

                </div><!-- col-md-10 -->--}}

    </div><!--row-->
@endsection