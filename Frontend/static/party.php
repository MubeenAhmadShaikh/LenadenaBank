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
    <!-- CDN till demo -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- CDN till demo -->
    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
    <?php include ('include/sidebar.php')?>

      <div class="main">
      <?php include ('include/header.php')?>

        <!-- <main class="content">
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
        </main> -->

        <main class="content">
          <div class="container-fluid p-0">
            <div class="d-flex flex-row justify-content-between">

              <h1 class="h3 mb-3">Party</h1>
              <div>

                <a class="btn btn-primary" href="add_party.php" role="button"><i class="align-middle" data-feather="plus"></i>Add Party</a>
              </div>
            </div>
			<!-- #TODO
		1. DOB field and php -->
            <div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								
								<table class="table">
									<thead>
										<tr>
											<th>Acc. No.</th>
											<th>Name</th>
											<th>Balance</th>
											<th>Agent Id</th>
											<th>Contact</th>
											<th >Acc. Opening date</th>
											<th class="d-none d-md-table-cell" >Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										
												
												<tr>
													<td>123</td>
													<td>Abc</td>
													<td>Male</td>
                          <td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                          <td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                          <td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                          <td >12/2/2021</td>
															<td class="table-action d-flex justify-content-around">
																<a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
																<a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#myModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
																
														</td>
													
											
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
          </div>
		  
		  <!-- Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Party</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Removing party will remove all its details and data that cannot be retrieved please confirm to delete or cancel
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="delete" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>
        </main>

        <?php include ('include/footer.php')?>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
