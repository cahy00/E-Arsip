<a href="index3.html" class="brand-link">
	<img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	<span class="brand-text font-weight-light">E-ARSIP</span>
</a>

<div class="sidebar">

	<!-- SidebarSearch Form -->
	<div class="form-inline"></div>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
			<li class="nav-header">Dashboard</li>
			<li class="nav-item">
				<a href="/" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>
						Dashboard
					</p>
				</a>
			</li>
			<li class="nav-header">Module</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-plus-square"></i>
					<p>
						Document
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="/documents" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Data</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="/documents/create" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Create</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="/typedocuments" class="nav-link">
					<i class="nav-icon fas fa-copy"></i>
					<p>
						Type Document
					</p>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>