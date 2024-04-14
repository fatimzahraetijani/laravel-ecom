
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
   <body>
    <br><br><br><br>
   <div class="container">
  <ul class="responsive-table">
    <li class="table-row" id="btn2">
        <a href="{{url('view_catagory')}}" id="btn_add"><b>Add Catagory end Schow Catagorys</b></a>
    </li>
    <br>
    <li class="table-row" style="background-color:indianred;" id="btn">
        <a href="{{url('/view_product')}}" id="btn_add"> <b>Add product</b></a>
    </li>
    <br>
    <li class="table-row" style="background-color:indianred;" id="btn2">
        <a href="{{url('show_product')}}" id="btn_add"><b>Show Products , Modifay , Delete</b></a>
    </li>
    <br>
    <li class="table-row" style="background-color:mediumvioletred;" id="btn2">
        <a href="{{url('view_product_sold')}}" id="btn_add"><b> Add the product sold</b></a>
    </li>
    <br>
    <li class="table-row" style="background-color:mediumvioletred;" id="btn2">
        <a href="{{url('show_product_sold')}}" id="btn_add"><b>Show ths Products soldes , Modifay , Delete</b></a>
    </li>
    <br>
    <li class="table-row" style="background-color:brown;" id="btn2">
        <a href="{{url('fidelity_cart')}}" id="btn_add"><b> Add points ,Add fidelity carte , Modifay , Delete</b></a>
    </li>
   <br>
    <li class="table-row" style="background-color:darkgoldenrod;" id="btn2">
        <a href="{{url('show_message')}}" id="btn_add"><b>Show Messages , Delete Message</b></a>
    </li>
    
    

   
  </ul>
  
</div>
</body>

