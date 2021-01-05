<!-- contact Content -->

<div class="container-fuild">
  <nav aria-label="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
        <li class="breadcrumb-item active" aria-current="page">@lang('website.About Us')</li>
      </ol>
    </div>
  </nav>
</div> 

<section class="pro-content">
        
  <div class="container">
    <div class="page-heading-title">
        <h2> @lang('website.About Us') 
        </h2>
    </div>
  </div>

  <section class="contact-content">
    <div class="container"> 
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="row">
            <div class="col-12 col-lg-12">
              <div class="form-start">
                @if(session()->has('success') )
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
                @endif
              </div>
              <p style="margin-top:0px;">
                After 25years of successful business now AL SYED STORE is offering its services through E-Commerce at your doorstep.
              </p>
              <h3>Vision:</h3>
                  <p>Our vision is to provide quality of products for retailers as well for non-retailers at their doorstep to all over Pakistan. To satisfy our partners and customers with a unique shopping experience offering quality, variety, price, and service, based on the attention and commitment of our employees. “Committed workers, satisfied customers.”</p>
              
              <h3>Contact Us:</h3> 
                <p>alsyedstore1995@gmail.com</p>
                <div>
                  <h5>&nbsp;&nbsp;&nbsp;&nbsp;Ptcl:</h5> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;02136420000</p>
                  <h5>&nbsp;&nbsp;&nbsp;&nbsp;WhatsApp:</h5>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;03337763549</p>
                  <h5>&nbsp;&nbsp;&nbsp;&nbsp;Syed Azhar:</h5>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;03132870290</p>
                </div>
                <br>
              <h3>Visit Us:</h3> 
              <p>https://g.page/al-syed-store?gm</p>
              <img class="img-fluid" src="{{asset("images/location.jpg")}}" alt="">  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>