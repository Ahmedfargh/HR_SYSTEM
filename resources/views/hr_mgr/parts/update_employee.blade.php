<div class="update-employe dialog">
    <form class="row" method="post"action="{{route('update_employe')}}">
        @csrf
        <div class="input-group col-4">
            <input type="text" class="form-control"name="name"id="employee_name" placeholder="اسم الموظف" aria-describedby="basic-addon1"required>
            <span class="input-group-text" id="basic-addon1">اسم الموظف</span>
        </div>
        <div class="input-group col-4">
            <select name="gender" id=""id="employee_gender" class="form-control"required>
                <option value="male">ذكر</option>
                <option value="female">انثى</option>
            </select>
            <span class="input-group-text" id="basic-addon1">جنس الموظف</span>
        </div>
        <div class="input-group col-4">
            <input type="number" name="salary" id="employee_salary" class="form-control"required>
            <span class="input-group-text" id="basic-addon1">راتب الموظف</span>
        </div>
        <div class="input-group col-4">
            <input type="phone" name="phone" id="employee_phone" class="form-control"required>
            <span class="input-group-text" id="basic-addon1">هاتف الموظف</span>
        </div>
        <div class="input-group col-4">
            <input type="email" name="email" id="employee_email" class="form-control"required>
            <span class="input-group-text" id="basic-addon1">البريد الالكترونى الموظف</span>
        </div>
        <div class="input-group col-4">
            <input type="text" name="address" id="employee_address"class="form-control" required>
            <span class="input-group-text">عنوان الموظف</span>
        </div>
        <input type="hidden"id="id" name="id"value="">
        <div class="col-4">
            <button type="submit"class="btn btn-success"id="update_employee"><i class="fa-solid fa-plus"></i></button>
        </div>
    </form>
</div>
