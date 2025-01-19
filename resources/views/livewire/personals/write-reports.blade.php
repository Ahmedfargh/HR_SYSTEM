<div class="box-body">
    @if(session()->has("recording_reports"))
        <div class="alert alert-success" role="alert">
            تمت عمليه التقرير
        </div>
      
    @endif
    <div class="box-header">
        <h3>تقارير عن الموظف {{$employee->name_}}</h3>
    </div>
    <div class="box-body">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">النسبه المئويه</span>
            <input type="number" class="form-control" min="0"max="100"aria-describedby="basic-addon1"wire:model="percentage">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">التعليق</span>
            <textarea class="form-control" id="" cols="30" rows="10"wire:model="comment">
                
            </textarea>
        </div>
        <button class="btn btn-success"wire:click="save_report()">
            <i class="fas fa-plus"></i>
        </button>
    </div>
</div>
