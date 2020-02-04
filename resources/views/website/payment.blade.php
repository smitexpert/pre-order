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
                <form action="{{ route('order.payment.add', ['id' => $order->order_number]) }}" method="POST">
                    @csrf
                    <div class="row">
                        <h3>আপনার অর্ডার নম্বর {{ $order->order_number }} সংগ্রহ করুন। এই নম্বরটি ভবিষ্যৎ অনুসান্ধানে কাযে লাগবে।</h3>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-center">
                                পেমেন্ট এর নিয়ম
                            </h4>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul>
                                <li><p>১) আপনার বিকাশ একাউন্টে ঢুকুন</p></li>
                                <li><p>২) বিকাশ থেকে পেমেন্ট অপশনটি নির্বাচন করুন</p></li>
                                <li><p>৩) আমাদের মার্চেন্ট নম্বর <span style="font-size: 28px; font-weight: bold;">01644900101</span> লিখুন</p></li>
                                <li><p>৪) প্রি-অর্ডার পরিমাণ <span style="font-size: 28px; font-weight: bold;">{{ $order->amount }}/-</span> টাকা লিখুন</p></li>
                                <li><p>৫) Referrence নম্বর হিসাবে <span style="font-size: 28px; font-weight: bold;">{{ $order->order_number }}</span> নম্বরটি দিন</p></li>
                                <li><p>৬) Counter No. <span style="font-size: 28px; font-weight: bold;">1</span> দিয়ে পরবর্তী ধাপে যান</p></li>
                                <li><p>৭) আপনার বিকাশ পাসওয়ার্ড দিয়ে পেমেন্ট সম্পূর্ন করুন</p></li>
                                <li><p>৮) পেমেন্ট শেষে TRANSECTION ID টি নিচের বক্সে দিন</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Transection ID</label>
                                <input type="text" name="trs_no" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-success btn-block">পেমেন্ট নিশ্চত করুন</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->
@endsection