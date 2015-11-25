<nav class="navbar navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="http://eest.webkdd.org/">Chinese Version</a></li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container" style="padding-bottom:50px;">
	<div class="row" style="padding-bottom:30px;">
		<div class="col-md-12" style="text-align:center;">
            <img src="<?= base_url('images/logo.png') ?>" alt="EEST" />
		</div>
	</div>

	<div class="row">
		<form id="search-form" role="search" action="<?= site_url('search/index') ?>" method="GET">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="input-group">
					<input id="q" type="text" class="form-control span8" name="q" placeholder="Keywords">
					<span class="input-group-btn">
						<button id="search-btn" type="submit" class="btn btn-default">Search</button>
					</span>
				</div>
			</div>			
			<div class="col-md-2"></div>
		</form>
	</div>
</div>


<div id="intro-container" class="container">
    <!-- Frequent Query -->
    <div class="row" style="text-align:center;margin-bottom:20px;">
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Obama') ?>">
                <img width="200"  src="<?= base_url('images/1.jpg') ?>" alt="Obama" />
                <br> 
                Obama
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Tim%20Cook') ?>">
                <img width="200"  src="<?= base_url('images/2.jpg') ?>" alt="Tim Cook" />
                <br> 
                Tim Cook
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Justin%20Bieber') ?>">
                <img width="200"  src="<?= base_url('images/3.jpg') ?>" alt="Justin Bieber" />
                <br> 
                Justin Bieber
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Avril') ?>">
                <img width="200"  src="<?= base_url('images/4.jpg') ?>" alt="Avril" />
                <br> 
                Avril
            </a>
        </div>
    </div>
    <div class="row" style="text-align:center;margin-bottom:20px;">
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=NBA') ?>">
                <img width="200"  src="<?= base_url('images/5.jpg') ?>" alt="NBA" />
                <br> 
                NBA
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=BBC') ?>">
                <img width="200"  src="<?= base_url('images/6.jpg') ?>" alt="BBC" />
                <br> 
                BBC
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Google') ?>">
                <img width="200"  src="<?= base_url('images/7.jpg') ?>" alt="Google" />
                <br> 
                Google
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Facebook') ?>">
                <img width="200"  src="<?= base_url('images/8.jpg') ?>" alt="Facebook" />
                <br> 
                Facebook
            </a>
        </div>
    </div>
    <div class="row" style="text-align:center;">
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=iphone6') ?>">
                <img width="200"  src="<?= base_url('images/9.jpg') ?>" alt="iphone6" />
                <br> 
                iphone6
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=win10') ?>">
                <img width="200"  src="<?= base_url('images/10.jpg') ?>" alt="win10" />
                <br> 
                win10
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=Google%20Glass') ?>">
                <img width="200"  src="<?= base_url('images/11.jpg') ?>" alt="Google Glass" />
                <br> 
                Google Glass
            </a>
        </div>
        <div class="col-md-3">
            <a class="search-link" href="<?= site_url('search/index?q=clash%20of%20clans') ?>">
                <img width="200"  src="<?= base_url('images/12.jpg') ?>" alt="clash of clans" />
                <br> 
                clash of clans
            </a>
        </div>
    </div>
</div>
