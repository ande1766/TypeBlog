<!DOCTYPE html>
<html>
<head>
  <title>TypeBlog</title>
  <%= stylesheet_link_tag    'application', media: 'all', 'data-turbolinks-track' => true %>
  <%= javascript_include_tag 'application', 'data-turbolinks-track' => true %>
  <%= csrf_meta_tags %>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel ="stylesheet" href= "/stylesheets/users.css.scss">
  <link rel ="stylesheet" href= "/stylesheets/bootstrap.css">
  <!--<link rel ="stylesheet" href= "/stylesheets/material.css">
   <link rel ="stylesheet" href= "/stylesheets/ripples.css">-->
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Fira+Sans|Arvo' rel='stylesheet' type='text/css'>
</head>
<body>


	<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/"><img alt="TypeNut" src="/logo.png" height="35">  typenut</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="collapse">
		      <ul class="nav navbar-nav">
		      	<li class="dropdown">
		      	  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Overview <span class="caret"></span></a>
		      	  <ul class="dropdown-menu" role="menu">
		      	    <li><a href="/type101">Typography 101</a></li>
		      	    <li class="divider"></li>
		      	    <li><a href="#">Classifications</a></li>
		      	  </ul>
		      	</li>
		      	<li><a href="#">Hierarchy </a></li>
		      	 <li><a href="#">Margins & Indents</a></li>
		      	 <li><a href="#">En v. Em v. Hyphen</a></li>
		        <li><a href="#">Smart Quotes </a></li>
		        <li><a href = "/create"> <i class="fa fa-plus-circle" style="color:#a80707;"></i></a></li>
		        
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		      	
		        <% if user_signed_in? %>
		        	<li><a style="color:#a80707;" href="#"> Hello, <%= current_user.email %> </a> </li>
		        	<li> <%= link_to "Sign Out", destroy_user_session_path, :method => :delete, class:"red" %> </li>
		        <% else %>
		        	<li> <%= link_to "Sign In", new_user_session_path  %> </li>
		        	<li> <%= link_to "Sign Up", new_user_registration_path %> </li>
		        <% end %>

		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<% flash.each do |name, msg| %>
		<%= content_tag :div, msg, :id => "flash_#{name}" %>
		<% end %>

<%= yield %>


	<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
	<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>


</body>
</html>
