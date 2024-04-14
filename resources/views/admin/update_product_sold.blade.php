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
    
    

  <form id="contact" action="{{url('/update_product_confirm_sold', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>update Product</h3>
    <br>
    <br>
    <fieldset>
      <label for=""> Title</label>
      <input placeholder="Write Title" value="{{$product->title}}" name="title" required="" type="text" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <label for="">Description</label>
      <input placeholder="Write Description" value="{{$product->description}}" name="description" required=""  type="text" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <label for=""> Price</label>
      <input placeholder="Write Price" value="{{$product->price}}" name="price" required=""  type="Number" width="100%" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
    <label for="">Discount Price</label>
      <input placeholder="Write Discount Price" value="{{$product->discount_price}}" name="dis_price"   min="0" type="number" tabindex="1" autofocus>
    </fieldset>
    <br>
    <fieldset>
      <label for="">Quantitiy</label>
      <input placeholder="Product Quantitiy" value="{{$product->quantity}}" name="quantity" required=""  min="0" type="number" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <label for="">Quantitiy sold</label>
      <input placeholder="Product Quantitiy" value="{{$product->quantity_sold}}" name="quantity_sold" required=""  min="0" type="number" tabindex="1" required autofocus>
    </fieldset>
    <br>
    <fieldset>
      <input  name="image"  min="0" type="file" tabindex="1"autofocus>
      <img style="margin: auto;" src="/product/{{$product->image}}" width="100px" alt="">
    </fieldset>
    <br>
    <fieldset>
      <label for=""></label>
        <select class="text color"  name="catagory" required=""  id="">
            <option value="{{$product->catagory}}" selected="">
            {{$product->catagory}}
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
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update Product sold</button>
    </fieldset>
  </form>
</div>
 
    
 </body>