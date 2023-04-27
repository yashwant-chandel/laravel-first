
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/typicons/typicons.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/simple-line-icons/css/simple-line-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/js/select.dataTables.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo url('admin2/css/vertical-layout-light/style.css'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="<?php echo url('tinymce/tinymce.min.js'); ?>" referrerpolicy="origin"></script>
  <link rel="shortcut icon" href="<?php echo url('images/favicon.png'); ?>" />
  
</head>


<body>
  
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{url('adminview')}}">
            <img src="{{url('/img/logo.png')}}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="">
            <img src="<?php echo url('admin2/images/logo-mini.svg'); ?>" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        
        <ul class="navbar-nav ms-auto">
        <?php $session = Session::get('user');
                                 $data = (array) $session[0];
                                //  print_r($data);
          
          ?>
         <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
             
               <div id ="messagebox">

               </div> 
               <a class="dropdown-item py-3 border-bottom " href="<?php echo url('admin/message'); ?>" >
               <button class="btn btn-dark btn-sm" > View all</button>
              </a>
            </div>
          </li>

          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{$data['img_url']}}/{{$data['img']}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-sm rounded-circle" src="{{$data['img_url']}}/{{$data['img']}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{$data['name']}}</p>
                <p class="fw-light text-muted mb-0">{{$data['Username']}}</p>
              </div>
              <a class="dropdown-item" href = "{{url('/profile')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item" href="{{url('admin/message')}}"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a href="<?php echo url('logout'); ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i><script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item nav-category">Admin</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-briefcase-check"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo url('/Productsview'); ?>">Products </a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo url('/AddProducts'); ?>">Add Products</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('admin/orders') }}" >
              <i class="menu-icon mdi mdi-briefcase-check"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authh" aria-expanded="false" aria-controls="authh">
              <i class="menu-icon mdi mdi-code-greater-than"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="authh">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('/Addcategories'); ?>">Add Categories</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('/Editcategories'); ?>">Edit Categories</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authhh" aria-expanded="false" aria-controls="authhh">
              <i class="menu-icon mdi mdi-code-tags"></i>
              <span class="menu-title">Tags</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="authhh">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('/Addtags'); ?>">Add Tags</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('/Edittags'); ?>">Edit Tags</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth2">
              <i class="menu-icon mdi mdi-camcorder"></i>
              <span class="menu-title">Blogs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('AddBlogs'); ?>">Add Blogs</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('Editblogs'); ?>">Edit Blogs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth3" aria-expanded="false" aria-controls="auth3">
              <i class="menu-icon mdi mdi-comment-text"></i>
              <span class="menu-title">Banner</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo url('Addbanner'); ?>">Add Banner</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      

    
      
      @yield('admin')
      
   


      
 <script>



$(document).ready(function(){
  $.ajax({
			method: 'get',
			url: '{{url('admin/message/notification')}}',
			dataType: 'json',
			success: function(response)
			{
				// console.log(response);
				const divdata = [];
				 $.each(response, function(key,value){
          
					html =  '<a class="dropdown-item preview-item py-3"><div class="preview-thumbnail"><i class="icon-mail icon-sm"></i></div><div class="preview-item-content" ></div><p class="preview-subject fw-normal text-dark mb-1">New message from '+value.name+'</p></a>';
					// console.log(html);
					divdata.push(html);
				 });
				$('#messagebox').html(divdata);
				//   $('.cartitemscount').html(response[0]);
				//   $('.adminname').html(response[1].name);
				
			}
		});	

});



  function convertToSlug(str){
 str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
             .toLowerCase();

    // trim spaces at start and end of string
    str = str.replace(/^\s+|\s+$/gm,'');
    // alert(str);
    // replace space with dash/hyphen
    str = str.replace(/\s+/g, '-');   
    // document.getElementById("slug-text").innerHTML = str;
    $('#slug-text').val(str);
    //return str;
  }
  
  $('#sale_price').change(function(){
    let price = $('#price').val();
    let saleprice = $('#sale_price').val();
    if(price < saleprice){
      alert('price is greater');
      $('#sale_price').val(null);
    }
    

  });


  $('#mstocks').click(function(){
    $("#stockdiv").toggle(this.checked);
    
  });
  
// $(document).ready(function(){
//   res = $('#response').html();
//   alert(res);
// });
  

</script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
  <script src="<?php echo url('admin2/vendors/js/vendor.bundle.base.js'); ?>"></script>
  <script src="<?php echo url('admin2/vendors/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?php echo url('admin2/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<?php echo url('admin2/vendors/progressbar.js/progressbar.min.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/off-canvas.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/template.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/settings.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/todolist.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/jquery.cookie.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo url('admin2/js/dashboard.js'); ?>"></script>
  <script src="<?php echo url('admin2/js/Chart.roundedBarCharts.js'); ?>"></script>
  <!-- End custom js for this page-->
</body>

</html>


<!-- end document-->

          