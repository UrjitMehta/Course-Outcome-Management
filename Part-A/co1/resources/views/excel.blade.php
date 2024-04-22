@include('components.navbar')
@include('components.sidebar')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Excel Genrate</title>

        <!-- Google Font: Source Sans Pro -->
        <!-- <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
            <link rel="stylesheet"
                href="{{asset('css/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    </head>

    <body class="hold-transition sidebar-mini layout-navbar">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('sweetalert::alert')
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                {{-- <h1>Registration Form</h1> --}}
                            </div>
                            <div class="col-md-12">
                                <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Excel Generate</li>
                                    </ol>
                                </div>
                            </div>
                            @if (session('success'))
                            <div class="alert alert-success">{{session('success')}} </div>

                            @endif
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- jquery validation -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Excel Sheet</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0" style="height: 500px;">
                                        <form method="POST" action="{{route('excel.save')}}" enctype="multipart/form-data">
                                            @csrf
                                            <table class="table table-head-fixed table-bordered table-striped text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Question</th>
                                                            <th colspan="6">1</th>
                                                            <th colspan="3">2</th>
                                                            <th colspan="4">3</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>CO</td>
                                                            @foreach($que as $temp)
                                                                <td colspan="2">{{$temp->co[0]}}</td>
                                                                <td colspan="2">{{$temp->co[1]}}</td>
                                                                <td colspan="2">{{$temp->co[2]}}</td>
                                                            @endforeach
                                                            @foreach($que2 as $temp1)
                                                                <td colspan="3">{{$temp1->co[0]}}</td>
                                                                <!-- <td>{{$temp1->co[1]}}</td> -->
                                                            @endforeach
                                                            @foreach($que3 as $temp2)
                                                                <td>{{$temp2->co[0]}}</td>
                                                                <td>{{$temp2->co[1]}}</td>
                                                            @endforeach

                                                        </tr>
                                                        <tr>
                                                        <td>Sub-Questions</td>
                                                            <td>a</td>
                                                            <td>b</td>                                                                                                         </td>
                                                            <td>c</td>
                                                            <td>d</td>
                                                            <td>e</td>
                                                            <td>f</td>
                                                            <td>a</td>
                                                            <td>b</td>                                                                                                         </td>
                                                            <td>c</td>
                                                            <td>a</td>
                                                            <td>b</td>
                                                        </tr>
                                                        @foreach($stud as $stud)
                                                        <tr>
                                                            <td>{{$stud->rollno}}</td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="b1[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="a1[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="c1[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="d1[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="e1[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="f1[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="a2[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="b2[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="c2[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="a3[]" ></td>
                                                            <td><input maxlength="2" onkeyup="toJump(event)" class="form-control" id="input-field"  placeholder="Enter Marks" type="text" name="b3[]" ></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Genrate</button>
                                                    </div>
                                        </form>
                                    </div>
                                </div>

                                </div>
                                    <!-- /.card -->
                                </div>
                                <!--/.col (left) -->
                                <!-- right column -->
                                <!--/.col (right) -->
                            </div>

                            <!-- /.row -->
                        </div><!-- /.container-fluid -->

                    </section>
                    <!-- /.content -->

            </div>
            @include('components.footer')
        </div>


    <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jszip/jszip.min.js"></script>
        <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');  });
        </script>
        <script>
            const exportButton= document.getElementById('btn-export');
            const table= document.getElementById('example1');

            exportButton.addEventListener('click',()=>{
                const wb=XLSX.utils.table_to_book(table,{sheet:'sheet-1'});
                XLSX.writeFile(wb, 'MyTable.xlsx');
            });
        </script>


<script>
  function toJump() {
    // Get the input element
    var inputField = document.getElementById('input-field');

    // Get the current input value
    var inputValue = inputField.value;

    // Check if the length of the input is 2
    if (inputValue.length === 2) {
      // Find the next input field
      var nextInputField = inputField.nextElementSibling;

      // Check if there is a next input field
      if (nextInputField !== null && nextInputField.tagName === 'INPUT') {
        // Focus on the next input field
        nextInputField.focus();
      }
    }
  }
</script>


</body>
</html>
