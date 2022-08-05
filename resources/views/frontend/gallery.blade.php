@include('frontend.layouts.header')
    <style>
      * {
        box-sizing: border-box;
      }
      
      body {
        margin: 0;
        font-family: Arial;
      }
      
      .header {
        text-align: center;
        padding: 32px;
      }
      
      .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
      }
      
      /* Create four equal columns that sits next to each other */
      .column {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        max-width: 100%;
        padding: 0 4px;
      }
      
      .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
      }
      
      /* Responsive layout - makes a two column-layout instead of four columns */
      @media screen and (max-width: 800px) {
        .column {
          -ms-flex: 50%;
          flex: 50%;
          max-width: 50%;
        }
      }
      
      /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 600px) {
        .column {
          -ms-flex: 100%;
          flex: 100%;
          max-width: 100%;
        }
      }
      </style>
      
    <div class="container">

      <div class="row"> 
        <div class="column">
          <img src="{{url('/img/frontend/user/1.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/2.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/3.jpg')}}" style="width:100%">
         
        </div>
        <div class="column">
          
          <img src="{{url('/img/frontend/user/9.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/10.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/11.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/12.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/13.jpg')}}" style="width:100%">
        </div>  
        <div class="column">
          <img src="{{url('/img/frontend/user/14.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/15.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/16.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/17.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/18.jpg')}}" style="width:100%">
          <img src="{{url('/img/frontend/user/19.jpg')}}" style="width:100%">
        </div>
      </div>
    </div>
    @include('frontend.layouts.footer')