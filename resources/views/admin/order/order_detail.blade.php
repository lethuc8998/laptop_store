@extends('admin.admin_layout')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">All Products</h3>
        <div class="block-options">
            <div class="dropdown">
                <button type="button" class="btn-block-option" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filters <i class="fa fa-angle-down ml-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        New
                        <span class="badge badge-success badge-pill">260</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        Out of Stock
                        <span class="badge badge-danger badge-pill">24</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        All
                        <span class="badge badge-primary badge-pill">14503</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block-content">
        <!-- Search Form -->
        <div class=" alert font-size-h2 text-center alert-info my-3">Customer Information</div>
        <!-- END Search Form -->

        <!-- All Products Table -->
        @if (Session('message'))
            <h2 class="text-info">
                {{Session::get('message')}}
                {{Session::put('message',null)}}   
            </h2>
        @endif
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-vcenter text-center">
                <thead>
                    <tr>
                        <th class="text-center" >Name</th>   
                        <th class="d-none d-md-table-cell">Phone</th>
                        <th class="d-none d-sm-table-cell text-center">Email</th>
                        <th>Address</th>
                        <th class="text-center">Notes</th>
                        <th class="text-center">Emotion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                <strong>{{$order_detail->users->name}}</strong>
                            </a>
                        </td>
                       
                        <td class="d-none d-md-table-cell font-size-sm">
                            <a href="be_pages_ecom_product_edit.html">{{$order_detail->users->phone}}</a>
                        </td>
                        <td class="d-none d-md-table-cell font-size-sm">
                            <a href="be_pages_ecom_product_edit.html">{{$order_detail->users->email}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm">{{$order_detail->users->address}}</td>
                        <td>
                            <span class="badge badge-danger">{{$order_detail->shipping->notes}}</span>
                    
                        </td>
                        <td class="text-center ">
                            <span class="badge badge-success">{{$order_detail->shipping->emotion}}</span>
                        </td>
                    </tr>               
                </tbody>
            </table>
        </div>
        <div class="row">
            <hr/>
        </div>
        <div class=" alert font-size-h2 text-center alert-info my-3">Order Detail</div>
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-vcenter text-center">
                <thead>
                    <tr>
                        <th class="text-center" >Product Name</th>   
                        <th class="d-none d-md-table-cell">Price</th>
                        <th class="d-none d-sm-table-cell text-center">Quanlity</th>
                        <th>Total Price</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_detail->OrderDetail as $item)
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                <strong>{{$item->product_name}}</strong>
                            </a>
                        </td>
                       
                        <td class="d-none d-md-table-cell font-size-sm">
                            <a href="be_pages_ecom_product_edit.html">{{$item->product_price}}</a>
                        </td>
                        <td class="d-none d-md-table-cell font-size-sm">
                            <a href="be_pages_ecom_product_edit.html">{{$item->product_qty}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm">{{$item->product_price*$item->product_qty}}</td>
                        
                    </tr> 
                        
                    @endforeach
                                  
                </tbody>
            </table>
        </div>
        
        @if (Str::is($order_detail->order_status,'This order is waiting to check'))
        <div class="my-3 ">
            <div class="btn-group float-right">
                <a href="accept-order/{{$order_detail->id}}" class="btn btn-success">Accept Order</a>
                <a href="refuse-order/{{$order_detail->id}}" class="btn btn-danger">Refuse Order</a>
            </div>
        </div>
            
        @endif
        
       
    </div>
</div>

@endsection