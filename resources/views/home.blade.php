@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <div id="fb-editor"></div>
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