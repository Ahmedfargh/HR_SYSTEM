<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="form-group row">
        
        @if (session()->has('message')) 
        <div class="alert alert-success col-12"role="alert"> {{ session('message') }} </div>
        @endif
        <div class="input-group col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <input type="number" class="form-control" id="position_name" wire:model="salary">
            <label for="salary" class="input-group-text">الراتب </label>
        </div>
        <div class="input-group col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <input type="" class="form-control" id="position_name" wire:model="description">
            <label for="position_name" class="input-group-text">وصف الوظيفى</label>
        </div>
        <div class="input-group col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <input type="" class="form-control" id="position_name" wire:model="title">
            <label for="position_name" class="input-group-text">اسم المنصب </label>
        </div>
        <div class="input-group col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <select class="form-control" id="department_id" wire:model="department">
                <option value="">اختر اداره</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
            <label for="department_id"class="input-group-text">الاداره</label>
        </div>
        <div class="input-group col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <button class="btn btn-primary" wire:click="create">اضافه</button>
        </div>
    </div>
</div>