<div>
    <div class="box">
        <div class="box-header">
            تقارير عن الموظف {{$employee->name_}}
        </div>
        <div class="box-body">
            <table class="table table-hover table-striped">
                <thead>
                    <td>
                        وقت الكتابه
                    </td>
                    <td>
                        تعليق
                    </td>
                    <td>
                        رقم التقرير
                    </td>
                </thead>
                @foreach ($reports as $report)
                    <tr>
                        <td>
                            {{$report->created_at}}
                        </td>
                        <td>
                            {{$report->notes}}
                        </td>
                        <td>
                            {{$report->id}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
