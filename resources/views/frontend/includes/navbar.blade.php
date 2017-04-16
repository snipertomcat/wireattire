@section('before-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/css/uikit.min.css" />
@endsection

    <div class="col-xs-12 col-md-7 col-lg-6" style="padding-bottom: inherit">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
            <div class="uk-card-badge uk-label">{{ $package_name }}</div>
            <h3 class="uk-card-title">Progress</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="{{ $progress_style }}">
                    Step {{ $step }}/5
                </div>
            </div>
            <button id="nextButton" class="btn btn-warning pull-left disabled" style="width: 100%;" onclick="$('#proxy-submit-btn').click(); " disabled>Next</button>
        </div>
    </div>
    <div class="col-xs-12 col-md-5 col-lg-6">
        <div class="panel panel-default" style="padding-bottom: inherit">
            <div class="panel-body">
                <div class="pull-left">
                    Please select your {{ $icon }}
                </div>
                <form name="item-selection" id="item-selection" method="post" action="#">
                    <select name="size" id="input-size" class="btn btn-primary pull-left" style="margin-top: 30px; margin-left: 30px;">
                        <option value="">Select Size</option>
                        <option value="SM">Small</option>
                        <option value="M">Medium</option>
                        <option value="LG">Large</option>
                        <option value="XL">Extra Large</option>
                        <option value="2XL">2XL</option>
                        <option value="3XL">3XL</option>
                    </select>
                    <input type="hidden" name="category_id" id="input-category-id" value="{{ $category_id }}" />
                    <input type="hidden" name="sku" id="input-sku" />
                    <input type="hidden" name="package_id" id="input-package-id" value="{{ $package_id }}" />
                    <input type="submit" id="proxy-submit-btn" style="display:none" />
                    {{ csrf_field() }}
                </form>
                {{--</div>--}}
            </div>
        </div>
    </div>

{{ $slot }}
@section('after-scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/js/uikit.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/js/uikit-icons.min.js"></script>
            <script src="<?php echo asset('assets/js/global.js') ?>"></script>
@endsection
