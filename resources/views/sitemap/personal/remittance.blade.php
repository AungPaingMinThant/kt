@extends('layouts.frontend-app')

@section('title', 'Remittance & Payments – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'personal_banking'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Remittance & Payments', 'page'=>'personal_banking_remit'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/remittance/local/mobile_KV.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Local Remittance</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/remittance/local') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/personal-inter-remit.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">International Remittance</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/remittance/international') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/remittance/payment/mobile_KV.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Payments</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/personal-banking/remittance/payment') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')