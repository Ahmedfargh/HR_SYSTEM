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
                <div class="row container-fluid">
                    <div class="col-12 card mb-2">
                        <div class="card-header">
                            <h4>
                                اضافه موظف
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register_employee') }}" method="post" class="row">
                                @csrf
                                <div class="input-group col-4">
                                    <input type="text" class="form-control" name="name" placeholder="اسم الموظف"
                                        aria-describedby="basic-addon1" required>
                                    <span class="input-group-text" id="basic-addon1">اسم الموظف</span>
                                </div>
                                <div class="input-group col-4">
                                    <select name="gender" id="" class="form-control" required>
                                        <option value="male">ذكر</option>
                                        <option value="female">انثى</option>
                                    </select>
                                    <span class="input-group-text" id="basic-addon1">جنس الموظف</span>
                                </div>
                                <div class="input-group col-4">
                                    <input type="number" name="salary" id="" class="form-control" required>
                                    <span class="input-group-text" id="basic-addon1">راتب الموظف</span>
                                </div>
                                <div class="input-group col-4">
                                    <input type="phone" name="phone" id="" class="form-control" required>
                                    <span class="input-group-text" id="basic-addon1">هاتف الموظف</span>
                                </div>
                                <div class="input-group col-4">
                                    <input type="email" name="email" id="" class="form-control" required>
                                    <span class="input-group-text" id="basic-addon1">البريد الالكترونى الموظف</span>
                                </div>
                                <div class="input-group col-4">
                                    <input type="text" name="address" id="" class="form-control" required>
                                    <span class="input-group-text">عنوان الموظف</span>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-success"><i
                                            class="fa-solid fa-plus"></i></button>
                                    <button type="reset" class="btn btn-warning"><i
                                            class="fa-duotone fa-solid fa-xmark"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-12 card mb-2">
                        <div class="card-header">
                            <h3>الموظفيين</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="employee_data">
                                <thead>
                                    <td>
                                        البريد الالكترونى
                                    </td>
                                    <td>
                                        الراتب
                                    </td>
                                    <td>
                                        الهاتف
                                    </td>
                                    <td>
                                        النوع
                                    </td>
                                    <td>
                                        الاسم
                                    </td>
                                    <td>
                                        الرقم التعريفى
                                    </td>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Employee::all()->toArray() as $emp)
                                    <tr>
                                        <td>
                                            {{ $emp['address'] }}
                                        </td>
                                        <td>
                                            {{ $emp['email'] }}
                                        </td>
                                        <td>
                                            {{ $emp['salary'] }}
                                        </td>
                                        <td>
                                            {{ $emp['phone'] }}
                                        </td>
                                        <td>
                                            {{ $emp['gender'] }}
                                        </td>
                                        <td>
                                            {{ $emp['name_'] }}
                                        </td>
                                        <td>
                                            {{ $emp['id'] }}
                                        </td>
                                        <td>
                                            <button class="btn btn-success">
                                                <i class="fa-solid fa-gear" onclick='update_dialog(@json($emp))'></i>
                                            </button>
                                            <button class="btn btn-danger"
                                                onclick="discount_employee({{$emp['id']}})"><i
                                                    class="fa-solid fa-percent"></i></button>
                                            <a class="btn btn-danger"
                                                href="{{ route('delete_employee', $emp['id']) }}"><i
                                                    class="fa-regular fa-trash-can"></i></a>
                                            <a class="btn btn-danger"
                                                href="{{route('show_employee',$emp['id'])}}"><i class="fa-solid fa-user fa-beat"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @include('hr_mgr.parts.update_employee')

                    </div>
                    @include("hr_mgr.parts.add_punishment")
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('hr_mgr.parts.footer')
    </div><!-- ./wrapper -->

    @include('hr_mgr.parts.scripts')
</body>

</html>
<script>
    $(".dialog").hide();
    let current_emp_id = null;

    function update_dialog(emp) {
        $("#employee_name").val(emp.name_);
        $("#employee_gender").val(emp.gender);
        $("#employee_salary").val(emp.salary);
        $("#employee_phone").val(emp.phone);
        $("#employee_email").val(emp.email);
        $("#employee_address").val(emp.address);
        $("#id").val(emp.id);
        $(".dialog").dialog({
            height: 250,
            width: 900,
            modal: true
        });
    }
    function discount_employee(emp_id){
        $("#pun_employee_id").val(emp_id);
        $("#pun_employee_id_fee").val(emp_id);
    }
</script>