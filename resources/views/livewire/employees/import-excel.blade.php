<div class="box">
    <div class="box-header">
        <h3>اضافه موظفيين من شيت اكسل</h3>
    </div>
    <div class="box-body">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form wire:submit.prevent="Import">
            <div class="form-group">
                <label for="file">رفع ملف</label>
                <input type="file" wire:model="file" id="file" class="form-control">
            </div>

            @error('file') <span class="error">{{ $message }}</span> @enderror

            <button type="submit" class="btn btn-primary">استيراد</button>
        </form>
    </div>
</div>
