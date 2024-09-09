<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- Font Awesome Cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

     {{-- Line Icons CDN --}}
     <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

     {{-- Bootstrap CDN --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     {{-- Bootstrap Icons --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

     <!-- Scripts -->

	<style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        :root {
            --poppins: 'Poppins', sans-serif;
            --lato: 'Lato', sans-serif;

            --light: #F9F9F9;
            --blue: #3C91E6;
            --light-blue: #CFE8FF;
            --grey: #eee;
            --dark-grey: #AAAAAA;
            --dark: #342E37;
            --red: #DB504A;
            --yellow: #FFCE26;
            --light-yellow: #FFF2C6;
            --orange: #FD7238;
            --light-orange: #FFE0D3;
        }

        html {
            overflow-x: hidden;
        }

        body.dark {
            --light: #0C0C1E;
            --grey: #060714;
            --dark: #FBFBFB;
        }

        body {
            background: var(--grey);
            overflow-x: hidden;
        }





        /* SIDEBAR */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100%;
            background: var(--light);
            z-index: 2000;
            font-family: var(--lato);
            transition: .3s ease;
            overflow-x: hidden;
            scrollbar-width: none;
        }
        #sidebar::--webkit-scrollbar {
            display: none;
        }
        #sidebar.hide {
            width: 60px;
        }
        #sidebar .brand {
            font-size: 24px;
            font-weight: 700;
            height: 56px;
            display: flex;
            align-items: center;
            color: var(--blue);
            position: sticky;
            top: 0;
            left: 0;
            background: var(--light);
            z-index: 500;
            padding-bottom: 20px;
            box-sizing: content-box;
        }
        #sidebar .brand .bx {
            min-width: 60px;
            display: flex;
            justify-content: center;
        }
        #sidebar .side-menu {
            width: 100%;
            margin-top: 48px;
        }
        #sidebar .side-menu li {
            height: 48px;
            background: transparent;
            margin-left: 6px;
            border-radius: 48px 0 0 48px;
            padding: 4px;
        }
        #sidebar .side-menu li.active {
            background: var(--grey);
            position: relative;
        }
        #sidebar .side-menu li.active::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: -40px;
            right: 0;
            box-shadow: 20px 20px 0 var(--grey);
            z-index: -1;
        }
        #sidebar .side-menu li.active::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            bottom: -40px;
            right: 0;
            box-shadow: 20px -20px 0 var(--grey);
            z-index: -1;
        }
        #sidebar .side-menu li a {
            width: 100%;
            height: 100%;
            background: var(--light);
            display: flex;
            align-items: center;
            border-radius: 48px;
            font-size: 16px;
            color: var(--dark);
            white-space: nowrap;
            overflow-x: hidden;
        }
        #sidebar .side-menu.top li.active a {
            color: var(--blue);
        }
        #sidebar.hide .side-menu li a {
            width: calc(48px - (4px * 2));
            transition: width .3s ease;
        }
        #sidebar .side-menu li a.logout {
            color: var(--red);
        }
        #sidebar .side-menu.top li a:hover {
            color: var(--blue);
        }
        #sidebar .side-menu li a .bx {
            min-width: calc(60px  - ((4px + 6px) * 2));
            display: flex;
            justify-content: center;
        }
        /* SIDEBAR */





        /* CONTENT */
        #content {
            position: relative;
            width: calc(100% - 280px);
            left: 280px;
            transition: .3s ease;
        }
        #sidebar.hide ~ #content {
            width: calc(100% - 60px);
            left: 60px;
        }




        /* NAVBAR */
        #content nav {
            height: 56px;
            background: var(--light);
            padding: 0 24px;
            display: flex;
            align-items: center;
            grid-gap: 24px;
            font-family: var(--lato);
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        #content nav::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            bottom: -40px;
            left: 0;
            border-radius: 50%;
            box-shadow: -20px -20px 0 var(--light);
        }
        #content nav a {
            color: var(--dark);
        }
        #content nav .bx.bx-menu {
            cursor: pointer;
            color: var(--dark);
        }
        #content nav .nav-link {
            font-size: 16px;
            transition: .3s ease;
        }
        #content nav .nav-link:hover {
            color: var(--blue);
        }
        #content nav form {
            max-width: 400px;
            width: 100%;
            margin-right: auto;
        }
        #content nav form .form-input {
            display: flex;
            align-items: center;
            height: 36px;
        }
        #content nav form .form-input input {
            flex-grow: 1;
            padding: 0 16px;
            height: 100%;
            border: none;
            background: var(--grey);
            border-radius: 36px 0 0 36px;
            outline: none;
            width: 100%;
            color: var(--dark);
        }
        #content nav form .form-input button {
            width: 36px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--blue);
            color: var(--light);
            font-size: 18px;
            border: none;
            outline: none;
            border-radius: 0 36px 36px 0;
            cursor: pointer;
        }
        #content nav .notification {
            font-size: 20px;
            position: relative;
        }
        #content nav .notification .num {
            position: absolute;
            top: -6px;
            right: -6px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid var(--light);
            background: var(--red);
            color: var(--light);
            font-weight: 700;
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #content nav .profile img {
            width: 36px;
            height: 36px;
            object-fit: cover;
            border-radius: 50%;
        }
        #content nav .switch-mode {
            display: block;
            min-width: 50px;
            height: 25px;
            border-radius: 25px;
            background: var(--grey);
            cursor: pointer;
            position: relative;
        }
        #content nav .switch-mode::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            bottom: 2px;
            width: calc(25px - 4px);
            background: var(--blue);
            border-radius: 50%;
            transition: all .3s ease;
        }
        #content nav #switch-mode:checked + .switch-mode::before {
            left: calc(100% - (25px - 4px) - 2px);
        }
        /* NAVBAR */





        /* MAIN */
        #content main {
            width: 100%;
            padding: 36px 24px;
            font-family: var(--poppins);
            max-height: calc(100vh - 56px);
            overflow-y: auto;
        }
        #content main .head-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 16px;
            flex-wrap: wrap;
        }
        #content main .head-title .left h1 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
        }
        #content main .head-title .left .breadcrumb {
            display: flex;
            align-items: center;
            grid-gap: 16px;
        }
        #content main .head-title .left .breadcrumb li {
            color: var(--dark);
        }
        #content main .head-title .left .breadcrumb li a {
            color: var(--dark-grey);
            pointer-events: none;
        }
        #content main .head-title .left .breadcrumb li a.active {
            color: var(--blue);
            pointer-events: unset;
        }
        #content main .head-title .btn-download {
            height: 36px;
            padding: 0 16px;
            border-radius: 36px;
            background: var(--blue);
            color: var(--light);
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: 10px;
            font-weight: 500;
        }




        #content main .box-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            grid-gap: 24px;
            margin-top: 36px;
        }
        #content main .box-info li {
            padding: 24px;
            background: var(--light);
            border-radius: 20px;
            display: flex;
            align-items: center;
            grid-gap: 24px;
        }
        #content main .box-info li .bx {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #content main .box-info li:nth-child(1) .bx {
            background: var(--light-blue);
            color: var(--blue);
        }
        #content main .box-info li:nth-child(2) .bx {
            background: var(--light-yellow);
            color: var(--yellow);
        }
        #content main .box-info li:nth-child(3) .bx {
            background: var(--light-orange);
            color: var(--orange);
        }
        #content main .box-info li .text h3 {
            font-size: 24px;
            font-weight: 600;
            color: var(--dark);
        }
        #content main .box-info li .text p {
            color: var(--dark);	
        }





        #content main .table-data {
            display: flex;
            flex-wrap: wrap;
            grid-gap: 24px;
            margin-top: 24px;
            width: 100%;
            color: var(--dark);
        }
        #content main .table-data > div {
            border-radius: 20px;
            background: var(--light);
            padding: 24px;
            overflow-x: auto;
        }
        #content main .table-data .head {
            display: flex;
            align-items: center;
            grid-gap: 16px;
            margin-bottom: 24px;
        }
        #content main .table-data .head h3 {
            margin-right: auto;
            font-size: 24px;
            font-weight: 600;
        }
        #content main .table-data .head .bx {
            cursor: pointer;
        }

        #content main .table-data .order {
            flex-grow: 1;
            flex-basis: 500px;
        }
        #content main .table-data .order table {
            width: 100%;
            border-collapse: collapse;
        }
        #content main .table-data .order table th {
            padding-bottom: 12px;
            font-size: 13px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }
        #content main .table-data .order table td {
            padding: 16px 0;
        }
        #content main .table-data .order table tr td:first-child {
            display: flex;
            align-items: center;
            grid-gap: 12px;
            padding-left: 6px;
        }
        #content main .table-data .order table td img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }
        #content main .table-data .order table tbody tr:hover {
            background: var(--grey);
        }
        #content main .table-data .order table tr td .status {
            font-size: 10px;
            padding: 6px 16px;
            color: var(--light);
            border-radius: 20px;
            font-weight: 700;
        }
        #content main .table-data .order table tr td .status.completed {
            background: var(--blue);
        }
        #content main .table-data .order table tr td .status.process {
            background: var(--yellow);
        }
        #content main .table-data .order table tr td .status.pending {
            background: var(--orange);
        }


        #content main .table-data .todo {
            flex-grow: 1;
            flex-basis: 300px;
        }
        #content main .table-data .todo .todo-list {
            width: 100%;
        }
        #content main .table-data .todo .todo-list li {
            width: 100%;
            margin-bottom: 16px;
            background: var(--grey);
            border-radius: 10px;
            padding: 14px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #content main .table-data .todo .todo-list li .bx {
            cursor: pointer;
        }
        #content main .table-data .todo .todo-list li.completed {
            border-left: 10px solid var(--blue);
        }
        #content main .table-data .todo .todo-list li.not-completed {
            border-left: 10px solid var(--orange);
        }
        #content main .table-data .todo .todo-list li:last-child {
            margin-bottom: 0;
        }
        /* MAIN */
        /* CONTENT */









        @media screen and (max-width: 768px) {
            #sidebar {
                width: 200px;
            }

            #content {
                width: calc(100% - 60px);
                left: 200px;
            }

            #content nav .nav-link {
                display: none;
            }
        }






        @media screen and (max-width: 576px) {
            #content nav form .form-input input {
                display: none;
            }

            #content nav form .form-input button {
                width: auto;
                height: auto;
                background: transparent;
                border-radius: none;
                color: var(--dark);
            }

            #content nav form.show .form-input input {
                display: block;
                width: 100%;
            }
            #content nav form.show .form-input button {
                width: 36px;
                height: 100%;
                border-radius: 0 36px 36px 0;
                color: var(--light);
                background: var(--red);
            }

            #content nav form.show ~ .notification,
            #content nav form.show ~ .profile {
                display: none;
            }

            #content main .box-info {
                grid-template-columns: 1fr;
            }

            #content main .table-data .head {
                min-width: 420px;
            }
            #content main .table-data .order table {
                min-width: 420px;
            }
            #content main .table-data .todo .todo-list {
                min-width: 420px;
            }
        }
    </style>

</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-user'></i>
			<span class="text">{{$adminName}}</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" onclick="showDashboard()">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#" onclick="showProfile()">
					<i class='bx bxs-user' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			{{-- <li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li> --}}
			<li>
				<a href="#" onclick="showNotification()">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			{{-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li> --}}
		</ul>
		<ul class="side-menu">
			{{-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> --}}
            <!-- Custom Logout Button -->
            <li>
                <a href="#" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-door-closed"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
            <!-- End Custom Logout Button -->

            <!-- Authentication Form (Hidden) -->
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
            <!-- End Authentication Form (Hidden) -->

		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
            {{-- <a href="#" class="nav-link">Categories</a> --}}
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
                <input type="checkbox" id="switch-mode" hidden>
                <label for="switch-mode" class="switch-mode"></label>
                <a href="#" onclick="showNotification()" class="notification">
                    <i class='bx bxs-bell'></i>
                </a>
                <a href="#" class="profile">
                    <img src="#">
                </a>
		</nav>
		<!-- NAVBAR -->

		<!-- Dashboard content MAIN -->
		<main id="dashboard-content">
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <ul class="box-info">
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
                        <h3>{{$userCount}}</h3>
                        <p>Registered Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-run'></i>
                    <span class="text">
                        <h3>{{$activityCount}}</h3>
                        <p>Number of activities</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-comment-detail'></i>
                    <span class="text">
                        <h3>102</h3>
                        <p>Reviews</p>
                    </span>
                </li>
            </ul>
            
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Registered Users</h3>
                        <a href="#" onclick="showUserAdd()" class="text-success"><i class="bi bi-person-add"></i></a>
                        <i class='bx bx-search' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Date Created</th>
                                <th>User Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    <img src="img/people.png">
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                <td>{{ $user->usertype }}</td>
                                <td>
                                    <div class="ml-auto">
                                        <a href="#" onclick="showUserUpdate({{ $user->id }})"><i class="bi bi-pencil-fill mr-2"></i></a>
                                        {{-- <x-danger-button
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                        >{{ __('Delete Account') }}</x-danger-button>
                                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                            <form method="post" action="{{ route('profile.destroyUserAdmin') }}" class="p-6">
                                                @csrf
                                                @method('delete')

                                                <!-- Hidden input to store the user ID -->
                                                <input type="hidden" name="user_id" value="{{ $user->id }}">

                                                <h2 class="text-lg font-medium text-gray-900">
                                                    {{ __('Are you sure you want to delete this user?') }}
                                                </h2>

                                                <p class="mt-1 text-sm text-gray-600">
                                                    {{ __('Once the user is deleted, all of their resources and data will be permanently deleted. Please enter your password to confirm.') }}
                                                </p>

                                                <div class="mt-6">
                                                    <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                                                    <x-text-input
                                                        id="password"
                                                        name="password"
                                                        type="password"
                                                        class="mt-1 block w-3/4"
                                                        placeholder="{{ __('Password') }}"
                                                    />
                                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                                </div>

                                                <div class="mt-6 flex justify-end">
                                                    <x-secondary-button x-on:click="$dispatch('close')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>
                                                    <x-danger-button class="ms-3">
                                                        {{ __('Delete User') }}
                                                    </x-danger-button>
                                                </div>
                                            </form>
                                        </x-modal> --}}

                                     
                                        
                                        

                                    </div>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>   
                </div>
            </div>
		</main>
		<!-- End Dashboard content MAIN -->

        <!-- Profile Content Main --> 
        <main id="profile-content">
            <div class="head-title">
				<div class="left">
					<h1>Profile</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Profile</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Profile</a>
						</li>
					</ul>
				</div>
			</div>
            
            <div class="row p-3">
                <div class="col-md-12 bg-white rounded-2 mb-3 p-3">
                    <div class="form-group">
                        <h2>Profile Information</h2>
                        <p>Updates your accounts profile information and email address.</p>
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
                <div class="col-md-12 bg-white rounded-2 mb-3 p-3">
                    <div class="form-group">
                        <h2>Update Password</h2>
                        <p>Ensure your account is using a strong password to stay secure.</p>
                        <label for="" class="form-label">Current Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">New Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
                <div class="col-md-12 bg-white rounded-2 mb-3 p-3">
                    <div class="form-group">
                        <h2>Delete Account</h2>
                        <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                    <div class="my-3">
                        <button class="btn btn-danger">DELETE ACCOUNT</button>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Profile Content Main --> 

        <!-- User Add Main -->
        <main id="users_add-content">
            <div class="head-title">
                <div class="left">
                    <h1>User</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Add</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Add</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-12 bg-white rounded-2 mb-3 p-3">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
        
                        <div class="form-group">
                            <h2>Add User</h2>
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
        
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
        
                        <div class="form-group">
                            <label for="user_type" class="form-label">User Type</label>
                            <select name="user_type" id="" class="form-control">
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
        
                        <div class="my-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- End User Add Main -->


        <!-- User Edit Main -->
        <main id="users_update-content">
            <div class="head-title">
				<div class="left">
					<h1>User</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Edit</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Edit</a>
						</li>
					</ul>
				</div>
			</div>
            <div class="row p-3">
                <div class="col-md-12 bg-white rounded-2 mb-3 p-3">
                    <form method="POST" action="{{ route('admin.users.update') }}">
                        @csrf
                        @method('PATCH')
                    
                        <div class="form-group">
                            <h2>Edit User</h2>
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    
                        <!-- Add other fields if necessary -->
                    
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    
                        <div class="my-3">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </main>
        <!-- End User Edit Main -->

        <!-- Notification Main -->
        <main id="notification-content">
            <div class="head-title">
				<div class="left">
					<h1>Notifications</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Messages</a>
						</li>
					</ul>
				</div>
			</div>
        </main>
        <!-- End Notification Main -->

	</section>
	<!-- CONTENT -->

  
	
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    



    
	<script>
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item=> {
            const li = item.parentElement;

            item.addEventListener('click', function () {
                allSideMenu.forEach(i=> {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });




        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
        })
        const searchButton = document.querySelector('#content nav form .form-input button');
        const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
        const searchForm = document.querySelector('#content nav form');

        searchButton.addEventListener('click', function (e) {
            if(window.innerWidth < 576) {
                e.preventDefault();
                searchForm.classList.toggle('show');
                if(searchForm.classList.contains('show')) {
                    searchButtonIcon.classList.replace('bx-search', 'bx-x');
                } else {
                    searchButtonIcon.classList.replace('bx-x', 'bx-search');
                }
            }
        })

        if(window.innerWidth < 768) {
            sidebar.classList.add('hide');
        } else if(window.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }

        window.addEventListener('resize', function () {
            if(this.innerWidth > 576) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        })

        const switchMode = document.getElementById('switch-mode');

        switchMode.addEventListener('change', function () {
            if(this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        })


        function showDashboard() {
            document.getElementById('dashboard-content').style.display = 'block';
            document.getElementById('profile-content').style.display = 'none';
            document.getElementById('users_add-content').style.display = 'none'; // Hide user add section
            document.getElementById('users_update-content').style.display = 'none'; // Hide user update section
            document.getElementById('notification-content').style.display = 'none';
        }

        function showProfile() {
            document.getElementById('dashboard-content').style.display = 'none';
            document.getElementById('profile-content').style.display = 'block';
            document.getElementById('users_add-content').style.display = 'none'; // Hide user add section
            document.getElementById('users_update-content').style.display = 'none'; // Hide user update section
            document.getElementById('notification-content').style.display = 'none';
        }

        // Function to show user add section and hide other sections
        function showUserAdd() {
            document.getElementById('dashboard-content').style.display = 'none';
            document.getElementById('profile-content').style.display = 'none';
            document.getElementById('users_add-content').style.display = 'block'; // Show user add section
            document.getElementById('users_update-content').style.display = 'none'; // Hide user update section
            document.getElementById('notification-content').style.display = 'none';
        }

        // Function to show user update section and hide other sections
        function showUserUpdate(userId) {
            fetch(`/admin/users/${userId}`)
            .then(response => response.json())
            .then(user => {
                // Populate the form fields with user details
                document.getElementById('name').value = user.name;
                document.getElementById('email').value = user.email;
                // Populate other fields if necessary
            });
            document.getElementById('dashboard-content').style.display = 'none';
            document.getElementById('profile-content').style.display = 'none';
            document.getElementById('users_add-content').style.display = 'none'; // Hide user add section
            document.getElementById('users_update-content').style.display = 'block'; // Show user update section
            document.getElementById('notification-content').style.display = 'none';
        }

        function showNotification(){
            document.getElementById('dashboard-content').style.display = 'none';
            document.getElementById('profile-content').style.display = 'none';
            document.getElementById('users_add-content').style.display = 'none'; // Hide user add section
            document.getElementById('users_update-content').style.display = 'none';
            document.getElementById('notification-content').style.display = 'block';

        }

        // Event listener for add user icon
        const addUserIcon = document.querySelector('#dashboard-content .head .order .text-success i');
        addUserIcon.addEventListener('click', showUserAdd);

        // Event listener for delete Icon

        // Event listener for notification icon
        const notificationIcon = document.querySelector('.nav');
        notificationIcon.addEventListener('click', showNotification);

        // Event listener for pencil fill icon
        const pencilFillIcon = document.querySelectorAll('#dashboard-content .table-data tbody td .bi.bi-pencil-fill');
        pencilFillIcon.forEach(icon => {
            icon.addEventListener('click', showUserUpdate);
        });



        

    </script>
</body>
</html>