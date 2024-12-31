<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <table class="table table-hover">
        <thead>
          <td>
            الانصراف
          </td>
          <td>
            الحضور
          </td>
          <td>
            الاسم
          </td>
          <td>
            رقم الموظف
          </td>
        </thead>
        @foreach ($attendance as $attend)
          <tr>
            <td>
              {{$attend->check_out}}
            </td>
            <td>
              {{$attend->check_in}}
            </td>
            <td>
              {{$attend->name_}}
            </td>
            <td>
              {{$attend->id}}
            </td>
          </tr>
        @endforeach
      </table>
</div>