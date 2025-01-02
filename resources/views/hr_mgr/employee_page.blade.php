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
      <section class="content row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h4>بيانات</h4>
            </div>
            <div class="box-body row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
                <div class="input-group col-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الاسم</span>
                  </div>
                  <input type="text" class="form-control" value="{{$employee->name_}}" name='emplyoee_name'
                    placeholder="اسم الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الجنس</span>
                  </div>
                  <input type="text" class="form-control" value="{{$employee->gender}}" name="gender"
                    placeholder="جنس الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الراتب</span>
                  </div>
                  <input type="nubmer" class="form-control" value="{{$employee->salary}}" name="gender"
                    placeholder="راتب الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الهاتف</span>
                  </div>
                  <input type="phone" class="form-control" value="{{$employee->phone}}" name="gender"
                    placeholder="هاتف الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">العنوان</span>
                  </div>
                  <input type="text" class="form-control" value="{{$employee->address}}" name="gender"
                    placeholder="عنوان الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-4 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">تاريخ الانضمام</span>
                  </div>
                  <input type="datetime" class="form-control" value="{{$employee->created_at}}" name="gender"
                    placeholder="تاريخ الانضمام " aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <button class="btn btn-success col-4"><i class="fa-solid fa-upload"></i></button>
              </div>
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