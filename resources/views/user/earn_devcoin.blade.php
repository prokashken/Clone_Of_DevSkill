@extends('user.layouts.app')
@section('content')
    <div class="container">
          <!--referral cover-->
          <div class="d-flex flex-column flex-md-row p-2 p-md-5">
            <div class="col-md-8 align-self-center px-1 py-2 p-md-4">
              <h1>Earn Dev Coins and get rewards!</h1>
              <p>
                Earn 3000 Dev coin by your referrals for lifetime.
                Please ask them to put this referral code during registration.
                Also, if you share course, blog, etc. on any social media or anywhere else and if someone registers by clicking on that link, you will get this benefit.
              </p>
              <p class="text-muted">
                Copy your referral Code and share with friends & family
              </p>
              <div
                class="align-items-center bg-light col-md-7 d-flex d-inline-block p-3 rounded"
              >
                <span class="h5 mb-0 col-10 d-inline-block text-truncate">
                  {{ Auth::user()->ref_own }}
                </span>
                <a
                  href="#"
                  data-referral-link="www.devskill.com/r/PROD001563"
                  onclick="copyReferralLink(event)"
                  class="btn btn-link"
                  >Copy</a
                >
              </div>
            </div>
            <div class="col-md-4 order-md-last order-first p-1">
              <img class="img-fluid" src="/site/img/img_illustration_referral.svg" alt="Dev Coin Referral" />
            </div>
          </div>
          <!--/referral cover-->
        </div>
        <!--referral how it works-->
       
        <!--/referral how it works-->
        <!--how to use dev coins-->
        <div>
          <h1 class="text-center">How to use Dev Coins?</h1>
          <div class="d-flex flex-column flex-md-row justify-content-center my-7">
            <div class="col-md-4">
              <div class="card p-3 mx-md-4 m-2">
                <img src="/admin/img/img_shop_with_devcoins.svg" class="card-img-top" alt="Shop with Dev Coins" />
                <div class="card-body text-center">
                  <h3 class="text-center">
                    <span class="text-primary text-bold">Shop</span> with Dev
                    Coins
                  </h3>
                  <p class="card-text text-center">
                    Buy RAM, KeyBoard, Graphics Card, and many other products
                    from Dev Skill shop using your DevCoins.
                  </p>
                  <a class="btn btn-primary" href="/Member/Shop">Visit Dev Shop</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card p-3 mx-md-4 m-2">
                <img src="/admin/img/img_cashout_devcoins.svg" class="card-img-top" alt="Shop with Dev Coins" />
                <div class="card-body text-center">
                  <h3 class="text-center">
                    <span class="text-primary text-bold">Cashout</span> Dev
                    Coins
                  </h3>
                  <p class="card-text text-center">
                    Buy RAM, KeyBoard, Graphics Card, and many other products
                    from Dev Skill shop using your DevCoins.
                  </p>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/how to use dev coins-->
<!--/how to use dev coins-->


@endsection