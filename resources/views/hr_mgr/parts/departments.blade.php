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
           
                <tr>
                    <td>
                        {{$dep->name_}}
                    </td>
                    <td>
                        {{$dep->name}}
                    </td>
                    <td>
                        {{$dep->id}}
                    </td>
                </tr>
            @endforeach
            <tr>

            </tr>
        </table>
    </div>
</div>