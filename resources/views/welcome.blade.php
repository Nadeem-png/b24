@extends('master/layout')
@section('content')
<style>

.btn-white{
    background-color:white;
}
.text-color{
    color:#919191;
}
.border-1{
border-right:1px solid #919191;
border-bottom:1px solid #919191;
border-radius:0 0 7px ;

}
.border-2{
border-left:1px solid #919191;
border-bottom:1px solid #919191;
border-radius:0 0 0 7px;

}
.border-3{
border-top:1px solid #919191;
border-right:1px solid #919191;
border-radius:0 7px;

}
.border-4{
border-top:1px solid #919191;
border-left:1px solid #919191;
border-radius:7px 0 0 0;

}

.bg{
    background-color:#2b2b2b;

    border-radius:7px;

}
.bg1{
    border:15px solid #2b2b2b;
    border-radius:7px;
    background-color:#12171A;
}
.div4{
    background-image:url({{asset('image/datacenter-iceland.jpg')}});
    background-repeat: no-repeat;
        background-size: cover;
        height:auto;
        width:100%;
        border-radius:10px;
}
.div5{
    border-radius:7px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<div class="container container-sm mt-5">
<h2 class="text-center text-white">Mining Bitcoins for a brighter future</h2>
<div class="row">
<div class="col-12 col-lg-6 mt-5 text-center">
<h6 class="bg-white py-2 px-3 text-black  div5 font-weight-bold">Only $ 0.04/kWh electricity cost</h6>
<h6 class="bg-white py-2 px-3 text-black div5 font-weight-bold">Colocation in Iceland & Kazakhstan</h6>
<h6 class="bg-white py-2 px-3 text-black div5 font-weight-bold">Over 1200 mining devices</h6>
<h6 class="bg-white py-2 px-3 text-black div5 font-weight-bold">Paralell fail-safes for each miner</h6>

</div>

<div class="col-12 col-lg-6 mt-5">
<h5 class="text-start text-color">
The possibility to mine your own currency should fascinate everyone! Decentralised and with maximum freedom and no limits. That is why we offer cloud mining devices with high computing power at a lucrative price. No hidden costs or fees, simple, secure 
and without any waiting time! Directly from home, just a few clicks away.</h5>
<a href=""><h5 class="text-white">Special Gift – 850 GH/s for free</h5></a>
</div>
</div>



</div>



<div class="container mt-5 div4" >
<div class="container">
<h2 class="text-center py-4 text-white">Top technology with low electricity costs</h2>
<div class="row">
<div class="col-6 col-lg text-center text-white mt-4 mb-4">
<h5 class="mb-3">12 nm</h5>
<h5>Processor chip size</h5>
</div>
<div class="col-6 col-lg text-center text-white mt-4 mb-4">
<h5 class="mb-3">118.5 TH/s</h5>
<h5>Max Power per Device</h5>
</div>
<div class="col-6 col-lg text-center text-white mt-4 mb-4">
<h5 class="mb-3">$ 0.04/kWh</h5>
<h5>Electricity costs</h5>
</div>
<div class="col-6 col-lg text-center text-white mt-4 mb-4">
<h5 class="mb-3">1200+</h5>
<h5>Total Mining Devices</h5>
</div>
<div class="col-6 col-lg text-center text-white mt-4 mb-4">
<h5 class="mb-3">3750 W</h5>
<h5>Power Supply</h5>
</div>
</div>
</div>

</div>
<div class="container container-sm mt-5">
<div class="row">
<div class="col-12 col-lg-6">
<h2 class="text-white mb-5 font-wight-bold">The most lucrative Bitcoin mining yet
Through carefully </h2>
<h5 class="text-color">

Through carefully planned and calculated hardware
 acquisition and management in <strong> 2 steadily growing mining farms,</strong> 
  we are close to mine Bitcoins at an electricity price of almost <strong> $ 0.03/kWh.</strong>
   This offers us the unique opportunity to share this advantage with other
    people in order to strengthen
 and expand the global establishment of Bitcoins. What we already offer:
</h5>
<ul class="mt-4 text-color">
<li><h5>Direct deposit and withdrawal within minutes</h5></li>
<li><h5>Active hardware that is directly available and assigned</h5></li>
<li><h5>A highly exclusive and extensive <a href=" font-weight-bold" style="text-decoration:none; color:white;"> partner network </a></h5></li>
<li><h5>Bitcoin mining without time limit or fees</h5></li>
<li><h5>Free hardware power (limited time offer)</h5></li>
</ul>
<a href="" class="btn bg-white text-dark mt-4  py-2 px-5 m font-weight-bold text-center " >Get Free Hardware power</a>
</div>

<div class="col-12 col-lg-6 mt-5">
<div class="row">
<div class="col-6   mb-4 ">
<div class="card bg1 h-100 text-center p-2">
  <div class="card-body">
    <em><p class="text-color card-text ">MINED BITCOINS</p></em>
<h3 class="text-white card-text">8.6346 BTC</h3>
  </div>
</div>
</div>
<div class="col-6    mb-4">
<div class="card text-center h-100 bg p-2">
  <div class="card-body">
    <em><p class="text-color catd-text">MAX POWER CAPACITY</p></em>
<h3 class="text-white card-text">12400000.0 TH/s</h3>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-6  mb-4 ">
<div class="card text-center h-100 bg p-2">
  <div class="card-body">
    <em><p class="text-color card-text ">MINER UPTIME</p></em>
<h3 class="text-white card-text">8 days</h3>
  </div>
</div>
</div>
<div class="col-6 mb-4">
<div class="card bg1 text-center h-100 p-2 ">
  <div class="card-body">
    <em><p class="text-color card-text ">TOTAL USED POWER</p></em>
<h3 class="text-white catd-text">352357.1 TH/s</h3>
  </div>
</div>
</div>
</div>
   
<div class="row">
<div class="col-6  mb-4">
<div class="card text-center h-100 bg1 p-2">
  <div class="card-body">
    <em><p class="text-color card-text ">USER WITHDRAWALS</p></em>
<h3 class="text-white card-text">6.2725 BTC</h3>
  </div>
</div>
</div>
<div class="col-6  mb-4">
<div class="card bg p-2 h-100 text-center">
  <div class="card-body">
    <em><p class="text-color card-text">TOTAL USERS</p></em>
<h3 class="text-white card-text">127968</h3>
  </div>
</div>
</div>
</div>



</div>
</div>
</div>
  


<div class="container container-sm mt-5">
<div class="row">

<div class="col-12 col-lg-6 text-center p-5 border-1">
<img src="{{asset('image/news.png')}}" alt="" class="image-fluid w-25  bg-white p-2">
<h1 class="mt-2 text-white">Our Recent News</h1>
</div>

<div class="col-12 col-lg-6  p-5 border-2 ">
<span class="font-weight-bold rounded bg-white text-dark py-2 px-3 ">2021-07-12</span>
<h3 class="text-white mt-3">Hardware arrives in the new colocation</h3>
<p class="text-color">Our new colocation in <strong>Kazakhstan</strong> is ready to go online. With a +37% expansion of our hardware network, we expect the majority of our mining devices to be active there soon, mining the most Bitcoins for all our users. However, our mining farm in Iceland will not be affected or
 neglected by this and will at least always be available as a failover.</p>
</div>
 
<div class="col-12 col-lg-6  p-5 border-3 mt-5">
<span class="font-weight-bold rounded bg-white text-dark py-2 px-3 ">2021-06-12</span>
<h3 class="text-white mt-3">Expansion of our network ahead</h3>
<p class="text-color">To meet the high demand, we have decided to 
generously expand our Bitcoin mining network. Through careful planning and structural analyses, we will rent more mining data centres that stand out due to their particularly low electricity prices. This offers every user as well as us a more lucrative way 
to mine Bitcoins. More details will be revealed soon.</p>
</div>
<div class="col-12 col-lg-6  p-5 border-4 mt-5">
<span class="font-weight-bold rounded bg-white text-dark py-2 px-3 ">2021-07-12</span>
<h3 class="text-white mt-3">New brand and website launched</h3>
<p class="text-color">It is with pleasure that we announce our 
new design and website under the domain www.b24-mining.com. Many
 innovations and improvements are waiting for you. If you find 
any comments or errors, please do not hesitate to email our team.</p>
</div>
</div>
</div>

<h2 class="text-center text-white mt-5 mb-5">Mining Bitcoins for a brighter future</h2>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
      <th>Points</th>
   
  </tr>
    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
<td>50</td>
<tr>
</table>
</div>

<div class="container container-sm  text-center">
<h2 class="font-weight-bold mt-5 mb-5 text-white">Introducing our Team</h2>
<a href="" class="btn btn-white font-weight-bold py-2 px-5 ">Learn More About B24 Mining</a>
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
