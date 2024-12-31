<div class="box col-lg-3 col-md-3 col-xs-6 col-sm-6 mr-2">
  <div class="box-header text-center">
    <h3 class="box-title">عدد الموظفين</h3>

  </div>
  <div class="box-body">
    <p>
      <h1 class="text-center">{{App\Models\Employee::count()}}</h1>
    </p>
  </div><!-- /.box-body -->
  <div class="box-footer">
  </div><!-- /.box-footer-->
</div>
<div class="box col-lg-3 col-md-3 col-xs-6 col-sm-6  mr-2">
  <div class="box-header text-center">
    <h3 class="box-title"> اجمالى الرواتب</h3>

  </div>
  <div class="box-body">
    <p>
      <h1 class="text-center">{{App\Models\Employee::sum("salary")}}</h1>
    </p>
  </div><!-- /.box-body -->
  <div class="box-footer">
  </div><!-- /.box-footer-->
</div>
<div class="box col-lg-3 col-md-3 col-xs-6 col-sm-6  mr-2">
  <div class="box-header text-center">
    <h3 class="box-title">الموظفين الحاضرون اليوم</h3>

  </div>
  <div class="box-body">
    <p>
      <h1 class="text-center">
        @if($attendance)
            {{ count($attendance)}}
        @else
            0
        @endif
      </h1>
    </p>
  </div><!-- /.box-body -->
  <div class="box-footer">
  </div><!-- /.box-footer-->
</div>