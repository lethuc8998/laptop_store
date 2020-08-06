@extends('customer.layout')
@section('content')
<?php
use Carbon\Carbon;
?>

<script>
    function myFunction() {
        alert("So sorry, This product is out of stock");
    }
</script>
@if (isset($list_product_selling) && $list_product_selling->count()>0)
<div class="mb-3 hot-product">
    <!-- Products -->
    <div class=" p-2 mb-3 mt-3 text-left " style="color: red;
    background: #aabaad4d;
    text-transform: uppercase;
    /* font-family: segoe ui light; */
    border-radius: 13px;">Best Seller</div>
    <div class="row row-deck">
     @foreach ($list_product_selling as $item)
     <div class="col-md-6 col-xl-4">
        <div class="block" style="box-sizing: border-box">
            <div style="position: relative;"><img src="public/images/best_seller.png" alt="" style="position: absolute;
                width: 76px;
                box-sizing: border-box;
                z-index: 5;
                top: 198px;
                left: 78%;"></div>
            <div class="options-container">
                <img class="img-fluid options-item" src="public/upload/{{$item->product_image}}" alt="" >
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                    <a class="btn btn-sm btn-light" href="product-detail/{{$item->id}}">
                            View
                        </a>
                        @if ($item->product_quanlity==0)
                            <button class="btn btn-sm btn-light" onclick="myFunction();return false">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </button>
                        @else
                            @if (Session('customer_id'))
                            <a class="btn btn-sm btn-light" href="add-to-cart/{{$item->id}}">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </a>
                            @else
                            <a class="btn btn-sm btn-light" href="sign-in">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </a>
                            
                            @endif
                        @endif
                        {{-- <div class="text-warning mt-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="text-white">(480)</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="mb-2">
                    <div class="h4 font-w600 text-success float-right ml-1">{{'$ '.$item->product_price}}</div>
                <a class="h4" href="product-detail/{{$item->id}}">{{$item->product_name}}</a>
                </div>
                <p class="font-size-sm text-muted" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; ">{{$item->product_desc}}</p>
            </div>
        </div>
    </div>
         
     @endforeach
   
</div>
<div class="float-right">
    {{-- <a class="btn btn-sm btn-secondary" href="be_pages_ecom_store_products.html">
        Next Page <i class="fa fa-arrow-right ml-1"></i>
    </a> --}}
     {{-- {{$list_product_hot->links()}} --}}
   
</div>
<!-- END Products -->
</div>
   
@endif
@if (isset($list_product_hot) && $list_product_hot->count()>0)
<div class="mb-3 hot-product">
    <!-- Products -->
    <div class=" p-2 mb-3 mt-3 text-left " style="color: #ff9900;
    background: #aabaad4d;
    text-transform: uppercase;
    /* font-family: segoe ui light; */
    border-radius: 13px;">Hot Product</div>
    <div class="row row-deck">
     @foreach ($list_product_hot as $item)
     <div class="col-md-6 col-xl-4">
        <div class="block" style="box-sizing: border-box">
            <div style="position: relative;"><img src="public/images/hot.png" alt="" style="    position: absolute;
             width: 78px;
             box-sizing: border-box;
             z-index: 5;
             top: -20px;
             left: -60px;"></div>
            <div class="options-container">
                <img class="img-fluid options-item" src="public/upload/{{$item->product_image}}" alt="" >
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                    <a class="btn btn-sm btn-light" href="product-detail/{{$item->id}}">
                            View
                        </a>
                        @if ($item->product_quanlity==0)
                            <button class="btn btn-sm btn-light" onclick="myFunction();return false">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </button>
                        @else
                            @if (Session('customer_id'))
                            <a class="btn btn-sm btn-light" href="add-to-cart/{{$item->id}}">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </a>
                            @else
                            <a class="btn btn-sm btn-light" href="sign-in">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </a>
                            
                            @endif
                        @endif
                        {{-- <div class="text-warning mt-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="text-white">(480)</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="mb-2">
                    <div class="h4 font-w600 text-success float-right ml-1">{{'$ '.$item->product_price}}</div>
                <a class="h4" href="product-detail/{{$item->id}}">{{$item->product_name}}</a>
                </div>
                <p class="font-size-sm text-muted" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; ">{{$item->product_desc}}</p>
            </div>
        </div>
    </div>
         
     @endforeach
   
</div>
<div class="float-right">
    {{-- <a class="btn btn-sm btn-secondary" href="be_pages_ecom_store_products.html">
        Next Page <i class="fa fa-arrow-right ml-1"></i>
    </a> --}}
     {{-- {{$list_product_hot->links()}} --}}
   
</div>
<!-- END Products -->
</div>
   
@endif

@if (isset($list_product_new) && $list_product_new->count()>0)
<div class="mb-3">
    <!-- Products -->
    <div class=" p-2  mb-2 text-left" style="color: #df0455;
    background: #aabaad4d;
    text-transform: uppercase;
    /* font-family: segoe ui light; */
    border-radius: 13px;">New Product</div>
    <div class="row row-deck">
     @foreach ($list_product_new as $item)
     <div class="col-md-6 col-xl-4">
        <div class="block" style="box-sizing: border-box">
            <div style="position: relative;"><img src="public/images/new.png" alt="" style="position: absolute;
 width:43px;
 z-index: 5;
 top: 0px;
 left: 0px;"></div>
            <div class="options-container">
                <img class="img-fluid options-item" src="public/upload/{{$item->product_image}}" alt="" >
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                    <a class="btn btn-sm btn-light" href="product-detail/{{$item->id}}">
                            View
                        </a>
                        @if ($item->product_quanlity==0)
                            <button class="btn btn-sm btn-light" onclick="myFunction();return false">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </button>
                        @else
                            @if (Session('customer_id'))
                            <a class="btn btn-sm btn-light" href="add-to-cart/{{$item->id}}">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </a>
                            @else
                            <a class="btn btn-sm btn-light" href="sign-in">
                                <i class="fa fa-plus text-success mr-1"></i> Add to cart
                            </a>
                            
                            @endif
                        @endif
                        {{-- <div class="text-warning mt-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="text-white">(480)</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="mb-2">
                    <div class="h4 font-w600 text-success float-right ml-1">{{'$ '.$item->product_price}}</div>
                <a class="h4" href="product-detail/{{$item->id}}">{{$item->product_name}}</a>
                </div>
                <p class="font-size-sm text-muted" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; ">{{$item->product_desc}}</p>
            </div>
        </div>
    </div>
         
     @endforeach
   
</div>
<div class="float-right">
    {{-- <a class="btn btn-sm btn-secondary" href="be_pages_ecom_store_products.html">
        Next Page <i class="fa fa-arrow-right ml-1"></i>
    </a> --}}
     {{-- {{$list_product_new->links()}} --}}
   
</div>
<!-- END Products -->
</div>
@endif

<div>
    <div class=" p-2  mb-2 text-left" style="color: #201d1d;
    background: #aabaad4d;
    text-transform: uppercase;
    /* font-family: segoe ui light; */
    border-radius: 13px;">Product</div>
       <!-- Products -->
       <div class="row row-deck">
        @foreach ($list_product as $item)
        <div class="col-md-6 col-xl-4">
           <div class="block">
                @if ($item->view_count>0)
                    <div style="position: relative;"><img src="public/images/hot.png" alt="" style="position: absolute;
                width: 78px;
                box-sizing: border-box;
                z-index: 5;
                top: -20px;
                left: -60px;"></div>
                @endif

               

                @if ($item->created_at > Carbon::now('Asia/Ho_Chi_Minh')->subDay(3) && $item->created_at < Carbon::now('Asia/Ho_Chi_Minh'))
                <div style="position: relative;"><img src="public/images/new.png" alt="" style="position: absolute;
                    width:43px;
                    z-index: 5;
                    top: 0px;
                    left: 0px;"></div>
                @endif


            

               <div class="options-container">
                   <img class="img-fluid options-item" src="public/upload/{{$item->product_image}}" alt="" >
                   <div class="options-overlay bg-black-75">
                       <div class="options-overlay-content">
                       <a class="btn btn-sm btn-light" href="product-detail/{{$item->id}}">
                               View
                           </a>
                           @if ($item->product_quanlity==0)
                               <button class="btn btn-sm btn-light" onclick="myFunction();return false">
                                   <i class="fa fa-plus text-success mr-1"></i> Add to cart
                               </button>
                           @else
                               @if (Session('customer_id'))
                               <a class="btn btn-sm btn-light" href="add-to-cart/{{$item->id}}">
                                   <i class="fa fa-plus text-success mr-1"></i> Add to cart
                               </a>
                               @else
                               <a class="btn btn-sm btn-light" href="sign-in">
                                   <i class="fa fa-plus text-success mr-1"></i> Add to cart
                               </a>
                               
                               @endif
                           @endif
                           {{-- <div class="text-warning mt-3">
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <span class="text-white">(480)</span>
                           </div> --}}
                       </div>
                   </div>
               </div>
               <div class="block-content">
                   <div class="mb-2">
                       <div class="h4 font-w600 text-success float-right ml-1">{{'$ '.$item->product_price}}</div>
                   <a class="h4" href="product-detail/{{$item->id}}">{{$item->product_name}}</a>
                   </div>
                   <p class="font-size-sm text-muted"  style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap;">{{$item->product_desc}}</p>
               </div>
           </div>
       </div>
            
        @endforeach
      
   </div>
   <div class="float-right">
       {{-- <a class="btn btn-sm btn-secondary" href="be_pages_ecom_store_products.html">
           Next Page <i class="fa fa-arrow-right ml-1"></i>
       </a> --}}
        {{$list_product->links()}}
      
   </div>
   <!-- END Products -->
</div>
  
@endsection