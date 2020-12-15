<!-- contact Content -->
<style>
.contact-content .contact-info li span {
    width: 100%;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
</style>

<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->get('website.Home'); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->get('website.Contact Us'); ?></li>
          </ol>
      </div>
    </nav>
</div> 

<section class="pro-content">
        
  <div class="container">
    <div class="page-heading-title">
        <h2> <?php echo app('translator')->get('website.Contact Us'); ?> 
        </h2>
     
        </div>
</div>

<section class="contact-content">
  <div class="container"> 
    <div class="row">
      <div class="col-12 col-sm-12">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="form-start">
                  
                  <?php if(session()->has('success') ): ?>
                     <div class="alert alert-success">
                         <?php echo e(session()->get('success')); ?>

                     </div>
                  <?php endif; ?>

                  <form enctype="multipart/form-data" action="<?php echo e(URL::to('/processContactUs')); ?>" method="post">
                    <input name="_token" value="<?php echo e(csrf_token()); ?>" type="hidden">
                      <label class="first-label" for="email"><?php echo app('translator')->get('website.Full Name'); ?></label>
                      <div class="input-group"> 
                        
                        <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo app('translator')->get('website.Please enter your name'); ?>" aria-describedby="inputGroupPrepend" required>
                        <div class="help-block error-content invalid-feedback" hidden><?php echo app('translator')->get('website.Please enter your name'); ?></div>
                      
                      </div>
                      <label for="email"><?php echo app('translator')->get('website.Email'); ?></label>
                      <div class="input-group">                     
                          <input type="email"  name="email" class="form-control" id="validationCustomUsername" placeholder="<?php echo app('translator')->get('website.Enter Email here'); ?>.." aria-describedby="inputGroupPrepend" required>
                          <div class="help-block error-content invalid-feedback" hidden><?php echo app('translator')->get('website.Please enter your valid email address'); ?></div>
                      </div>  
                      <label for="email"><?php echo app('translator')->get('website.Message'); ?></label>
                      <textarea type="text" name="message"  placeholder="<?php echo app('translator')->get('website.write your message here'); ?>..." rows="5" cols="56"></textarea>
                      <div class="help-block error-content invalid-feedback" hidden><?php echo app('translator')->get('website.Please enter your message'); ?></div>

                      <button type="submit" class="btn btn-secondary swipe-to-top"><?php echo app('translator')->get('website.Submit'); ?> <i class="fas fa-location-arrow"></i>                 
                     
                    </form>
                </div>
          </div>     
        
          <div class="col-12 col-lg-5">
                <div id="map" style="height:400px; margin-top: 5px;">
                  
                </div>
                <?php if(!empty($result['commonContent']['settings']['latitude']) and  !empty($result['commonContent']['settings']['longitude'])): ?>
                <script>
                  var map;
                  function initMap() {

                    // The location of Uluru
                    var uluru = {lat: <?php echo e($result['commonContent']['settings']['latitude']); ?>, lng: <?php echo e($result['commonContent']['settings']['longitude']); ?> };
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 4, center: uluru});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: uluru, map: map});

                  }
                </script>

                <?php if($result['commonContent']['settings']['google_map_api']): ?>                
                <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($result['commonContent']['settings']['google_map_api']); ?>&callback=initMap"
                async defer></script>
                 <?php endif; ?>
                 <?php endif; ?>
                <p class="info">
                    <?php echo app('translator')->get('website.Contact us text'); ?>
                </p>
          </div> 
          <div class="col-12 col-lg-3">
             
              <div class="">
                  <ul class="contact-info pl-0 mb-0"  >
                      <li> <i class="fas fa-mobile-alt"></i><span><a href="tel:<?php echo e($result['commonContent']['setting'][11]->value); ?>"><?php echo e($result['commonContent']['setting'][11]->value); ?></a></span> </li>
                      <li> <i class="fas fa-map-marker"></i><a style="
    cursor: default;
" href="javascript:void(0)"><?php echo app('translator')->get('website.Ecommerce'); ?><br><?php echo app('translator')->get('website.Demo Store 3654123'); ?></a></span> </li>
                      <li> <i class="fas fa-envelope"></i><span> <a href="mailto:<?php echo e($result['commonContent']['setting'][3]->value); ?>"><?php echo e($result['commonContent']['setting'][3]->value); ?></a> </span> </li>
                      <li> <i class="fas fa-tty"></i><span> <a href="tel:<?php echo e($result['commonContent']['setting'][11]->value); ?> dir="ltr"><?php echo e($result['commonContent']['setting'][11]->value); ?></a> </span> </li>
                 
                    </ul>         
                </div>
        
          </div>
        
        </div>
      </div>
    </div>
    
  </div>      
</section>

</section><?php /**PATH C:\Users\uzair.siddiq\Downloads\Laravel Ecommerce v1.0.19\SourceCode\adminpanel\resources\views/web/contacts/contact1.blade.php ENDPATH**/ ?>