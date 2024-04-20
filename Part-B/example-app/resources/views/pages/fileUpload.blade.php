<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!-- @extends('layouts.app') -->
@include('Components.navbar')
@section('content')
@include('Components.sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style=" height: 80%;">
    <!-- Content Header (Page header) -->
@include('sweetalert::alert') 

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Excel File</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload File</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
              <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <label for="">Per Student Upload File</label>
                <input type="file"  name="file" class="form-control">
                @if ($errors->has('file'))
                    <span class="text-danger">{{ $errors->first('file') }}</span>
                @endif
                <br>
                <button class="btn btn-primary" type="submit" formaction="{{route('upload.import')}}">Upload</button>
             
                <button class="btn" style="color:white; background-color: red" formaction="{{route('upload.reset1')}}">Reset</button>   
                <span style="float: right;">
                <button class="btn" style="color:white; background-color: green" formaction="{{route('fetch1')}}">Generate chart</button></span>       

              </form>
        </div>
    </div>
    {{-- <div class="card">
        <div class="card-header">
              <form method="POST" enctype="multipart/form-data" >
                @csrf
                <label for="">Total Upload File</label>
                <input type="file"  name="file" class="form-control">
                @if ($errors->has('file'))
                    <span class="text-danger">{{ $errors->first('file') }}</span>
                @endif
                <br>
                @include('sweetalert::alert') 
                <button class="btn btn-primary" type="submit" formaction="{{route('upload.total')}}">Upload</button>
                @include('sweetalert::alert') 
                <button class="btn" style="color:white; background-color: red" formaction="{{route('upload.reset2')}}">Reset</button>   
                     
            </form>
        </div>
    </div> --}}
  </section>
 

@include('Components.footer')
@endsection 