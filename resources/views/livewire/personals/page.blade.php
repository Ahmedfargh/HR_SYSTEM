@php
$user_obj=auth()->user();
@endphp
<div class="box">
    <div class="box-header">
        <h3>بيانات حسابك</h3>
    </div>
    <div class="box-body">
        @php
        if ($user){
        $user_obj=$user;
        }
        @endphp
        <input type="hidden" name="user_id"value="{{auth()->user()->id}}"wire:model="user_id">
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$user_obj->name}}" aria-label="Username"
                aria-describedby="basic-addon1"disabled>
            <span class="btn btn-outline-secondary">الاسم</span>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" value="{{$user_obj->email}}" aria-label="Username"
                aria-describedby="basic-addon1"disabled>
            <span class="btn btn-outline-secondary">البريدالالكترونى</span>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" value="{{$user_obj->email}}" aria-label="Username"
                aria-describedby="basic-addon1"disabled>
            <span class="btn btn-outline-secondary">البريدالالكترونى</span>
        </div>
        <form wire:submit.prevent="save"class="input-group mb-3">
            <input type="file" wire:model="file">
            <button class="btn btn-success"type="submit">حفظ</button>
        </form>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>