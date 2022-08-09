
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
        @foreach (News::all() as $news)
          <div class="col-md-6">
            <span class="number-box" style="float:left;margin-right:24px;">{{$news->intived_number}}</span>
            <p class="invited">
              {!!html_entity_decode($news->invited_talks)!!}
            </p>
          </div>
        @endforeach
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
