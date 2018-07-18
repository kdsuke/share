<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dotslink</title>
    <link rel="stylesheet" href="{{ secure_asset('category/index.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('categorydetail/categorydetailcss/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('categorydetail/categorydetailcss/css/3-col-portfolio.css') }}" rel="stylesheet">

  </head>
  
  <body>
    
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Dotslink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
  <div class="category-wrapper" class="clearfix">
    <div class='container'>
      <div class="heading">
          <h1>Category Index<span>.</span></h1>
          <p>Find the category you like to join or share!</p>
          <hr>
          
  <div class='category' class="clearfix">
  <a href="{{ route('history.get') }}">             
  <div class = "history">            
  <img src="{{ secure_asset('category/history1.png') }}" alt="Avatar" class="image">
  <div class="overlay">HISTORY</div>
  </div>
  </div>
  
  <div class='category' class="clearfix">
  <a href="{{ route('technology.get') }}">             
  <div class = "tech">            
  <img src="{{ secure_asset('category/tech1.png') }}" alt="Avatar" class="image">
  <div class="overlay">TECHNOLOGY</div>
  </div>
  </div>
  
  <div class='category' class="clearfix">
  <a href="{{ route('food.get') }}">             
  <div class = "food">            
  <img src="{{ secure_asset('category/food1.png') }}" alt="Avatar" class="image">
  <div class="overlay">FOODS</div>
  </div>
  </div>
          
  <div class='category' >
  <a href="{{ route('nature.get') }}">             
  <div class = "nature">            
  <img src="{{ secure_asset('category/nature1.png') }}" alt="Avatar" class="image">
  <div class="overlay">NATURE</div>
  </div>
  </div>
  
    <div class='category' >   
  <a href="{{ route('language.get') }}">  
  <div class = "language">            
  <img src="{{ secure_asset('category/language1.png') }}" alt="Avatar" class="image">
  <div class="overlay">LANGUAGE</div>
  </div>
  </div>
  
    <div class='category' >  
  <a href="{{ route('beauty.get') }}">  
  <div class = "beauty">            
  <img src="{{ secure_asset('category/beauty1.png') }}" alt="Avatar" class="image">
  <div class="overlay">BEAUTY</div>
  </div>
  </div>
  
  <div class='category' >
  <a href="{{ route('art.get') }}">           
  <div class = "art">            
  <img src="{{ secure_asset('category/art1.png') }}" alt="Avatar" class="image">
  <div class="overlay">ARTS</div>
  </div>
  </div>

  <div class='category' >     
  <a href="{{ route('sport.get') }}">  
  <div class = "sport">            
  <img src="{{ secure_asset('category/sport1.png') }}" alt="Avatar" class="image">
  <div class="overlay">SPORTS</div>
  </div>
  </div>
  
  <div class='category' class="clearfix">
  <a href="{{ route('others.get') }}">             
  <div class = "other">            
  <img src="{{ secure_asset('category/others1.png') }}" alt="Avatar" class="image">
  <div class="overlay">OTHERS</div>
  </div>
  </div>
  

  

  </div>
  </div>
</div>

  
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2>さぁ、あなたも得意な経験を同期にシェアしてみませんか?</h2>
        </div>
        <span class="btn message">さっそく投稿する</span>
      </div>
    </div>
    
    
 </body> 
  
  
  
  
  
<!--  <body>-->
<!--      <div class='category-wrapper'>-->

<!--  <div class='container'>           -->
<!--  <div class = "art">            -->
<!--  <img src="art1.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">ARTS</div>-->
<!--  </div>-->
<!--  </div>-->
  
<!--  <div class='container'>           -->
<!--  <div class = "art">            -->
<!--  <img src="sport1.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">SPORTS</div>-->
<!--  </div>-->
<!--  </div>-->
  
<!--  <div class='container'>           -->
<!--  <div class = "art">            -->
<!--  <img src="nature1.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">NATURE</div>-->
<!--  </div>-->
<!--  </div>-->
  
<!--  <div class='container'>           -->
<!--  <div class = "art">            -->
<!--  <img src="food1.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">FOODS</div>-->
<!--  </div>-->
<!--  </div>-->
  
<!--  <div class='container'>           -->
<!--  <div class = "art">            -->
<!--  <img src="beauty1.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">BEAUTY</div>-->
<!--  </div>-->
<!--  </div>-->
  
<!--  <div class='container'>           -->
<!--  <div class = "art">            -->
<!--  <img src="language1.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">LANGUAGE</div>-->
<!--  </div>-->
<!--  </div>-->
  
<!--</div>-->
  
  

  </html>