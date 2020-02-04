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
                <form action="{{ route('order.verify.val') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Order Number</label>
                                <input type="text" class="form-control" name="order_number" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-success btn-block">অর্ডার দেখুন</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->
@endsection