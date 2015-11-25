<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/tempo.min.js') ?>"></script>
<script src="<?= base_url('js/lib/d3/d3.js') ?>"></script>
<script src="<?= base_url('js/d3.layout.cloud.js') ?>"></script>
<script type="text/javascript">
    // Global Config Path
    var tweet_api_base = "<?= site_url('api/search') ?>";
    var query = "<?= $query ?>";
</script>
<script type="text/javascript" src="<?= base_url('js/search.js') ?>"></script>
<script src="http://echarts.baidu.com/build/dist/echarts.js"></script>

<div id="result-container" class="container" role="main">
<div class="row">
    <!-- ENTITY RELATED PANEL -->
    <div class="col-md-5">
    <?php if ($user != null): ?>
        <div class="row" data-template>
	
			<div id="user-info-panel" class="col-md-12">
			<div class="media">
			<a class="media-left" href="http://twitter.com/<?= $user->screen_name ?>" target="_blank">
            <img class="user-img" src="<?= $user->profile_image_url ?>" alt="user-profile-img" />
			</a>
            <div class="media-body" style="padding-left: 20px;">
				<h4 class="media-heading">
					<a href="http://twitter.com/<?= $user->screen_name ?>" target="_blank">
					<?= $user->name ?>
					</a>
				</h4>
                Tweets: <?= $user->statuses_count ?> 
				<br /> 
                Following: <?= $user->friends_count ?> 
				<br /> 
                Followers: <?= $user->followers_count ?>  
				<br />
                Favourites: <?= $user->favourites_count ?>
            </div> 
            </div>
			</div>
			
			<div class="col-md-12">
            <p class="entity-description">
			<blockquote>
			<?= $user->description ?>
			</blockquote>
			</p>
			<?php if ($user->location != ""): ?>
            <p class="entity-location">
				<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
				<?= $user->location ?>
			</p>
			<?php endif; ?>
            </div>
		</div>
    <?php endif; ?>
        
		<!--statistical data -->
		<div id="statistical data" class="row" >
			<div class="col-md-12">
			<ol class="breadcrumb"><li class="active">Statistical Data</li></ol>
			<center>
			<div id="echart" class="row" style="height:400px;width:500px"></div>
			</center>
			</div>
		</div>
		
        <!-- here is related entities -->
        <div id="related-entities-div" class="row">
            <div class="col-md-12">
            <ol class="breadcrumb"><li class="active">Related Entities</li></ol>
                <div id="loading-entity" class="row">
                    <div class="col-md-12">
                    <center>
                    <img width="80" src="<?= base_url('images/loading.gif') ?>" alt="loading related entity" />
                    </center>
                    </div>
                </div>
				
				<!-- entities from news, cloud view -->
                <div id="vis">
                </div>
                <!-- entities from news, list view -->
                <!--<div id="news-entity-list">
                    <div id="news-entity-{{_tempo.index}}" data-template>
                    
                    <ul class="list-group" data-has="person">
                        <li class="list-group-item" data-template-for="person"><a href="<?= site_url('search/index?q={{.}}') ?>">news-person:  {{.}}</a>
                        <button onclick="focus(__._tempo.index); return false;" class="btn btn-default btn-news-entity-focus" index="{{_tempo.index}}" property="person">Focus</button>
                    </ul>
                    <ul class="list-group"  data-has="organization">
                        <li class="list-group-item" data-template-for="organization"><a href="<?= site_url('search/index?q={{.}}') ?>">news-organization:  {{.}}</a>
                        <button onclick="focus(__._tempo.index); return false;" class="btn btn-default btn-news-entity-focus" index="{{_tempo.index}}" property="organization">Focus</button>
                    </ul>
					<ul class="list-group"  data-has="location">
                        <li class="list-group-item" data-template-for="location"><a href="<?= site_url('search/index?q={{.}}') ?>">news-location:  {{.}}</a>
                        <button onclick="focus(__._tempo.index); return false;" class="btn btn-default btn-news-entity-focus" index="{{_tempo.index}}" property="location">Focus</button>
                    </ul>
					<ul class="list-group"  data-has="misc">
                        <li class="list-group-item" data-template-for="misc"><a href="<?= site_url('search/index?q={{.}}') ?>">news-misc:  {{.}}</a>
                        <button onclick="focus(__._tempo.index); return false;" class="btn btn-default btn-news-entity-focus" index="{{_tempo.index}}" property="misc">Focus</button>
                    </ul>					
                    </div>
                </div>-->


                <!-- entities from word2vec -->
                <!--<ul class="list-group" id="related-entities-list">							
                    <li class="list-group-item" >Embedding Entity</li>
                    <li class="list-group-item" id="entity-{{_tempo.index}}" data-template>
                        <span>
                        <a onclick="focus(__._tempo.index); return false;" href = "#" > {{.}}</a>
                        </span>
                    </li>
                </ul>-->
            </div>           
        </div>
		
		<div id="timeInterval">
		
		</div>
		
        <!-- here is google news -->
        <ol class="breadcrumb">
          <li class="active">Google News</li>
        </ol>
        <div id="goolge-news-list">
            <div id="loading-news" class="row">
                <div class="col-md-12">
                <center>
                <img width="80" src="<?= base_url('images/loading.gif') ?>" alt="loading news" />
                </center>
                </div>
            </div>
            <div class="row news-row" id="news-{{_tempo.index}}" data-template>
                <div class="col-md-3">
                    <img class="news-img" src="<?= base_url('images/news-default.png') ?>" data-src="{{image.url}}" alt="profile" width=60/>
                    <br /><br />
                    <button onclick="focus(__._tempo.index); return false;" class="btn btn-default btn-news-focus" index="{{_tempo.index}}">Focus</button>
                </div>
                <div class="col-md-9 news-content" id="news-item-{{_tempo.index}}">
                    <p><a href="{{signedRedirectUrl}}"><span>{{title}}</span></a></p>
                    <p class="news-time">{{publisher}} - {{publishedDate|date 'HH:mm YY/MM/DD'}}</p>
                    <p>{{content}} </p>
                </div>
            </div>
        </div>
    </div>





    <!-- TWEET RELATED PANEL -->
    <div class="col-md-7">
	
		<!--
		<div id="photo-list">
			<div data-template>
				<div data-template-for="center.entities.media">
                    <img src="{{media_url}}" height="200" style="float:left;">
                </div>
			</div>
		</div>
		-->
		
		
        <!-- Clustered Results using TTG, novelty detection/online cluster -->
        <!-- Next Page For fast reading -->
        <div id="tweet-list">
        <ol class="breadcrumb">
          <li class="active">
			Tweets for "<strong id="query-name"></strong>"
		  </li>
        </ol>
		<div id="focus-info" class="alert alert-info" role="alert" >
			<strong>Focusing: </strong>
			<span id="focus-notes"></span>
		</div>
		<!-- here is center information -->
        <div id="parent-{{_tempo.index}}" class="tweet-div" data-template>
			<div data-if-interval>{{interval}}<hr></div>
			<div class="media">
            <div class="media-left">
                <img class="avatar tweet-user-profile-small" src="<?= base_url('images/news-default.png') ?>" data-src="{{center.user.profile_image_url}}" alt="profile" width=64 height=64/>
            </div>
            <div class="media-body">
                <p>
                    <a target="_blank" class="tweet-user-screen-name" href="https://twitter.com/{{user.screen_name}}">{{center.user.name}}</a>
                    <span class="tweet-time">{{center.created_at|date 'HH:mm YY/MM/DD}}</span>
                </p>
                <p>
                {{center.text}}
                </p>
				<!--
                <div data-template-for="center.entities.media">
                    <img src="{{media_url}}" height="200">
                </div>
				-->
           </div>
			<div class="media-right">
			<p>
                    <!--<span class="icon-bar-a" title="reply">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    </span>
                    <span class="icon-bar-a" title="retweet">
                        <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                    </span>
                    <span class="icon-bar-a" title="favourite">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </span>-->
                    <span class="icon-bar-a child-style{{center.has_children}}" title="collapse"  style="float:right;">
                        <span index="{{_tempo.index}}" class="collapse-tweet glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
                    </span>
                </p> 
			</div>
			</div>
			
			<!-- here is children information -->
			<div class="children row" data-template-for="children">
				<div class="col-md-12" style="border-left: 2px solid #5bc0de; margin-top: 4px; margin-right: 4px;">
					<p>
						<a target="_blank" class="tweet-user-screen-name" href="https://twitter.com/{{user.screen_name}}">{{user.name}}</a>
						<span class="tweet-time">{{created_at|date 'HH:mm YY/MM/DD}}</span>
					</p>
					<p>
					{{text}}
					</p>
					<p>
						<!--<span class="icon-bar-a" title="reply">
							<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
						</span>
						<span class="icon-bar-a" title="retweet">
							<span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
						</span>
						<span class="icon-bar-a" title="favourite">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</span>-->
					</p>    
				</div>
			</div>
        </div>
    </div>

	<!-- end of information display -->
		
        <div id="loading-tweets" class="row">
            <div class="col-md-12">
            <center>
            <img width="80" src="<?= base_url('images/loading.gif') ?>" alt="loading tweets" />
            </center>
            </div>
        </div>
        <button id="load-btn" class="btn btn-block btn-info">
        Load More
        </button>
        <br /><br />
    </div>
	
</div>
</div>
