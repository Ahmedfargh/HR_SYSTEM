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
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>