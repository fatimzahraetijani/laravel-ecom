
<head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" >
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link href="admin/style_home.css" rel="stylesheet" />

      <!-- font awesome style -->
   </head>

<x-app-layout>

</x-app-layout>
@include('sweetalert::alert')


<div class="container">
  <ul class="responsive-table" style="text-align: center;">
    <br>
    <center><h1 style="font-size: 30px;"><b>The Products Solds</b></h1></center>
    <li class="table-header">
      <div class="col col-1">Title</div>
      <div class="col col-2">Description</div>
      <div class="col col-3">Quantitiy</div>
      <div class="col col-4">Quantitiy sold</div>
      <div class="col col-5">Catagory</div>
      <div class="col col-6">Price</div>
      <div class="col col-7">Discount Price</div>
      <div class="col col-8">Product image</div>
      <div class="col col-9">Modifay</div>
      <div class="col col-10">delete</div>



    </li>
    @foreach($product as $product)
    <li class="table-row">
      <div class="col col-1" data-label="Title">{{$product->title}}</div>
      <div class="col col-2" data-label="Description">{{$product->description}} <br> </div>
      <div class="col col-3" data-label="Quantity">{{$product->quantity}}</div>
      <div class="col col-4" data-label="Quantity sold">{{$product->quantity_sold}}</div>
      <div class="col col-5" data-label="Catagory">{{$product->catagory}}</div>
      <div class="col col-6" data-label="Price">{{$product->price}}MAD</div>
      <div class="col col-7" data-label="Dicscount price">{{$product->discount_price}}MAD</div>
      <div class="col col-8" data-label="image"> <img width="60px" height="60px" src="/product/{{$product->image}}" alt=""></div>

      <div  class="col col-9" id="btn_modifay" data-label="Modifier">
         <a   href="{{url('update_product_sold', $product->id)}}">Modifay</a>
      </div>

      <div class="col  col-10" id="btn_delete" data-label="delet"
      ><a   href="{{url('delete_product_sold', $product->id)}}">delete</a>
      </div>
    @endforeach
  </ul>
  
</div>