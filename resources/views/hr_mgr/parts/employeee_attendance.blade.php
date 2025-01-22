<div class="col-12">
    <h5 class="text-center">حضور الموظف {{$employee->name_}}</h5>
    <table class="table table-hover">
        <thead class="text-center">
            <td>
                الانصراف
            </td>
            <td>
                الحضور
            </td>
        </thead>
        <tbody  class="text-center">
            @if ($employee->attendance)
                @foreach ($employee->attendance as $attendance)
                <tr>
                    <td>
                        {{$attendance->check_out}}
                    </td>
                    <td>
                        {{$attendance->check_in}}
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>