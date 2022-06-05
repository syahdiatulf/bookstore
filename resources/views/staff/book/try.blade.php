@extends('layouts.master')

@section('content')
    <!doctype html>
    <html lang="en" class="light-theme">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
        <!--plugins-->
        <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
        <link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
        <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- loader-->
        <link href="assets/css/pace.min.css" rel="stylesheet" />


        <!--Theme Styles-->
        <link href="assets/css/dark-theme.css" rel="stylesheet" />
        <link href="assets/css/light-theme.css" rel="stylesheet" />
        <link href="assets/css/semi-dark.css" rel="stylesheet" />
        <link href="assets/css/header-colors.css" rel="stylesheet" />

        <title>Snacked - Bootstrap 5 Admin Template</title>
    </head>

    <body>


        <!--start wrapper-->
        <div class="wrapper">
            <!--start top header-->
            <header class="top-header">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-icon fs-3">
                        <i class="bi bi-list"></i>
                    </div>
                    <form class="searchbar">
                        <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i
                                class="bi bi-search"></i></div>
                        <input class="form-control" type="text" placeholder="Type here to search">
                        <div class="position-absolute top-50 translate-middle-y search-close-icon"><i
                                class="bi bi-x-lg"></i></div>
                    </form>
                    <div class="top-navbar-right ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item search-toggle-icon">
                                <a class="nav-link" href="#">
                                    <div class="">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-user-setting">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="user-setting d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle"
                                                    width="54" height="54">
                                                <div class="ms-3">
                                                    <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                                    <small class="mb-0 dropdown-user-designation text-secondary">HR
                                                        Manager</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-user-profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-person-fill"></i></div>
                                                <div class="ms-3"><span>Profile</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-gear-fill"></i></div>
                                                <div class="ms-3"><span>Setting</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="index2.html">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-speedometer"></i></div>
                                                <div class="ms-3"><span>Dashboard</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                                                <div class="ms-3"><span>Earnings</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-cloud-arrow-down-fill"></i>
                                                </div>
                                                <div class="ms-3"><span>Downloads</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-lock-fill"></i></div>
                                                <div class="ms-3"><span>Logout</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="projects">
                                        <i class="bi bi-grid-3x3-gap-fill"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="row row-cols-3 gx-2">
                                        <div class="col">
                                            <a href="ecommerce-orders.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                                                        <i class="bi bi-basket2-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Orders</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                                                        <i class="bi bi-people-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Users</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="ecommerce-products-grid.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                                                        <i class="bi bi-trophy-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Products</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="component-media-object.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                                                        <i class="bi bi-collection-play-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Media</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="pages-user-profile.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Account</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                                                        <i class="bi bi-file-earmark-text-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Docs</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="ecommerce-orders-detail.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                                                        <i class="bi bi-credit-card-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Payment</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                                                        <i class="bi bi-calendar-check-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Events</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                                                        <i class="bi bi-book-half"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Story</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="messages">
                                        <span class="notify-badge">5</span>
                                        <i class="bi bi-chat-right-fill"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="p-2 border-bottom m-2">
                                        <h5 class="h5 mb-0">Messages</h5>
                                    </div>
                                    <div class="header-message-list p-2">
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span
                                                            class="msg-time float-end text-secondary">1 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                        standard chunk of lorem...</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span
                                                            class="msg-time float-end text-secondary">7 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many
                                                        desktop publishing</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span
                                                            class="msg-time float-end text-secondary">2 h</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making
                                                        this the first true</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-4.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span
                                                            class="msg-time float-end text-secondary">3 h</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It
                                                        was popularised in the 1960</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-5.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span
                                                            class="msg-time float-end text-secondary">1 d</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If
                                                        you are going to use a passage</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-6.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span
                                                            class="msg-time float-end text-secondary">2 w</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All
                                                        the Lorem Ipsum generators</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span
                                                            class="msg-time float-end text-secondary">1 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                        standard chunk of lorem...</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span
                                                            class="msg-time float-end text-secondary">7 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many
                                                        desktop publishing</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle"
                                                    width="50" height="50">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span
                                                            class="msg-time float-end text-secondary">2 h</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making
                                                        this the first true</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <div>
                                            <hr class="dropdown-divider">
                                        </div>
                                        <a class="dropdown-item" href="#">
                                            <div class="text-center">View All Messages</div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="notifications">
                                        <span class="notify-badge">8</span>
                                        <i class="bi bi-bell-fill"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="p-2 border-bottom m-2">
                                        <h5 class="h5 mb-0">Notifications</h5>
                                    </div>
                                    <div class="header-notifications-list p-2">
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-primary text-primary"><i
                                                        class="bi bi-basket2-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">New Orders <span
                                                            class="msg-time float-end text-secondary">1 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You
                                                        have recived new orders</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-purple text-purple"><i
                                                        class="bi bi-people-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">New Customers <span
                                                            class="msg-time float-end text-secondary">7 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5
                                                        new user registered</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-success text-success"><i
                                                        class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">24 PDF File <span
                                                            class="msg-time float-end text-secondary">2 h</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                        pdf files generated</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-orange text-orange"><i
                                                        class="bi bi-collection-play-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Time Response <span
                                                            class="msg-time float-end text-secondary">3 h</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1
                                                        min avarage time response</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-info text-info"><i
                                                        class="bi bi-cursor-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">New Product Approved <span
                                                            class="msg-time float-end text-secondary">1 d</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your
                                                        new product has approved</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-pink text-pink"><i
                                                        class="bi bi-gift-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">New Comments <span
                                                            class="msg-time float-end text-secondary">2 w</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                                        customer comments recived</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-warning text-warning"><i
                                                        class="bi bi-droplet-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">New 24 authors<span
                                                            class="msg-time float-end text-secondary">1 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24
                                                        new authors joined last week</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-primary text-primary"><i
                                                        class="bi bi-mic-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span
                                                            class="msg-time float-end text-secondary">7 m</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully
                                                        shipped your item</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-success text-success"><i
                                                        class="bi bi-lightbulb-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span
                                                            class="msg-time float-end text-secondary">2 h</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45%
                                                        less alerts last 4 weeks</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-info text-info"><i
                                                        class="bi bi-bookmark-heart-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span
                                                            class="msg-time float-end text-secondary">2 w</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                                        4 user registartions</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="notification-box bg-light-bronze text-bronze"><i
                                                        class="bi bi-briefcase-fill"></i></div>
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span
                                                            class="msg-time float-end text-secondary">1 mo</span></h6>
                                                    <small
                                                        class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully
                                                        uploaded all files</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <div>
                                            <hr class="dropdown-divider">
                                        </div>
                                        <a class="dropdown-item" href="#">
                                            <div class="text-center">View All Notifications</div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--end top header-->

            <!--start sidebar -->
            <aside class="sidebar-wrapper" data-simplebar="true">
                <div class="sidebar-header">
                    <div>
                        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    </div>
                    <div>
                        <h4 class="logo-text">Snacked</h4>
                    </div>
                    <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                    </div>
                </div>
                <!--navigation-->
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bi bi-house-fill"></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                        <ul>
                            <li> <a href="index.html"><i class="bi bi-circle"></i>Blue Dashboard</a>
                            </li>
                            <li> <a href="index2.html"><i class="bi bi-circle"></i>Color Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                            </div>
                            <div class="menu-title">Application</div>
                        </a>
                        <ul>
                            <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Email</a>
                            </li>
                            <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Chat Box</a>
                            </li>
                            <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>File Manager</a>
                            </li>
                            <li> <a href="app-to-do.html"><i class="bi bi-circle"></i>Todo List</a>
                            </li>
                            <li> <a href="app-invoice.html"><i class="bi bi-circle"></i>Invoice</a>
                            </li>
                            <li> <a href="app-fullcalender.html"><i class="bi bi-circle"></i>Calendar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-label">UI Elements</li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                            </div>
                            <div class="menu-title">Widgets</div>
                        </a>
                        <ul>
                            <li> <a href="widgets-static-widgets.html"><i class="bi bi-circle"></i>Static Widgets</a>
                            </li>
                            <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Data Widgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                            </div>
                            <div class="menu-title">eCommerce</div>
                        </a>
                        <ul>
                            <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Products List</a>
                            </li>
                            <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Products Grid</a>
                            </li>
                            <li> <a href="ecommerce-products-categories.html"><i class="bi bi-circle"></i>Categories</a>
                            </li>
                            <li> <a href="ecommerce-orders.html"><i class="bi bi-circle"></i>Orders</a>
                            </li>
                            <li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Order details</a>
                            </li>
                            <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add New Product</a>
                            </li>
                            <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Add New Product
                                    2</a>
                            </li>
                            <li> <a href="ecommerce-transactions.html"><i class="bi bi-circle"></i>Transactions</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-award-fill"></i>
                            </div>
                            <div class="menu-title">Components</div>
                        </a>
                        <ul>
                            <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>Alerts</a>
                            </li>
                            <li> <a href="component-accordions.html"><i class="bi bi-circle"></i>Accordions</a>
                            </li>
                            <li> <a href="component-badges.html"><i class="bi bi-circle"></i>Badges</a>
                            </li>
                            <li> <a href="component-buttons.html"><i class="bi bi-circle"></i>Buttons</a>
                            </li>
                            <li> <a href="component-cards.html"><i class="bi bi-circle"></i>Cards</a>
                            </li>
                            <li> <a href="component-carousels.html"><i class="bi bi-circle"></i>Carousels</a>
                            </li>
                            <li> <a href="component-list-groups.html"><i class="bi bi-circle"></i>List Groups</a>
                            </li>
                            <li> <a href="component-media-object.html"><i class="bi bi-circle"></i>Media Objects</a>
                            </li>
                            <li> <a href="component-modals.html"><i class="bi bi-circle"></i>Modals</a>
                            </li>
                            <li> <a href="component-navs-tabs.html"><i class="bi bi-circle"></i>Navs & Tabs</a>
                            </li>
                            <li> <a href="component-navbar.html"><i class="bi bi-circle"></i>Navbar</a>
                            </li>
                            <li> <a href="component-paginations.html"><i class="bi bi-circle"></i>Pagination</a>
                            </li>
                            <li> <a href="component-popovers-tooltips.html"><i class="bi bi-circle"></i>Popovers &
                                    Tooltips</a>
                            </li>
                            <li> <a href="component-progress-bars.html"><i class="bi bi-circle"></i>Progress</a>
                            </li>
                            <li> <a href="component-spinners.html"><i class="bi bi-circle"></i>Spinners</a>
                            </li>
                            <li> <a href="component-notifications.html"><i class="bi bi-circle"></i>Notifications</a>
                            </li>
                            <li> <a href="component-avtars-chips.html"><i class="bi bi-circle"></i>Avatrs & Chips</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                            </div>
                            <div class="menu-title">Icons</div>
                        </a>
                        <ul>
                            <li> <a href="icons-line-icons.html"><i class="bi bi-circle"></i>Line Icons</a>
                            </li>
                            <li> <a href="icons-boxicons.html"><i class="bi bi-circle"></i>Boxicons</a>
                            </li>
                            <li> <a href="icons-feather-icons.html"><i class="bi bi-circle"></i>Feather Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-label">Forms & Tables</li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                            </div>
                            <div class="menu-title">Forms</div>
                        </a>
                        <ul>
                            <li> <a href="form-elements.html"><i class="bi bi-circle"></i>Form Elements</a>
                            </li>
                            <li> <a href="form-input-group.html"><i class="bi bi-circle"></i>Input Groups</a>
                            </li>
                            <li> <a href="form-layouts.html"><i class="bi bi-circle"></i>Forms Layouts</a>
                            </li>
                            <li> <a href="form-validations.html"><i class="bi bi-circle"></i>Form Validation</a>
                            </li>
                            <li> <a href="form-wizard.html"><i class="bi bi-circle"></i>Form Wizard</a>
                            </li>
                            <li> <a href="form-date-time-pickes.html"><i class="bi bi-circle"></i>Date Pickers</a>
                            </li>
                            <li> <a href="form-select2.html"><i class="bi bi-circle"></i>Select2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                            </div>
                            <div class="menu-title">Tables</div>
                        </a>
                        <ul>
                            <li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Basic Table</a>
                            </li>
                            <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>Advance Tables</a>
                            </li>
                            <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                            </div>
                            <div class="menu-title">Authentication</div>
                        </a>
                        <ul>
                            <li> <a href="authentication-signin.html" target="_blank"><i class="bi bi-circle"></i>Sign
                                    In</a>
                            </li>
                            <li> <a href="authentication-signup.html" target="_blank"><i class="bi bi-circle"></i>Sign
                                    Up</a>
                            </li>
                            <li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i
                                        class="bi bi-circle"></i>Sign In with Header & Footer</a>
                            </li>
                            <li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i
                                        class="bi bi-circle"></i>Sign Up with Header & Footer</a>
                            </li>
                            <li> <a href="authentication-forgot-password.html" target="_blank"><i
                                        class="bi bi-circle"></i>Forgot Password</a>
                            </li>
                            <li> <a href="authentication-reset-password.html" target="_blank"><i
                                        class="bi bi-circle"></i>Reset Password</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages-user-profile.html">
                            <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                            </div>
                            <div class="menu-title">User Profile</div>
                        </a>
                    </li>
                    <li>
                        <a href="pages-timeline.html">
                            <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                            </div>
                            <div class="menu-title">Timeline</div>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                            </div>
                            <div class="menu-title">Errors</div>
                        </a>
                        <ul>
                            <li> <a href="pages-errors-404-error.html" target="_blank"><i class="bi bi-circle"></i>404
                                    Error</a>
                            </li>
                            <li> <a href="pages-errors-500-error.html" target="_blank"><i class="bi bi-circle"></i>500
                                    Error</a>
                            </li>
                            <li> <a href="pages-errors-coming-soon.html" target="_blank"><i
                                        class="bi bi-circle"></i>Coming Soon</a>
                            </li>
                            <li> <a href="pages-blank-page.html" target="_blank"><i class="bi bi-circle"></i>Blank
                                    Page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages-faq.html">
                            <div class="parent-icon"><i class="bi bi-question-lg"></i>
                            </div>
                            <div class="menu-title">FAQ</div>
                        </a>
                    </li>
                    <li>
                        <a href="pages-pricing-tables.html">
                            <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                            </div>
                            <div class="menu-title">Pricing Tables</div>
                        </a>
                    </li>
                    <li class="menu-label">Charts & Maps</li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                            <div class="menu-title">Charts</div>
                        </a>
                        <ul>
                            <li> <a href="charts-apex-chart.html"><i class="bi bi-circle"></i>Apex</a>
                            </li>
                            <li> <a href="charts-chartjs.html"><i class="bi bi-circle"></i>Chartjs</a>
                            </li>
                            <li> <a href="charts-highcharts.html"><i class="bi bi-circle"></i>Highcharts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-pin-map-fill"></i>
                            </div>
                            <div class="menu-title">Maps</div>
                        </a>
                        <ul>
                            <li> <a href="map-google-maps.html"><i class="bi bi-circle"></i>Google Maps</a>
                            </li>
                            <li> <a href="map-vector-maps.html"><i class="bi bi-circle"></i>Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-label">Others</li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                            </div>
                            <div class="menu-title">Menu Levels</div>
                        </a>
                        <ul>
                            <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                                <ul>
                                    <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level
                                            Two</a>
                                        <ul>
                                            <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
                            <div class="parent-icon"><i class="bi bi-file-code-fill"></i>
                            </div>
                            <div class="menu-title">Documentation</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://themeforest.net/user/codervent" target="_blank">
                            <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="menu-title">Support</div>
                        </a>
                    </li>
                </ul>
                <!--end navigation-->
            </aside>
            <!--end sidebar -->

            <!--start content-->
            <main class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Forms</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Select2</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button"
                                class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                    href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item"
                                    href="javascript:;">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Select2 Controls</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <div class="mb-3">
                                        <label class="form-label">Select2 Text Control</label>
                                        <select class="single-select">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of
                                            </option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and
                                                Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                                Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena,
                                                Ascension and Tristan da Cunha</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                                The South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic
                                                of</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label class="form-label">Select2 Small Text Control</label>
                                        <select class="single-select">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of
                                            </option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and
                                                Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                                Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena,
                                                Ascension and Tristan da Cunha</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                                The South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic
                                                of</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Select2 Multiple Control</label>
                                        <select class="multiple-select" data-placeholder="Choose anything"
                                            multiple="multiple">
                                            <option value="United States" selected>United States</option>
                                            <option value="United Kingdom" selected>United Kingdom</option>
                                            <option value="Afghanistan" selected>Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of
                                            </option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and
                                                Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                                Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena,
                                                Ascension and Tristan da Cunha</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                                The South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic
                                                of</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Select2 Input Group Apend</label>
                                        <div class="input-group">
                                            <select class="single-select form-select">
                                                <option selected>Last Visit</option>
                                                <option value="1">Dashboard</option>
                                                <option value="2">Control</option>
                                                <option value="3">KPI</option>
                                                <option value="3">Map</option>
                                                <option value="3">Billing Product</option>
                                            </select>
                                            <button class="btn btn-outline-secondary" type="button"><i
                                                    class='bx bx-search'></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Select2 Input Group Prepend</label>
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="button"><i
                                                    class='bx bx-search'></i>
                                            </button>
                                            <select class="form-select single-select" id="inputGroupSelect03"
                                                aria-label="Example select with button addon">
                                                <option selected>Last Visit</option>
                                                <option value="1">Dashboard</option>
                                                <option value="2">Control</option>
                                                <option value="3">KPI</option>
                                                <option value="3">Map</option>
                                                <option value="3">Billing Product</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </main>
            <!--end page main-->


            <!--start overlay-->
            <div class="overlay nav-toggle-icon"></div>
            <!--end overlay-->

            <!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->

            <!--start switcher-->
            <div class="switcher-body">
                <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                        class="bi bi-paint-bucket me-0"></i></button>
                <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                    data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6 class="mb-0">Theme Variation</h6>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                                value="option1" checked>
                            <label class="form-check-label" for="LightTheme">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                                value="option2">
                            <label class="form-check-label" for="DarkTheme">Dark</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                                value="option3">
                            <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                        </div>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                                value="option3">
                            <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                        </div>
                        <hr />
                        <h6 class="mb-0">Header Colors</h6>
                        <hr />
                        <div class="header-colors-indigators">
                            <div class="row row-cols-auto g-3">
                                <div class="col">
                                    <div class="indigator headercolor1" id="headercolor1"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor2" id="headercolor2"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor3" id="headercolor3"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor4" id="headercolor4"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor5" id="headercolor5"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor6" id="headercolor6"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor7" id="headercolor7"></div>
                                </div>
                                <div class="col">
                                    <div class="indigator headercolor8" id="headercolor8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end switcher-->

        </div>
        <!--end wrapper-->


        <!-- Bootstrap bundle JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js"></script>
        <script src="assets/js/form-select2.js"></script>

        <!--app-->
        <script src="assets/js/app.js"></script>


    </body>

    </html>
@endsection
