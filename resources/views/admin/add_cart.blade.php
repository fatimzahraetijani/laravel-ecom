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
    
    

  <form id="contact" action="{{url('/add_cart', $user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Add fidelity Carte</h3>
    <br>
    <br>
    <fieldset>
      <label for=""> Fidelity Carte</label>
      <input placeholder="Write Number for fidelity carte" name="numcarte" required="" type="number" tabindex="1" required autofocus>
    </fieldset>

    <br><br><br>


    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add Cart</button>
    </fieldset>

  </form>
</div>
 
    
 </body>