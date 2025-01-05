<!DOCTYPE html>
<html>
@include('hr_mgr.parts.head')

<body class="skin-blue">
  <!-- Site wrapper -->
  <div class="wrapper">
    @include('hr_mgr.parts.sidebar')
    @include('hr_mgr.parts.header')

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->


    <!-- =============================================== -->

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row container">
        </div>
        <div class="box col-lg-12 col-md-12 col-xs-12 col-sm-12 container">
          <div class="box-header text-center">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title=""
                data-original-title="Collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title=""
                data-original-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="row">
              
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <button class="btn btn-primary" id="addCandidate"><i
                    class="fa-duotone fa-solid fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="box-body">
            <table class="table table-strip table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>السىيره الذاتيه</th>
                  <th>البريد الالكترونى</th>
                  <th>الهاتف</th>
                  <th>المنصب</th>
                  <th>الاسم</th>
                  <th>الرقم التعريف</th>
                </tr>
              </thead>
              <tbody>
                @foreach($candidates as $candidate)
                <tr>
                 
                  <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editCandidate"><i
                        class="fa-duotone fa-solid fa-edit"></i></button>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteCandidate"><i
                        class="fa-duotone fa-solid fa-trash"></i></button>
                  </td>
                  <td>{{ $candidate->resume }}</td>
                  <td>{{ $candidate->email }}</td>
                  <td>{{ $candidate->phone }}</td>
                  <td>{{ $candidate->Positions->title }}</td>
                  <td>{{ $candidate->name }}</td>
                  <td>{{ $candidate->id }}</td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div id="adding_candidate">
              <form class="row" action="" method="post"enctype="">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="الاسم"  aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">اسم المرشح</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="input-group mb-3">
                    <input type="tel" class="form-control" placeholder="الهاتف" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">الهاتف</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="البريد الالكترونى" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">البريد الالكترونى</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="input-group mb-3">
                    <select name="status" id=""name="pending" class="form-control" aria-describedby="basic-addon2">
                      <option value="pending">معلق</option>
                      <option value="accepted">مقبول</option>
                      <option value="rejected">مرفوض</option>

                    </select>
                    <span class="input-group-text" id="basic-addon2">حاله المرشح</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="input-group mb-3">
                    @php
                    $positions = App\Models\Positions::all();
                    @endphp
                    <select name="position" id=""name="pending" class="form-control" aria-describedby="basic-addon2">
                      @foreach($positions as $position)
                      <option value="{{ $position->id }}">{{ $position->title }}</option>
                      @endforeach
                    </select>
                    <span class="input-group-text" id="basic-addon2"> المنصب</span>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="input-group mb-3">
                    <input type="file" name="cv_pdf" id="cv"accept=".pdf" required>
                    <span class="input-group-text" id="basic-addon2" >السيره الذاتيه *.pdf فقط</span>
                  </div>
                </div>
              </form>
            </div>
          </div><!-- /.box-footer-->
        </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('hr_mgr.parts.footer')
  </div><!-- ./wrapper -->

  @include('hr_mgr.parts.scripts')
</body>
<script>
  $("#adding_candidate").hide();
  $("#addCandidate").click(function(){
    $("#adding_candidate").toggle();
  });
</script>
</html>