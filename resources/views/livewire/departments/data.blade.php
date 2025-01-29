<div>
    {{-- The whole world belongs to you. --}}
    
    <div class="input-group mb-3">
        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"value="{{$Department->name}}">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">اسم الاداره</span>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{$Department->Manager?->name_}}"aria-label="Username" aria-describedby="basic-addon1"disabled>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon1">مدير الاداره</span>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{$Department->created_at}}"aria-label="Username" aria-describedby="basic-addon1"disabled>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon1"> تاريخ الاضافه</span>
        </div>
    </div>
</div>
