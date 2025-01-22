<div class="box col-lg-12 col-xs-12 col-sm-12 col-md-12">
    <div class="box-header">
        <h4>اضافه اداره</h4>
    </div>
    <div class="box-body">
        <form action="{{route('add_department')}}" class="row" method="post">
            @csrf
            <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <input type="text" class="form-control" name='DepartmentName'id="dep_name">
                <div class="input-group-prepend">
                    <span class="input-group-text">اسم الاداره</span>
                </div>
            </div>
            <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <input type="text" class="form-control" name='employeeId'id="super_id" >
                <div class="input-group-prepend">
                    <span class="input-group-text">رقم الموظف</span>
                </div>
            </div>
            <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">اضافه</button>
                </div>
                <div class="input-group-append"id="department_id">
                    <button class="btn btn-success" onclick="update_department()"type="button">حفظ</button>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-warning" type="reset">الغاء</button>
                </div>
            </div>
            <input type="hidden" name="dep_id"value="0"id="dep_id_field">
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#department_id").hide();
    });
    
    function update_department(){
        axios.get("/department/index/update/"+$("#dep_id_field").val(),{params:{
            dep_name:$("#dep_name").val(),
            super_id:$("#super_id").val(),
        }}).then((res)=>{
            alert("تمت عمليه التحديث بنجاح");
            console.log(res);
        }).catch((error)=>{
            console.log(error);
            alert("فشلت العمليه");
        });
    }
</script>