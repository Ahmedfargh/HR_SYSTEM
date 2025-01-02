<div class="col-12">
    <h5 class="text-center">خصومات الموظف  {{$employee->name_}}</h5>
    <table class="table table-hover">
        <thead  class="text-center">
            <td>
                ساعه
            </td>
            <td>
                اجمالى الخصومات
            </td>
        </thead>
        <tbody class="text-center">
            @if ($employee->punishment)
                @foreach ($employee->punishment as $punishment)
                <tr>
                    <td>
                        {{$punishment->at_}}
                    </td>
                    <td>
                        {{$punishment->total_}}
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>