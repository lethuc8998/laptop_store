@extends('customer.layout')
@section('content')
<script>
    
    function myFunction() {
        alert("So sorry, This product is out of stock");
    }
    
    checkQuanlity=()=>{
        var selected_quanlity=$('#selected_quanlity').val();
        var quanlity = $('#quanlity').text();
        if(selected_quanlity > parseInt(quanlity)){
            alert("So sorry, You should select quanlity less than or equal product available quanlity");
            $("#form").submit(function(e){
                        e.preventDefault();
                    });
        }
        else{
            $("#form").unbind();      
        }
    }
</script>
<div class="block">
    <div class="block-content">
        <!-- Vitals -->
        <div class="row items-push">
            <div class="col-md-6">
                <!-- Images -->
                <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                <div class="row gutters-tiny js-gallery img-fluid-100 js-gallery-enabled">
                    <div class="col-12 mb-3">
                        <a class="img-link img-link-zoom-in img-lightbox" href="public/upload/{{$product->product_image}}">
                        <img class="img-fluid" src="public/upload/{{$product->product_image}}" alt="">
                        </a>
                    </div>
                   
                </div>
                <!-- END Images -->
            </div>
            <div class="col-md-6">
                <!-- Info -->
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="font-size-h2 font-w600 text-success">{{$product->product_name}}</div>
                        
                        <div class="font-size-h6 text-mute" id="quanlity">{{$product->product_quanlity}} Available</div>
                    </div>
                    
                    <div class="font-size-h2 font-w700">
                        @if ($product->product_quanlity>0)
                            <div class="font-size-h6 font-w600 text-success">IN STOCK</div>
                        @else
                            <div class="font-size-h6 font-w600 text-danger">OUT OF STOCK</div>
                        @endif
                        
                       {{'$ '.$product->product_price}}
                    </div>
                    
                </div>
                <form class="d-flex justify-content-between my-3 border-top border-bottom" action="add-to-cart-with-more" method="post" id="form" >
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value={{$product->id}}>
                    <div class="py-3">
                        <select class="form-control form-control-sm" id="selected_quanlity" name="product_qty" size="1" >
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    @if (Session('customer_id'))
                    <div class="py-3">
                        @if ($product->product_quanlity==0)
                            <button  onclick="myFunction();return false" class="btn btn-sm btn-light" >
                                <i class="fa fa-plus text-success mr-1"></i> Add to Cart
                            </button>  
                        @else  
                            <button class="btn btn-sm btn-light" onclick="checkQuanlity();">
                                <i class="fa fa-plus text-success mr-1"></i> Add to Cart
                            </button>
                        @endif
                        
                    </div>
                    @else   
                    <div class="py-3">
                        
                    {{-- <a class="btn btn-sm btn-light" href="sign-in">
                        <i class="fa fa-plus text-success mr-1"></i>Add to Cart 
                    </a> --}}
                </div>
                       
                    @endif
                    
                </form>
                <p class="text-info">{!! nl2br(e($product->product_desc)) !!}</p>
                <!-- END Info -->
            </div>
        </div>
        <!-- END Vitals -->

        <!-- Author -->
        <div class="block block-rounded block-bordered">
            <div class="block-content block-content-full d-flex justify-content-between align-items-center bg-info-light">
                <div>
                    <div class="mb-2 ">
                       <div class="font-size-h3 text-success text-center">Related Product</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-bordered">
           <div class="container">
               <div class="row">
                   @foreach ($related_product as $item)
                   <div class="col-4">
                    <div class="card-deck">
                        <div class="card">
                            <div class="block">
                                <div class="options-container">
                                    <img class="img-fluid options-item my-3" src="public/upload/{{$item->product_image}}" alt="">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="mb-2">
                                    <div class="h4 font-w600 text-success float-right ml-1"> {{'$ '.$item->product_price}}</div>
                                        <a class="h4" href="product-detail/{{$item->id}}" >{{$item->product_name}}</a>
                                    </div>
                                    <p class="font-size-sm text-muted" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; ">{{$item->product_desc}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   @endforeach
                   <div style="float: right">
                    {{$related_product->links()}}</div>
                  
               </div>
              
           </div>
        </div>
        <!-- END Author -->

        <!-- Extra Info Tabs -->
        <!-- Bootstrap Tabs (data-toggle="tabs" is initialized in Helpers.coreBootstrapTabs()) -->
        
        <!-- END Extra Info Tabs -->
    </div>
</div>
    
@endsection