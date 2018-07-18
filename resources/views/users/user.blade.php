

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('myprofile/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('myprofile/css/resume.min.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ secure_asset('myprofile/img/akiaki.jpg') }}" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            
   
            
          </li>
          <li class="nav-item">
            <br>
            <font size="6" color="#ffffff">Point</font><br>
            
            <font size="6" color="#ffffff">{{$points}}P</font><br><br>
         
            
            <a href="{{route ('profileedit.get', $user->id) }}" class="square_btn">EDIT</a>
            
            
            
  </li>
          
        </ul>
      </div>
    </nav>

      <section class=" p-100 p-lg-5\ 
      " id="about">
        <div class="my-auto">
          <br>
          <br>
          <br>
          <h1 class="mb-0"><span class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;</span>{{$user->name}}&nbsp;<a href="#revieshistorylink">{{$stars}}</a></span>
          </h1>
          <br>
          <br>
          <br>
          <br>
          <h2 class="mb-0"><span class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Introduction&nbsp;</span>
          </h2>
          <font size="5" color="#333333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->introduction}}</font>
          
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          
        </div>
      </section>


 <div class="tabs">
<input id="joinevent" type="radio" name="tab_item" checked>
<label class="tab_item" for="joinevent">参加イベント</label>
<input id="arrangeevent" type="radio" name="tab_item">
<label class="tab_item" for="arrangeevent">主催イベント</label>
<input id="joineventhistory" type="radio" name="tab_item">
<label class="tab_item" for="joineventhistory">参加イベント履歴</label>
<input id="arrangeeventhistory" type="radio" name="tab_item">
<label class="tab_item" for="arrangeeventhistory">主催イベント履歴</label>

<div class="tab_content" id="joinevent">
<div class="tab_content_description">
<p class="c-txtsp">
  @foreach($joining_events as $joining_event)
<p>{{$joining_event->title}}</p>
<p>{{$joining_event->date}}</p>

@endforeach
</p>
</div>
</div>
//参加イベント

<div class="tab_content" id="arrangeevent_content">
<div class="tab_content_description">
<p class="c-txtsp">
  @foreach($arranging_events as $arranging_event)
{{$joining_event->id}}
<a href = "{{route ('review.get', [$joining_event->id, $user->id]) }}">
    <p>完了</p>
</a> 
<p>----------------------------</p>
@endforeach
//主催イベント


<div class="tab_content" id="arrangeeventhistory_content">
<div class="tab_content_description">
<p class="c-txtsp">
@foreach($arrnged_histories as $arrnged_history)
<p>{{$arrnged_history->title}}</p>
<p>{{$arrnged_history->date}}</p>
@endforeach</p>
</div>
</div>
//主催イベント履歴


<div class="tab_content" id="joineventhistory_content">
<div class="tab_content_description">
<p class="c-txtsp">
@foreach($joined_histories as $joined_history)
<p>{{$joined_history->title}}</p>
<p>{{$joined_history->date}}</p>
@endforeach</p>
</div>
</div>
//参加イベント履歴

</div>

        </div>



</html>

