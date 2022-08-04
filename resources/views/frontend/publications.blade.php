<?php

use App\Models\Publications;

?>
@include('frontend.layouts.header')
 
 
@yield('content')
<body>
    <div class="container">
        <div class="row">
            <h1 class="title pt-4">Publication Full List</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-70 mb-70">
        <div class="col-md-8">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                      @foreach (Publications::all() as $publications)
                <div class="vertical-timeline-item vertical-timeline-element">
                   <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                      <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                      </span>
                          <div class="vertical-timeline-element-content bounce-in">
                        <p class="pr">{{$publications->description}}</p>
                         <span class="vertical-timeline-element-date">{{$publications->year}}</span>
                         <a href="/{{$publications->link}}">Open link</a><img src="{{url('/img/frontend/user/up-link.png')}}"></i>
                      </div>
                   </div>
                </div>

                @endforeach
                
             </div>
          </div>
       </div>
    </div>
 </div>
 
 @include('frontend.layouts.footer')
 