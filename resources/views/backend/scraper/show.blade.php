@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.scraper.users.management') . ' | ' . trans('labels.backend.scraper.users.view'))

@section('page-header')
    <h1>
        Scraper Management
        <small></small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">View Scrapers</h3>

            <div class="box-tools pull-right">
                @include('backend.scraper.includes.partials.user-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane mt-30 active" id="overview">
                        @include('backend.scraper.show.tabs.overview')
                    </div><!--tab overview profile-->

                </div><!--tab content-->

            </div><!--tab panel-->

        </div><!-- /.box-body -->
    </div><!--box-->
@endsection