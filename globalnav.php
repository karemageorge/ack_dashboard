 <?php include ('php/loginproc.php');?>
 <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase"><?php echo $_SESSION['username'];?></h2><span class="text-uppercase"><?php echo $_SESSION['statel']; ?> </span>
          </div>
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">CK</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="<?php if ($page =='home'){echo 'active';}?>"><a href="index.php"> <i class="icon-home"></i><span>Home</span></a></li>
            <li class="<?php if ($page =='inco me'){echo 'active';}?>"> <a href="income.php"><i class="icon-bag"></i><span>Income Basket</span></a></li>
            <li class="<?php if ($page =='expense'){echo 'active';}?>"> <a href="voteheads.php"><i class="icon-list-alt"></i><span>Vote Heads</span></a></li>
            <li class="<?php if ($page =='wages'){echo 'active';}?>"> <a href="wages.php"> <i class="icon-vallet"> </i><span>Consolidated Wages </span></a></li>
             <li class="<?php if ($page =='quota'){echo 'active';}?>"> <a href="tables.php"> <i class="icon-pie-chart"> </i><span>Quota </span></a></li>
            <li class="<?php if ($page =='reports'){echo 'active';}?>"> <a href="Index.php"> <i class="icon-graph"></i><span>Reports</span>
             <div class="badge badge-warning">6 New</div></a></li>
          </ul> 
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
             
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-user"></i><span>User Management</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li class="<?php if ($page =='user'){echo 'active';}?>"> <a href="accountset.php"><i class="icon-user-secret"></i>System User</a></li>
                <li> <a href="#"> <i class="icon-users"></i>Church Members</a></li> 
                
              </ul>
            </li>
           <!--  <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
            <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
            <li> <a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
          </ul> -->
        </div>
      </div>
    </nav>
    <div class="page forms-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><strong class="text-primary">ACK St' Stephen Ngoingwa Church</strong>&nbsp; <span>Accounts Dashboard </span></div></a></div>
           <!--    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul> -->
                </li><!-- <li><p class="" id="time"></p></li> -->
                <li class="nav-item"><a href="login.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
   <!--    <script>
var display=setInterval(function(){Time()},0);

function Time()
{
var date=new Date();
var time=date.toLocaleTimeString();
document.getElementById("time").innerHTML=time;
}
</script> -->