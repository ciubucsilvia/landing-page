<!-- Static navbar -->
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">Landing page</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
    	 <li><a href="{{ route('pages') }}">PAGES</a></li>
    	 <li><a href="{{ route('portfolios') }}">PORTFOLIO</a></li>
    	 <li><a href="{{ route('services') }}">SERVICES</a></li>
    	 <li><a href="{{ route('peoples') }}">TEAM</a></li>
    	 <li><a href="{{ route('clients') }}">CLIENTS</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>