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
                        <a class="nav-link" href="{{ route('order.verify') }}">আপনার অর্ডারটি দেখুন</a>
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
                <form action="{{ route('order.add.save') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-center">
                                প্রি-অর্ডার ফর্ম
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">আপনার নাম</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">মোবাইল নম্বর</label>
                                <input type="text" class="form-control" minlength="11" maxlength="11" pattern="[0-9]{11}" placeholder="01700000000" name="mobile"  required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">ইমেইল</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">ডেলিভারী ঠিকানা</label>
                                <textarea name="address" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>প্রোডাক্টের বিবরণ</p>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">প্রোডাক্টের নাম</label>
                                <input type="text" name="product_name" value="Scratch Remover" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">রংয়ের নাম</label>
                                <select name="colour_name" id="colour_code" class="form-control" required>
                                    <option value=""></option>
                                    @foreach ($colours as $colour)
                                        <option value="{{ $colour->code }}">{{ $colour->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="colours" style="width: 50px; height: 50px; border: 1px solid #000000; display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">প্রি-অর্ডার পরিমান</label>
                                <select name="order_amount" id="" class="form-control" required>
                                    <option value="500">৫০০/- টাকা</option>
                                    <option value="1000">১০০০/- টাকা</option>
                                    <option value="1500">১৫০০/- টাকা</option>
                                    <option value="2000">২০০০/- টাকা</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-success btn-block">প্রি-অর্ডার করুন</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->
@endsection

@push('scripts')
    <script>
        $("#colour_code").change(function(){
            var code = $("#colour_code").val()
            if(code != ""){
                $("#colours").css('background-color', code);
                $("#colours").css('display', 'inline-block');
            }else{
                $("#colours").css('display', 'none');
            }
        })
    </script>
@endpush