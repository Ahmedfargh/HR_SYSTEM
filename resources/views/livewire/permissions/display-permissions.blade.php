<div>
    {{-- The whole world belongs to you. --}}
    {{-- Do your work, then step back. --}}
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-grip-lines"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">صلاحيات الدور </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select name="" id="" class="form-control"multiple>
                        @foreach ( $data as $permission )
                        <option value="">{{$permission}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>
</div>