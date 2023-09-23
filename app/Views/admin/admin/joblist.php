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
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('style/vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('style/js/select.dataTables.min.css')?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('style/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?= $this->include('admin/admin/template') ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <a href="#add-job" data-toggle="modal">
                      <button class="btn btn-danger btn-icon-text" id="add">
                         <i class="ti-upload btn-icon-prepend"></i>                                                    
                         Add
                       </button>
                     </a>
                  <p class="card-title mb-0">List of Jobs</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>Image</th>
                          <th>Jobs</th>
                          <th>Company</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Salary</th>
                          <th>Email</th>
                          <th>Contacts</th>
                          <th>Website</th>
                          <th>Date</th>
                          <th>Approval</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                      <?php foreach ($jobData as $job): ?>
                        <tr>
                          <td class="py-1">
                          <img src="<?=base_url('upload/jobs/').$job['job_cover']; ?>" alt="">
                          </td>
                          <td><?= $job['job_title']; ?></td>
                          <td>
                          <?= $job['job_company']; ?>
                          </td>
                          <td>
                          <?= $job['job_description']; ?>
                          </td>
                          <td>
                          <?= $job['job_category']; ?>
                          </td>
                          <td>
                          <?= $job['job_address']; ?>
                          </td>
                          <td>
                          <?= $job['city']; ?>
                          </td>
                          <td>
                          <?= $job['job_salary']; ?>
                          </td>
                          <td>
                          <?= $job['job_email']; ?>
                          </td>
                          <td>
                          <?= $job['job_contacts']; ?>
                          </td>
                          <td>
                          <?= $job['job_website']; ?>
                          </td>
                          <td>
                          <?= $job['date']; ?>
                          </td>
                          <?php if($job['approval']=='pending'): ?>
                            <td class="font-weight-medium"><div class="badge badge-warning"><?= $job['approval']; ?></div></td>
                          <?php elseif($job['approval']=='reject'):?>
                            <td class="font-weight-medium"><div class="badge badge-danger"><?= $job['approval']; ?></div></td>
                            <?php elseif($job['approval']=='approved'):?>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $job['approval']; ?></div></td>
                          <?php endif;?>  
                          <td class="font-weight-medium"><div class="badge badge-success"><?= $job['status']; ?></div></td>
                          <td>
                          <a href="#edit-job" data-toggle="modal">
                            <button class="btn btn-primary btn-icon-text" id="add">
                              Edit
                            </button>
                          </a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <br>

                    
                    
                    
                  </div>
              </div>
            </div>
          </div>
         
        </div>
        <!--Add-->
        <form action="<?= base_url('AdminController/AdminFolder/JobController/storeJob') ?>" method="POST" enctype="multipart/form-data">
        <div id="add-job" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add Job</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="jobTitle" class="formbold-form-label"> Job Title </label><span id="error_title" class="text-danger"></span>
                    <input
                      type="text"
                      name="jobTitle"
                      id="name"
                      placeholder="Enter Job Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobCompany" class="formbold-form-label"> Company </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <input
                      type="text"
                      name="jobCompany"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobDescription" class="formbold-form-label"> Description </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <textarea name="jobDescription" id="description" cols="30" rows="10" class="formbold-form-input"></textarea>
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="jobCategory" class="formbold-form-label"> Category </label> <span id="error_date" class="text-danger ms-3"></span>

                        <select name="jobCategory" id="jobCategory" class="formbold-form-input">
                          <option value=""disabled selected>Select Category</option>
                          <option value="part-time">Part Time</option>
                          <option value="full-time">Full Time</option>
                          <option value="intern">Internship</option>
                        </select>

                      </div>
                      <div class="formbold-mb-5">
                    <label for="jobAddress" class="formbold-form-label"> Address </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <input
                      type="text"
                      name="jobAddress"
                      id="jobAddress"
                      placeholder="Enter Address"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobCity" class="formbold-form-label"> City/Municipality </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <select name="jobCity" id="jobCity">
                            <option value="" disabled selected>Select</option>
                      <optgroup label="Cities">
                          <option value="Angeles City">Angeles City</option>
                          <option value="San Fernando City">San Fernando City</option>
                      </optgroup>
                      <optgroup label="Municipalities">
                          <option value="Apalit">Apalit</option>
                          <option value="Arayat">Arayat</option>
                          <option value="Bacolor">Bacolor</option>
                          <option value="Candaba">Candaba</option>
                          <option value="Floridablanca">Floridablanca</option>
                          <option value="Guagua">Guagua</option>
                          <option value="Lubao">Lubao</option>
                          <option value="Mabalacat">Mabalacat</option>
                          <option value="Macabebe">Macabebe</option>
                          <option value="Magalang">Magalang</option>
                          <option value="Masantol">Masantol</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Minalin">Minalin</option>
                          <option value="Porac">Porac</option>
                          <option value="San Luis">San Luis</option>
                          <option value="San Simon">San Simon</option>
                          <option value="Santa Ana">Santa Ana</option>
                          <option value="Santa Rita">Santa Rita</option>
                          <option value="Santo Tomas">Santo Tomas</option>
                          <option value="Sasmuan">Sasmuan</option>
                      </optgroup>
                </select>
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobSalary" class="formbold-form-label"> Salary </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <input
                      type="text"
                      name="jobSalary"
                      id="jobSalary"
                      placeholder="Enter Salary"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobEmail" class="formbold-form-label"> Email </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <input
                      type="text"
                      name="jobEmail"
                      id="jobEmail"
                      placeholder="Enter Email"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobContacts" class="formbold-form-label"> Contacts </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <input
                      type="text"
                      name="jobContacts"
                      id="jobContacts"
                      placeholder="Enter Contacts"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="jobWebsite" class="formbold-form-label"> Website </label> <span id="error_desc" class="text-danger ms-3"></span>
                    <input
                      type="text"
                      name="jobWebsite"
                      id="jobWebsite"
                      placeholder="Enter Website"
                      class="formbold-form-input"
                    />
                  </div>
                    </div>
                  </div>
                    <div class="formbold-mb-5">
                      <label for="job_cover" class="formbold-form-label">
                        Upload File (Image)
                      </label> <span id="error_image" class="text-danger ms-3"></span>
                      <input
                        type="file"
                        name="job_cover"
                        id="upload"
                        class="formbold-form-input formbold-form-file job-image"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-dark">Add</button>
                                    </div>
                  </div>
                  </form>

                 
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
  <script src="<?= base_url('style/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('style/vendors/chart.js/Chart.min.js')?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('style/js/off-canvas.js')?>"></script>
  <script src="<?= base_url('style/js/hoverable-collapse.js')?>"></script>
  <script src="<?= base_url('style/js/template.js')?>"></script>
  <script src="<?= base_url('style/js/settings.js')?>"></script>
  <script src="<?= base_url('style/js/todolist.js')?>"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('style/js/chart.js')?>"></script>
  <!-- End custom js for this page-->
  
</body>

</html>
