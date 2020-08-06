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
        <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control form-control-alt" id="one-ecom-products-search" name="one-ecom-products-search" placeholder="Search all products..">
                    <div class="input-group-append">
                        <span class="input-group-text bg-body border-0">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </form>
        <!-- END Search Form -->

        <!-- All Products Table -->
        @if (Session('message'))
        <div id="product" style="position: fixed;
        top: 20%;
        left: 43%;
        z-index: 5;
        /* height: 200px; */
        width: 300px;
        font-size: 20px;
        font-weight: bolder;
        color: #ecf0f1;
        background: #F44336;
        padding: 85px 15px;
        border-radius: 12px;
        text-align: center;">
                {{Session::get('message')}}
                {{Session::put('message',null)}}   
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" >Name</th>
                        <th class="text-center">Image</th>
                        <th class="d-none d-md-table-cell">Description</th>
                        <th class="d-none d-sm-table-cell text-center">Added</th>
                        <th>Status</th>
                        <th class="d-none d-sm-table-cell text-right">Price</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_product as $item)
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                <strong>{{$item->product_name}}</strong>
                            </a>
                        </td>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="be_pages_ecom_product_edit.html">
                            <img src="public/upload/{{$item->product_image}}" class="img-fluid " alt="" style="width: 60px">
                            </a>
                        </td>
                        <td class="d-none d-md-table-cell font-size-sm" style="width: 36%;">
                            <a href="be_pages_ecom_product_edit.html" >{!! nl2br(e($item->product_desc)) !!}</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm">{{$item->created_at}}</td>
                        <td>
                            <span>
                                @if ($item->product_quanlity==0)
                                <span class="badge badge-danger">Out of Stock</span>
                                @else
                                <span class="badge badge-success">Available</span>
                                @endif
                            </span>
                        </td>
                        <td class="text-right d-none d-sm-table-cell font-size-sm">
                            <strong>{{$item->product_price." $"}}</strong>
                        </td>
                        <td class="text-center font-size-sm">
                        <a class="btn btn-sm btn-alt-secondary js-tooltip-enabled" href="edit-product/{{$item->id}}" data-toggle="tooltip" title="" data-original-title="View">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                        <a class="btn btn-sm btn-alt-danger js-tooltip-enabled" href="delete-product/{{$item->id}}" data-toggle="tooltip" title="" data-original-title="Delete">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                        
                    @endforeach
                   
                </tbody>
            </table>
            
        </div>
        <!-- END All Products Table -->

        <!-- Pagination -->
        {{-- <nav aria-label="Photos Search Navigation">
            <ul class="pagination pagination-sm justify-content-end mt-2">
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                        Prev
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        Next
                    </a>
                </li>
            </ul>
        </nav> --}}   <div class="float-right">{{ $list_product->links() }}</div>
        <!-- END Pagination -->
    </div>
    
</div>
    
@endsection