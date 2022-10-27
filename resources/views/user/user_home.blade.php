@extends('user.layouts.app')
@section('content')
    <!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">
            <!--main content-->
            <div class="col-lg-8 py-2">

                
<div class="row align-items-lg-center bg-brand-gradient mb-6 mt-2 rounded">
    <div class="col-12 col-xl-4 py-3 d-flex flex-row align-items-center">
        <div>
            <img class="rounded-circle mr-3"
                 src="{{asset("storage/".Auth::user()->image_path)}}"
                 alt="Photo"
                 width="80" />
        </div>
        <div>
            <h5 class="text-uppercase mb-0 text-gray-3">
                {{ Auth::user()->name }}
            </h5>
            {{-- <small class="text-gray-3 d-block">Silver</small> --}}
        </div>
    </div>
    <div class="col-12 col-xl-8">
        <div class="row p-2">
            <div class="col-12 col-sm-4 text-xl-right p-2">
                <small class="text-uppercase text-gray-3">Courses Completed</small>
                    <h3 class="text-gray-3">0</h3>
            </div>
            <div class="col-12 col-sm-4 text-xl-right p-2">
                <small class="text-uppercase text-gray-3"></small>
                <h3 class="text-gray-3">-</h3>
                <p class="mb-0 small text-gray-3">
                    {{-- Participated in 0 Contests --}}
                </p>
            </div>
            <div class="col-12 col-sm-4 text-xl-right p-2">
                <small class="text-uppercase text-gray-3">Dev Coins</small>
                  @if (Auth::user()->devcoin)
                        <h3 class="text-gray-3">{{Auth::user()->devcoin->coin}}</h3>
                        
                        @else
                               <h3 class="text-gray-3">0</h3>
                        @endif
                
                <div>
                    <a class="mr-2 btn btn-sm btn-outline-light" href="/Member/DevCoin">
                        Earn More
                    </a>
                    <a class="btn btn-sm btn-outline-light" href="/Member/Shop">
                        Redeem
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ( Auth::user()->courses as $item)         
<div>
<div class="px-2 py-3 border-bottom border-light">
     {{-- @foreach ( Auth::user()->courses as $item)                 --}}
            <h3>
                {{$item->title}}
            </h3>
        <span class="badge badge-brand-red badge-pill mb-3">{{ $item->course_status}}</span>
        <div class="d-sm-flex mb-2">
            <a class="d-block mb-3 mb-sm-0 mr-5" href="{{$item->class_link}}" target="_blank">Open Google Classroom</a>
            <a class="d-block" href="{{url("/mycoursedetails/$item->id")}}">See Class Details</a>
        </div>
        <p class="mb-1">Next Class</p>
        <p class="font-weight-bold mb-1">
            {{ $item->next_class_date }}
        </p>
    {{-- @endforeach --}}
</div>
</div>
@endforeach            
<div class="bg-light d-flex row no-gutters my-3 rounded">
    <div class="p-4 col-12 col-sm-7">
        <p class="subtitle text-brand-red">REFERRALS</p>
        <h4 class="text-brand-red">
            Refer your friends and family members and earn DevCoins!
        </h4>
        <p>
            Earn 5% of every purchase made by your referrals for lifetime. Please ask them to put this referral code during registration.
        </p>
        <div class="input-group col-12 col-sm-8 p-0">
            <input type="text"
                   name="referralbig"
                   id="referral-big"
                   class="form-control bg-white"
                   value="{{Auth::user()->ref_own}}"
                   readonly
                   aria-describedby="sufixId" />
            <div class="input-group-append" id="sufixId">
                <button class="btn btn-outline-primary px-5 btn-copy" data-clipboard-target="#referral-big">
                    Copy
                </button>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-5 p-2">
        <small>
            <a href="/Member/DevCoin">Earn DevCoins</a> and buy RAM, KeyBoard,
            Graphics Card, and many other products from
            <a href="/Member/shop">Dev Skill shop</a> using your DevCoins.
        </small>
        <div class="d-flex">
                <div class="card border-0 rounded-0 my-2 mr-2 col p-0 bg-transparent">
                    <img src="https://devskillfiles.s3.ap-southeast-1.amazonaws.com/uploads/websiteimages/shopproduct/rleex4zswmk.jpg?X-Amz-Expires=36000&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAUHD2NJ7BTT2REWBG/20220928/ap-southeast-1/s3/aws4_request&amp;X-Amz-Date=20220928T155101Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=a9b952206ab4114b9b0fba8f404e029b5fa50d77571eb432612592fe0293ed10"
                     class="card-img-top rounded-0"
                     alt="Logitech K380 Bluetooth Multi-Device Keyboard" />
                    <div class="card-body bg-secondary">
                        <small class="card-text text-basic small mb-0 d-block text-truncate">Logitech K380 Bluetooth Multi-Device Keyboard</small>
                        <p class="card-text font-weight-bold text-basic small mb-0">
                            28050 DevCoins
                        </p>
                    </div>
                </div>
                <div class="card border-0 rounded-0 my-2 mr-2 col p-0 bg-transparent">
                    <img src="https://devskillfiles.s3.ap-southeast-1.amazonaws.com/uploads/websiteimages/shopproduct/epjxkt3vmcd.jpg?X-Amz-Expires=36000&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAUHD2NJ7BTT2REWBG/20220928/ap-southeast-1/s3/aws4_request&amp;X-Amz-Date=20220928T155101Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=1a57cee01bdbfaebe6aac4e33b5ca65332665069d77dfd8013ecab3262b4b72a"
                     class="card-img-top rounded-0"
                     alt="PNY Turbo Attache R 32GB USB 3.2 360&#xB0; Metal Flash Drive" />
                    <div class="card-body bg-secondary">
                        <small class="card-text text-basic small mb-0 d-block text-truncate">PNY Turbo Attache R 32GB USB 3.2 360&#xB0; Metal Flash Drive</small>
                        <p class="card-text font-weight-bold text-basic small mb-0">
                            5000 DevCoins
                        </p>
                    </div>
                </div>
        </div>
    </div>
</div>
                <div class="card bg-secondary border-0 d-flex flex-row overflow-hidden">
    <div class="col col-sm-4 d-none d-sm-flex p-0">
        <img class="ml-n1"
                src="/site/img/bg_earn_coin_widget.svg" />
    </div>
    <div class="col ml-sm-n4 py-9">
        <h4 class="text-white">
            Earn DevCoins and buy SSD, GraphicsCard, etc.
        </h4>
        <a class="btn btn-primary" href="/Member/Home/DevCoinGuide">How to Earn DevCoins?</a>
    </div>
</div>
            </div>
            <!--/main content-->
            <!--secondary content-->
            <div class="col-lg-4 order-1 order-lg-2">
                
<div class="bg-light d-flex row no-gutters my-3 rounded">
    <div class="p-4">
        <p class="subtitle text-brand-red">REFERRALS</p>
        <h4 class="text-brand-red">
            Refer your friends and family members and earn DevCoins!
        </h4>
        <p class="text-brand-red">
            Earn 5% of every purchase made by your referrals for lifetime. Please ask them to put this referral code during registration.
        </p>
        <div class="input-group input-group-sm p-0">
            <input type="text"
                name="referral"
                id="referral-small"
                class="form-control bg-white form-control-sm"
                value="{{Auth::user()->ref_own}}"
                readonly
                aria-describedby="sufixId" />
            <div class="input-group-append" id="sufixId">
                <button class="btn btn-outline-primary px-5 btn-copy" data-clipboard-target="#referral-small">
                    Copy
                </button>
            </div>
        </div>
    </div>
</div>
                <div class="card bg-secondary border-0 d-flex flex-row overflow-hidden">
    <div class="col col-sm-4 d-none d-sm-flex p-0">
        <img class="ml-n1"
             src="/site/img/bg_earn_coin_widget.svg" />
    </div>
    <div class="col ml-sm-n4 py-9">
        <h4 class="text-white">
            Earn DevCoins and buy SSD, Graphics Card, etc.
        </h4>
        <a class="btn btn-primary" href="/Member/Home/DevCoinGuide">How to Earn DevCoins?</a>
    </div>
</div>
                
<div class="card col border-0 overflow-hidden my-3 bg-light-gradient p-3 d-flex flex-column justify-content-between">
    <div class="p-2 pr-md-4">
        <strong><a href="/Instructor">Enlighten young hearts!</a></strong>
        <p class="caption-2">
            Become an instructor and share your knowledge. Help us to
            build a better Bangladesh!
        </p>
    </div>
    <div>
        <a href="/Instructor" class="border-0 btn btn-brand-red">Why Teach @ DevSkill?</a>
    </div>
</div>

            </div>
            <!--/secondary content-->
        </div>
    </div>
</div>
<!-- /.content -->

@endsection

  