<div class="box col-lg-6 col-md-6 col-xs-12 col-sm-12">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        
    @else
        
    @endif
    {{-- The whole world belongs to you. --}}
    <div class="box-header">
        <h3 class="box-title">إضافة دور</h3>
    </div>
    <div class="box-body row">
        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
            <select name="role_id" id="role_id"class="form-control"wire:model="selected_permissions" multiple>
                <option value="">اضافه دور</option>
                @foreach ($permissions as $permission)
                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                @endforeach
            </select>
            <div class="input-group-prepend">
                <span class="input-group-text">الاذن</span>
            </div>
        </div>
        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
            <input type="text" class="form-control" placeholder="اسم الدور" wire:model="name">
            <div class="input-group-prepend">
                <span class="input-group-text">اسم الدور</span>
            </div>
        </div>
        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
            <button class="btn btn-primary" wire:click="save">اضافه</button>
        </div>
    </div>
</div>
