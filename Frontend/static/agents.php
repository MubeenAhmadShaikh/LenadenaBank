<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="LenaDenaBank" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>LenaDenaBank | Agents</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>

  <body>
  <div class="wrapper">
    <?php include ('include/sidebar.php')?>

      <div class="main">
      <?php include ('include/header.php')?>

        <main class="content">
          <div class="container-fluid p-0">
            <div class="d-flex flex-row justify-content-between">

              <h1 class="h3 mb-3">Agents</h1>
              <div>

                <a class="btn btn-primary" href="add_agent.php" role="button"><i class="align-middle" data-feather="plus"></i>Add Agent</a>
              </div>
            </div>

            <div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								
								<table class="table">
									<thead>
										<tr>
											<th >Name</th>
											<th >Gender</th>
											<th >KYC Status</th>
											<th >Adhaar Number</th>
											<th >PAN Number</th>
											<th class="d-none d-md-table-cell" >Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Vanessa Tucker</td>
											<td>Female</td>
											<td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
											<td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
											<td ><i class="align-middle text-danger" data-feather="alert-circle"></i></td>
                      <td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
												<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
												<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
											</td>
										</tr>
										<tr>
											<td>Vanessa Tucker</td>
											<td>Female</td>
											<td ><i class="align-middle text-success" data-feather="check"></i></td>
											<td >2221 3333 2222 4444</td>
											<td >2221 3333 2222 4444</td>
                      <td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
												<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
												<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
											</td>
										</tr>
										
									</tbody>
								</table>
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
