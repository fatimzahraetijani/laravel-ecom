<!DOCTYPE html>
<html lang="en">
<head>
   <base href="/public">
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
    
    

  <form id="contact" action="{{url('/add_points', $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Add points</h3>
    <br>
    <br>
    <fieldset>
      <label for=""> points</label>
      <input placeholder="Write Number for points" value="{{$user->points}}" name="points"  type="number" tabindex="1" >
    </fieldset>

    <br><br><br>


    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add points</button>
    </fieldset>

  </form>
</div>
 
    
 </body>