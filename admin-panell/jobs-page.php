<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:title" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:description" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Protocloud Admin</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	<link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	
	<!-- Style css -->
    <link href="./css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<img src="images/logo-land.png" alt="" style="width:255px;">
				  <g id="search_11_" data-name="search (11)" transform="translate(12.731 12.199)">
					<rect class="rect-primary-rect" id="Rectangle_1" data-name="Rectangle 1" width="60" height="60" rx="30" transform="translate(-10.657 -12.199)" fill="#f73a0b"/>
					<path id="Path_2001" data-name="Path 2001" d="M32.7,5.18a17.687,17.687,0,0,0-25.8,24.176l-19.8,21.76a1.145,1.145,0,0,0,0,1.62,1.142,1.142,0,0,0,.81.336,1.142,1.142,0,0,0,.81-.336l19.8-21.76a17.687,17.687,0,0,0,29.357-13.29A17.57,17.57,0,0,0,32.7,5.18Zm-1.62,23.392A15.395,15.395,0,0,1,9.312,6.8,15.395,15.395,0,1,1,31.083,28.572Zm0,0" transform="translate(1 0)" fill="#fff" stroke="#fff" stroke-width="1"/>
					<path id="Path_2002" data-name="Path 2002" d="M192.859,115.547a4.523,4.523,0,0,0,.7-2.415v-2.284a4.55,4.55,0,0,0-9.1,0v2.284a4.523,4.523,0,0,0,.7,2.415,4.954,4.954,0,0,0-3.708,4.788v1.623a2.4,2.4,0,0,0,2.4,2.4h10.323a2.4,2.4,0,0,0,2.4-2.4v-1.623a4.954,4.954,0,0,0-3.708-4.788Zm-6.114-4.7a2.259,2.259,0,0,1,4.518,0v2.284a2.259,2.259,0,1,1-4.518,0Zm7.53,11.111a.11.11,0,0,1-.11.11H183.843a.11.11,0,0,1-.11-.11v-1.623a2.656,2.656,0,0,1,2.653-2.653h5.237a2.656,2.656,0,0,1,2.653,2.653Zm0,0" transform="translate(-168.591 -98.178)" fill="#fff" stroke="#fff" stroke-width="1"/>
				  </g>
				</svg>



				<svg class="brand-title" xmlns="http://www.w3.org/2000/svg" width="134.01" height="48.365" viewBox="0 0 134.01 48.365">
				  <g id="Group_38" data-name="Group 38" transform="translate(-133.99 -40.635)">
					<text id="Job_Admin_Dashboard" data-name="Job Admin Dashboard" transform="translate(134 85)" fill="#787878" font-size="12" font-family="Poppins-Light, Poppins" font-weight="300"><tspan x="0" y="0">Job Admin Dashboard</tspan></text>
					<path id="Path_1948" data-name="Path 1948" d="M.36,6.616a1.661,1.661,0,0,0,1.094-.422,1.287,1.287,0,0,0,.5-1.016V-11.738H7.52L7.551,5.271A8.16,8.16,0,0,1,6.91,8.789a4.074,4.074,0,0,1-2.2,1.985,11.542,11.542,0,0,1-4.346.657ZM17.651,9.68A7.316,7.316,0,0,1,13.7,8.617a7.008,7.008,0,0,1-2.626-2.97,9.786,9.786,0,0,1-.922-4.315,9.276,9.276,0,0,1,.907-4.174,6.935,6.935,0,0,1,2.6-2.877,7.438,7.438,0,0,1,4-1.047,7.607,7.607,0,0,1,4.018,1.032,6.8,6.8,0,0,1,2.611,2.861,9.349,9.349,0,0,1,.907,4.205,9.759,9.759,0,0,1-.922,4.33,6.993,6.993,0,0,1-2.642,2.955A7.4,7.4,0,0,1,17.651,9.68Zm0-4.565a1.753,1.753,0,0,0,1.438-.954,5.2,5.2,0,0,0,.625-2.83,4.8,4.8,0,0,0-.594-2.626,1.73,1.73,0,0,0-1.47-.907,1.694,1.694,0,0,0-1.454.907,4.908,4.908,0,0,0-.578,2.626,5.309,5.309,0,0,0,.61,2.83A1.718,1.718,0,0,0,17.651,5.115Zm17.478,4.6q-2.345,0-5.972-.375L27.75,9.18V-12.238h5.44V-6.11q.25-.094.844-.3a6.64,6.64,0,0,1,1.079-.281,6.807,6.807,0,0,1,1.079-.078,5.75,5.75,0,0,1,4.737,1.939q1.579,1.939,1.579,6.285,0,4.377-1.767,6.316T35.129,9.711Zm-.594-4.878a2.3,2.3,0,0,0,1.876-.719A4.131,4.131,0,0,0,37,1.551Q37-1.92,34.754-1.92q-.719,0-1.563.063v6.6A10.43,10.43,0,0,0,34.535,4.834ZM45.134-6.36h5.44V9.274h-5.44Zm.031-6.222h5.44V-7.36h-5.44ZM59.611,9.68a5.9,5.9,0,0,1-4.909-2q-1.595-2-1.595-6.222a12.451,12.451,0,0,1,.844-5.143A4.635,4.635,0,0,1,56.3-6.125a9.87,9.87,0,0,1,3.846-.641,13.2,13.2,0,0,1,2.095.188q1.157.188,3.033.625L65.145-1.7q-2.908-.219-3.627-.219a4.459,4.459,0,0,0-1.845.3,1.565,1.565,0,0,0-.844.985,6.976,6.976,0,0,0-.219,2A7.45,7.45,0,0,0,58.845,3.5a1.625,1.625,0,0,0,.86,1.032,4.362,4.362,0,0,0,1.813.3l3.6-.219L65.27,8.9A27.641,27.641,0,0,1,59.611,9.68Zm8.473-21.918h5.44V-.325l1.032-.406L76.714-6.36H82.78L79.4,1.207,83,9.274H76.9L74.744,3.958l-1.219.406V9.274h-5.44Z" transform="translate(133.63 53.217)" fill="#464646"/>
				  </g>
				</svg>

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dlab-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dlab-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Search Jobs
                            </div>
							<div class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
								<div class="plus-icon">
									<a href="javascript:void(0);"><i class="fas fa-plus"></i></a>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell-link " href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.871" viewBox="0 0 24 22.871">
								  <g  data-name="Layer 2" transform="translate(-2 -2)">
									<path id="Path_9" data-name="Path 9" d="M23.268,2H4.73A2.733,2.733,0,0,0,2,4.73V17.471A2.733,2.733,0,0,0,4.73,20.2a.911.911,0,0,1,.91.91v1.94a1.82,1.82,0,0,0,2.83,1.514l6.317-4.212a.9.9,0,0,1,.5-.153h4.436a2.742,2.742,0,0,0,2.633-2L25.9,5.462A2.735,2.735,0,0,0,23.268,2Zm.879,2.978-3.539,12.74a.915.915,0,0,1-.88.663H15.292a2.718,2.718,0,0,0-1.514.459L7.46,23.051v-1.94a2.733,2.733,0,0,0-2.73-2.73.911.911,0,0,1-.91-.91V4.73a.911.911,0,0,1,.91-.91H23.268a.914.914,0,0,1,.879,1.158Z" transform="translate(0 0)"/>
									<path id="Path_10" data-name="Path 10" d="M7.91,10.82h4.55a.91.91,0,1,0,0-1.82H7.91a.91.91,0,1,0,0,1.82Z" transform="translate(-0.45 -0.63)"/>
									<path id="Path_11" data-name="Path 11" d="M16.1,13H7.91a.91.91,0,1,0,0,1.82H16.1a.91.91,0,1,0,0-1.82Z" transform="translate(-0.45 -0.99)"/>
								  </g>
								</svg>
									<span class="badge light text-white bg-primary rounded-circle">76</span>
                                </a>
							</li>	
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									  <g  data-name="Layer 2" transform="translate(-2 -2)">
										<path id="Path_20" data-name="Path 20" d="M22.571,15.8V13.066a8.5,8.5,0,0,0-7.714-8.455V2.857a.857.857,0,0,0-1.714,0V4.611a8.5,8.5,0,0,0-7.714,8.455V15.8A4.293,4.293,0,0,0,2,20a2.574,2.574,0,0,0,2.571,2.571H9.8a4.286,4.286,0,0,0,8.4,0h5.23A2.574,2.574,0,0,0,26,20,4.293,4.293,0,0,0,22.571,15.8ZM7.143,13.066a6.789,6.789,0,0,1,6.78-6.78h.154a6.789,6.789,0,0,1,6.78,6.78v2.649H7.143ZM14,24.286a2.567,2.567,0,0,1-2.413-1.714h4.827A2.567,2.567,0,0,1,14,24.286Zm9.429-3.429H4.571A.858.858,0,0,1,3.714,20a2.574,2.574,0,0,1,2.571-2.571H21.714A2.574,2.574,0,0,1,24.286,20a.858.858,0,0,1-.857.857Z"/>
									  </g>
									</svg>
                                    <span class="badge light text-white bg-primary rounded-circle">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>
							
							
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
									 <svg xmlns="http://www.w3.org/2000/svg" width="23.262" height="24" viewBox="0 0 23.262 24">
									  <g id="icon" transform="translate(-1565 90)">
										<path id="setting_1_" data-name="setting (1)" d="M30.45,13.908l-1-.822a1.406,1.406,0,0,1,0-2.171l1-.822a1.869,1.869,0,0,0,.432-2.385L28.911,4.293a1.869,1.869,0,0,0-2.282-.818l-1.211.454a1.406,1.406,0,0,1-1.88-1.086l-.213-1.276A1.869,1.869,0,0,0,21.475,0H17.533a1.869,1.869,0,0,0-1.849,1.567L15.47,2.842a1.406,1.406,0,0,1-1.88,1.086l-1.211-.454a1.869,1.869,0,0,0-2.282.818L8.126,7.707a1.869,1.869,0,0,0,.432,2.385l1,.822a1.406,1.406,0,0,1,0,2.171l-1,.822a1.869,1.869,0,0,0-.432,2.385L10.1,19.707a1.869,1.869,0,0,0,2.282.818l1.211-.454a1.406,1.406,0,0,1,1.88,1.086l.213,1.276A1.869,1.869,0,0,0,17.533,24h3.943a1.869,1.869,0,0,0,1.849-1.567l.213-1.276a1.406,1.406,0,0,1,1.88-1.086l1.211.454a1.869,1.869,0,0,0,2.282-.818l1.972-3.415a1.869,1.869,0,0,0-.432-2.385ZM27.287,18.77l-1.211-.454a3.281,3.281,0,0,0-4.388,2.533l-.213,1.276H17.533l-.213-1.276a3.281,3.281,0,0,0-4.388-2.533l-1.211.454L9.75,15.355l1-.822a3.281,3.281,0,0,0,0-5.067l-1-.822L11.721,5.23l1.211.454A3.281,3.281,0,0,0,17.32,3.151l.213-1.276h3.943l.213,1.276a3.281,3.281,0,0,0,4.388,2.533l1.211-.454,1.972,3.414h0l-1,.822a3.281,3.281,0,0,0,0,5.067l1,.822ZM19.5,7.375A4.625,4.625,0,1,0,24.129,12,4.63,4.63,0,0,0,19.5,7.375Zm0,7.375A2.75,2.75,0,1,1,22.254,12,2.753,2.753,0,0,1,19.5,14.75Z" transform="translate(1557.127 -90)"/>
									  </g>
									</svg>

									<span class="badge light text-white bg-primary rounded-circle">15</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
								</div>
							</li>
							<li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox1" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="./login.html" class="dropdown-item ai-icon">
                                        <svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
							<li class="nav-item">
								
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center">
							<img src="images/profile/pic1.jpg" alt=""/>
							<div class="d-flex align-items-center sidebar-info">
								<div>
									<span class="font-w400 d-block">Franklin Jr</span>
									<small class="text-end font-w400">Superadmin</small>
								</div>	
								<i class="fas fa-chevron-down"></i>
							</div>
							
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="./app-profile.html" class="dropdown-item ai-icon ">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
							<span class="ms-2">Profile </span>
						</a>
						<a href="./email-inbox.html" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							<span class="ms-2">Inbox </span>
						</a>
						<a href="./login.html" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
							<span class="ms-2">Logout </span>
						</a>
					</div>
				</div>
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.html">Dashboard Light</a></li>
							<li><a href="index-2.html">Dashboard Dark</a></li>
							<li><a href="jobs-page.html">Jobs</a></li>
							<li><a href="application-page.html">Application</a></li>
							<li><a href="my-profile.html">Profile</a></li>
							<li><a href="statistics-page.html">Statistics</a></li>
							<li><a href="compaines.html">Companies</a></li>	
						</ul>

                    </li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-093-waving"></i>
							<span class="nav-text">Jobs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="job-list.html">Job Lists</a></li>
                            <li><a href="job-view.html">Job View</a></li>
                            <li><a href="job-application.html">Job Application</a></li>
                            <li><a href="apply-job.html">Apply Job</a></li>
                            <li><a href="new-job.html">New Job</a></li>
                            <li><a href="user-profile.html">User Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
							<li><a href="./post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="./ecom-product-grid.html">Product Grid</a></li>
									<li><a href="./ecom-product-list.html">Product List</a></li>
									<li><a href="./ecom-product-detail.html">Product Details</a></li>
									<li><a href="./ecom-product-order.html">Order</a></li>
									<li><a href="./ecom-checkout.html">Checkout</a></li>
									<li><a href="./ecom-invoice.html">Invoice</a></li>
									<li><a href="./ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
							<li><a href="./uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="./empty-page.html">Empty Page</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="plus-box">
					<p class="fs-14 font-w600 mb-2">Let Jobick Managed<br>Your Resume Easily<br></p>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
				<div class="copyright">
					<p><strong>Protocloud Admin</strong> © 2016 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by Protocloud</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center flex-wrap search-job bg-white px-0 mb-4">
					<div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-6 col-12 search-dropdown d-flex align-items-center">
						<select class="form-control border-0 default-select style-1 h-auto">
							<option>Choose Location</option>
							<option>London</option>
							<option>France</option>
						</select>
					</div>
					<div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-6 col-12 search-dropdown d-flex align-items-center">
						<select class="form-control border-0 default-select style-1 h-auto">
							<option>Salary Range</option>
							<option>London</option>
							<option>France</option>
						</select>
					</div>
					<div class="col-xl-8 col-xxl-6 col-lg-6 col-12 d-md-flex job-title-search pe-0">
						<div class="input-group search-area">
							<input type="text" class="form-control h-auto" placeholder="search job title here...">
						<span class="input-group-text"><a href="javascript:void(0)" class="btn btn-primary btn-rounded">Search<i class="flaticon-381-search-2 ms-2"></i></a></span>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-xl-9">
						<div class="mt-4 d-flex justify-content-between align-items-center flex-wrap">
							<div class="mb-4">
								<h5>Showing 12 of 124 Jobs Results</h5>
								<span>Based your preferences</span>
							</div>	
							<div class="d-flex align-items-center mb-4">
								<div class="default-tab job-tabs">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#Boxed">
												<i class="fas fa-th-large"></i>
											</a>	
										</li>	
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#List1">
												<i class="fas fa-list"></i>
											</a>
										</li>	
									</ul>	
								</div>	
								<div>	
									<select class="default-select dashboard-select border-0 bg-transparent">
									  <option data-display="newest">newest</option>
									  
									  <option value="2">oldest</option>
									</select>
								</div>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="Boxed" role="tabpanel">
								<div class="row">
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-457 -443)">
															<rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
															<g  transform="translate(457 443)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
															  <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
															  <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">UI Designer</h4>
													<span class="text-primary mb-3 d-block">Bubbles Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-0.332)">
															<rect  width="71" height="71" rx="12" transform="translate(0.332)" fill="#c5c5c5"/>
															<g  transform="translate(0.332)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#ee27c0"/>
															  <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">Programmer</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(0.093)">
															<rect  width="71" height="71" rx="12" transform="translate(-0.093)" fill="#c5c5c5"/>
															<g  transform="translate(-0.093)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#27beee"/>
															  <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="11.211" cy="11" rx="11.211" ry="11" transform="translate(35.5 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">UX Researcher</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-0.483)">
															<rect  width="71" height="71" rx="12" transform="translate(0.483)" fill="#c5c5c5"/>
															<g  transform="translate(0.483)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#bec747"/>
															  <ellipse  data-name="Ellipse 12" cx="18.46" cy="18" rx="18.46" ry="18" transform="translate(14.2 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">Data Scientist</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(0.228)">
															<rect  width="71" height="71" rx="12" transform="translate(-0.228)" fill="#c5c5c5"/>
															<g  transform="translate(-0.228)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#7b25d1"/>
															  <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="11.211" cy="11" rx="11.211" ry="11" transform="translate(35.5 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">Graphic Designer</h4>
													<span class="text-primary mb-3 d-block">Bubbles Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-0.394)">
															<rect  width="71" height="71" rx="12" transform="translate(0.394)" fill="#c5c5c5"/>
															<g  transform="translate(0.394)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#345ad6"/>
															  <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">Animator</h4>
													<span class="text-primary mb-3 d-block">Bubbles Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-0.016)">
															<rect  width="71" height="71" rx="12" transform="translate(0.016)" fill="#c5c5c5"/>
															<g  transform="translate(0.016)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#ee9827"/>
															  <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="11.36" cy="11" rx="11.36" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">Animator</h4>
													<span class="text-primary mb-3 d-block">Bubbles Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(0.362)">
															<rect  width="71" height="71" rx="12" transform="translate(-0.362)" fill="#c5c5c5"/>
															<g  transform="translate(-0.362)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#3ca44d"/>
															  <ellipse  data-name="Ellipse 12" cx="18.217" cy="18" rx="18.217" ry="18" transform="translate(14.947 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">Lead Design Rese..</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(0.228)">
															<rect  width="71" height="71" rx="12" transform="translate(-0.228)" fill="#c5c5c5"/>
															<g  transform="translate(-0.228)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#cba336"/>
															  <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="11.211" cy="11" rx="11.211" ry="11" transform="translate(35.5 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">UI Designer</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-0.394)">
															<rect  width="71" height="71" rx="12" transform="translate(0.394)" fill="#c5c5c5"/>
															<g  transform="translate(0.394)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#80bc3b"/>
															  <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="10.887" cy="11" rx="10.887" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">UX Researcher</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(-0.016)">
															<rect  width="71" height="71" rx="12" transform="translate(0.016)" fill="#c5c5c5"/>
															<g  transform="translate(0.016)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#858585"/>
															  <ellipse  data-name="Ellipse 12" cx="17.987" cy="18" rx="17.987" ry="18" transform="translate(15.147 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="11.36" cy="11" rx="11.36" ry="11" transform="translate(35.973 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">UX Researcher</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
										<div class="card">
											<div class="jobs2 card-body">
												<div class="text-center">
													<span>
														<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
														  <g  transform="translate(0.362)">
															<rect  width="71" height="71" rx="12" transform="translate(-0.362)" fill="#c5c5c5"/>
															<g  transform="translate(-0.362)">
															  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#df2c57"/>
															  <ellipse  data-name="Ellipse 12" cx="18.217" cy="18" rx="18.217" ry="18" transform="translate(14.947 20)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
													</span>
													<h4 class="fs-20 mb-0">UX Researcher</h4>
													<span class="text-primary mb-3 d-block">Kleon Studios</span>
												</div>
												<div>
												<span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
													<span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div class="mb-sm-0 mb-3">
										<h5 class="mb-0">Showing 5 of 102 Data</h5>
									</div>
									<nav>
										<ul class="pagination pagination-circle">
											<li class="page-item page-indicator job-search-page">
												<a class="page-link" href="javascript:void(0)">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
											</li>
											<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
											<li class="page-item page-indicator job-search-page">
												<a class="page-link" href="javascript:void(0)">Next</a>
											</li>
										</ul>
									</nav>
								</div>		
							</div>
							<div class="tab-pane fade" id="List1">
								<div class="row">
									<div class="col-xl-12">
										<div class="d-flex flex-wrap search-row bg-white p-3 mb-3 rounded justify-content-between align-items-center">
											<div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">
												<svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
												  <g  transform="translate(0.243)">
													<rect  width="71" height="71" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
													<g  transform="translate(-0.243)">
													  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
													  <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
													  <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
													</g>
												  </g>
												</svg>

												<div>
													<h2 class="title"><a href="javascript:void(0);" class="text-black">Programmer</a></h2>
													<span class="text-primary">Highspeed Studios</span>
												</div>
											</div>
											<div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
												<svg class="me-3 ml-lg-0 ml-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="54" height="54" rx="15" fill="#2BC155"></rect>
													<g clip-path="url(#clip6)">
													<path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"></path>
													<path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"></path>
													<path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"></path>
													<path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"></path>
													<path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"></path>
													</g>
													<defs>
													<clipPath >
													<rect width="28" height="28" fill="white" transform="translate(13 12)"></rect>
													</clipPath>
													</defs>
												</svg>
												<div>
													<h4 class="sub-title text-black">$14,000 - $25,000</h4>
													<span>Monthly Salary</span>
												</div>
											</div>
											<div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
												<svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="54" height="54" rx="15" fill="#FBA556"></rect>
													<path d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z" fill="white"></path>
												</svg>
												<div>
													<h4 class="sub-title text-black">London, England</h4>
													<span>Location</span>
												</div>
											</div>
											<div class="col-xl-2 col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
												<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary rounded me-2">Apply Now</a>
											</div>
										</div>
										<div class="d-flex flex-wrap search-row bg-white p-3 mb-3 rounded justify-content-between align-items-center">
											<div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">
												<svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
												  <g  transform="translate(0.243)">
													<rect  width="71" height="71" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
													<g  transform="translate(-0.243)">
													  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
													  <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
													  <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
													</g>
												  </g>
												</svg>

												<div>
													<h2 class="title"><a href="javascript:void(0);" class="text-black">Animator</a></h2>
													<span class="text-primary">Highspeed Studios</span>
												</div>
											</div>
											<div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
												<svg class="me-3 ml-lg-0 ml-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="54" height="54" rx="15" fill="#2BC155"></rect>
													<g clip-path="url(#clip6)">
													<path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"></path>
													<path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"></path>
													<path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"></path>
													<path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"></path>
													<path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"></path>
													</g>
													<defs>
													<clipPath >
													<rect width="28" height="28" fill="white" transform="translate(13 12)"></rect>
													</clipPath>
													</defs>
												</svg>
												<div>
													<h4 class="sub-title text-black">$14,000 - $25,000</h4>
													<span>Monthly Salary</span>
												</div>
											</div>
											<div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
												<svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="54" height="54" rx="15" fill="#FBA556"></rect>
													<path d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z" fill="white"></path>
												</svg>
												<div>
													<h4 class="sub-title text-black">London, England</h4>
													<span>Location</span>
												</div>
											</div>
											<div class="col-xl-2 col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
												<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary rounded me-2">Apply Now</a>
											</div>
										</div>
										<div class="d-flex flex-wrap search-row bg-white p-3 mb-3 rounded justify-content-between align-items-center">
											<div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">
												<svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
												  <g  transform="translate(0.243)">
													<rect  width="71" height="71" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
													<g  transform="translate(-0.243)">
													  <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
													  <ellipse  data-name="Ellipse 12" cx="17.75" cy="18" rx="17.75" ry="18" transform="translate(14.947 20)" fill="#fff"/>
													  <ellipse  data-name="Ellipse 11" cx="10.743" cy="11" rx="10.743" ry="11" transform="translate(36.434 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
													</g>
												  </g>
												</svg>

												<div>
													<h2 class="title"><a href="javascript:void(0);" class="text-black">Designer</a></h2>
													<span class="text-primary">Highspeed Studios</span>
												</div>
											</div>
											<div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
												<svg class="me-3 ml-lg-0 ml-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="54" height="54" rx="15" fill="#2BC155"></rect>
													<g clip-path="url(#clip6)">
													<path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"></path>
													<path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"></path>
													<path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"></path>
													<path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"></path>
													<path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"></path>
													</g>
													<defs>
													<clipPath >
													<rect width="28" height="28" fill="white" transform="translate(13 12)"></rect>
													</clipPath>
													</defs>
												</svg>
												<div>
													<h4 class="sub-title text-black">$14,000 - $25,000</h4>
													<span>Monthly Salary</span>
												</div>
											</div>
											<div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
												<svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="54" height="54" rx="15" fill="#FBA556"></rect>
													<path d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z" fill="white"></path>
												</svg>
												<div>
													<h4 class="sub-title text-black">London, England</h4>
													<span>Location</span>
												</div>
											</div>
											<div class="col-xl-2 col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
												<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary rounded me-2">Apply Now</a>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>	
					</div>
					<div class="col-xl-3 mt-4">
						<div class="d-flex justify-content-between align-items-center mb-4">
							<h4>Job Preview</h4>
							<a href="javascript:void(0);"><i class="fas fa-times fs-30"></i></a>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header bg-blue">
										<div class="researcher">
										</div>
									</div>
									<div class="card-body">
										<span class="text-center d-block block">
											<svg xmlns="http://www.w3.org/2000/svg" width="141" height="141" viewBox="0 0 141 141">
											  <g  transform="translate(8.243 8)">
												<g  transform="translate(-0.243)" fill="#c5c5c5" stroke="#fff" stroke-width="8">
												  <rect width="125" height="125" rx="12" stroke="none"/>
												  <rect x="-4" y="-4" width="133" height="133" rx="16" fill="none"/>
												</g>
												<g  transform="translate(-0.243)">
												  <rect  data-name="placeholder" width="125" height="125" rx="12" fill="#2769ee"/>
												  <ellipse  data-name="Ellipse 12" cx="31.25" cy="31.69" rx="31.25" ry="31.69" transform="translate(26.316 35.211)" fill="#fff"/>
												  <ellipse  data-name="Ellipse 11" cx="18.914" cy="19.366" rx="18.914" ry="19.366" transform="translate(64.145 26.408)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
												</g>
											  </g>
											</svg>
										</span>
										<h4 class="fs-20 mb-0 text-center">UX Researcher</h4>
										<span class="text-primary mb-3 d-block text-center">Kleon Studios</span>
										
										<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
										<div>
											<span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Tempor incididunt ut labore </span>	
											<span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Lorem ipsum dolor </span>	
											<span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Sit amet consectetur  </span>	
											<span class="fs-16 mb-3 d-flex"><i class="fas fa-star orange me-3 mt-1"></i>Labore adipsicans elit do uasde </span>	
										</div>
										<div class="location">
											<span class="fs-14 font-w500 d-flex align-items-center mb-3"><i class="fas fa-map-marker-alt"></i>Manchester, England</span>
											<span class="fs-14 font-w500 d-flex align-items-center"><i class="fas fa-comment-dollar"></i>$2,000 - $2,500</span>
										</div>
									</div>
									<div class="card-footer border-0 pt-0">
										<div class="d-flex justify-content-between align-items-center">
											<a href="javascript:void(0);" class="btn btn-primary btn-rounded">APPLY JOB</a>
											<a href="javascript:void(0);" class="btn btn-secondary light btn-rounded"><i class="far fa-bookmark fs-20"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://protocloudtechnologies.com/" target="_blank">Protocloud</a> 2016</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	
	
	
	
	<!-- Chart piety plugin files -->
   
	
	<!-- Dashboard 1 -->
	
	
	
	
    <script src="./js/custom.min.js"></script>
	<script src="./js/dlabnav-init.js"></script>
	
    

</body>
</html>