@extends('admin.admin_layout')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Info</h3>
    </div>
    <div class="block-content" data-select2-id="11">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <form action="add-account" method="POST"  data-select2-id="10" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="one-ecom-product-name">User Name</label>
                        <input type="text" class="form-control" id="one-ecom-product-name" name="username" value={{old('username')}}>
                        <div class="text-danger font-size-h6"> {!!$errors->first('username')!!}</div>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-description-short"> Password</label>
                        <input type="password" class="form-control" id="one-ecom-product-description-short" name="password" value={{old('password')}} >
                        <div class="text-danger font-size-h6"> {!!$errors->first('password')!!}</div>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-description-short"> Confirm Password</label>
                        <input type="password" class="form-control" id="one-ecom-product-description-short" name="repassword" value={{old('repassword')}} >
                        <div class="text-danger font-size-h6"> {!!$errors->first('repassword')!!}</div>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-name">Full Name</label>
                        <input type="text" class="form-control" id="one-ecom-product-name" name="name" value={{old('name')}}>
                        <div class="text-danger font-size-h6"> {!!$errors->first('name')!!}</div>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-name">Phone</label>
                        <input type="text" class="form-control" id="one-ecom-product-name" name="phone" value={{old('phone')}}>
                        <div class="text-danger font-size-h6"> {!!$errors->first('phone')!!}</div>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-name">Email</label>
                        <input type="email" class="form-control" id="one-ecom-product-name" name="email" value={{old('email')}}>
                        <div class="text-danger font-size-h6"> {!!$errors->first('email')!!}</div>
                    </div>
                    <div class="form-group">
                        <label for="one-ecom-product-name">Address</label>
                        <input type="text" class="form-control" id="one-ecom-product-name" name="address" value={{old('address')}}>
                        <div class="text-danger font-size-h6"> {!!$errors->first('address')!!}</div>
                    </div>
                    <div class="form-group" data-select2-id="9">
                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                        <label for="one-ecom-product-category">Account Type</label>
                        <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="one-ecom-product-category" name="type" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="one-ecom-product-category" tabindex="-1" aria-hidden="true">
                            <option  selected>Select</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->       
                            <option value='1' >Admin</option>
                            <option value='2' >Normal</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="one-ecom-product-price">Image</label>
                            <input type="file" name="image" required="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection