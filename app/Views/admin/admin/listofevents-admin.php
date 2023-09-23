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
  <link rel="stylesheet" href="<?= base_url('style/css/form.css')?>">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <?= $this->include('admin/admin/template')?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <a href="#add-news" data-toggle="modal">
                     <button class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                    </a> 
                  <p class="card-title mb-0">List of News</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach($newsData as $data):?>
                          <tr>
                            <td class="py-1" id="event">
                              <img src="<?= base_url('upload/news/').$data['news_image']?>" alt="<?= $data['news_image']?>"/>
                            </td>
                            <td><?= $data['news_title']?></td>
                            <td>
                              <p><?= $data['news_desc']?></p>
                            </td>
                            <td><?= $data['date_posted']?></td>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['status']?></div></td>
                            <td>
                              <a href="#edit-news" class="" data-toggle="modal">
                                
                              <button type="button" class=" edit-news btn btn-dark btn-icon" data-news-id="<?= $data['id']?>">
                                <i class="fa fa-edit btn-icon-append"></i>
                              </button>
                              </a>                               
                              <a href="#delete-news" data-toggle="modal">
                                <button type="button" class=" delete-news btn btn-dark btn-icon" data-news-id="<?= $data['id']?>">
                                  <i class="fa fa-trash btn-icon-append"></i>
                                </button>
                              </a>                                                                                 
                            </td>
                          </tr>
                        <?php endforeach;?>
                          
                      </tbody>
                    </table>
                    <br>
                   
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Events</p>
                  <a href="#add-event" data-toggle="modal">
                     <button class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                    </a>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Events</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php  foreach($eventsData as $data):?>
                          <tr>
                            <td class="py-1" id="event">
                              <img src="<?= base_url('upload/events/').$data['events_image']?>" alt="image"/>
                            </td>
                            <td><?= $data['events_title']?></td>
                            <td>
                              <p><?= $data['events_desc']?></p>
                            </td>
                            <td><?= $data['events_date']?></td>
                            <td><?= $data['events_time']?></td>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['status']?></div></td>
                            <td>
                              <a href="#edit-event"class="edit-event" data-toggle="modal">
                              <button type="button" class="btn btn-dark btn-icon">
                                <i class="fa fa-edit btn-icon-append"></i>
                              </button>
                              </a>                               
                              <a href="#delete-events" data-toggle="modal" data-events-id="<?= $data['id']?>">
                                <button type="button" class=" delete-events btn btn-dark btn-icon"  data-events-id="<?= $data['id']?>">
                                  <i class="fa fa-trash btn-icon-append"></i>
                                </button>
                              </a>                                                                                 
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                    <br>
                   
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!--Modals-->
        <!--Edit News-->
        <div id="edit-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit News</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> News Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter News Title"
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
                                      <button type="button" class="btn btn-dark">Edit</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
  
        <!--Edit Event-->
        <div id="edit-event" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit Event</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Event Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter Event Title"
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
                    <div class="w-full sm:w-half formbold-px-3">
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
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <label for="time" class="formbold-form-label"> Time </label>
                        <input
                          type="time"
                          name="time"
                          id="time"
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
                        name="eventsCover"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-dark">Edit</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
        <!--Delete-->
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/deleteNews')?>" method="post">
          <div id="delete-news" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header flex-column">					
                  <h4 class="modal-title w-100">Are you sure?</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Do you really want to delete these news?</p>
                  <input type="text" name="id" id="news_id">
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Disable</button>
                </div>
              </div>
            </div>
          </div> 
        </form>

        <form action="<?= base_url('AdminController/AdminFolder/NewsController/deleteEvents')?>" method="post">
          <div id="delete-events" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header flex-column">					
                  <h4 class="modal-title w-100">Are you sure?</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Do you really want to delete these event?</p>
                  <input type="text" name="id" id="events_id" >
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Disable</button>
                </div>
              </div>
            </div>
          </div> 
        </form>
        
        <!--Add News-->
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/storeNews')?>" method="post" enctype="multipart/form-data">
        <div id="add-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add News</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> News Title </label>
                    <input
                      type="text"
                      name="title"
                      id="name"
                      placeholder="Enter News Title"
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
                    
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="news-cover"
                        id="upload"
                        class="formbold-form-input formbold-form-file job-image"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-dark">Add</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        </form>
        
        
        <!--Add Event-->
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/storeEvents')?>" method="post" enctype="multipart/form-data">
          <div id="add-event" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="header">					
                  <h4 class="modal-title w-100">Add Event</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="formbold-mb-5">
                      <label for="name" class="formbold-form-label"> Event Title </label>
                      <input
                        type="text"
                        name="eventsTitle"
                        id="name"
                        placeholder="Enter Event Title"
                        class="formbold-form-input"
                      />
                    </div>
                    <div class="formbold-mb-5">
                      <label for="phone" class="formbold-form-label"> Description </label>
                      <textarea name="eventsDescription" id="description" cols="30" rows="10" class="formbold-form-input"></textarea>
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                      <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5 w-full">
                          <label for="date" class="formbold-form-label"> Date </label>
                          <input
                            type="date"
                            name="eventsDate"
                            id="date"
                            class="formbold-form-input"
                          />
                        </div>
                        
                      </div>
                      <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                          <label for="time" class="formbold-form-label"> Time </label>
                          <input
                            type="time"
                            name="eventsTime"
                            id="time"
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
                          name="eventsCover"
                          id="upload"
                          class="formbold-form-input formbold-form-file"
                        />
                      </div>
                      <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-dark">Add</button>
                                      </div>
                    </div>
                </div>
              </div>
          </div>
        </form>
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
  <script src="style/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="style/vendors/chart.js/Chart.min.js"></script>
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js' integrity='sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==' crossorigin='anonymous'></script>
  <script src="<?=base_url('script/Script.js')?>"></script>
  <!-- End custom js for this page-->
</body>

</html>
