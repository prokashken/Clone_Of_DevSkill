@extends('user.layouts.app')
@section('content')
    <!--breadcrumb-->
<div class="border-bottom border-light d-none d-sm-block">
    <div class="px-3 px-lg-5">
        <nav class="breadcrumb bg-white mb-0">
            <a class="breadcrumb-item" href="/Member">Home</a>
            <span class="breadcrumb-item active">Change Password</span>
        </nav>
    </div>
</div>
<!--/breadcrumb-->
<!-- Main content -->
<div class="content">
    <div class="p-3">
            <h4>Change Password</h4>
            <p>
                Password must be at least 6 characters long and must have at least one digit ('0'-'9')
            </p>
            <div class="row no-gutters">
                <div class="col-12 col-md-6">
                    @php
                        $id = Auth::id();
                    @endphp
                    <form method="post" action="{{url("/passchange/$id")}}">
                        @csrf
                        <div class="text-danger validation-summary-valid" style="margin-top:30px" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
                        <div class="form-group">
                            <label for="Password">Current Password</label>
                            <input type="password" class="form-control" placeholder="Current Password" required data-val="true" data-val-required="The Current password field is required." id="Password" name="OldPassword" value="{{Auth::user()->password}}" />
                        </div>
                        <div class="form-group">
                            <label for="NewPassword">New Password</label>
                            <input type="password" class="form-control" placeholder="New Password" required data-val="true" data-val-length="The New password must be at least 6 and at max 100 characters long." data-val-length-max="100" data-val-length-min="6" data-val-required="The New password field is required." id="NewPassword" maxlength="100" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="ConfirmPassword">Confirm password</label>
                            <input type="password" placeholder="Confirm Password" class="form-control" required data-val="true" data-val-equalto="The new password and confirmation password do not match." data-val-equalto-other="*.NewPassword" id="ConfirmPassword" name="password_confirmation" />
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9uo2wXt7JDTBDFsbJzvgOE1ZIrykBD8Gl2WG4LZWCJm0rQUK6ddT_-1BGfiyows0muREFeF9SQJIbnKP73aje7iW9XVPVg1LyJR6LcMA8RSOmOb8VyjLqXM7FWXzZVTkYIRkccCa4iPpch0QhRwQCcopZI-8jGAHgESxnDcqlQIx_g" /></form>
                </div>
            </div>
    </div>
</div>
<!-- /.content -->

@endsection


   