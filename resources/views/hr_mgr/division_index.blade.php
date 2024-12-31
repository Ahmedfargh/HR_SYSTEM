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
          <div class="row  justify-content-center">
            @include('hr_mgr.parts.division_counter')
            
          </div>
          @include('hr_mgr.parts.add_departments')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
    </div><!-- ./wrapper -->
    @include('hr_mgr.parts.footer')
    @include('hr_mgr.parts.scripts')
  </body>
</html>
