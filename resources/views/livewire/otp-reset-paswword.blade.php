<div class="container-fluid">
    <div class="form-group has-feedback">
        <input type="email" name="email" wire:model="email" class="form-control" placeholder="البريد الالكترونى" />
        @if ($is_sent)
            <input type="text" wire:model="otp" class="form-control" placeholder="otp" />
        @endif
    </div>
    <div class="row">
       
        @if ($is_sent)
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button wire:click='redirectToResetPassword()'class="btn btn-primary btn-block btn-flat">اعاده تعيين كلمه سر </button>
                
            </div><!-- /.col -->
        @endif
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button wire:click='SendOtp()'class="btn btn-primary btn-block btn-flat">ارسال otp</button>

        </div><!-- /.col -->
    </div>
</div>