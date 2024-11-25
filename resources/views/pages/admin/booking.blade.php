<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{ asset ('pariwisata/admin/assets/images/logo-papsel2.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset ('pariwisata/admin/assets/css/bootstrap.min.css') }}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset ('pariwisata/admin/assets/css/all.min.css') }}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset ('pariwisata/admin/style.css') }}">
      <title>Travele | Travel & Tour HTML5 template </title>
</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
            <div class="dashboard-header sticky-header">
                <div class="content-left  logo-section pull-left">
                    <h1><a href="../index.html"><img style="height: 60px;width: 60px;" src="{{ asset ('pariwisata/admin/assets/images/logo-papsel2.png') }}" alt=""></a></h1>
                </div>
                <div class="heaer-content-right pull-right">
                    <div class="search-field">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="notifyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-item">
                                <i class="far fa-envelope"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu" aria-labelledby="notifyDropdown">
                            <h4> 3 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="{{ asset ('pariwisata/admin/assets/images/comment.jpg') }}" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="{{ asset ('pariwisata/admin/assets/images/comment2.jpg') }}" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="{{ asset ('pariwisata/admin/assets/images/comment3.jpg') }}" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="far fa-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 3 Messages</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="{{ asset ('pariwisata/admin/assets/images/comment4.jpg') }}" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="{{ asset ('pariwisata/admin/assets/images/comment5.jpg') }}" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="{{ asset ('pariwisata/admin/assets/images/comment6.jpg') }}" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                <img src="{{ asset ('pariwisata/admin/assets/images/comment.jpg') }}" alt="">
                                <span>My Account </span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="#"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li><a href="dashboard"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a><i class="fas fa-user"></i>Users</a>
                            <ul>
                                <li>
                                    <a href="user">User</a>
                                </li>
                                <li>
                                    <a href="useredit">User edit</a>
                                </li>
                                <li>
                                    <a href="newuser">New user</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="addpackage"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
                        <li>
                            <a><i class="fas fa-hotel"></i></i>packages</a>
                            <ul>
                                <li><a href="packageactive">Active</a></li>
                                <li><a href="packagepending">Pending</a></li>
                                <li><a href="packageexpired">Expired</a></li>
                            </ul>   
                        </li>
                        <li class="active-menu"><a href="booking"><i class="fas fa-ticket-alt"></i> Booking & Enquiry</a></li>
                        <li><a href="wishlist"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="comment"><i class="fas fa-comments"></i>Comments</a></li>
                        <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-booking">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Recent Booking</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Destination</th>
                                    <th>Id</th>
                                    <th>status</th>
                                    <th>Enquiry</th>
                                    <th>People</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="{{ asset ('pariwisata/admin/assets/images/comment.jpg') }}" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-success">Approve</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="{{ asset ('pariwisata/admin/assets/images/comment2.jpg') }}" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-primary">Pending</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="{{ asset ('pariwisata/admin/assets/images/comment3.jpg') }}" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-danger">Reject</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="{{ asset ('pariwisata/admin/assets/images/comment4.jpg') }}" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-primary">Pendding</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="{{ asset ('pariwisata/admin/assets/images/comment5.jpg') }}" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-danger">Reject</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="{{ asset ('pariwisata/admin/assets/images/comment6.jpg') }}" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-success">approve</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
               Copyright © 2021 Travele. All rights reserveds.
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <script src="{{ asset ('pariwisata/admin/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/canvasjs.min.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset ('pariwisata/admin/assets/js/dashboard-custom.js') }}"></script>
</body>
</html>