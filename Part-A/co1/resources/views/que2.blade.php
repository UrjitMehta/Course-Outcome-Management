<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question2</title>

    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
        <link rel="stylesheet"
            href="{{asset('css/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-navbar">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/preloader.gif" alt="AdminLTELogo" height="60" width="70">
        </div>
        <!-- Preloader -->
        @include('sweetalert::alert')
        <!-- Navbar -->
        @include('components.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('components.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
                                <li class="breadcrumb-item active">Question2</li>
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
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Set Question 2</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <form action="{{route('que2.save')}}" method="POST" id="formFeild">
                                    @csrf
                                    <div class="card-body row">
                                        <!-- <div class="form-group col-sm-6">
                                            <label for="">Enter total number of Questions in Q-2<label
                                                    style="color:red">*</label></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select class="form-control select2" style="width: 100%;"
                                                            name="totalque" value="" required>
                                                            <option value=""> Select Option</option>

                                                   @foreach($que as $ques)
                                                     <option> {{ $ques->questions }}</option>
                                                    @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group col-sm-6">
                                            <label for="">Enter total number of Questions in Q-2<label
                                                    style="color:red">*</label></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select class="form-control select2" style="width: 100%;"
                                                        id="que" name="totalque" onchange="createInputs()"  value="" required>
                                                            <option value=""> Select Option</option>

                                                            @foreach($que as $ques)
                                                              <option> {{ $ques->questions }}</option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body row">
                                        <div class="form-group col-sm-12" id="inputArea">
                                        </div>

                                    </div>
                                       <div class="card-footer">
                                       <button type="submit" class="btn btn-primary">SAVE</button>
                                     </div>
                                  </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('components.footer');

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->

    <!-- <script>
        $(document).ready(function() {
        $('select[name="division"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    // url: '/city/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="section"]').empty();
                        $.each(data, function(key, value) {
                        $('select[name="section"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
    </script> -->

    <script>
        $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a Username",
        email: "Please enter a valid Username "
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

function iAgree() {

// document.getElementById("terms").disabled = false;
document.getElementById("terms").checked="true";

}

// function showEmail(){
//    let team=document.querySelector("#authorityName").value
//    document.querySelector("#selectedData").value=team
// }
function showEmail(){
    let selectedName=document.querySelector("#reporting").value
    document.querySelector("#authorityEmail").value=selectedName
}

// function showSection(){


// }
</script>

<script>
    function createInputs() {
      const select = document.getElementById('que');
      const selectedValue = parseInt(select.value);
      const inputArea = document.getElementById('inputArea');


      let inputsHTML = '';

      inputsHTML +="<b>Enter CO and its Marks:</b> <br>";
      if (selectedValue > 0) {

        for (let i = 0; i < selectedValue; i++) {
          inputsHTML += '<input maxlength ="2" value="" class="form-control" id="co"  placeholder="Enter CO" type="text" name="co[]" onkeyup="toJump()" >&nbsp;&nbsp;';
          inputsHTML += '<input maxlength ="2" class="form-control" id="marks" placeholder="Enter Marks" type="text" name="marks[]" onkeyup="toJump()" >&nbsp;&nbsp;<br>';
          inputsHTML += '<hr><br>';
        }
      }
      inputArea.innerHTML = inputsHTML;
    }
  </script>
 <script>
    function toJump(){
    var $temp=$('#co').val();
    var $temp1=$('#marks').val();
    const select=document.querySelectorAll('#co');
    const select1=document.querySelectorAll('#marks');
    for(let i=0; i < select.length; i++)
    {
      select[i].value=$temp;
    }
    for(let i=0; i < select1.length; i++)
    {
      select1[i].value=$temp1;
    }
     // const select = document.getElementById('que');
      // const selectedValue = parseInt(select.value);
      // var maxLength = document.getElementById("input-field").maxLength;
    // var $temp1=$('#co').val($temp);
    // var temp2=$temp.next().val();
    // var temp2=$temp1.next().val($temp);
    // $temp1=$temp;
    // alert($temp1);
  }
  </script>
</body>
</html>
