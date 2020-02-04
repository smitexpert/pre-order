@extends('layouts.website')
@section('contents')
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="{{ url('/') }}">স্ক্রাস রিমুভার</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center text-lg-left">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- /navigation -->

<!-- hero area -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                অর্ডার এর অবস্থা
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">
                                 @if($order->status == 'pending')
                                    আপনার অর্ডারটির প্রি-অর্ডার পেমেন্ট যাচাই প্রক্রিয়া চলছে
                                 @endif
                              </h5>
                              <p class="card-text">আপনার অর্ডারটির পেমেন্ট যাচাই শেষে তা প্রক্রিয়াধিন করার সময় আপনাকে জানানো হবে।</p>                              
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                অর্ডার তথ্যবলি
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $order->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact No</td>
                                        <td>{{ $order->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $order->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $order->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Name</td>
                                        <td>{{ $order->product_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Colour</td>
                                        <td>@foreach ($order->colours as $colour)
                                            {{ $colour->name }} <div style="width: 50px; height: 50px; border: 1px solid #000000; display: inline-block; background-color: {{ $colour->code }}"></div>
                                            @endforeach</td>
                                    </tr>
                                    <tr>
                                        <td>Product Amount</td>
                                        <td>{{ $order->amount }}</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Transection ID</td>
                                        <td>{!! Str::limit($order->trs_no, 6) !!}</td>
                                    </tr>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->
@endsection