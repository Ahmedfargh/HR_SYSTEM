    <div class="card col-6">
        <div class="card-header">
            <h4>
                خصم للموظف باليوم
            </h4>
        </div>
        <div class="card-body">
            <form action="{{route('sign_punish_days')}}" method="post"class="row">
                @csrf
                <div class="col-4 input-group">
                    <input type="number"class="form-control" name="emp_id" id="pun_employee_id">
                    <span class="input-group-addon input-group-text">رقم التعريفى لموظف</span>
                </div>
                <div class="col-4 input-group">
                    <input type="number"class="form-control" name="perc"id="n_employee_id">
                    <span class="input-group-addon input-group-text"> عدد الايام</span>
                </div>
                <button type="submit"class="btn btn-danger col-6">
                    <i class="fa-solid fa-check"></i>
                </button>
                <button type="reset"class="col-6 btn btn-success">
                    <i class="fa-solid fa-check"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="card col-6">
        <div class="card-header">
            <h4>
                خصم مبلغ مالى للموظف
            </h4>
        </div>
        <div class="card-body">
            <form action="{{route('sign_punish_fee')}}" method="post"class="row">
                <div class="col-4 input-group">
                    <input type="number"class="form-control" name="emp_id" id="pun_employee_id_fee">
                    <span class="input-group-addon input-group-text">رقم التعريفى لموظف</span>
                </div>
                <div class="col-4 input-group">
                    <input type="number"class="form-control" name="perc"id="n_employee_id">
                    <span class="input-group-addon input-group-text"> المبلغ المخصوم</span>
                </div>
                <button type="submit"class="btn btn-danger col-6">
                    <i class="fa-solid fa-check"></i>
                </button>
                <button type="reset"class="col-6 btn btn-success">
                    <i class="fa-solid fa-check"></i>
                </button>
            </form>
        </div>
    </div>
