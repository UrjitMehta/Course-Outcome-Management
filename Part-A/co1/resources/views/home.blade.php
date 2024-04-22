
@extends('layouts.app')

@section('content')
<!-- @include('components.navbar') -->
@include('components.sidebar') 
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="padding-top: 10px;">
  @include('sweetalert::alert')
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ol>
    </ul>
 </nav>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Co Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('home.save')}}" method="post" id="formFeild">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label>Enter total number of Questions in Q-1</label>
                                <select name="totalque">
                                  <option value=""> Select Option</option>

                                     @foreach($que as $ques)
                                       <option> {{ $ques->questions }}</option>
                                      @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                          <label >Enter number of Co's in Q-1</label>
                          <select id="co" name="totalco" onchange="createInputs()" >
                          <option value=""> Select Option</option>

                               @foreach($que as $ques)
                                   <option value="{{ $ques->co }}"> {{ $ques->co }}</option>
                                 @endforeach
                          </select>
                          {{-- <div id="inputArea"></div> <br> --}}
                        </div> 
                        <div class="form-group"  id="inputArea"></div>     
                            
                        
                         <div class="card-footer">
                         <button type="submit" class="btn btn-primary">SAVE</button>
                       </div>
                    </form>       
                              
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.footer') 
@endsection

<script>
  function createInputs() {
    const select = document.getElementById('co');
    const selectedValue = parseInt(select.value);
    const inputArea = document.getElementById('inputArea');

    let inputsHTML = '';

    inputsHTML +="<b>Enter CO and its Marks:</b> <br>";
    if (selectedValue > 0) {
      
      for (let i = 0; i < selectedValue; i++) {
        inputsHTML += '<input type="number" name="co[]">&nbsp;&nbsp;';
        inputsHTML += '<input type="number" name="marks[]">&nbsp;&nbsp;<br>';
        inputsHTML += '<br>';
      }
    }

    inputArea.innerHTML = inputsHTML;
  }
</script>
<!-- <script>
$.ajaxSetup({
  headers:{
    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
  }
});

$('#co').change(function(){
 alert("Hello");
  $.ajax({
    url:"{{route('get_que') }}?id="+$(this).val(),
    method:'GET',
    success: function(data){
      $('#que').html(data.html);
    }
  });
})

</script> -->



