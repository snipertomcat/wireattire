@section('before-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/css/uikit.min.css" />
@endsection

    <div class="col-xs-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-left">
                    Please select your {{ $icon }}
                </div>
                <div uk-form-custom="target: > * > span:first" class="btn btn-lg">
                    <select>
                        <option value="">Select Size</option>
                        <option value="SM">Small</option>
                        <option value="M">Medium</option>
                        <option value="LG">Large</option>
                        <option value="XL">Extra Large</option>
                        <option value="2XL">2XL</option>
                        <option value="3XL">3XL</option>
                    </select>
               </div>
            </div>
        </div>
        </p>
    </div>
    <div class="col-xs-5">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
            <div class="uk-card-badge uk-label">{{ $package_name }}</div>
            <h3 class="uk-card-title">Progress</h3>
            <p>
            <div class="progress">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="{{ $progress_style }}">
                    Step {{ $step }}/5
                </div>
            </div>
        </div>
    </div>

{{ $slot }}
@section('before-scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/js/uikit.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/js/uikit-icons.min.js"></script>
@endsection
