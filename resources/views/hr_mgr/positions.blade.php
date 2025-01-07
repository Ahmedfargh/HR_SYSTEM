<!DOCTYPE html>
<html>
    @livewireStyles
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
          <div class="box col-lg-12 col-md-12 col-xs-12 col-sm-12 container">
            <div class="box-header text-center">
              <h3 class="box-title">اضافه منصب</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <livewire:position.add-position />
            </div><!-- /.box-body -->
            <div class="box-footer">
            </div><!-- /.box-footer-->
          </div>
          <div class="box col-lg-12 col-md-12 col-xs-12 col-sm-12 container">
            <div class="box-header text-center">
              <h3 class="box-title">المناصب</h3>
            </div>
            <div class="box-body">
                <livewire:position.position-table />
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      @include('hr_mgr.parts.footer')
    </div><!-- ./wrapper -->

    @include('hr_mgr.parts.scripts')
  </body>
  @livewireScripts
</html>
