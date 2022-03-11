<?php 
  session_start(); 
  include('include/connection.php');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: sign_in.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: sign_in.php");
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
    
</head>
<body>
<?php 

        $activePage = basename($_SERVER['PHP_SELF'], ".php");
      
?>
<nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="index.php">
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
           
            <li class="sidebar-item <?= ($activePage == 'index') ? 'active':''; ?>">
              <a
                class="sidebar-link"
                href="index.php"
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
            <li class="sidebar-item <?= ($activePage == 'reports') ? 'active':''; ?>">
            <a href="#reports" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Reports</span>
			</a>
            <ul id="reports" class="sidebar-dropdown list-styled collapse" data-bs-parent="#sidebar" style="">
							<li class="sidebar-item <?= ($activePage == 'reports_loans') ? 'active':''; ?>"><a class="sidebar-link" href="reports_loans.php"><i class="align-middle" data-feather="dollar-sign"></i>Loans</a></li>
							<li class="sidebar-item <?= ($activePage == 'reports_agents') ? 'active':''; ?>"><a class="sidebar-link" href="reports_agents.php"><i class="align-middle" data-feather="users"></i>Agents</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="reports_party.php"><i class="align-middle" data-feather="user"></i>Party </a></li>
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
      <script src="js/app.js"></script>
</body>
</html>