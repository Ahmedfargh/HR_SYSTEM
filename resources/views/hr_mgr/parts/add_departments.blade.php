<div class="box col-lg-12 col-xs-12 col-sm-12 col-md-12">
    <div class="box-header">
        <h4>اضافه اداره</h4>
    </div>
    <div class="box-body">
        <form action="{{route('add_department')}}" class="row" method="post">
            @csrf
            <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <input type="text" class="form-control" name='DepartmentName'>
                <div class="input-group-prepend">
                    <span class="input-group-text">اسم الاداره</span>
                </div>
            </div>
            <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <input type="text" class="form-control" name='employeeId' >
                <div class="input-group-prepend">
                    <span class="input-group-text">رقم الموظف</span>
                </div>
            </div>
            <div class="input-group col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">اضافه</button>
                </div>
            </div>

        </form>
    </div>
</div>