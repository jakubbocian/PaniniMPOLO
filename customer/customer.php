<?php
session_start();
$_SESSION["userCode"] = "la1961";
?>

<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Primary Meta Tags -->
  <title>IIS MP Snacks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="IIS MP Snacks - E-Commerce Scolastico">
  <meta name="author" content="CorsoDinfPr18">
  <meta name="description" content="Vendita al dettaglio di prodotti alimentari">
  <meta name="keywords" content="IIS MP Snacks Marco Polo Colico Istituto Scolastico Panini Pizze Frutta Ordini Vendita Amministratore Venditore Cliente">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="../html&amp;css/assets/img/favicon/mp.gif">
  <link rel="icon" type="image/png" sizes="32x32" href="../html&amp;css/assets/img/favicon/mp.gif">
  <link rel="icon" type="image/png" sizes="16x16" href="../html&amp;css/assets/img/favicon/mp.gif">
  <link rel="manifest" href="../html&amp;css/assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../html&amp;css/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Notyf -->
  <link type="text/css" href="../html&amp;css/vendor/notyf/notyf.min.css" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="../html&amp;css/css/volt.css" rel="stylesheet">

  <!-- Swal CSS -->
  <link type="text/css" href="../html&amp;css/css/swal.css" rel="stylesheet">

  <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

  <style data-styled="active" data-styled-version="5.3.6"></style>
</head>

<body onload="callView('prodottiDiv', 'controller.php?method=prodotti', 'replace')">
  
  <main class="content" style="min-height: 100vh;">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
      <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
            <!-- Search form -->
            <form class="navbar-search form-inline" id="navbar-search-main">
              <div class="input-group input-group-merge search-bar">


              </div>
            </form>
            <!-- / Search form -->
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center">

            <li class="nav-item dropdown">
              <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" title="" data-bs-toggle="tooltip" data-bs-original-title="" aria-label="">
                  <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                  </path>
                </svg>
              </a>
              <form action="#" name="carelloForm">
                <input type="hidden" name="userCode" value="<?php $_SESSION["userCode"] ?>">
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                  <div id="carrelloDiv" class="list-group list-group-flush">
                    <div class="text-center text-primary fw-bold border-bottom border-light py-3">Carrello</div>

                    <!-- carrrelloTPL -->

                    <a href="#" onclick="callConfirmNoValidation('carelloForm', 'Attenzione', 'Sei sicuro di voler procedere? una volta effettuato l&apos; ordine non potrà pi&ugrave; essere cancellato', 'controller.php?method=carrello')" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                      <span class="sidebar-text">Ordina</span>
                      <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                          <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </form>
            </li>
            <li class="nav-item dropdown ms-lg-3"><a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="media d-flex align-items-center"><img class="avatar rounded-circle" alt="Image placeholder" src="../html&amp;css/assets/img/icons/mp.gif">
                  <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block"><span class="mb-0 font-small fw-bold text-gray-900">IIS MP Snacks</span></div>
                </div>
              </a>
              <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1"><a class="dropdown-item d-flex align-items-center" href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                  </svg>Ordine</a><a class="dropdown-item d-flex align-items-center" href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                  </svg> Supporto</a></div>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="col-12 mb-4 py-3">
      <ul class="nav flex-column pt-3 pt-md-0">
        <div id="prodottiDiv" class="card border-0 shadow">

          <!-- prodottiTPL -->

        </div>
      </ul>
    </div>


    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
      <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
          <p class="mb-0 text-center text-lg-start">© 2022-<span class="current-year">2022</span> <a class="text-primary fw-normal" href="" target="_blank">CorsoDinfPr18</a></p>
        </div>
        <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
          <!-- List -->
          <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
            <li class="list-inline-item px-0 px-sm-2">
              <a href="">Su di noi</a>
            </li>


            <li class="list-inline-item px-0 px-sm-2">
              <a href="">Contatti</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </main>

  <!-- Core -->
  <script src="../html&amp;css/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="../html&amp;css/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="../html&amp;css/vendor/onscreen/dist/on-screen.umd.min.js"></script>

  <!-- Slider -->
  <script src="../html&amp;css/vendor/nouislider/distribute/nouislider.min.js"></script>

  <!-- Smooth scroll -->
  <script src="../html&amp;css/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Charts -->
  <script src="../html&amp;css/vendor/chartist/dist/chartist.min.js"></script>
  <script src="../html&amp;css/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

  <!-- Datepicker -->
  <script src="../html&amp;css/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Sweet Alerts 2 -->
  <script src="../html&amp;css/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="../html&amp;css/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Notyf -->
  <script src="../html&amp;css/vendor/notyf/notyf.min.js"></script>

  <!-- Simplebar -->
  <script src="../html&amp;css/vendor/simplebar/dist/simplebar.min.js"></script>

  <!-- Github buttons -->
  <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="../html&amp;css/assets/js/volt.js"></script>
  <script src="../html&amp;css/vendor/@popperjs/core/dist/umd/popper.min.js"></script>


  <!-- ajaxCall -->
  <script src="../html&amp;css/JS/ajaxCall.js"></script>

</body></html>