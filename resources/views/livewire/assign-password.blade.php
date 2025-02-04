<div>
    <div class="form-group has-feedback">
        <input type="password" name="email" wire:model="password"class="form-control" placeholder="كلمه السر" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" name="password" wire:model="confirm_password" class="form-control" placeholder="تأكيد كلمه السر" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row container">
    
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <button type="button" wire:click='assign()' class="btn btn-primary btn-block btn-flat">تعيين</button>
        </div><!-- /.col -->
    </div>
</div>