<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-pen"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Elite School<sup></sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.html">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Components</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Components:</h6>
				<a class="collapse-item" href="buttons.html">Buttons</a>
				<a class="collapse-item" href="cards.html">Cards</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Utilities</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Utilities:</h6>
				<a class="collapse-item" href="utilities-color.html">Colors</a>
				<a class="collapse-item" href="utilities-border.html">Borders</a>
				<a class="collapse-item" href="utilities-animation.html">Animations</a>
				<a class="collapse-item" href="utilities-other.html">Other</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Addons
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Pages</span>
		</a>
		<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Login Screens:</h6>
				<a class="collapse-item" href="login.html">Login</a>
				<a class="collapse-item" href="register.html">Register</a>
				<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
				<div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="404.html">404 Page</a>
				<a class="collapse-item" href="blank.html">Blank Page</a>
			</div>
		</div>
	</li>



	<!-- Users -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
			<i class="fas fa-fw fa-folder"></i>
			<span>Users</span>
		</a>
		<div id="collapseUsers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Users</h6>
				<a class="collapse-item" href="<?php echo base_url() . 'Users/addUser' ?>">Add Users</a>
				<a class="collapse-item" href="<?php echo base_url() . 'Users' ?>">View Users</a>
			</div>
		</div>
	</li>





	<!-- Student -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudents" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Students Data</span>
		</a>
		<div id="collapseStudents" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Student</h6>
				<a class="collapse-item" href="<?php echo base_url() . 'Student/admission' ?>">New Admission</a>
				<a class="collapse-item" href="<?php echo base_url() . 'Student' ?>">Students</a>
			</div>
		</div>
	</li>

	<!--Dues Section-->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDues" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Dues Section</span>
		</a>
		<div id="collapseDues" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Duse</h6>
				<a class="collapse-item" href="<?php echo base_url() . 'Dues/duestype' ?>">Dues Type</a>
				<a class="collapse-item" href="<?php echo base_url() . 'Dues/studentDues' ?>">Dues Section</a>
				<div class="collapse-divider"></div>
			</div>
		</div>
	</li>



	<!-- Class -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClasses" aria-expanded="true" aria-controls="collapseClasses">
			<i class="fas fa-fw fa-folder"></i>
			<span>Classes</span>
		</a>
		<div id="collapseClasses" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Classes</h6>
				<a class="collapse-item" href="<?php echo base_url() . 'Classes/addClass' ?>">Add Classes</a>
				<a class="collapse-item" href="<?php echo base_url() . 'Classes' ?>">View Classes</a>
				<a class="collapse-item" href="<?php echo base_url() . 'Classes/oldRecord' ?>">Old Classes Record</a>
			</div>
		</div>
	</li>

	<!-- Subject-->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubject" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Subject Data</span>
		</a>
		<div id="collapseSubject" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Subject</h6>
				<a class="collapse-item" href="<?php echo base_url() . 'Subject/addSubjectScreen' ?>">Add Subject</a>
				<a class="collapse-item" href="<?php echo base_url() . 'subject' ?>">View Subject</a>
				<div class="collapse-divider"></div>
			</div>
		</div>
	</li>

	<!--Teacher-->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeacher" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Teacher Data</span>
		</a>
		<div id="collapseTeacher" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Teacher</h6>
				<a class="collapse-item" href="<?php echo base_url() . 'Teacher/createTeacher' ?>">Add Teacher</a>
				<a class="collapse-item" href="<?php echo base_url() . 'Teacher/showTeacher' ?>">View Teachers</a>
				<a class="collapse-item" href="<?php echo base_url() . 'TeacherPay/ShowTeacher' ?>">Teachers Pay</a>
				<div class="collapse-divider"></div>
			</div>
		</div>
	</li>


	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Charts</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="tables.html">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
