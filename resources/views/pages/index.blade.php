@include('inc.head')
<div class="site-wrapper background_image">
    <div class="site-wrapper-inner">
        <div class="container">
            <!-- Header Section -->
            <div class="masthead clearfix">
                <div class="container inner">
                    <h3 class="masthead-brand">
                        <a href="{{ url('/') }}">
                          {{ config('app.name', 'Kil\'matic') }}
                        </a>
                        <span class="logo_image">
                            <img src="https://ik.imagekit.io/83dhckxhugrjz/70368_edited_S1OHjojXV.jpg)" class="img-circle" alt="logo-image">
                        </span>
                    </h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li><a class="active" href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/craft">Work</a></li>
                            <li><a href="/posts">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Content Section -->
            <div class="inner cover">              
              <h1 class="cover-heading">Cover your page.</h1>
              <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
              <p class="lead">
                <a href="#" class="btn btn-lg btn-default">Learn more</a>
              </p>
            </div>
        </div>
    </div>
</div>
@include('inc.foot')