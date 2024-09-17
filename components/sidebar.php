<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/fobia/demo/ltr/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 10:25:23 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>Fobia - Bootstrap5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">Fobia</h4>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="index.php">
            <div class="parent-icon">
              <ion-icon name="home-outline"></ion-icon>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>
        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <ion-icon name="bag-handle-outline"></ion-icon>
            </div>
            <div class="menu-title">eCommerce</div>
          </a>
          <ul>
            <li><a href="ecommerce-shop-grid-view.html">
                <ion-icon name="ellipse-outline"></ion-icon>Product Grid
              </a>
            </li>
            <li><a href="ecommerce-shop-list-view.html">
                <ion-icon name="ellipse-outline"></ion-icon>Product List
              </a>
            </li>
            <li><a href="ecommerce-shop-grid-view-top-filter.html">
                <ion-icon name="ellipse-outline"></ion-icon>Product Top Filters
              </a>
            </li>
            <li><a href="ecommerce-product-details.html">
                <ion-icon name="ellipse-outline"></ion-icon>Product Details
              </a>
            </li>
            <li><a href="ecommerce-product-comparison.html">
                <ion-icon name="ellipse-outline"></ion-icon>Product Comparison
              </a>
            </li>
            <li><a href="ecommerce-shop-cart.html">
                <ion-icon name="ellipse-outline"></ion-icon>Shoping Cart
              </a>
            </li>
            <li><a href="ecommerce-checkout-details.html">
                <ion-icon name="ellipse-outline"></ion-icon>Checkout
              </a>
            </li>
            <li><a href="ecommerce-checkout-shipping.html">
                <ion-icon name="ellipse-outline"></ion-icon>Shipping
              </a>
            </li>
            <li><a href="ecommerce-checkout-payment.html">
                <ion-icon name="ellipse-outline"></ion-icon>Payment
              </a>
            </li>
            <li><a href="ecommerce-checkout-review.html">
                <ion-icon name="ellipse-outline"></ion-icon>Review Cart
              </a>
            </li>
            <li><a href="ecommerce-checkout-complete.html">
                <ion-icon name="ellipse-outline"></ion-icon>Order Complete
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-label">UI Elements</li>
        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
              <ion-icon name="briefcase-outline"></ion-icon>
            </div>
            <div class="menu-title">Widgets</div>
          </a>
          <ul>
            <li> <a href="widgets-static-widgets.html">
                <ion-icon name="ellipse-outline"></ion-icon>Static Widgets
              </a>
            </li>
            <li> <a href="widgets-data-widgets.html">
                <ion-icon name="ellipse-outline"></ion-icon>Data Widgets
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="gift-outline"></ion-icon>
            </div>
            <div class="menu-title">Components</div>
          </a>
          <ul>
            <li> <a href="component-alerts.html">
                <ion-icon name="ellipse-outline"></ion-icon>Alerts
              </a>
            </li>
            <li> <a href="component-accordions.html">
                <ion-icon name="ellipse-outline"></ion-icon>Accordions
              </a>
            </li>
            <li> <a href="component-badges.html">
                <ion-icon name="ellipse-outline"></ion-icon>Badges
              </a>
            </li>
            <li> <a href="component-buttons.html">
                <ion-icon name="ellipse-outline"></ion-icon>Buttons
              </a>
            </li>
            <li> <a href="component-cards.html">
                <ion-icon name="ellipse-outline"></ion-icon>Cards
              </a>
            </li>
            <li> <a href="component-carousels.html">
                <ion-icon name="ellipse-outline"></ion-icon>Carousels
              </a>
            </li>
            <li> <a href="component-list-groups.html">
                <ion-icon name="ellipse-outline"></ion-icon>List Groups
              </a>
            </li>
            <li> <a href="component-media-object.html">
                <ion-icon name="ellipse-outline"></ion-icon>Media Objects
              </a>
            </li>
            <li> <a href="component-modals.html">
                <ion-icon name="ellipse-outline"></ion-icon>Modals
              </a>
            </li>
            <li> <a href="component-navs-tabs.html">
                <ion-icon name="ellipse-outline"></ion-icon>Navs & Tabs
              </a>
            </li>
            <li> <a href="component-paginations.html">
                <ion-icon name="ellipse-outline"></ion-icon>Pagination
              </a>
            </li>
            <li> <a href="component-popovers-tooltips.html">
                <ion-icon name="ellipse-outline"></ion-icon>Popovers & Tooltips
              </a>
            </li>
            <li> <a href="component-progress-bars.html">
                <ion-icon name="ellipse-outline"></ion-icon>Progress
              </a>
            </li>
            <li> <a href="component-spinners.html">
                <ion-icon name="ellipse-outline"></ion-icon>Spinners
              </a>
            </li>
            <li> <a href="component-notifications.html">
                <ion-icon name="ellipse-outline"></ion-icon>Notifications
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="leaf-outline"></ion-icon>
            </div>
            <div class="menu-title">Icons</div>
          </a>
          <ul>
            <li> <a href="icons-line-icons.html">
                <ion-icon name="ellipse-outline"></ion-icon>Line Icons
              </a>
            </li>
            <li> <a href="icons-boxicons.html">
                <ion-icon name="ellipse-outline"></ion-icon>Boxicons
              </a>
            </li>
            <li> <a href="icons-feather-icons.html">
                <ion-icon name="ellipse-outline"></ion-icon>Feather Icons
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-label">Forms & Tables</li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="newspaper-outline"></ion-icon>
            </div>
            <div class="menu-title">Forms</div>
          </a>
          <ul>
            <li> <a href="form-elements.html">
                <ion-icon name="ellipse-outline"></ion-icon>Form Elements
              </a>
            </li>
            <li> <a href="form-input-group.html">
                <ion-icon name="ellipse-outline"></ion-icon>Input Groups
              </a>
            </li>
            <li> <a href="addCategory.php">
                <ion-icon name="ellipse-outline"></ion-icon>Add Category
              </a>
            </li>
            <!-- <li> <a href="editCategory.php">
                <ion-icon name="ellipse-outline"></ion-icon>Edit Category
              </a>
            </li> -->
            <li> <a href="addProduct.php">
                <ion-icon name="ellipse-outline"></ion-icon>Add Product
              </a>
            </li>
            <li> <a href="form-validations.html">
                <ion-icon name="ellipse-outline"></ion-icon>Form Validation
              </a>
            </li>
            <li> <a href="form-wizard.html">
              <ion-icon name="ellipse-outline"></ion-icon>Form Wizard
            </a>
            </li>
            <li> <a href="form-radios-and-checkboxes.html">
              <ion-icon name="ellipse-outline"></ion-icon>Radio & Checkboxes
            </a>
            </li>
            <li> <a href="form-date-time-pickes.html">
                <ion-icon name="ellipse-outline"></ion-icon>Date Pickers
              </a>
            </li>
            <li> <a href="form-select2.html">
                <ion-icon name="ellipse-outline"></ion-icon>Select2
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="server-outline"></ion-icon>
            </div>
            <div class="menu-title">Tables</div>
          </a>
          <ul>
            <li> <a href="table-basic-table.html">
                <ion-icon name="ellipse-outline"></ion-icon>Basic Table
              </a>
            </li>
            <li> <a href="viewCategory.php">
                <ion-icon name="ellipse-outline"></ion-icon>view Category
              </a>
            </li>
            <li> <a href="viewProduct.php">
                <ion-icon name="ellipse-outline"></ion-icon>view Product
              </a>
            </li>
            <li> <a href="table-datatable.html">
                <ion-icon name="ellipse-outline"></ion-icon>Data Table
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-label">Pages</li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <div class="menu-title">Authentication</div>
          </a>
          <ul>
            <li> <a href="authentication-sign-in-basic.html">
                <ion-icon name="ellipse-outline"></ion-icon>Sign In Basic
              </a>
            </li>
            <li> <a href="authentication-sign-in-cover.html">
                <ion-icon name="ellipse-outline"></ion-icon>Sign In Cover
              </a>
            </li>
            <li> <a href="authentication-sign-in-simple.html">
                <ion-icon name="ellipse-outline"></ion-icon>Sign In Simple
              </a>
            </li>
            <li> <a href="authentication-sign-up-basic.html">
                <ion-icon name="ellipse-outline"></ion-icon>Sign Up Basic
              </a>
            </li>
            <li> <a href="authentication-sign-up-cover.html">
                <ion-icon name="ellipse-outline"></ion-icon>Sign Up Cover
              </a>
            </li>
            <li> <a href="authentication-sign-up-simple.html">
                <ion-icon name="ellipse-outline"></ion-icon>Sign Up Simple
              </a>
            </li>
            <li> <a href="authentication-reset-password-basic.html">
                <ion-icon name="ellipse-outline"></ion-icon>Reset Password Basic
              </a>
            </li>
            <li> <a href="authentication-reset-password-cover.html">
                <ion-icon name="ellipse-outline"></ion-icon>Reset Password Cover
              </a>
            </li>
            <li> <a href="authentication-reset-password-simple.html">
                <ion-icon name="ellipse-outline"></ion-icon>Reset Password Simple
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="pages-user-profile.html">
            <div class="parent-icon">
              <ion-icon name="person-circle-outline"></ion-icon>
            </div>
            <div class="menu-title">User Profile</div>
          </a>
        </li>
        <li>
          <a href="pages-edit-profile.html">
            <div class="parent-icon">
              <ion-icon name="create-outline"></ion-icon>
            </div>
            <div class="menu-title">Edit Profile</div>
          </a>
        </li>
        <li>
          <a href="pages-invoices.html">
            <div class="parent-icon">
              <ion-icon name="receipt-outline"></ion-icon>
            </div>
            <div class="menu-title">Invoice</div>
          </a>
        </li>
        <li>
          <a href="pages-to-do.html">
            <div class="parent-icon">
              <ion-icon name="shield-checkmark-outline"></ion-icon>
            </div>
            <div class="menu-title">Invoice</div>
          </a>
        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="copy-outline"></ion-icon>
            </div>
            <div class="menu-title">Extra Pages</div>
          </a>
          <ul>
            <li><a href="pages-faq.html">
                <ion-icon name="ellipse-outline"></ion-icon>FAQ
              </a>
            </li>
            <li><a href="pages-pricing-tables.html">
                <ion-icon name="ellipse-outline"></ion-icon>Pricing
              </a>
            </li>
            <li><a href="pages-errors-404-error.html">
                <ion-icon name="ellipse-outline"></ion-icon>404 Error
              </a>
            </li>
            <li><a href="pages-errors-500-error.html">
                <ion-icon name="ellipse-outline"></ion-icon>500 Error
              </a></li>
            <li><a href="pages-errors-coming-soon.html">
                <ion-icon name="ellipse-outline"></ion-icon>Coming Soon
              </a></li>
            <li><a href="pages-starter-page.html">
                <ion-icon name="ellipse-outline"></ion-icon>Blank Page
              </a></li>
          </ul>
        </li>
        <li class="menu-label">Charts & Maps</li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="bar-chart-outline"></ion-icon>
            </div>
            <div class="menu-title">Charts</div>
          </a>
          <ul>
            <li> <a href="charts-apex-chart.html">
                <ion-icon name="ellipse-outline"></ion-icon>Apex
              </a>
            </li>
            <li> <a href="charts-chartjs.html">
                <ion-icon name="ellipse-outline"></ion-icon>Chartjs
              </a>
            </li>
            <li> <a href="charts-peity.html">
              <ion-icon name="ellipse-outline"></ion-icon>Peity
            </a>
           </li>
           <li> <a href="charts-other.html">
            <ion-icon name="ellipse-outline"></ion-icon>Other Charts
            </a>
           </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="map-outline"></ion-icon>
            </div>
            <div class="menu-title">Maps</div>
          </a>
          <ul>
            <li> <a href="map-google-maps.html">
                <ion-icon name="ellipse-outline"></ion-icon>Google Maps
              </a>
            </li>
            <li> <a href="map-vector-maps.html">
                <ion-icon name="ellipse-outline"></ion-icon>Vector Maps
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-label">Others</li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="list-outline"></ion-icon>
            </div>
            <div class="menu-title">Menu Levels</div>
          </a>
          <ul>
            <li> <a class="has-arrow" href="javascript:;">
                <ion-icon name="ellipse-outline"></ion-icon>Level One
              </a>
              <ul>
                <li> <a class="has-arrow" href="javascript:;">
                    <ion-icon name="ellipse-outline"></ion-icon>Level Two
                  </a>
                  <ul>
                    <li> <a href="javascript:;">
                        <ion-icon name="ellipse-outline"></ion-icon>Level Three
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="document-text-outline"></ion-icon>
            </div>
            <div class="menu-title">Documentation</div>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <div class="parent-icon">
              <ion-icon name="link-outline"></ion-icon>
            </div>
            <div class="menu-title">Support</div>
          </a>
        </li>
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->