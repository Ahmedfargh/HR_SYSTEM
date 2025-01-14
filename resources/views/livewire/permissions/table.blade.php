<div>
    {{-- Stop trying to control. --}}
    <div class="box">
        <div class="box-header">
            <h3 class="text-center">الادوار</h3>
        </div>
        <div class="box-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>

                        <td>
                            الاذونات
                        </td>

                        <td>
                            الاسم
                        </td>
                    </tr>
                </thead>
                @foreach ($this->roles as $role)
                <tr>
                    <td class="row">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                احداث
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><button class="btn btn-danger col-3" wire:click="delete({{$role->id}})"><i
                                            class="fa-solid fa-trash"></i></button></li>
                                <li>
                                    <livewire:permissions.display-permissions class="col-3"
                                        :data='App\Models\Permissions::whereIn("id",App\Models\RoleHasPermission::where("role_id","=",$role->id)->pluck("permission_id"))->pluck("name")' />
                                </li>
                            </ul>
                        </div>



                    </td>

                    <td>
                        {{$role->name}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>