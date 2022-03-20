<?php 
  session_start(); 
  include('include/connection.php');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <title>LenaDenaBank | Dashboard</title>
    <link href="../css/app.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="css/select2.min.css" rel="stylesheet" type="text/css" /> 
    <script src="js/jquery.min.js"></script> 
    <script src="js/select2.min.js"></script>
</head>
<body>
<?php 

        $activePage = basename($_SERVER['PHP_SELF'], ".php");
      
?>
<nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="home.php">
            <span class="align-middle">LenaDenaBank</span>
          </a>

          <ul class="sidebar-nav">
            <!-- Nav item with sub dropdown menu -->
            <!-- <li class="sidebar-item active">
              <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                <i class="align-middle" data-feather="sliders"></i>
                  <line x1="4" y1="21" x2="4" y2="14"></line>
                  <line x1="4" y1="10" x2="4" y2="3"></line>
                  <line x1="12" y1="21" x2="12" y2="12"></line>
                  <line x1="12" y1="8" x2="12" y2="3"></line>
                  <line x1="20" y1="21" x2="20" y2="16"></line>
                  <line x1="20" y1="12" x2="20" y2="3"></line>
                  <line x1="1" y1="14" x2="7" y2="14"></line>
                  <line x1="9" y1="8" x2="15" y2="8"></line>
                  <line x1="17" y1="16" x2="23" y2="16"></line>
                </svg>
                <span class="align-middle">Dashboard</span>
              </a>
              <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                <li class="sidebar-item active"><a class="sidebar-link" href="index.html">Analytics</a></li>
                
              </ul>
            </li> -->
           
            <li class="sidebar-item <?= ($activePage == 'home') ? 'active':''; ?>">
              <a
                class="sidebar-link"
                href="home.php"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'party') ? 'active':''; ?>">
              <a
                class="sidebar-link"
                href="party.php"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Party</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'loans') ? 'active':''; ?>">
              <a class="sidebar-link" href="loans.php">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Loans</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'agents') ? 'active':''; ?>">
              <a class="sidebar-link" href="agents.php">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Agents</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'transactions') ? 'active':''; ?>">
              <a class="sidebar-link" href="transactions.php">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Transactions</span>
              </a>
            </li>
            
            <li class="sidebar-item <?= (substr($activePage,0,7) == 'reports') ? 'active':''; ?>">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <span class="align-middle">Reports</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled ps-3 collapse <?= ($activePage == 'reports_loans')||($activePage == 'reports_agents')||($activePage == 'reports_party') ? 'show':''; ?>" data-bs-parent="#sidebar">
            <li class="sidebar-item <?= ($activePage == 'reports_loans') ? 'active':''; ?>"><a class="sidebar-link" href="reports_loans.php"><i class="align-middle" data-feather="dollar-sign"></i>Loans</a></li>
							<li class="sidebar-item <?= ($activePage == 'reports_agents') ? 'active':''; ?>"><a class="sidebar-link" href="reports_agents.php"><i class="align-middle" data-feather="users"></i>Agents</a></li>
							<li class="sidebar-item <?= ($activePage == 'reports_party') ? 'active':''; ?>"><a class="sidebar-link" href="reports_party.php"><i class="align-middle" data-feather="user"></i>Party </a></li>
							
						
						</ul>
					</li>


            <li class="sidebar-item">
              <a class="sidebar-link" type="submit" name="logout" href="index.php?logout='1'">
                <i class="align-middle"  data-feather="rotate-ccw"></i> <span class="align-middle">Logout</span>
              </a>
            </li>
            
          </ul>
        </div>
      </nav>
      <script src="../js/app.js"></script>
</body>
</html>