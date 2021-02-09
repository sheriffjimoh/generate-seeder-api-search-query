<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Laravel</title>

    </head>
    <body>
       

        <div class="container-fluid">
             <div class="col-lg-8 offset-lg-2 text-center">
                <br>
                <br>
                 <div class="card  m-20">
                     <div class="card-title">
                         <h3>Data Records</h3>
                         <div>
                           <a href="{{ url('/api/records') }}">See all records</a>
                         </div>
   <form method="post" enctype="multipart/form-data" action="{{ url('/api/search_item') }}" class="form-inline  pull-right" style="float: right; padding-right: 10px;">
   
    {{ csrf_field() }}
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="search"  name="search" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>

                     </div>
                     <div class="card-body">
                         <table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    
    @if($data)
      @php  $sr =0  @endphp
    @foreach( $data as $row)

    @php  $sr++  @endphp
    <tr>
      <th scope="row">{{$sr}}</th>
      <th scope="row">{{$row->firstname}}</th>
       <th scope="row">{{$row->lastname}}</th>
        <th scope="row">{{$row->email}}</th>
         <th scope="row">{{$row->phone}}</th>

  
    </tr>
     @endforeach
    @else
    <tr>
       No match found
    </tr>
   
    @endif
     </tbody>
</table>
                     </div>
                 </div>
             </div>
        </div>

    </body>
</html>
