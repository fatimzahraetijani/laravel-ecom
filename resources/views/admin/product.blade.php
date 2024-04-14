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
    
    

  <form id="contact" action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Add Product</h3>
    <br>
    <br>
    <fieldset>
      <input placeholder="Write Title" name="title" required="" type="text" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <input placeholder="Write Description" name="description" required=""  type="text" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <input placeholder="Write Price" name="price" required=""  type="Number" width="100%" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <input placeholder="Write Discount Price" name="dis_price" min="0" type="number" tabindex="1" autofocus>
    </fieldset>
    <br>
    <fieldset>
      <input placeholder="Product Quantitiy" name="quantity" required=""  min="0" type="number" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <input  name="image" required=""  min="0" type="file" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
        <select class="text color"  name="catagory" required=""  id="">
            <option value="" selected="">
               Add Product Catagory here
            </option>
            @foreach($catagory as $catagory)

            <option  value="{{$catagory->catagory_name}}">
                {{$catagory->catagory_name}}
            </option>
            @endforeach

        </select>
    </fieldset>
    <br><br><br>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add Product</button>
    </fieldset>
  </form>
</div>
 
    
 </body>