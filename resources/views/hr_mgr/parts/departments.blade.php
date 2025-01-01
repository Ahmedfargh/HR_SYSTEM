<div class="box">
    <div class="box-header">
        الادرات
    </div>
    <div class="box-body">
        <table class=" table table-hover table-strip">
            <tr>
                <td>
                    اسم المدير
                </td>
                <td>
                    اسم الاداره
                </td>
                <td>
                    رقم الاداره
                </td>
            </tr>

            @foreach ($departments as $dep)

            <tr id="dep_row_{{$dep->id}}">
                <td>
                    @php
                    $emp=App\Models\Employee::find($dep->super_visisor);
                    @endphp
                    @if ($emp)
                    {{$emp->name_}}
                    @else
                    لا يوجد مدير
                    @endif
                </td>
                <td>
                    {{$dep->name}}
                </td>
                <td>
                    {{$dep->id}}
                </td>
                <td>
                    <button type="button" class="btn btn-primary"onclick="preprare_to_update({{$dep->id}},{{$dep->super_visisor}},'{{$dep->name}}')"><i class="fa-duotone fa-solid fa-gear"></i></button>
                    <button type="button" class="btn btn-danger" onclick="delete_department({{$dep->id}})"><i
                            class="fa-solid fa-trash"></i>
                        </button>
                </td>

            </tr>
            @endforeach
            <tr>

            </tr>
        </table>
    </div>
</div>
<script>
    function preprare_to_update(dep_id,super_,name){
        $("#dep_name").val(name);
        $("#super_id").val(super_);
        $("#dep_id_field").val(dep_id);
        $("#department_id").show();
    }
</script>