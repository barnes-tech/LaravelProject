<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chilluminati International</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

    </head>
    <body>
      <div class="background">
      <header>
        <div class="top-nav container">
          <div class="logo">Chilluminati Int.</div>
          <ul>
            <li><a href="/products">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart</a></li>
          </ul>
        </div><!-- End top nav-->

        <div class="hero container">

          <div class="hero-copy">
            <h1>Welcome to Chilluminati <span>International</span></h1>
            <p>"It's not looking good down there.."</p>
            <div class="buttons">
              <a href="#">Where we went</a>
              <a href="#">What we do</a>
            </div>
          </div>

          <div class="hero-img">
            <img src="img/PyramidLogoOriginal.png" alt="hero image">
          </div>
        </div><!-- end hero-->
      </header><!-- end header-->
      <div class="about">
        <div class="container">
          <h1 class="text-center">The New Home of<br>
            <span>miscellaneous</span> Content</h1>
          <p>
            We believe what the world needs right now<br>is a fantastic new website<br>decicated to delivering you the very best<br> miscellaneous content.
          </p>
          <ul>
            <li>Skateboarding</li>
            <li>Sweet projects from my friends</li>
            <li>Poorly photopea'd moon images</li>
            <li>Dowsing</li>
            <li>Cutting edge science</li>
            <li>Pedro's Corner</li>
            <li>Consumer Advice</li>
            <li>Cat videos</li>
            <li>Plus so much more!</li>
          </ul>
        </div>

      </div><!-- end about-->
      <div class="store">
        <div class="container">
          <h1>Fantastic & Practical Goods</h1>
          <p>Everything here is either sold out<br>
             or didn't exist to begin with<br>We're trying to look legit. Shhh!
           </p>
           <div class="products">
             @foreach ($products as $product)
             <article class="product">
               <a href="#"><img src="img/pricelessMingVase.png" alt="image name"></a>
               <a href="#"><p>{{ $product->name }}</span></p></a>
               <p class="product-price">{{ $product->presentPrice("£") }}</p>
             </article>
             @endforeach
           </div>
        </div>
      </div><!-- end store-->
      <div class="blog">
        <div class="container">
          <h1>Chilluminati  News</h1>
          <p>The latest and greatest Chilluminati news.</p>
          <div class="posts">
            <div class="post">
              <a href="#"><h2 class="post-title">Website nearly complete!</h2></a>
              <p class="short-text">We're just about to finish up with the web..</p>
              <p>Category: <a href="#">General</a></p>
              <p>Added by: <a href="#">Sean</a></p>
            </div>
            <div class="post">
              <a href="#"><h2 class="post-title">Website nearly complete!</h2></a>
              <p class="short-text">We're just about to finish up with the web..</p>
              <p>Category: <a href="#">General</a></p>
              <p>Added by: <a href="#">Sean</a></p>
            </div>
            <div class="post">
              <a href="#"><h2 class="post-title">Website nearly complete!</h2></a>
              <p class="short-text">We're just about to finish up with the web..</p>
              <p>Category: <a href="#">General</a></p>
              <p>Added by: <a href="#">Sean</a></p>
            </div>
          </div>
        </div>
      </div><!-- end blog-->
      <footer>
        <div class="container">
          <div class="footer">
            <ul class="social">
            </ul>
          </div>
        </div>
      </footer>
    </div>
    </body>
</html>
