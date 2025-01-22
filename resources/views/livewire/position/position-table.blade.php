<div class="row">
    {{-- Success is as dangerous as failure. --}}

    <div class="input-group col-6">
        <input type="text" wire:model='search_text' class="form-control" placeholder="ابحث بالمسمى الوظيفى" name="query">
        <button class="btn btn-primary" wire:click='search'><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <table class="table table-striped table-hover col-12"style="height: 10cm; overflow-y: scroll;">
        <thead>
            @if (count($positions) == 0)
            
                <tr>
                    <td colspan="5"class="d-flex justify-content-center align-items-center"><img src="{{asset('no-record-found.png')}}" alt=""></td>

                </tr>
                @else
                <tr>
                    <th>الرقم</th>
                    <th>الراتب</th>
                    <th>الوصف</th>
                    <th>الاداره</th>
                    <th>العمليات</th>
                </tr>
            @endif
            
        </thead>
        <tbody>
            
            @foreach ($positions as $position)
            <tr>
                <td>{{ $position->id }}</td>
                <td>{{ $position->salary }}</td>
                <td>{{ $position->description }}</td>
                <td>{{ $position->department->name }}</td>
                <td>
                    <button class="btn btn-primary" onclick="edit({{ $position->id }})">تعديل</button>
                    <button class="btn btn-danger" wire:click="delete({{ $position->id }})">حذف</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<script>
    function edit(id){
        
    }
</script>