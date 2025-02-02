<div class="box col-12">
    <div class="box-header">
        <h5 class="text-center">نقل الموظف الى اداره</h5>
    </div>
    <div class="box-body">
        @if(session('messsage'))
            <div class="alert alert-success">{{session('messsage')}}</div>
        @endif
        <div class="input-group flex-nowrap">
            <select class="form-control"wire:model="dep">
                <option value="">-----فارغ-------</option>
                @foreach ($Departments as $dep)
                <option value="{{$dep->id}}">{{$dep->name}}</option>
                @endforeach
            </select>
            <button type="button"class="btn btn-success" wire:click="move_to_dep('shit')"> حفظ</button>

        </div>

    </div>
    {{-- The whole world belongs to you. --}}

</div>