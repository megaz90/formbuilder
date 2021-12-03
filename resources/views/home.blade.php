@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-4">
                            <h3 id="message"></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 offset-2">
                        <label for="">{{ __('Enter Name of Form:') }}</label>
                        <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Name of Form" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 offset-2">
                        <label for="">{{ __('Form Description:') }}</label>
                        <textarea name="description" placeholder="Enter Description of the form" id="description" cols="30" rows="5" class="form-control mb-5" required></textarea>
                    </div>
                </div>

                <div class="row">
                <div id="fb-editor"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/libs/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/libs/form-builder.min.js') }}"></script>
<script src="{{ asset('assets/js/form-builder.init.js') }}"></script>
@endsection