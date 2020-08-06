@extends('admin.admin_layout')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Info</h3>
    </div>
    <div class="block-content" data-select2-id="11">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
            <form action="edit-account/{{$account->id}}" method="POST"  data-select2-id="10" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="one-ecom-product-name">Full Name</label>
                        <textarea  type="text" style="resize:none" rows="1" class="form-control" id="one-ecom-product-name" name="name" >{{$account->name}}</textarea>
                    </div>
                    <div class="form-group ">
                        <label for="one-ecom-product-description-short"> Email</label>
                    <input type="email" class="form-control" id="one-ecom-product-description-short" name="email" value={{$account->email}}>
                    </div>
                    <div class="form-group ">
                        <label for="one-ecom-product-description-short"> Phone</label>
                    <input type="text" class="form-control" id="one-ecom-product-description-short" name="phone" value={{$account->phone}}>
                    </div>
                    <div class="form-group ">
                        <label for="one-ecom-product-description-short"> Address</label>
                        <input type="text" class="form-control" id="one-ecom-product-description-short" name="address" value={{$account->address}}>
                    </div>
                    <div class="form-group " data-select2-id="9">
                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                        <label for="one-ecom-product-category">Account Type</label>
                        <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="one-ecom-product-category" name="type" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="one-ecom-product-category" tabindex="-1" aria-hidden="true" value={{$account->type}}>
                            @if ($account->type==1)
                                <option value={{$account->type}} selected>Admin</option>
                                <option value="2" >Normal</option>
                            @else
                                <option value={{$account->type}} selected>Normal</option>
                                <option value="1" >Admin</option>
                            @endif
                            
                        </select>
                    </div>
            
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-alt-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection