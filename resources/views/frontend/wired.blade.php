@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        @foreach($filenames as $filename)
            <div class="col-lg-3">
                <!-- format panel: -->
                <div class="uk-panel uk-panel-box" style="min-height: 168px;">
                    <h3 class="uk-panel-title">Product #{{ $loop->iteration }}</h3>
                    <p>Cool shirt from a cool designer</p>
                    <p>
                        <span class="btn btn-small" href="#">Details</span>
                        <span class="btn btn-lg btn-primary" href="#">Queue</span>
                    </p>
                <!-- format image: -->
                    <figure class="uk-overlay uk-overlay-hover">
                        <img class="uk-overlay-scale" src="{{ asset("storage/thumbnails/$filename") }}" width="250" height="200" alt="">
                        <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                        <a class="uk-position-cover" href="#"></a>
                    </figure>
                    <p class="uk-text-center">Scale</p>
                </div>
            </div>
        @endforeach
    </div><!-- col-md-10 -->
@endsection