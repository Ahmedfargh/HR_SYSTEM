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
                <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الاسم</span>
                  </div>
                  <input type="text" class="form-control" value="{{$employee->name_}}" name='emplyoee_name'
                    placeholder="اسم الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الجنس</span>
                  </div>
                  <input type="text" class="form-control" value="{{$employee->gender}}" name="gender"
                    placeholder="جنس الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الراتب</span>
                  </div>
                  <input type="nubmer" class="form-control" value="{{$employee->salary}}" name="salary"
                    placeholder="راتب الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">الهاتف</span>
                  </div>
                  <input type="phone" class="form-control" value="{{$employee->phone}}" name="phone"
                    placeholder="هاتف الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">العنوان</span>
                  </div>
                  <input type="text" class="form-control" value="{{$employee->address}}" name="address"
                    placeholder="عنوان الموظف" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">تاريخ الانضمام</span>
                  </div>
                  <input type="datetime" class="form-control" value="{{$employee->created_at}}" name="gender"
                    placeholder="تاريخ الانضمام " aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">البريد الالكترونى</span>
                  </div>
                  <input type="email" class="form-control" value="{{$employee->email}}" name="email"
                    placeholder="تاريخ الانضمام " aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <input type="hidden" name="id" value="{{$employee->id}}">
                @csrf
                <button class="btn btn-success col-4 ml-3"id="save_btn"><i class="fa-solid fa-upload"></i></button>
              </div>
            </div>
          </div>
          
        </div>
        <div class="box col-12">
          <div class="box-body">
            @include('hr_mgr.parts.employeee_attendance')
          </div>
        </div>
        <div class="box col-12">
          <div class="box-body">
            @include('hr_mgr.parts.employee_punishments')
          </div>
        </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('hr_mgr.parts.footer')
  </div><!-- ./wrapper -->

  @include('hr_mgr.parts.scripts')
</body>
<script>
  $("#save_btn").click(function(){
    let name = $("input[name='emplyoee_name']").val();
    let gender=$("input[name='gender']").val();
    let salary=$("input[name='salary']").val();
    let phone=$("input[name='phone']").val();
    let address=$("input[name='address']").val();
    let email=$("input[name='email']").val();
    let id=$("input[name='id']").val();
    let data = {
      name:name,
      gender:gender,
      salary:salary,
      phone:phone,
      address:address,
      id:id,
      email:email,
      _token:$("input[name='_token']").val()
    };
    axios.post('/Employee/Update',data).then(res=>{
      alert("تم التعديل بنجاح");
      console.log(res.data);
    }).catch(err=>{
      alert("حدث خطأ");
      console.log(err);
    });
  });
</script>
</html>