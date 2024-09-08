<?php
include('php/query.php');
include('components/sidebar.php');
include('components/navbar.php');
if(isset($_GET['pid'])){
    $id=$_GET['pid'];
    $query=$pdo->prepare("select products .*,category.name as cName, category.id as catId from
  products inner join category on products.c_id=category.id where products.id=:pid");
    $query->bindParam('pid',$id);
    $query->execute();
    $pdt=$query->fetch(PDO::FETCH_ASSOC);
    }
?>


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!--end breadcrumb-->


          <div class="row">
            <div class="col-xl-8 mx-auto">
            
              <!-- <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Basic Form</h6>
                  <hr>
                  <form class="row g-3">
                    <div class="col-12">
                      <label class="form-label">Email ID</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-6 text-end">
                      <a href="javascript:;">Forgot Password?</a>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div> -->
  
              
              <!-- <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Login form</h6>
                   <hr>
                  <form class="row g-3">
                    <div class="col-12">
                      <label class="form-label">Email ID</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-6 text-end">
                      <a href="javascript:;">Forgot Password?</a>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <p class="mb-0">Not a member? <a href="javascript:;">Register</a></p>
                    </div>
                    <div class="col-12 text-center">
                      <p class="mb-0">or sign up with:</p>
                    </div>
                    <div class="col-12 text-center">
                      <div class="error-social d-flex align-items-center justify-content-center gap-2">
                        <a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                        <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div> -->
  
              <!-- <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Register form</h6>
                   <hr>
                  <form class="row g-3">
                    <div class="col-6">
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Email ID</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3-a" checked="">
                        <label class="form-check-label" for="gridCheck3-a">
                          Subscribe to our newsletter
                        </label>
                      </div>
                    </div>
                    <div class="col-6 text-end">
                      <a href="javascript:;">Forgot Password?</a>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <p class="mb-0">Not a member? <a href="javascript:;">Register</a></p>
                    </div>
                    <div class="col-12 text-center">
                      <p class="mb-0">or sign up with:</p>
                    </div>
                    <div class="col-12 text-center">
                      <div class="error-social d-flex align-items-center justify-content-center gap-2">
                        <a href="javascript:;" class="bg-facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="javascript:;" class="bg-twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="javascript:;" class="bg-google"><i class="bx bxl-google"></i></a>
                        <a href="javascript:;" class="bg-linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div> -->
  
              <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Product Edit Form</h6>
                  <hr>
                  <form class="row g-3" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" value="<?php echo $pdt['name']?><?php echo $Name?>" name="pName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small class="text-danger"><?php echo $pNameErr?></small>

                         
                            </div>
                            <div class="form-group">
                              <label for="">Des</label>
                              <input type="text" value="<?php echo $pdt['des']?><?php echo $Des?>" name="pDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small class="text-danger"><?php echo $pDesErr?></small>
                         
                            </div>
                            <div class="form-group">
                              <label for="">price</label>
                              <input type="text" value="<?php echo $pdt['price']?><?php echo $Price?>" name="pPrice" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small class="text-danger"><?php echo $priceErr?></small>
                              
                              
                            </div>
                            <div class="form-group">
                              <label for="">Quantity</label>
                              <input type="text" value="<?php echo $pdt['qty']?><?php echo $Qty?>" name="pQty" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small class="text-danger"><?php echo $qtyErr?></small>
                  
                          </div> 
                  
                    <div class="col-12">
                      <label class="form-label">Barcode</label>
                      <input type="text"  value="<?php echo $pdt['pr_barcode']?><?php echo $pBarcode?>" name="pBar" class="form-control">
                     <small class="text-danger"><?php echo $pBarcodeErr?></small>


                    </div>
                    <div class="col-12">
                      <label class="form-label">Image</label>
                    <input type="file"  value="<?php echo $pdt['image']?><?php echo $pImageName?>"name="pImage" class="form-control">
                    <small class="text-danger"><?php echo $pImgErr?></small>

            
                    </div>
                    <div class="form-group">
                             <label for="">Select category</label>
                             <select class="form-control" name="cId" id="">
                               <option value="<?php echo $pdt['catId']?>"><?php echo $pdt['cName']?><?php echo $cId?></option>
                               <?php 
                               $query=$pdo->prepare("select * from category where name!=:catName");
                               $query->bindParam('catName',$pdt['cName']);
                               $query->execute();
                               $allCategories=$query->fetchAll(PDO::FETCH_ASSOC);
                               foreach ($allCategories as $cat) {
                                ?>
                               <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>
                               <?php
                               }
                               ?>
                          
                             </select>
                             <small class="text-danger"><?php echo $cidErr?></small>

                            
                           </div>
                    
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="updateProduct">update Product</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>



              
                            
  
              <!-- <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Checkout Form</h6>
                  <hr>
                  <form class="row g-3">
                    <div class="col-12">
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Company Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Phone</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Additional Information</label>
                      <textarea class="form-control" rows="4" cols="4"></textarea>
                    </div>
                    <div class="col-12">
                      <div class="form-check d-flex justify-content-center gap-2">
                        <input class="form-check-input" type="checkbox" id="gridCheck3-c" checked="">
                        <label class="form-check-label" for="gridCheck3-c">
                          Create an account?
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Place Order</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div> -->
  
            </div>
          </div>
             

          </div>
          <!-- end page content-->
         </div>
         


         <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->
  
         <!--start switcher-->
         <div class="switcher-body">
          <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon name="color-palette-sharp" class="me-0"></ion-icon></button>
          <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <h6 class="mb-0">Theme Variation</h6>
              <hr>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                <label class="form-check-label" for="LightTheme">Light</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                <label class="form-check-label" for="DarkTheme">Dark</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
                <label class="form-check-label" for="SemiDark">Semi Dark</label>
              </div>
              <hr/>
              <h6 class="mb-0">Header Colors</h6>
              <hr/>
              <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                  <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
         </div>
         <!--end switcher-->


         <!--start overlay-->
          <div class="overlay nav-toggle-icon"></div>
         <!--end overlay-->

     </div>
  <!--end wrapper-->


  


    <!-- JS Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>

<!-- Mirrored from codervent.com/fobia/demo/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 10:31:42 GMT -->
</html>