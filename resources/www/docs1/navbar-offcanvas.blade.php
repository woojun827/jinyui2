

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Cartzilla Docs | Navbar with offcanvas menu</title>

    <!-- Theme switcher (color modes) -->
    <script src="../assets/js/theme-switcher.js"></script>

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="../manifest.json">
    <link rel="icon" type="image/png" href="../assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="../assets/app-icons/icon-180x180.png">

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="../assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="../assets/css/theme.min.css" as="style">
    <link rel="stylesheet" href="../assets/css/theme.min.css" id="theme-styles">
  </head>


  <!-- Body -->
  <body>

    <!-- Navigation bar (Site header) -->
    <header class="navbar navbar-expand-lg bg-body sticky-top p-0">
      <div class="container py-3 px-4">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand" href="#!">
          <span class="d-flex flex-shrink-0 text-primary me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"/><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"/><use href="#czlogo"/><use href="#czlogo" x="8.516" y="-2.172"/></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"/></defs></svg>
          </span>
          Cartzilla
        </a>

        <!-- Menu toggler -->
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas menu -->
        <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1" aria-labelledby="navbarOffcanvasLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pt-0">
            <ul class="navbar-nav ms-lg-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action link</a></li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#!">Action link</a></li>
                      <li><a class="dropdown-item" href="#!">Another action</a></li>
                      <li><a class="dropdown-item" href="#!">Something else here</a></li>
                      <li><a class="dropdown-item" href="#!">Yet another link</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li class="dropdown-divider"><hr></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>


    <!-- Page content -->
    <div class="container p-4">
      <h1 class="h3">Offcanvas menu example</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    </div>

    <!-- Bootstrap + Theme scripts -->
    <script src="../assets/js/theme.min.js"></script>
  </body>
</html>
