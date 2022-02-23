@extends('admin.base')

@section('content')
@php
    if(isset($user))
@endphp
<div class="row">
    <div class="col-md-8">
        <span>Vew donation data graphs for different years of donations</span>
    </div>
    <div class="col-md-4">
        
        <select id="change-year" class="form-control">
            <option value="{{ date("Y") }}">{{ date("Y")}}</option>
            @for ($i = 1; $i < 6; $i++)
                <option value="{{ date("Y") - $i }}">{{ date("Y") - $i }}</option>
            @endfor
        </select>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="foodCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
    </div>
    <div class="col-lg-6">
        <div class="loading d-none">
            <span class="spinner-border spinner-border-sm"></span> loading...
        </div>
        <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/data-visualization.js') }}"></script>
    <script>
        var windowObjectReference;var windowFeatures = "popup";function printReport(url) {windowObjectReference = window.open(window.location.origin + url, "SANYU BABIES' HOME", windowFeatures);}
    </script>
@endsection