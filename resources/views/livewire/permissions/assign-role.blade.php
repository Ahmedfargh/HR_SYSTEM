<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="box">
        @if (session("assign_role_success"))
            <div class="alert alert-success" role="alert">
                تمت العمليه بنجاح
            </div>
        @elseif (session("error_message"))
            <div class="alert alert-warning" role="alert">
                فشلت العمليه
            </div>
        @endif
        <div class="box-header">
            <h3>اعطاء صلاحيات</h3>
        </div>
        <div class="box-body">
            <div class="input-group flex-nowrap mb-3">
                <input type="text" class="form-control" wire:model="namekey" placeholder="ادخل اسم المستخدم"
                    aria-label="Username" aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping" wire:click="searchUser()">بحث اسم المستخدم</span>
            </div>

            <div class="input-group flex-nowrap mb-3">
                <select name="" id="" wire:model='selectedUsers' class="form-control" multiple>
                    <option value="">أختر المستخدمين الذى تريد اضافه الدور لهم</option>
                    @if (isset($searchNamesResults))
                    @foreach ($searchNamesResults as $results)
                    <option value="{{$results->id}}">{{$results->name}}</option>
                    @endforeach
                    @endif
                </select>
                <span class="input-group-text" id="addon-wrapping">نتيجه البحث</span>
            </div>

            <div class="input-group flex-nowrap mb-3">
                <select name="" id="" wire:model="selectedRole" class="form-control" >
                    <option value="">أختر الدور الذى تريد اضافه الدور لهم</option>
                    
                    @if (isset($roles))
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addRoleToUsers()">اضافة الدور</button>
            </div>


        </div>
    </div>
</div>