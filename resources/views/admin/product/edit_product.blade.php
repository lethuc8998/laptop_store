@extends('admin.admin_layout')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Info</h3>
    </div>
    <div class="block-content" data-select2-id="11">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
            <form action="edit-product/{{$product->id}}" method="POST"  data-select2-id="10" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="one-ecom-product-name">Name</label>
                        <textarea type="text" style="resize:none" rows="1" class="form-control" id="one-ecom-product-name" name="txtProductName" >{{$product->product_name}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-description-short"> Description</label>
                    <textarea class="form-control ckeditor" id="one-ecom-product-description-short" name="txtProductDesc" rows="4">{!! nl2br(e($product->product_desc)) !!}</textarea>
                    </div>
                    <div class="form-group" data-select2-id="9">
                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                        <label for="one-ecom-product-category">Category</label>
                        <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="one-ecom-product-category" name="slCategory" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="one-ecom-product-category" tabindex="-1" aria-hidden="true" value={{$product->category_id}}>
                            <option selected value={{$product->category_id}}>{{$product->category_name}}</option>
                            @foreach ($list_category as $item)
                                @if ($item->id!=$product->category_id)
                                <option value={{$item->id}} >{{$item->category_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="one-ecom-product-price">Price in USD ($)</label>
                            <input type="number" class="form-control" id="one-ecom-product-price" name="txtPrice" value={{$product->product_price}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="one-ecom-product-price">Quanlity </label>
                            <input type="number" class="form-control" id="one-ecom-product-price" name="txtQuanlity" value={{$product->product_quanlity}} >
                        </div>
                    </div>
            
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection