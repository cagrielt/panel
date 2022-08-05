@include('frontend.layouts.header')

  <div class="container">
    <div class="row">
      <h2 class="title">
        News
      </h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="{{url('/img/frontend/user/news1.png')}}" width="305" height="305">
        <h4 class="pt-3">Hürriyet newspaper article (Necdet Doğan) on our our discovery of the mechanism of a rare hereditary syndrome.</h4>
        <p>2 Kasım 2016<br>
          tandfonline.com</p>
        <a href="#">Share<img src="{{url('/img/frontend/user/share.png')}}"></a>
      </div>
      
      <div class="col-4">
        <img src="{{url('/img/frontend/user/news2.png')}}" width="305" height="305">
        <h4 class="pt-3">NTV news on our discovery of the mechanism of a rare hereditary syndrome involving autophagy and treatment suggestions (Important implications for Parkinson’s disease, ALS etc.)</h4>
        <p>2 Kasım 2016<br>
         <a href="https://tandfonline.com">tandfonline.com</a></p>
        <a href="#">Share<img src="{{url('/img/frontend/user/share.png')}}"></a>
      </div>      
      <div class="col-4">
        <img src="{{url('/img/frontend/user/news3.png')}}" width="305" height="305">
        <h4 class="pt-3">GazeteSU interviews on cancer</h4>
        <p>2 Kasım 2016<br>
          tandfonline.com</p>
        <a href="#">Share<img src="{{url('/img/frontend/user/share.png')}}"></a>
      </div>
    </div>
  </div>
  @include('frontend.layouts.footer')

</body>
