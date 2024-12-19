<!DOCTYPE html>
<html>
  @include('hr_mgr.parts.head')
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      @include('hr_mgr.parts.sidebar')
      @include('hr_mgr.parts.header')

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->


      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="box col-lg-3 col-md-3 col-xs-6 col-sm-6">
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
            <div class="box col-lg-3 col-md-3 col-xs-6 col-sm-6">
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
            <div class="box col-lg-3 col-md-3 col-xs-6 col-sm-6">
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
            <div class="box col-lg-12 col-md-12 col-xs-12 col-sm-12">
              <div class="box-header text-center">
                <h3 class="box-title">الموظفين الحاضرون اليوم</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <table class="table table-hover">
                  <thead>
                    <td>
                      الانصراف
                    </td>
                    <td>
                      الحضور
                    </td>
                    <td>
                      الاسم
                    </td>
                    <td>
                      رقم الموظف
                    </td>
                  </thead>
                  @foreach ($attendance as $attend)
                    <tr>
                      <td>
                        {{$attend->check_out}}
                      </td>
                      <td>
                        {{$attend->check_in}}
                      </td>
                      <td>
                        {{$attend->name_}}
                      </td>
                      <td>
                        {{$attend->id}}
                      </td>
                    </tr>
                  @endforeach
                </table>
              </div><!-- /.box-body -->
              <div class="box-footer">
              </div><!-- /.box-footer-->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      @include('hr_mgr.parts.footer')
    </div><!-- ./wrapper -->

    @include('hr_mgr.parts.scripts')
  </body>
</html>
