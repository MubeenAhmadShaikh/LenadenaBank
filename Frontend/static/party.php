<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="LenaDenaBank" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>LenaDenaBank | Party</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="index.html">
            <span class="align-middle">LenaDenaBank</span>
          </a>

          <ul class="sidebar-nav">
            <li class="sidebar-item">
              <a
                class="sidebar-link"
                href="index.html"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item active">
              <a
                class="sidebar-link"
                href="party.html"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
              >
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Party</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="loans.html">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Loans</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="agents.html">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Agents</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="reports.html">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Reports</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#Logout">
                <i class="align-middle" data-feather="rotate-ccw"></i> <span class="align-middle">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
          <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>

          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
              <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                  <div class="position-relative">
                    <i class="align-middle" data-feather="bell"></i>
                    <span class="indicator">4</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                  <div class="dropdown-menu-header">4 New Notifications</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-danger" data-feather="alert-circle"></i>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">Update completed</div>
                          <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                          <div class="text-muted small mt-1">30m ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-warning" data-feather="bell"></i>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">Lorem ipsum</div>
                          <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                          <div class="text-muted small mt-1">2h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-primary" data-feather="home"></i>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">Login from 192.186.1.8</div>
                          <div class="text-muted small mt-1">5h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-success" data-feather="user-plus"></i>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">New connection</div>
                          <div class="text-muted small mt-1">Christina accepted your request.</div>
                          <div class="text-muted small mt-1">14h ago</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">Show all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                  <div class="position-relative">
                    <i class="align-middle" data-feather="message-square"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                  <div class="dropdown-menu-header">
                    <div class="position-relative">4 New Messages</div>
                  </div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <img
                            src="img/avatars/avatar-5.jpg"
                            class="avatar img-fluid rounded-circle"
                            alt="Vanessa Tucker"
                          />
                        </div>
                        <div class="col-10 ps-2">
                          <div class="text-dark">Vanessa Tucker</div>
                          <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                          <div class="text-muted small mt-1">15m ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <img
                            src="img/avatars/avatar-2.jpg"
                            class="avatar img-fluid rounded-circle"
                            alt="William Harris"
                          />
                        </div>
                        <div class="col-10 ps-2">
                          <div class="text-dark">William Harris</div>
                          <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                          <div class="text-muted small mt-1">2h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <img
                            src="img/avatars/avatar-4.jpg"
                            class="avatar img-fluid rounded-circle"
                            alt="Christina Mason"
                          />
                        </div>
                        <div class="col-10 ps-2">
                          <div class="text-dark">Christina Mason</div>
                          <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                          <div class="text-muted small mt-1">4h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <img
                            src="img/avatars/avatar-3.jpg"
                            class="avatar img-fluid rounded-circle"
                            alt="Sharon Lessman"
                          />
                        </div>
                        <div class="col-10 ps-2">
                          <div class="text-dark">Sharon Lessman</div>
                          <div class="text-muted small mt-1">
                            Aenean tellus metus, bibendum sed, posuere ac, mattis non.
                          </div>
                          <div class="text-muted small mt-1">5h ago</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">Show all messages</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                  <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                  <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                  <span class="text-dark">Charles Hall</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="pages-profile.html"
                    ><i class="align-middle me-1" data-feather="user"></i> Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.html"
                    ><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <main class="content">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-xl-8">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="card-actions float-end">
                      <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-more-horizontal align-middle"
                          >
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                          </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    <h5 class="card-title mb-0">Party</h5>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped" style="width: 100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Company</th>
                          <th>Email</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Garrett Winters</td>
                          <td>Good Guys</td>
                          <td>garrett@winters.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Ashton Cox</td>
                          <td>Levitz Furniture</td>
                          <td>ashton@cox.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Sonya Frost</td>
                          <td>Child World</td>
                          <td>sonya@frost.com</td>
                          <td><span class="badge bg-danger">Deleted</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Jena Gaines</td>
                          <td>Helping Hand</td>
                          <td>jena@gaines.com</td>
                          <td><span class="badge bg-warning">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-2.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Charde Marshall</td>
                          <td>Price Savers</td>
                          <td>charde@marshall.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-2.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Haley Kennedy</td>
                          <td>Helping Hand</td>
                          <td>haley@kennedy.com</td>
                          <td><span class="badge bg-danger">Deleted</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-2.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Good Guys</td>
                          <td>tatyana@fitzpatrick.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-3.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Michael Silva</td>
                          <td>Red Robin Stores</td>
                          <td>michael@silva.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-3.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Angelica Ramos</td>
                          <td>The Wiz</td>
                          <td>angelica@ramos.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-4.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Jennifer Chang</td>
                          <td>Helping Hand</td>
                          <td>jennifer@chang.com</td>
                          <td><span class="badge bg-warning">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-4.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Brenden Wagner</td>
                          <td>The Wiz</td>
                          <td>brenden@wagner.com</td>
                          <td><span class="badge bg-warning">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-4.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Fiona Green</td>
                          <td>The Sample</td>
                          <td>fiona@green.com</td>
                          <td><span class="badge bg-warning">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-5.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Prescott Bartlett</td>
                          <td>The Sample</td>
                          <td>prescott@bartlett.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-5.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Gavin Cortez</td>
                          <td>Red Robin Stores</td>
                          <td>gavin@cortez.com</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="img/avatars/avatar-5.jpg"
                              class="rounded-circle my-n1"
                              alt="Avatar"
                              width="32"
                              height="32"
                            />
                          </td>
                          <td>Howard Hatfield</td>
                          <td>Price Savers</td>
                          <td>howard@hatfield.com</td>
                          <td><span class="badge bg-warning">Inactive</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-xl-4">
                <div class="card">
                  <div class="card-header">
                    <div class="card-actions float-end">
                      <div class="dropdown position-relative">
                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-more-horizontal align-middle"
                          >
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                          </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    <h5 class="card-title mb-0">Angelica Ramos</h5>
                  </div>
                  <div class="card-body">
                    <div class="row g-0">
                      <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                        <img
                          src="img/avatars/avatar-3.jpg"
                          class="rounded-circle mt-2"
                          alt="Angelica Ramos"
                          width="64"
                          height="64"
                        />
                      </div>
                      <div class="col-sm-9 col-xl-12 col-xxl-9">
                        <strong>About me</strong>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua.
                        </p>
                      </div>
                    </div>

                    <table class="table table-sm mt-2 mb-4">
                      <tbody>
                        <tr>
                          <th>Name</th>
                          <td>Angelica Ramos</td>
                        </tr>
                        <tr>
                          <th>Company</th>
                          <td>The Wiz</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td>angelica@ramos.com</td>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <td>+1234123123123</td>
                        </tr>
                        <tr>
                          <th>Status</th>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                      </tbody>
                    </table>

                    <strong>Activity</strong>

                    <ul class="timeline mt-2 mb-0">
                      <li class="timeline-item">
                        <strong>Signed out</strong>
                        <span class="float-end text-muted text-sm">30m ago</span>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
                      </li>
                      <li class="timeline-item">
                        <strong>Created invoice #1204</strong>
                        <span class="float-end text-muted text-sm">2h ago</span>
                        <p>Sed aliquam ultrices mauris. Integer ante arcu...</p>
                      </li>
                      <li class="timeline-item">
                        <strong>Discarded invoice #1147</strong>
                        <span class="float-end text-muted text-sm">3h ago</span>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
                      </li>
                      <li class="timeline-item">
                        <strong>Signed in</strong>
                        <span class="float-end text-muted text-sm">3h ago</span>
                        <p>Curabitur ligula sapien, tincidunt non, euismod vitae...</p>
                      </li>
                      <li class="timeline-item">
                        <strong>Signed up</strong>
                        <span class="float-end text-muted text-sm">2d ago</span>
                        <p>Sed aliquam ultrices mauris. Integer ante arcu...</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-start">
                <p class="mb-0">
                  <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>LenaDenaBank</strong></a>
                  &copy;
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
