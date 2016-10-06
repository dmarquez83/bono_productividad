<!-- declare our angular app and controller -->
<body class="container" ng-app="app" ng-controller="groupUserController">
<div class="row">
	<!-- lista de usuario-->
	<div class="col-md-6 col-sm-6">
		<div class="portlet light tasks-widget bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-share font-green-haze hide"></i>
					<span class="caption-subject font-green bold uppercase">Usuarios</span>
					<span class="caption-helper">Listado de Usuarios Activos</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<button type="button" class="btn btn-circle grey-mint">Seleccionar Todos</button>
						<a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Grupos
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:;"> Todos los Grupos </a>
							</li>
							<li class="divider"> </li>
							<div  ng-hide="loading" ng-repeat="group in groups">
								<li>
									<a href="javascript:;"> {{ group.name }} </a>
								</li>
							</div>
							<li class="divider"> </li>
							<li>
								<a href="javascript:;"> Pendientes
									<span class="badge badge-danger"> 4 </span>
								</a>
							</li>
							<li>
								<a href="javascript:;"> Inactivos
									<span class="badge badge-success"> 12 </span>
								</a>
							</li>
						</ul>
					</div>
					<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="task-content">
					<div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
						<!-- START TASK LIST -->
						<ul class="task-list">
							<li class="user"  ng-repeat="user in users">
								<!--<div class="task-checkbox">
									<input type="checkbox" class="" value="" /> </div>-->
								<div class="task-title">
									<input type="checkbox" class="icheck">
									<span class="task-title-sp"> {{ user.username }} </span>
									<span class="label label-sm label-success">Company</span>
									<span class="task-bell">
										<i class="fa fa-bell-o"></i>
									</span>
								</div>
							</li>
						</ul>
						<!-- END START TASK LIST -->
					</div>
				</div>
				<div class="task-footer">
					<div class="btn-arrow-link pull-right">
						<a href="javascript:;">Asignar a</a>
						<i class="icon-arrow-right"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fin lista de usuario-->

	<!-- lista de grupos-->
	<div class="col-md-6 col-sm-6">
		<div class="portlet light tasks-widget bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-share font-yellow-haze hide"></i>
					<span class="caption-subject font-green-meadow bold uppercase">Grupos</span>
					<span class="caption-helper">Listado de Grupos Activos</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<button type="button" class="btn btn-circle grey-mint">Seleccionar Todos</button>
						<a class="btn green-meadow btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Grupos
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:;"> Todos los Grupos </a>
							</li>
							<li class="divider"> </li>
							<div  ng-hide="loading" ng-repeat="group in groups">
								<li>
									<a href="javascript:;"> {{ group.name }} </a>
								</li>
							</div>
						</ul>
					</div>
					<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="task-content">
					<div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
						<!-- START TASK LIST -->
						<ul class="task-list">
							<li ng-hide="loading" ng-repeat="group in groups">
									<div class="task-title">
										<input type="checkbox" class="icheck">
										<span class="task-title-sp"> {{ group.name }} </span>
									</div>
							</li>
						</ul>
						<!-- END START TASK LIST -->
					</div>
				</div>
				<div class="task-footer">
					<div class="btn-arrow-link pull-right">

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fin lista de grupos-->
	</div>
<div class="row">
	<!-- usuarios asignados a grupos -->
	<div class="col-lg-12">
		<div class="portlet light portlet-fit bordered">

			<div class="portlet-body">
				<div class="mt-element-list">
					<div class="mt-list-head list-todo green">
						<div class="list-head-title-container">
							<h3 class="list-title">Usuarios Asignados a Grupos</h3>
							<div class="list-head-count">
								<div class="list-head-count-item">
									<i class="fa fa-user"></i> 15</div>
								<div class="list-head-count-item">
									<i class="fa fa-users"></i> 34</div>
							</div>
						</div>
					</div>
					<div class="mt-list-container list-todo">
						<div class="list-todo-line red"></div>
						<ul>
							<li class="mt-list-item" ng-hide="loading" ng-repeat="group_user in group_users" >
								<div class="list-todo-icon bg-white font-green-meadow">
									<i class="fa fa-users"></i>
								</div>
								<div class="list-todo-item green-meadow">
									<a class="list-toggle-container font-white" data-toggle="collapse" href="#task-2-2" aria-expanded="false">
										<div class="list-toggle done uppercase">
											<div class="list-toggle-title bold">{{ group_user.group.name }}</div>
											<div class="badge badge-default pull-right bold">3</div>
										</div>
									</a>
									<div class="task-list panel-collapse collapse" id="task-2-2">
										<ul>
											<li class="task-list-item done">
												<div class="task-icon">
													<a href="javascript:;">
														<i class="fa fa-file-image-o"></i>
													</a>
												</div>
												<div class="task-status">
													<a class="done" href="javascript:;">
														<i class="fa fa-check"></i>
													</a>
													<a class="pending" href="javascript:;">
														<i class="fa fa-close"></i>
													</a>
												</div>
												<div class="task-content">
													<h4 class="uppercase bold">
														<a href="javascript:;">Concept Design</a>
													</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum gravida mauris, a tincidunt dolor porttitor eu. </p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fin de usuarios asignados a grupos -->
</div>
</body>


