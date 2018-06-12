<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link href="{{ asset('responsive/css/reset.css') }}" rel="stylesheet">
	<link href="{{ asset('responsive/css/style.css') }}" rel="stylesheet">

	<script defer src="{{ asset('responsive/js/modernizr.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/4.0.0/css/bootstrap.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/cover.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/docs.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet"> --}}
    <script defer src="{{ asset('vendor/fontawesome/5.0.8/svg-with-js/js/fontawesome-all.js') }}"></script>

	{{-- <link rel="stylesheet" href="css/reset.css"> --}}
	{{-- <link rel="stylesheet" href="css/style.css"> --}}
	{{-- <script src="js/modernizr.js"></script> --}}

	<title>Responsive Sidebar Navigation | CodyHouse</title>

</head>
<body>
	<header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>

		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="img/cd-avatar.png" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Main</li>
				<li class="has-children overview">
					<a href="#0">Overview</a>

					<ul>
						<li><a href="#0">All Data</a></li>
						<li><a href="#0">Category 1</a></li>
						<li><a href="#0">Category 2</a></li>
					</ul>
				</li>
				<li class="has-children notifications">
					<a href="#0">Notifications<span class="count">3</span></a>

					<ul>
						<li><a href="#0">All Notifications</a></li>
						<li><a href="#0">Friends</a></li>
						<li><a href="#0">Other</a></li>
					</ul>
				</li>

				<li class="has-children comments">
					<a href="#0">Comments</a>

					<ul>
						<li><a href="#0">All Comments</a></li>
						<li><a href="#0">Edit Comment</a></li>
						<li><a href="#0">Delete Comment</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Secondary</li>
				<li class="has-children bookmarks">
					<a href="#0">Bookmarks</a>

					<ul>
						<li><a href="#0">All Bookmarks</a></li>
						<li><a href="#0">Edit Bookmark</a></li>
						<li><a href="#0">Import Bookmark</a></li>
					</ul>
				</li>
				<li class="has-children images">
					<a href="#0">Images</a>

					<ul>
						<li><a href="#0">All Images</a></li>
						<li><a href="#0">Edit Image</a></li>
					</ul>
				</li>

				<li class="has-children users">
					<a href="#0">Users</a>

					<ul>
						<li><a href="#0">All Users</a></li>
						<li><a href="#0">Edit User</a></li>
						<li><a href="#0">Add User</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Action</li>
				<li class="action-btn"><a href="#0">+ Button</a></li>
			</ul>
		</nav>

		<div class="content-wrapper">
			<main>
			<h1>Responsive Sidebar Navigation</h1>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deleniti architecto id ex voluptas repellendus blanditiis consectetur quam harum officiis, maiores quibusdam excepturi repellat provident assumenda amet ullam, molestiae sint?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nisi tempore obcaecati perspiciatis beatae sequi ab facilis officia rem. Labore iure quidem deleniti beatae veritatis ducimus perspiciatis dolorum repellat vel?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quaerat quasi eum porro, dolore nesciunt natus aliquid, tenetur, blanditiis unde cumque! Hic provident ducimus, laudantium? Tenetur laboriosam vero distinctio quis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio illum, reprehenderit quod mollitia, sunt ratione architecto beatae voluptatibus. Illum quas quaerat illo autem dicta voluptate similique mollitia saepe maiores placeat!
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est perspiciatis voluptates, earum, alias obcaecati sapiente neque vitae sunt, eum accusamus quae nostrum consequuntur. Porro nostrum unde id dolor voluptates!
			</main>
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/3.2.1/slim/jquery.js') }}"></script>
<script src="{{ asset('vendor/ajax/popper/1.12.9/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/4.0.0/js/bootstrap.js') }}"></script>

{{-- <script defer src="{{ asset('responsive/js/jquery-2.1.4.js') }}"></script> --}}
<script defer src="{{ asset('responsive/js/jquery.menu-aim.js') }}"></script>
<script defer src="{{ asset('responsive/js/main.js') }}"></script>

{{--
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script>
--}}

</body>
</html>