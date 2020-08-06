@extends('admin.admin_layout')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Info</h3>
    </div>
    <div class="block-content">
        <div class="row justify-content-center">
                                                      
            <div class="col-md-10 col-lg-8">
                <h1>Edit category</h1>
            <form action="edit-category/{{$category->id}}" method="POST"  data-select2-id="10">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="one-ecom-product-name">Name</label>
                        <textarea style="resize:none" rows="1" type="text" class="form-control" id="one-ecom-product-name" name="txtNameCategory" >{{$category->category_name}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-description-short">Description</label>
                        <textarea class="form-control" id="one-ecom-product-description-short" name="txtDesCategory" rows="4" >{{$category->category_desc}}</textarea>
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