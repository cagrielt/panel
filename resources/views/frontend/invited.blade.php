
<?php

use App\Models\News;

?>

@include('frontend.layouts.header')
 
 
@yield('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 pt-5 pb-5">
      <h1 class="title">Intived Talks</h1>
      <br><span class="desc-in">Keynote/Plenary Invited talks and/or Chairperson Duties
        <br>(Selected from >100 talks)</span></h1>
      </div>
    </div>
  </div>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-6">
        @foreach (News::all() as $news)
        <div class="row" style="padding-bottom:30px;">
          <div class="col-md-12">
            <span class="number-box" style="float:left;margin-right:24px;">{{$news->intived_number}}</span>
            <p class="invited">
              
              {!!html_entity_decode($news->invited_talks)!!}
            </p>
          </div>
        </div>
        @endforeach
      </div>
      {{-- <div class="col-md-6">
        <div class="row" style="padding-bottom:30px;">
          <div class="col-md-12">
            <span class="number-box" style="float:left;margin-right:24px;">2</span>
            <p class="invited">Transautophagy Meeting. 6-7 October, 2016, Warsaw, Poland.</p>
          </div>
        </div>
        <div class="row" style="padding-bottom:30px;">
          <div class="col-md-12">
            <span class="number-box" style="float:left;margin-right:24px;">4</span>
            <p class="invited">EMBO (European Molecular Biology Organization)-Cancer Sectoral Meeting. 2-4 September 2015, Prague, Czech Republic.</p>
          </div>
        </div>
        <div class="row" style="padding-bottom:30px;">
          <div class="col-md-12">
            <span class="number-box" style="float:left;margin-right:24px;">6</span>
            <p class="invited">    International Cell Death Society (ICDS) Conference on: “Cell Death and its Translational Ramification, 2-5 June, 2016, Cork, Ireland.</p>
          </div>
        </div>
        <div class="row" style="padding-bottom:30px;">
          <div class="col-md-12">
            <span class="number-box" style="float:left;margin-right:24px;">8</span>
            <p class="invited"> Healthy Minor Cereals Meeting. 10-11 May 2016, Berlin, Germany.</p>
          </div>
        </div>
        <div class="row" style="padding-bottom:30px;">
          <div class="col-md-12">
            <span class="number-box" style="float:left;margin-right:24px;">10</span>
            <p class="invited">Black Forest Winter Conference on Autophagic Membrane Trafficking and Dynamics in Ageing and Disease, 29-31 January 2016, Freiburg, Germany.</p>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="title" style="font-size:35px;">Invited Talks in Universities, Institutes, Associations</h4>
        <p class="desc">
          Several invited talks in King’s College UK, DKFZ Germany, ICGEP Italy, University of Haifa etc.<br><br>
          Several invited talks in local universities and associations, including Hacettepe University, Koc University, Yeditepe University, Bogazici University, Bilkent University, Istanbul University Çapa, Istanbul University Cerrahpasa, Istanbul Technical University, Ege University, Dokuz Eylul University, IYTE, Biochemistry Association, Pharmacologists Association, DETAE.
        </p>
      </div>
    </div>
  </div>
  @include('frontend.layouts.footer')

</html>
