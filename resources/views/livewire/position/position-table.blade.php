<div>
    {{-- Success is as dangerous as failure. --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>الرقم</th>
                <th>الراتب</th>
                <th>الوصف</th>
                <th>الاداره</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr>
                    <td>{{ $position->id }}</td>
                    <td>{{ $position->salary }}</td>
                    <td>{{ $position->description }}</td>
                    <td>{{ $position->department->name }}</td>
                    <td>
                        <button class="btn btn-primary" wire:click="edit({{ $position->id }})">تعديل</button>
                        <button class="btn btn-danger" wire:click="delete({{ $position->id }})">حذف</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
