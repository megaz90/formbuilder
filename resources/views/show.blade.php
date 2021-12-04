@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('form.check') }}" method="POST">
                        @csrf
                        <div id="form"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
<script src="{{ asset('assets/libs/form-render.min.js') }}"></script>
<script src="{{ asset('assets/js/form-render.js') }}"></script>
@endsection