@extends('admin.admin_layout')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Info</h3>
    </div>
    <div class="block-content" data-select2-id="11">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
            <form action="change-password/{{$account->id}}" method="POST"  data-select2-id="10" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="one-ecom-product-name">Username</label>
                        <textarea readonly type="text" style="resize:none" rows="1" class="form-control" id="one-ecom-product-name" >{{$account->username}}</textarea>
                    </div>
                    <div class="form-group ">
                        <label for="one-ecom-product-description-short"> Old Password</label>
                    <input type="password" class="form-control" id="one-ecom-product-description-short" name="oldpassword" >
                    <div class="text-danger font-size-h6"> {!!$errors->first('oldpassword')!!}</div>
                    </div>
                    <div class="form-group ">
                        <label for="one-ecom-product-description-short"> New Password</label>
                    <input type="password" class="form-control" id="one-ecom-product-description-short" name="password" >
                    <div class="text-danger font-size-h6"> {!!$errors->first('password')!!}</div>
                    </div>
                    <div class="form-group ">
                        <label for="one-ecom-product-description-short"> Confirm Password</label>
                        <input type="password" class="form-control" id="one-ecom-product-description-short" name="repassword">
                        <div class="text-danger font-size-h6"> {!!$errors->first('repassword')!!}</div>
                    </div>
                   
            
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-alt-success">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection