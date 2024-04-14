<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/style_catagory.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body>
<x-app-layout>

</x-app-layout>


<div class="container">  
    
           @include('sweetalert::alert')
    
    

  <form id="contact" action="{{url('/add_catagory')}}" method="POST">
    @csrf
    <h3>Add Catagory</h3>
    <br>
    <br>
    <fieldset>
      <input placeholder="Write catagory" name="catagory" type="text" tabindex="1" required autofocus>
    </fieldset>
    <br><br><br>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add catagory</button>
    </fieldset>
  </form>
</div>



<div class="container">
    @foreach($data as $data)
  <ul class="responsive-table">
    <li class="table-row">
      <div class="col col-1" data-label="Name">{{$data->catagory_name}}</div>
      <div class="col  col-2" id="btn_delete" data-label="Action">
        <a href="{{url('delete_catagory', $data->id)}}">Delete</a>
      </div>    
    </li>
  </ul>
  @endforeach
  
</div>
    
</body>
</html>