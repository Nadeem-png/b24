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
</style>


<div class="container container-sm margin text-center"  >
<img src="" alt="">
<h1 class="text-center text-white mb-4">Company</h1>
<h5 class="text-color">Our mission is to promote the trade and use of
 Bitcoins and to strengthen the establishment of Bitcoin as a currency
  in its own right. What does it take? A simple and free solution to
   generate Bitcoins for everyone and make them accessible.
 And that is what we offer!</h5>
</div>


<div class=" question p-4 mt-5 text-center container container-sm">
<h3 class="text-white">Quick help with frequently asked questions
<a href="/help" class=" btn py-2 px-4 rounded-pill " style="background-color:white; color:black"><strong>?</strong> Help section</a>
</h3>
</div>


<div class="container container-sm  text-center">
<h2 class="font-weight-bold mt-5 mb-5 text-white">Our Representatives</h2>
<div class="row mt-5">
<div class="col-6 col-lg text-white mb-2">
<img src="{{asset('image/cfo.jpg')}}" alt="" class="img-fluid rounded-circle">
<h4 class="mt-3 mb-3">Susanne Mason</h4>
<h6 class="mb-4">Chief Financial Officer</h6>
<p class="text-color">Worked at 2 well-known crypto exchanges, gained insights into the crypto trading world</p>
</div>
<div class="col-6 col-lg text-white mb-2">
<img src="{{asset('image/cto.jpg')}}" alt="" class="img-fluid rounded-circle">
<h4 class="mt-3 mb-3">Nazar Petrosyan</h4>
<h6 class="mb-4">Chief Technology Officer</h6>
<p class="text-color">Fascinated by crypto technologies, gained experience at a strong competitor of ours</p>
</div>
<div class="col-6 col-lg text-white mb-2">
<img src="{{asset('image/ceo.jpg')}}" alt="" class="img-fluid rounded-circle">
<h4 class="mt-3 mb-3">Leon Gregory</h4>
<h6 class="mb-4">CEO & Founder</h6>
<p class="text-color">15 years of professional experience at a traditional bank is enough – it's time to establish modern technologies!</p>
</div>
<div class="col-6 col-lg text-white mb-2">
<img src="{{asset('image/cf.jpg')}}" alt="" class="img-fluid rounded-circle">
<h4 class="mt-3 mb-3">Gorden Barlow</h4>
<h6 class="mb-4">Gorden Barlow</h6>
<p class="text-color">PhD in computer science, expert for servers, hardware and large-scale networks</p>
</div>
<div class="col-6 col-lg text-white mb-2">
<img src="{{asset('image/hm.jpg')}}" alt="" class="img-fluid rounded-circle">
<h4 class="mt-3 mb-3">Anna Womack</h4>
<h6 class="mb-4">Head of Communications</h6>
<p class="text-color">Active communication with people is the key for lasting satisfaction and solving problems</p>
</div>
</div>

</div>

@endsection
@section('title','Home')
@section('nava','active')