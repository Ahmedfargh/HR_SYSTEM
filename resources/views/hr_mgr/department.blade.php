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
        <div class="row container">

        </div>

          <div class="box col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="box-header text-center">
              <h3 class="box-title"> بيانات الاداره {{$department->name}}</h3>
              
            </div>
            <div class="box-body">
              <livewire:departments.data :department_id="$department->id"/>
            </div><!-- /.box-body -->
            <div class="box-footer">
            </div><!-- /.box-footer-->
          </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('hr_mgr.parts.footer')
  </div><!-- ./wrapper -->

  @include('hr_mgr.parts.scripts')
</body>

</html>