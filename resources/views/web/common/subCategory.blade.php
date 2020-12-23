{{-- @include('web.common.product_card_style.'.$result['commonContent']['settings']['web_card_style']) --}}
{{-- php dd($result['categories']);?> --}}
<div class="product">
    <article>
      {{-- ? $cate = []; $cate[] = $result['categories'][2]->childs; ?>
      @foreach($cate as $key=>$category) --}}

        <div class="thumb">
            <div class="product-hover d-none d-lg-block d-xl-block">
              <div class="icons">    

                <div class="icon swipe-to-top modal_show " categories_id ="{{$categories->categories_id}}" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Quick View')">
                  <i class="fas fa-eye"></i>
                </div>

              </div>
                    <a class="btn btn-block  btn-secondary swipe-to-top" href="{{ URL::to('shop?category='.$categories->slug)}}" data-toggle="tooltip" data-placement="bottom" title="@lang('website.View')">@lang('website.View')</a>
                    {{-- <a href="shop?category={{$categories->slug}}" target="_blank" class="btn btn-block  btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Category Link')">@lang('website.Category Link')</a> --}}
            </div>
            <img class="img-fluid" src="{{asset('').$categories->image_path}}" alt="{{$categories->categories_name}}">
        </div>
        <div class="content">
            <span class="tag">
                <?php 
                
                $cat_name = '';
                $cate = [];

                // foreach($cate as $key=>$category){
                    $cat_name = $categories->categories_name;
                // }
                echo $cat_name;
                ?>         
            </span>
            {{-- <h5 class="title text-center"><a href="{{ URL::to('/product-detail/'.$products->products_slug)}}">{{$products->products_name}}</a></h5> --}}
            {{-- <div class="expand-detail">
                ?=/*stripslashes($products->products_description)*/?>
            </div> --}}
        </div>  
        {{-- @endforeach --}}
    </article>
</div>


<!-- Products content -->

{{-- @if(!empty($result['categories']))
<section class="categories-content pro-content">
    <div class="container">
      <div class="products-area">
         <div class="row justify-content-center">
           <div class="col-12 col-lg-6">
             <div class="pro-heading-title">
               <h2> @lang('website.SUB CATEGORIES')
               </h2>
               </div>
             </div>
         </div>
      
      </div>
    </div>
   <div class="row">
    ?php $counter = 0;?>
    @foreach($result['categories'] as $categories_data)
        @if($counter<=7)
        
          <div class="col-12 col-lg-4 col-sm-6 griding">
          <div class="">
            
            <figure class="categories-image">
              <a href="{{ URL::to('/shop?category='.$categories_data->slug)}}">
                <img class="img-fluid" src="{{asset('').$categories_data->image_path}}" alt="{{$categories_data->categories_name}}">
                <div class="categories-title">
                  <h3>{{$categories_data->categories_name}}</h3>
                </div>
              </a>
            </figure>

          </div>

        @endif
        ?php $counter++;?>
    @endforeach
   </div>
  </section>
  @endif --}}