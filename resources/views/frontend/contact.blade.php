@include('frontend.layouts.header')

  <div class="container">
    <div class="row">
      <h1 class="title pt-4">Let's Talk</h1>
    </div>
  </div>
  <img src="{{url('/img/frontend/user/contact-banner.png')}}" width="100%">
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-8 mx-auto pt-4">
        <p class="desc">
          If you are interested to join our team or get to know more details, please do not hesitate to contact us. 

        </p>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name*</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail *</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Message *</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="form-check pb-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Amet vitae sit sed non elemntum sodales </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
@include('frontend.layouts.footer')