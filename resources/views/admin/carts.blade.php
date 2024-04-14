
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
    <center><h1 style="font-size: 30px;"><b>Cards</b></h1></center>
    <li class="table-header">
      <div class="col col-1">Name_user</div>
      <div class="col col-2">Email_user</div>
      <div class="col col-3">phone_user</div>
      <div class="col col-4">Num carte</div>
      <div class="col col-5">Points</div>
        <div class="col col-6">
            points Action
        </div>
        <div class="col col-7">
             carte Action
        </div>

            </li>
    @foreach($cart as $cart)
    <li class="table-row">
      <div class="col col-1" data-label="name">{{$cart->name}}</div>
      <div class="col col-2" data-label="email">{{$cart->email}} </div>
      <div class="col col-3" data-label="phone">{{$cart->phone}}</div>
        @if (!empty($cart->numcarte))
        <div class="col col-4" data-label="Id_cart">{{$cart->numcarte}}</div>
        @else
        
        <div class="col col-4" style="color: cadetblue;" data-label="Cart">
            <a href="{{url('cart', $cart->id)}}">Add_cart</a>
        </div>
        @endif

        @if (!empty($cart->points))
        <div class="col col-5" data-label="points">{{$cart->points}}</div>
        @else
        <div class="col col-5" data-label="points" style="color: red;" data-label="points">0</div>
        @endif


        @if (!empty($cart->numcarte))

        <div class="col col-6" data-label="Add_points" style="color: cadetblue;" data-label="Cart">
            <a href="{{url('points', $cart->id)}}">Add / Modify points</a>
        </div>
        @else
        <div class="col col-6" data-label="Add_points" style="color:red ;" data-label="Cart">
            Not availlable
        </div>
        @endif


        
        @if (!empty($cart->numcarte))
        <div class="col col-7" data-label="delete_carte" style="color:red ;" data-label="Cart">
            <a href="{{url('delete_carte', $cart->id)}}">Delete_carte</a>
        </div> 
          @else
        <div class="col col-7" data-label="delete_carte" style="color:red ;" data-label="Cart">
            Not availlable
        </div>

        @endif
    @endforeach
  </ul>
  
</div>