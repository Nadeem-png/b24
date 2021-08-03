@extends('master/layout')
@section('content')

<style>
.margin{
    margin-top:-370px;
}
.question{
    background-color:#2b2b2b;
    border-radius: 7px;
}



.border-1{
    border-top:1px solid #919191;
border-right:1px solid #919191;
border-bottom:1px solid #919191;
border-radius:0 7px 7px 0;

}
.border-2{
border-left:1px solid #919191;
border-top:1px solid #919191;
border-bottom:1px solid #919191;
border-radius:7px 0 0 7px;

}
.border-3{
border-top:1px solid #919191;
border-right:1px solid #919191;
border-bottom:1px solid #919191;
border-radius:0 7px 7px 0;

}
.border-4{
border-top:1px solid #919191;
border-left:1px solid #919191;
border-bottom:1px solid #919191;
border-radius:7px 0 0 7px;

}
</style>


<div class="container container-sm margin text-center"  >
<img src="" alt="">
<h1 class="text-center text-white mb-4">Help</h1>
<h5 class="text-color">Do you have questions or 
are you unsure about certain topics? No problem!
 We have listed the most frequently asked questions from our users below and hope that we 
can help you with the answers.!</h5>
</div>


<div class=" question p-4 mt-5 text-center container container-sm">
<h3 class="text-white">Additional help from our Team
<a href="/company" class=" btn py-2 px-4 rounded-pill " style="background-color:white; color:black"><strong>?</strong> Contact Us</a>
</h3>
</div>




<div class="container container-sm mt-5">
<div class="row">

<div class="col-12 col-lg-6  p-5 border-1 mb-5">
<h3 class="text-white ">How do I get free hardware power?</h3>
<h6 class="mt-3 text-color">Every user who registers by the end
 of September will be credited with 850 GH/s of hardware power
 immediately after signing up. Bitcoin mining starts immediately.</h6>
</div>

<div class="col-12 col-lg-6  p-5 border-2 mb-5">
<h3 class="text-white ">How much hardware power can I buy?</h3>
<h6 class="mt-3 text-color">We currently have no limit on the amount
 of hardware power each user can have active. The only restrictions 
 are on deposits for technical reasons. 
There are the following limits:</h6>
<h5 class="text-color">Minimum: 24.88 GBP</h5>
<h5 class="text-color">Maximum: 43138.15 GBP</h5>
</div>
 
<div class="col-12 col-lg-6  p-5 border-3 mb-5">
<h3 class="text-white ">Are there any fees or additional costs?</h3>
<h6 class="mt-3 text-color">Our system and service has no 
fees or extra costs. Neither when depositing nor when withdrawing.
 The only fees you will incur are Bitcoin transaction fees, which 
 are part of the Bitcoin technology and beyond our control. 
 The transaction fees for withdrawals 
are of course covered by us.</h6>
</div>
<div class="col-12 col-lg-6  p-5 border-4 mb-5">
<h3 class="text-white ">How long is my hardware power available?</h3>
<h6 class="mt-3 text-color">Your hardware power is available directly from 
the receipt of payment forever without any time limit. In the event of a
 failure of your assigned hardware, backup miners are automatically activated and 
serve as a failsafe to prevent mining.</h6>
</div>
<div class="col-12 col-lg-6  p-5 border-1 mb-5">
<h3 class="text-white ">How can I buy Hardware Power?</h3>
<h6 class="mt-3 text-color">You can purchase new Hardware Power at any 
time through the Account Panel. Log in with your account or create a new 
account and send an amount of your choice to the specified Bitcoin address. 
Alternatively, you can exchange mined Bitcoins directly
 into new hardware power within seconds.</h6>
</div>
<div class="col-12 col-lg-6  p-5 border-2 mb-5">
<h3 class="text-white ">How do I receive my mined Bitcoins?</h3>
<h6 class="mt-3 text-color">You get your mined Bitcoins anytime,
 whenever you want. Log in to your account and pay out the amount 
 of Bitcoins you choose directly to the Bitcoin wallet you specify.
  You can specify your Bitcoin wallet in the settings
 or directly on the payout page.</h6>
</div>
</div>
</div>

@endsection
@section('title','Home')
@section('nava','active')