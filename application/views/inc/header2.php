<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SocialPedia</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap-theme.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="<?= site_url('welcome') ?>">SocialPedia</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
  <!--<ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
  </ul>-->
  <form id="search-form" class="navbar-form navbar-right" role="search" action="<?= site_url('search/index') ?>" method="GET">
    <div class="form-group">
      <input id="q" type="text" class="form-control" name="q" placeholder="Keywords">
    </div>
    <button id="search-btn" type="submit" class="btn btn-default">Search</button>
  </form>
</div><!--/.nav-collapse -->
</div>
</nav>
