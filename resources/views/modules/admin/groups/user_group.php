<!-- declare our angular app and controller -->
<body class="container" ng-app="app" ng-controller="groupUserController">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="portlet light bordered">

  <!-- PAGE TITLE -->
  <div class="page-header">
	<h2>Laravel and Angular Single Page Application este</h2>
	<h4>Commenting System</h4>
  </div>

  <!-- NEW COMMENT FORM -->
  <form ng-submit="submitGroupUser()"> <!-- ng-submit will disable the default form action and use our function -->
	<!-- AUTHOR -->
	<div class="form-group">
	  <input type="text" class="form-control input-sm" name="author" ng-model="groupuserData.author" placeholder="Name">
	</div>

	<!-- COMMENT TEXT -->
	<div class="form-group">
	  <input type="text" class="form-control input-lg" name="comment" ng-model="groupuserData.text" placeholder="Say what you have to say">
	</div>
	<!-- SUBMIT BUTTON -->
	<div class="form-group text-right">
	  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
	</div>
  </form>

	<pre>
	{{ groupuserData }}
	</pre>

  <!-- LOADING ICON -->
  <!-- show loading icon if the loading variable is set to true -->
  <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
			<div class="user" ng-hide="loading" ng-repeat="user in users">
				<h3>Usuario #ID{{ user.id }} <small>Nombre {{ user.username }}</small></h3>
				<p><a href="#" ng-click="deleteComment(user.id)" class="text-muted">Delete</a></p>
			</div>
		</div>
	</div>
</div>
</body>


