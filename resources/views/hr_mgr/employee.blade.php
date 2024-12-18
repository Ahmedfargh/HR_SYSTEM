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
            <div class="col-12 card">
                <div class="card-header">
                    <h4>
                        اضافه موظف
                    </h4>
                </div>
                <div class="card-body">
                    <form action="" method="post"class="row">
                        <div class="input-group mb-2">
                            <input type="text"class="form-control" name="name" id="">
                            <span class="input-group-addon">اسم الموظف</span>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      @include('hr_mgr.parts.footer')
    </div><!-- ./wrapper -->

    @include('hr_mgr.parts.scripts')
  </body>
</html>