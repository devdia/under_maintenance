@extends('layout.master-auth')

@push('plugin-styles')

    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/loader.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/pages/error/error_2.css')}}">
@endpush

@section('content')
    <!-- Main Body Starts -->
    <div class="error-wrapper">
        <div class="col-md-6 error-left-section">
            <a class="navbar-brand m-5" href="#">
                <img src="{{ url('assets/img/seter logo blanc.png') }}"  />
            </a>
            <div class="error-left-content">
                <h1 class="mb-3 text-white">En maintenance</h1>
                <p class="font-25 mb-5 text-white">Pour toute information veuillez contacter le service client au 33 920 00 40, par mail contact@seter.sn ou sur les pages Ter Dakar de Facebook, Instagram, Twitter et LinkedIn </p>

            </div>
        </div>
        <div class="col-md-6 error-right-section">

            <img src="{{ url('assets/img/error-maintainence-1.jpg') }}" class="error-img" />
        </div>
    </div>
    <!-- Main Body Ends -->
    @include('include.footer')
@endsection

@push('plugin-scripts')

    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/loader.js')}}"></script>
    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/pages/faq/faq.js')}}"></script>
@endpush

@push('custom-scripts')

@endpush
