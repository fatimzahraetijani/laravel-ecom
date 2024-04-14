
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
    <center><h1 style="font-size: 30px;"><b>Messages</b></h1></center>
    <li class="table-header">
      <div class="col col-1">Message</div>
      <div class="col col-2">Name_user</div>
      <div class="col col-3">Email_user</div>
      <div class="col col-4">phone_user</div>
      <div class="col col-5">date of sendig message</div>



    </li>
    @foreach($message as $message)
    <li class="table-row">
      <div class="col col-1" data-label="Message">{{$message->message}}</div>
      <div class="col col-2" data-label="Name">{{$message->name}} <br> </div>
      <div class="col col-3" data-label="Email">{{$message->email}}</div>
      <div class="col col-4" data-label="Phone">{{$message->phone}}</div>
      <div class="col col-5" data-label="Date"><p>{{ $message->created_at->format('d/m/Y H:i:s') }}</p></div>
      
    @endforeach
  </ul>
  
</div>