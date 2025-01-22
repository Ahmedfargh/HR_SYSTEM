<div class="mr-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 box">
    <div class="box-header">
        <h4 class="text-center">عدد الادارات</h4>
    </div>
    <div class="box-body">
        <h3 class="text-center">
            @php
                $dep_counter=App\Models\Department::count();
            @endphp
            {{$dep_counter}}
        </h3>
    </div>
</div>
<div class="mr-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 box">
    <div class="box-header">
        <h4 class="text-center"> عدد الادارت لا تملك مديرين</h4>
    </div>
    <div class="box-body">
        <h3 class="text-center">
            @php
                $deps_without_mgrs=App\Models\Department::where("super_visisor",null)->count();
            @endphp
            {{ $deps_without_mgrs}}
        </h3>
    </div>
</div>
<div class="mr-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 box">
    <div class="box-header">
        <h4 class="text-center"> عدد الادارات لديها مدير</h4>
    </div>
    <div class="box-body">
        <h3 class="text-center"> {{$dep_counter-$deps_without_mgrs}}</h3>
    </div>
</div>