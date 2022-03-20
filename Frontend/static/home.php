
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="LenaDenaBank" />
	<link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>LenaDenaBank | Dashboard</title>
    <link href="css/app.css" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
    
      <?php include ('include/sidebar.php')?>
      <div class="main">
        <?php include ('include/header.php')?>
        <main class="content">
          <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
            
            <div class="row">
              <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col mt-0">
                              <h5 class="card-title">Daily Recovery</h5>
                            </div>

                            <div class="col-auto">
                              <div class="stat text-primary">
                                <i class="align-middle" data-feather="truck"></i>
                              </div>
                            </div>
                          </div>
                          <h1 class="mt-1 mb-3">36000</h1>
                          <div class="mb-0">
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>16%</span>
                            <span class="text-muted">Collection Remaining</span>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col mt-0">
                              <h5 class="card-title">Party</h5>
                            </div>

                            <div class="col-auto">
                              <div class="stat text-primary">
                                <i class="align-middle" data-feather="users"></i>
                              </div>
                            </div>
                          </div>
                          <h1 class="mt-1 mb-3">18</h1>
                          <div class="mb-0">
                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                            <span class="text-muted">Since last week</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col mt-0">
                              <h5 class="card-title">Monthly Recovery</h5>
                            </div>

                            <div class="col-auto">
                              <div class="stat text-primary">
                                <i class="align-middle" data-feather="dollar-sign"></i>
                              </div>
                            </div>
                          </div>
                          <h1 class="mt-1 mb-3">21,30888</h1>
                          <div class="mb-0">
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> 6% </span>
                            <span class="text-muted">Collection Remaining</span>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col mt-0">
                              <h5 class="card-title">Loans</h5>
                            </div>

                            <div class="col-auto">
                              <div class="stat text-primary">
                                <i class="align-middle" data-feather="shopping-cart"></i>
                              </div>
                            </div>
                          </div>
                          <h1 class="mt-1 mb-3">47</h1>
                          <div class="mb-0">
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                            <span class="text-muted">Since last week</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Recent Earnings</h5>
                  </div>
                  <div class="card-body py-3">
                    <div class="chart chart-sm">
                      <canvas id="chartjs-dashboard-line"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Monthly Collection</h5>
                  </div>
                  <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                      <div class="py-3">
                        <div class="chart chart-xs">
                          <canvas id="chartjs-dashboard-pie"></canvas>
                        </div>
                      </div>

                      <table class="table mb-0">
                        <tbody>
                          <tr>
                            <td>Collected</td>
                            <td class="text-end">4306</td>
                          </tr>
                          <tr>
                            <td>In Progress</td>
                            <td class="text-end">3801</td>
                          </tr>
                          <tr>
                            <td>Pending</td>
                            <td class="text-end">1689</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- #TODO
                Add Status Bar 
              -->
              <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                  <div class="card-header">
                    <div class="row">
                      <h5 class="card-title mb-0">Recent Loans Provided</h5>
                    </div>
                  </div>
                  <table class="table table-hover my-0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th class="d-none d-xl-table-cell">Start Date</th>
                        <th class="d-none d-xl-table-cell">End Date</th>
                        <th>Recovery Status</th>
                        <th class="d-none d-md-table-cell">Agent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Vijay Sales</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">65%</span>
                            <div
                              class="progress progress-sm bg-success-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">Vijay Raman</td>
                      </tr>
                      <tr>
                        <td>Gada Electronics</td>
                        <td class="d-none d-xl-table-cell">31/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">50%</span>
                            <div
                              class="progress progress-sm bg-warning-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">Jethalal Gada</td>
                      </tr>
                      <tr>
                        <td>Jetway Braodband</td>
                        <td class="d-none d-xl-table-cell">30/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">80%</span>
                            <div
                              class="progress progress-sm bg-success-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-success" role="progressbar" style="width: 80%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">Sharon Lessman</td>
                      </tr>
                      <tr>
                        <td>Express Nitro</td>
                        <td class="d-none d-xl-table-cell">24/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">78%</span>
                            <div
                              class="progress progress-sm bg-success-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                      </tr>
                      <tr>
                        <td>Alad Phoenix</td>
                        <td class="d-none d-xl-table-cell">20/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">28%</span>
                            <div
                              class="progress progress-sm bg-primary-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 28%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                      </tr>
                      <tr>
                        <td>Valdimir Putin</td>
                        <td class="d-none d-xl-table-cell">18/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">100%</span>
                            <div
                              class="progress progress-sm bg-success-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">Sharon Lessman</td>
                      </tr>
                      <tr>
                        <td>Jason Romeo</td>
                        <td class="d-none d-xl-table-cell">14/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>

                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">10%</span>
                            <div
                              class="progress progress-sm bg-primary-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">Christina Mason</td>
                      </tr>
                      <tr>
                        <td>Hagrid</td>
                        <td class="d-none d-xl-table-cell">12/12/2020</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td>
                          <div class="d-flex flex-column w-100">
                            <span class="me-2 mb-1 text-muted">78%</span>
                            <div
                              class="progress progress-sm bg-success-light w-50"
                              style="height: 8px; margin-right: 5px"
                            >
                              <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- 

                td 2 :
                <td>
                      <div class="d-flex flex-column w-100">
                        <span class="me-2 mb-1 text-muted">33%</span>
                        <div class="progress progress-sm bg-danger-light w-100">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 33%;"></div>
                        </div>
                      </div>
                    </td>

                    td : 3
                    <td>
                      <div class="d-flex flex-column w-100">
                        <span class="me-2 mb-1 text-muted">50%</span>
                        <div class="progress progress-sm bg-warning-light w-100">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"></div>
                        </div>
                      </div>
                    </td>
                    td : 4

                    <td>
                      <div class="d-flex flex-column w-100">
                        <span class="me-2 mb-1 text-muted">80%</span>
                        <div class="progress progress-sm bg-success-light w-100">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"></div>
                        </div>
                      </div>
                    </td>

                    <td>
                      <div class="d-flex flex-column w-100">
                        <span class="me-2 mb-1 text-muted">78%</span>
                        <div class="progress progress-sm bg-primary-light w-100">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;"></div>
                        </div>
                      </div>
                    </td>

               -->
            </div>
          </div>
        </main>
        <?php include ('include/footer.php')?>
        
      </div>
    </div>

    <script src="js/app.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
        var gradient = ctx.createLinearGradient(0, 0, 0, 225);
        gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
        gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
          type: "line",
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
              {
                label: "Sales ($)",
                fill: true,
                backgroundColor: gradient,
                borderColor: window.theme.primary,
                data: [2115, 1562, 1584, 1892, 1587, 1923, 2566, 2448, 2805, 3438, 2917, 3327],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            tooltips: {
              intersect: false,
            },
            hover: {
              intersect: true,
            },
            plugins: {
              filler: {
                propagate: false,
              },
            },
            scales: {
              xAxes: [
                {
                  reverse: true,
                  gridLines: {
                    color: "rgba(0,0,0,0.0)",
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    stepSize: 1000,
                  },
                  display: true,
                  borderDash: [3, 3],
                  gridLines: {
                    color: "rgba(0,0,0,0.0)",
                  },
                },
              ],
            },
          },
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
          type: "pie",
          data: {
            labels: ["Chrome", "Firefox", "IE"],
            datasets: [
              {
                data: [4306, 3801, 1689],
                backgroundColor: [window.theme.primary, window.theme.warning, window.theme.danger],
                borderWidth: 5,
              },
            ],
          },
          options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            cutoutPercentage: 75,
          },
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
          type: "bar",
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
              {
                label: "This year",
                backgroundColor: window.theme.primary,
                borderColor: window.theme.primary,
                hoverBackgroundColor: window.theme.primary,
                hoverBorderColor: window.theme.primary,
                data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                barPercentage: 0.75,
                categoryPercentage: 0.5,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            scales: {
              yAxes: [
                {
                  gridLines: {
                    display: false,
                  },
                  stacked: false,
                  ticks: {
                    stepSize: 20,
                  },
                },
              ],
              xAxes: [
                {
                  stacked: false,
                  gridLines: {
                    color: "transparent",
                  },
                },
              ],
            },
          },
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var markers = [
          {
            coords: [31.230391, 121.473701],
            name: "Shanghai",
          },
          {
            coords: [28.70406, 77.102493],
            name: "Delhi",
          },
          {
            coords: [6.524379, 3.379206],
            name: "Lagos",
          },
          {
            coords: [35.689487, 139.691711],
            name: "Tokyo",
          },
          {
            coords: [23.12911, 113.264381],
            name: "Guangzhou",
          },
          {
            coords: [40.7127837, -74.0059413],
            name: "New York",
          },
          {
            coords: [34.052235, -118.243683],
            name: "Los Angeles",
          },
          {
            coords: [41.878113, -87.629799],
            name: "Chicago",
          },
          {
            coords: [51.507351, -0.127758],
            name: "London",
          },
          {
            coords: [40.416775, -3.70379],
            name: "Madrid ",
          },
        ];
        var map = new jsVectorMap({
          map: "world",
          selector: "#world_map",
          zoomButtons: true,
          markers: markers,
          markerStyle: {
            initial: {
              r: 9,
              strokeWidth: 7,
              stokeOpacity: 0.4,
              fill: window.theme.primary,
            },
            hover: {
              fill: window.theme.primary,
              stroke: window.theme.primary,
            },
          },
          zoomOnScroll: false,
        });
        window.addEventListener("resize", () => {
          map.updateSize();
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
          inline: true,
          prevArrow: '<span title="Previous month">&laquo;</span>',
          nextArrow: '<span title="Next month">&raquo;</span>',
          defaultDate: defaultDate,
        });
      });
    </script>
  </body>
</html>
