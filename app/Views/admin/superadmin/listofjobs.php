<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CCSLINK</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('style/vendors/feather/feather.css')?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/css/vendor.bundle.base.css')?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('style/css/modal.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('style/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?= $this->include('admin/superadmin/template') ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Jobs</p>
                  
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>Image</th>
                          <th>Jobs</th>
                          <th>Description</th>
                          <th>Job Category</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                          <?php foreach ($jobData as $data): ?>
                        <tr>
                            <td class="py-1">
                                <img src="<?= base_url('upload/jobs/') .$data['job_cover']?>" alt="image"/>
                          </td>
                            <td><?= $data['job_title'] ?></td>
                            <td>
                              <p><?= $data['job_description']?></p>
                            </td>
                            <td><?=  $data['job_category']?></td>
                            <td><?= $data['date']?></td>
                            <?php if ($data['approval'] == 'approved'): ?>
                          <td class="font-weight-medium"><div class="badge badge-primary"><?=  $data['approval']?></div></td>
                              <?php elseif($data['approval'] == 'pending'): ?>
                                <td class="font-weight-medium"><div class="badge badge-warning"><?=  $data['approval']?></div></td>     
                            <?php endif; ?>
                          <td><a href="#approve" data-toggle="modal">
                            <button type="button" class="btn btn-dark btn-sm">Approve</button>
                            </a>
                          </td>
                          </tr>
                          <?php endforeach; ?>
                      </tbody>
                    </table>
                    <br>
                   
                  </div>
                    <a href="#add-job" data-toggle="modal">
                      <button class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                    </a>
              </div>
            </div>
          </div>
          <div id="add-job" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add Job</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Job Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter Job Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>
                    <input
                      type="text"
                      name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input
                          type="date"
                          name="date"
                          id="date"
                          class="formbold-form-input"
                        />
                      </div>
                      
                    </div>
                  </div>
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="upload"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-dark">Add</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
         <!--Approve-->
         <div id="approve" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="formbold-event-wrapper">
                <h3>Job Title</h3>
                <img src="images/faces/event.jpg">
                <div class="formbold-event-details">
                  <h5>Job Details</h5>
                  
                  <ul>
                    <h6>Description</h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                      tempor incididunt.
                    </p>
                    <li>
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_1675_1725)">
                          <path
                            d="M12.75 2.25H15.75C15.9489 2.25 16.1397 2.32902 16.2803 2.46967C16.421 2.61032 16.5 2.80109 16.5 3V15C16.5 15.1989 16.421 15.3897 16.2803 15.5303C16.1397 15.671 15.9489 15.75 15.75 15.75H2.25C2.05109 15.75 1.86032 15.671 1.71967 15.5303C1.57902 15.3897 1.5 15.1989 1.5 15V3C1.5 2.80109 1.57902 2.61032 1.71967 2.46967C1.86032 2.32902 2.05109 2.25 2.25 2.25H5.25V0.75H6.75V2.25H11.25V0.75H12.75V2.25ZM11.25 3.75H6.75V5.25H5.25V3.75H3V6.75H15V3.75H12.75V5.25H11.25V3.75ZM15 8.25H3V14.25H15V8.25Z"
                            fill="#536387"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_1675_1725">
                            <rect width="18" height="18" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                      September 21, 2018
                    </li>
                    
                  </ul>
                 
                </div>
              </div><div class="modal-footer justify-content-center"> 
                <button type="button" class="btn btn-green">Approve</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               
              </div>
              </div>
              
            </div>
          </div>
        </div> 
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html 
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            </div>
            <br>
            <br>
          </footer> 
        partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('style/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('style/vendors/chart.js/Chart.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('style/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('style/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('style/js/template.js') ?>"></script>
  <script src="<?= base_url('style/js/settings.js') ?>"></script>
  <script src="<?= base_url('style/js/todolist.js') ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="style/js/chart.js"></script>
</body>

</html>
