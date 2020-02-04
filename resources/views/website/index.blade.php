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
            <div class="col-md-6 text-center mb-5 mb-md-0">
                <img style="width: 100%" src="{{ asset('/website') }}/products/01.jpg" alt="">
            </div>
            <div class="col-md-6 align-self-center text-center text-md-left">
                <div class="block">
                    <h1 class="font-weight-bold mb-4 font-size-60">যে কোন ধরনের দাগ বা স্ক্রাস্ রিমুভ করুন সহযে।</h1>
                    <p class="mb-4">
                       চাইনার অত্যাধুনিক প্রযুক্তি ব্যবহার করে আপনার গাড়ি বা মটর বাইকের দাগ বা স্ক্রাস নিমিষেই দুর করুন। এই প্রোডাক্টি আপনার স্ক্রাস বা দাগ দূর করে নতুনের মত উজ্জ্বল করে তুলবে। আপনার প্রোয়জন অনুযায়ি রংয়ের অর্ডার করার জন্য এখনি প্রি-অর্ডার করুন।                        </p>
                       <a class="btn btn-main" href="{{ route('order.add') }}" role="button">প্রি-অর্ডার করুন ৫০০/- থেকে শুরু</a>
                </div>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->


<!-- 
    Feature start
    ==================== -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>রংয়ের কোড এবং সুবিধা</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-40 text-center text-md-left">
                    <h4 class="font-weight-bold mb-2">সহয স্প্রে</h4>
                    <p>রংয়ের বতলটিতে স্প্রে ক্যাপ সংযুক্ত করে কোন ধরনের আনুসাংগিগ যন্ত্রপাতি ছারাইঅতি সহযে নিজেই সিরামিক কোডিং করে নতুনের মত চক চক করা যায়।</p>
                </div>
                <div class="mb-40 text-center text-md-left">
                    <h4 class="font-weight-bold mb-2">হালকা স্পোট দূরিকরণ</h4>
                    <p>ছোট এবং সূক্ষ স্পোট গুলি দূর করার জন্য এর সাথেই রয়েছে স্ক্রাস রিমুভার কলম যা আপনার গাড়ির রংয়ের সাথে মিশে যাবে এবং স্ক্রাস্ গুলি দুর করবে।</p>
                </div>
                <div class="mb-40 text-center text-md-left">
                    <h4 class="font-weight-bold mb-2">দীর্ঘ দিনের মেয়াদ</h4>
                    <p>ঠান্ডা বা গরম তাপমাত্রা সহনশীল এই প্রোডাক্টি টিকে থাকে বহুদিন। গাড়ীতে থাকা আসল রংয়ের মতই এই রংয়ের মেয়াদ কাল।</p>
                </div>
            </div>
            <div class="col-md-4 text-center align-self-center mb-4 mb-md-0">
                <img class="img-fluid" src="{{ asset('/website') }}/products/colors.jpg" alt="">
            </div>
            <div class="col-md-4">
                <div class="mb-40 text-center text-md-left">
                    <h4 class="font-weight-bold mb-2">সাইনিং</h4>
                    <p>রংয়ের পাশাপাশি গাড়ির বডিকে করে তুলবে নুতনের মত সাইনিং</p>
                </div>
                <div class="mb-40 text-center text-md-left">
                    <h4 class="font-weight-bold mb-2">পুটিং সুবিধা</h4>
                    <p>পুটিং এর মাধ্যমে আপনার গাড়ির বডির ক্ষত স্থানে প্রলপ দিয়ে ক্ষতটি সারিয়ে তুলতে পারা যাবে।</p>
                </div>
                <div class="mb-40 text-center text-md-left">
                    <h4 class="font-weight-bold mb-2">স্বল্প মূল্যে সরাসরি</h4>
                    <p>এই প্রোডাক্টি খুবই সিমিত দামে সরারলি চায়না থেকে আপনার কাছে চলে আসবে। কোন ধরনের মাধ্যম ছারাই আপনার কাংখিত গড়ির রংয়ের রিপিয়ারিং প্রোডাক্টি সরাসরি আপনার কাছে পৌছে দেওয়া হবে যার কারনে প্রোডাক্টির মূল্য খুবই কম হচ্ছে।</p>
                </div>
            </div>
        </div>
    </div><!-- .container close -->
</section><!-- #service close -->

<section class="feature-list section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>কেন এই প্রোডাক্টি ব্যবহার করবেন?</h2>
                </div>
            </div>

        </div>
        <div class="row mb-40">
            <div class="col-md-6 text-center mb-5 mb-lg-0">
                <img class="img-fluid" src="{{ asset('/website') }}/products/00.jpg" alt="">
            </div>
            <div class="col-md-6 align-self-center text-center text-md-left">
                <div class="content">
                    <h4 class="subheading">নতুনের মত উজ্জল করবে</h4>
                    <p>
                        এই প্রোডাক্টি আপনার গাড়ির স্ক্রাস বা দাগকে দূর করে তা নতুনের মত উজ্জল করবে। এই কাজটি আপনি নিজেই সহযে করতে পারবেন। খুবই সহয এবং সল্প খরচে এই পণ্যটির মাধ্যমে আপনার সাধের গাড়িটির নতুনত্ত ফিরিয়ে আনতে পারবেন।
                    </p>
                    <a href="{{ route('order.add') }}" class="btn btn-main btn-main-sm">প্রি-অর্ডার করুন ৫০০/- থেকে শুরু</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 order-md-1 order-2 align-self-center text-center text-md-left">
                <div class="content">
                    <h4 class="subheading">যে ভাবে ব্যবহার করতে হবে</h4>
                    <p>
                        আপনার গাড়ির দাগের অংশটি প্যাকেটে থাকা পুটিংয়ের মাধ্যমে সুন্দর ও মসৃন করে লাগিয়ে নিন। অতপর আপনার গাড়িটির যে সকল অংশ অন্যধরনের রংয়ের তা যথাযত ভাবে কাগজ বা সংবাদ পত্রের পাতা দিয়ে মুরিয়ে দিন। তারপর পুটিং কৃত অংশটির উপর মশৃন করে স্প্রে করুন এবং পুটিংকৃত স্থানের আশে পাশে হালকা করে স্প্রে করুন।
                    </p>
                    <a href="{{ route('order.add') }}" class="btn btn-main btn-main-sm">প্রি-অর্ডার করুন ৫০০/- থেকে শুরু</a>
                </div>
            </div>
            <div class="col-md-6 order-md-2 order-1 text-center mb-5 mb-lg-0">
                <img class="img-fluid" src="{{ asset('/website') }}/products/001.jpg" alt="">
            </div>
        </div>
    </div>
</section>
@endsection