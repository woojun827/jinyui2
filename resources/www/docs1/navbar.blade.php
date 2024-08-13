<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/navbar/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Navbar</h1>
    <p class="text-body-secondary mb-4">Responsive navigation header that includes support for branding, navigation, and
      more.</p>
  </section>


  <!-- Supported content -->
  <section id="navbar-content" class="cd-section pb-sm-2 pb-lg-3 mb-5">
    <h4 class="mb-4">Supported content</h4>
    <ul class="nav nav-tabs" role="tablist" style="max-width: 240px">
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1" role="tab"
          aria-controls="preview-1" aria-selected="true">
          <i class="ci-eye opacity-75 ms-n1 me-2"></i>
          Preview
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab"
          aria-controls="html-1" aria-selected="false">
          <i class="ci-code opacity-75 ms-n1 me-2"></i>
          HTML
        </button>
      </li>
    </ul>
    <div class="tab-content">
      <div id="preview-1" class="tab-pane pt-4 pb-2 fade show active" role="tabpanel">
        <div class="bg-dotted rounded p-4">
          <header class="navbar navbar-expand-lg bg-body rounded shadow p-3 mb-4">
            <a class="navbar-brand" href="#!">
              <span class="d-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                  <path
                    d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                    fill="currentColor"></path>
                  <g fill="#fff">
                    <path
                      d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                    </path>
                    <use href="#czlogo1"></use>
                    <use href="#czlogo1" x="8.516" y="-2.172"></use>
                  </g>
                  <defs>
                    <path id="czlogo1"
                      d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                    </path>
                  </defs>
                </svg>
              </span>
              Cartzilla
            </a>
            <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse1" aria-controls="navbarCollapse1" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarCollapse1">
              <ul class="navbar-nav pt-2 pt-lg-0 me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#!">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-trigger="hover"
                    data-bs-auto-close="outside" aria-expanded="false">Dropdown</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#!">Action link</a></li>
                    <li class="dropend">
                      <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        data-bs-trigger="hover" aria-expanded="false">Dropdown</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#!">Action link</a></li>
                        <li><a class="dropdown-item" href="#!">Another action</a></li>
                        <li><a class="dropdown-item" href="#!">Something else here</a></li>
                        <li><a class="dropdown-item" href="#!">Yet another link</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <a class="btn btn-primary animate-shake mt-3 mt-lg-0" href="#!">
                <i class="ci-user animate-target ms-n1 me-2"></i>
                Sign up
              </a>
            </nav>
          </header>

          <header class="navbar navbar-expand-lg bg-body rounded shadow px-3 mb-4">
            <a class="navbar-brand" href="#!">
              <span class="d-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                  <path
                    d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                    fill="currentColor"></path>
                  <g fill="#fff">
                    <path
                      d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                    </path>
                    <use href="#czlogo2"></use>
                    <use href="#czlogo2" x="8.516" y="-2.172"></use>
                  </g>
                  <defs>
                    <path id="czlogo2"
                      d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                    </path>
                  </defs>
                </svg>
              </span>
              <span class="d-none d-sm-inline">Cartzilla</span>
              <span class="d-sm-none">Cz</span>
            </a>
            <div class="d-flex align-items-center order-lg-2 py-lg-1">
              <button type="button"
                class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale"
                aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
              </button>
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-sm-inline-flex"
                href="#!" aria-label="Account">
                <i class="ci-user animate-target"></i>
              </a>
              <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2"
                aria-label="Shopping cart">
                <span
                  class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 rounded-pill"
                  style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-body-bg)">3</span>
                <span
                  class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                  <i class="ci-shopping-cart animate-target ms-n1"></i>
                </span>
              </button>
              <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse2" aria-controls="navbarCollapse2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <nav class="collapse navbar-collapse" id="navbarCollapse2">
              <ul class="navbar-nav pt-2 pt-lg-0 me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#!">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">About</a>
                </li>
              </ul>
              <a class="btn btn-secondary d-sm-none mt-3 mb-2 mt-lg-0" href="#!">
                <i class="ci-user ms-n1 me-2"></i>
                Sign up
              </a>
            </nav>
          </header>

          <header class="navbar navbar-expand-lg d-block bg-body rounded shadow px-3">
            <div class="d-flex align-items-center justify-content-between">
              <a class="navbar-brand flex-shrink-0" href="#!">
                <span class="d-flex flex-shrink-0 text-primary me-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                    <path
                      d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                      fill="currentColor"></path>
                    <g fill="#fff">
                      <path
                        d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                      </path>
                      <use href="#czlogo3"></use>
                      <use href="#czlogo3" x="8.516" y="-2.172"></use>
                    </g>
                    <defs>
                      <path id="czlogo3"
                        d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                      </path>
                    </defs>
                  </svg>
                </span>
                <span class="d-none d-sm-inline">Cartzilla</span>
                <span class="d-sm-none">Cz</span>
              </a>
              <div class="position-relative w-100 d-none d-md-block mx-3 mx-lg-4">
                <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="search" class="form-control form-icon-start" placeholder="Search" aria-label="Search">
              </div>
              <div class="d-flex align-items-center py-lg-1">
                <div class="dropdown">
                  <button type="button"
                    class="btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                    <span class="theme-icon-active d-flex animate-target">
                      <i class="ci-sun"></i>
                    </span>
                  </button>
                  <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                    <li>
                      <button type="button" class="dropdown-item active">
                        <span class="theme-icon d-flex fs-base me-2">
                          <i class="ci-sun"></i>
                        </span>
                        <span class="theme-label">Light</span>
                        <i class="item-active-indicator ci-check ms-auto"></i>
                      </button>
                    </li>
                    <li>
                      <button type="button" class="dropdown-item">
                        <span class="theme-icon d-flex fs-base me-2">
                          <i class="ci-moon"></i>
                        </span>
                        <span class="theme-label">Dark</span>
                        <i class="item-active-indicator ci-check ms-auto"></i>
                      </button>
                    </li>
                    <li>
                      <button type="button" class="dropdown-item">
                        <span class="theme-icon d-flex fs-base me-2">
                          <i class="ci-auto"></i>
                        </span>
                        <span class="theme-label">Auto</span>
                        <i class="item-active-indicator ci-check ms-auto"></i>
                      </button>
                    </li>
                  </ul>
                </div>
                <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-sm-inline-flex"
                  href="#!" aria-label="Account">
                  <i class="ci-user animate-target"></i>
                </a>
                <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2"
                  aria-label="Shopping cart">
                  <span
                    class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 rounded-pill"
                    style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-body-bg)">3</span>
                  <span
                    class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                    <i class="ci-shopping-cart animate-target ms-n1"></i>
                  </span>
                </button>
                <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse3" aria-controls="navbarCollapse3" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
            <nav class="collapse navbar-collapse" id="navbarCollapse3">
              <div class="position-relative d-md-none mt-3">
                <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="search" class="form-control form-icon-start" placeholder="Search" aria-label="Search">
              </div>
              <div class="d-lg-flex pt-3 pb-2">
                <div class="dropdown mb-2 mb-lg-0">
                  <button type="button" class="btn btn-secondary fs-base dropdown-toggle me-2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ci-grid fs-lg ms-n1 me-2"></i>
                    Categories
                  </button>
                  <ul class="dropdown-menu" style="--cz-dropdown-spacer: .5rem">
                    <li>
                      <a class="dropdown-item fw-medium d-flex pe-3" href="#!">
                        <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                        <span class="text-truncate">TV, Video &amp; Audio</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item fw-medium d-flex pe-3" href="#!">
                        <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                        <span class="text-truncate">Speakers &amp; Home Music</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item fw-medium d-flex pe-3" href="#!">
                        <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                        <span class="text-truncate">Cameras, Photo &amp; Video</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item fw-medium d-flex pe-3" href="#!">
                        <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                        <span class="text-truncate">Charging Stations</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item fw-medium d-flex pe-3" href="#!">
                        <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                        <span class="text-truncate">Headphones</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="#!">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#!">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#!">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#!">Contacts</a>
                  </li>
                </ul>
                <a class="btn btn-secondary d-sm-none mt-3 mb-2 mt-lg-0" href="#!">
                  <i class="ci-user ms-n1 me-2"></i>
                  Sign up
                </a>
              </div>
            </nav>
          </header>
        </div>
      </div>
      <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
        <div class="position-relative" data-bs-theme="dark">
          <button type="button"
            class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
            data-copy-code="#navbar-content-code">
            <i class="ci-copy fs-sm me-1"></i>
            Copy
          </button>
          <pre id="navbar-content-code" class="code-highlight"><code class="language-html">&lt;!-- Change to "container-fluid" for full width navbar --&gt;

&lt;!-- Navbar with multi-level dropdown + CTA button --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-body shadow px-0&quot;&gt;
  &lt;div class=&quot;container py-1&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      Cartzilla
    &lt;/a&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse1&quot; aria-controls=&quot;navbarCollapse1&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse1&quot;&gt;
      &lt;ul class=&quot;navbar-nav pt-2 pt-lg-0 me-auto&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; data-bs-auto-close=&quot;outside&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropend&quot;&gt;
              &lt;a class=&quot;dropdown-item dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
              &lt;ul class=&quot;dropdown-menu&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a class=&quot;btn btn-primary animate-shake mt-3 mt-lg-0&quot; href=&quot;#&quot;&gt;
        &lt;i class=&quot;ci-user animate-target ms-n1 me-2&quot;&gt;&lt;/i&gt;
        Sign up
      &lt;/a&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;


&lt;!-- Navbar with simple navigation + Action buttons group --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-body shadow px-0&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Cartzilla&lt;/span&gt;
      &lt;span class=&quot;d-sm-none&quot;&gt;Cz&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;d-flex align-items-center order-lg-2 py-lg-1&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale&quot; aria-label=&quot;Toggle search bar&quot;&gt;
        &lt;i class=&quot;ci-search animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;a class=&quot;btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-sm-inline-flex&quot; href=&quot;#&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ci-user animate-target&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2&quot; aria-label=&quot;Shopping cart&quot;&gt;
        &lt;span class=&quot;position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 rounded-pill&quot; style=&quot;--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-body-bg)&quot;&gt;3&lt;/span&gt;
        &lt;span class=&quot;position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg&quot;&gt;
          &lt;i class=&quot;ci-shopping-cart animate-target ms-n1&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse2&quot; aria-controls=&quot;navbarCollapse2&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse2&quot;&gt;
      &lt;ul class=&quot;navbar-nav pt-2 pt-lg-0 me-auto&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Services&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a class=&quot;btn btn-secondary d-sm-none mt-3 mb-2 mt-lg-0&quot; href=&quot;#!&quot;&gt;
        &lt;i class=&quot;ci-user ms-n1 me-2&quot;&gt;&lt;/i&gt;
        Sign up
      &lt;/a&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;


&lt;!-- Multi-level navbar with search bar, action buttons group, "Categories" dropdown button and navigation links --&gt;
&lt;header class=&quot;navbar navbar-expand-lg d-block bg-body shadow px-0&quot;&gt;

  &lt;!-- First level: Brand (logo) + search bar + action buttons group --&gt;
  &lt;div class=&quot;container d-flex align-items-center justify-content-between&quot;&gt;
    &lt;a class=&quot;navbar-brand flex-shrink-0&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Cartzilla&lt;/span&gt;
      &lt;span class=&quot;d-sm-none&quot;&gt;Cz&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;position-relative w-100 d-none d-md-block mx-3 mx-lg-4&quot;&gt;
      &lt;i class=&quot;ci-search position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
      &lt;input type=&quot;search&quot; class=&quot;form-control form-icon-start&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center py-lg-1&quot;&gt;
      &lt;div class=&quot;dropdown&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (light)&quot;&gt;
          &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
            &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
          &lt;/span&gt;
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot; style=&quot;--cz-dropdown-min-width: 9rem&quot;&gt;
          &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;true&quot;&gt;
              &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
                &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
              &lt;/span&gt;
              &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
              &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
            &lt;/button&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;false&quot;&gt;
              &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
                &lt;i class=&quot;ci-moon&quot;&gt;&lt;/i&gt;
              &lt;/span&gt;
              &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
              &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
            &lt;/button&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
              &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
                &lt;i class=&quot;ci-auto&quot;&gt;&lt;/i&gt;
              &lt;/span&gt;
              &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
              &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
            &lt;/button&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      &lt;a class=&quot;btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-sm-inline-flex&quot; href=&quot;#&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ci-user animate-target&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2&quot; aria-label=&quot;Shopping cart&quot;&gt;
        &lt;span class=&quot;position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 rounded-pill&quot; style=&quot;--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-body-bg)&quot;&gt;3&lt;/span&gt;
        &lt;span class=&quot;position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg&quot;&gt;
          &lt;i class=&quot;ci-shopping-cart animate-target ms-n1&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse3&quot; aria-controls=&quot;navbarCollapse3&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Second level: Categories dropdown + collapsible navigation --&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse3&quot;&gt;
      &lt;div class=&quot;position-relative d-md-none mt-3&quot;&gt;
        &lt;i class=&quot;ci-search position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
        &lt;input type=&quot;search&quot; class=&quot;form-control form-icon-start&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-lg-flex pt-3 pb-2&quot;&gt;
        &lt;div class=&quot;dropdown mb-2 mb-lg-0&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary fs-base dropdown-toggle me-2&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            &lt;i class=&quot;ci-grid fs-lg ms-n1 me-2&quot;&gt;&lt;/i&gt;
            Categories
          &lt;/button&gt;
          &lt;ul class=&quot;dropdown-menu&quot; style=&quot;--cz-dropdown-spacer: .5rem&quot;&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item fw-medium d-flex pe-3&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ci-monitor-2 fs-xl opacity-60 pe-1 me-2&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;text-truncate&quot;&gt;TV, Video &amp; Audio&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item fw-medium d-flex pe-3&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ci-speaker-2 fs-xl opacity-60 pe-1 me-2&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;text-truncate&quot;&gt;Speakers &amp; Home Music&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item fw-medium d-flex pe-3&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ci-camera-2 fs-xl opacity-60 pe-1 me-2&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;text-truncate&quot;&gt;Cameras, Photo &amp; Video&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item fw-medium d-flex pe-3&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ci-battery-2 fs-xl opacity-60 pe-1 me-2&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;text-truncate&quot;&gt;Charging Stations&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item fw-medium d-flex pe-3&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ci-headphones-2 fs-xl opacity-60 pe-1 me-2&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;text-truncate&quot;&gt;Headphones&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
        &lt;ul class=&quot;navbar-nav&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Services&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Contacts&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;a class=&quot;btn btn-secondary d-sm-none mt-3 mb-2 mt-lg-0&quot; href=&quot;#!&quot;&gt;
          &lt;i class=&quot;ci-user ms-n1 me-2&quot;&gt;&lt;/i&gt;
          Sign up
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
        </div>
      </div>
    </div>
  </section>


  <!-- Color schemes -->
  <section id="navbar-colors" class="cd-section pb-sm-2 pb-lg-3 mb-5">
    <h4 class="mb-4">Color schemes</h4>
    <ul class="nav nav-tabs" role="tablist" style="max-width: 240px">
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2" role="tab"
          aria-controls="preview-2" aria-selected="true">
          <i class="ci-eye opacity-75 ms-n1 me-2"></i>
          Preview
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2" role="tab"
          aria-controls="html-2" aria-selected="false">
          <i class="ci-code opacity-75 ms-n1 me-2"></i>
          HTML
        </button>
      </li>
    </ul>
    <div class="tab-content">
      <div id="preview-2" class="tab-pane pt-4 pb-2 fade show active" role="tabpanel">
        <header class="navbar navbar-expand-lg navbar-dark bg-dark rounded px-3 mb-4" data-bs-theme="dark">
          <a class="navbar-brand" href="#!">
            <span class="d-flex flex-shrink-0 text-primary me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                <path
                  d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                  fill="currentColor"></path>
                <g fill="#fff">
                  <path
                    d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                  </path>
                  <use href="#czlogo4"></use>
                  <use href="#czlogo4" x="8.516" y="-2.172"></use>
                </g>
                <defs>
                  <path id="czlogo4"
                    d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                  </path>
                </defs>
              </svg>
            </span>
            <span class="d-none d-sm-inline">Cartzilla</span>
            <span class="d-sm-none">Cz</span>
          </a>
          <div class="d-flex align-items-center order-lg-2">
            <button type="button"
              class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale"
              aria-label="Toggle search bar">
              <i class="ci-search animate-target"></i>
            </button>
            <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake" href="#"
              aria-label="Account">
              <i class="ci-user animate-target"></i>
            </a>
            <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2"
              aria-label="Shopping cart">
              <span
                class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill"
                style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
              <span
                class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                <i class="ci-shopping-cart animate-target ms-n1"></i>
              </span>
            </button>
            <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
              data-bs-target="#navbarDarkCollapse" aria-controls="navbarDarkCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse" id="navbarDarkCollapse">
            <ul class="navbar-nav pt-2 pt-lg-0 me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-trigger="hover"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action link</a></li>
                  <li><a class="dropdown-item" href="#!">Yet another link</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </nav>
        </header>

        <header class="navbar navbar-expand-lg navbar-dark bg-info rounded px-3 mb-4">
          <a class="navbar-brand" href="#!">
            <span class="d-flex flex-shrink-0 text-primary me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                <path
                  d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                  fill="currentColor"></path>
                <g fill="#fff">
                  <path
                    d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                  </path>
                  <use href="#czlogo5"></use>
                  <use href="#czlogo5" x="8.516" y="-2.172"></use>
                </g>
                <defs>
                  <path id="czlogo5"
                    d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                  </path>
                </defs>
              </svg>
            </span>
            <span class="d-none d-sm-inline">Cartzilla</span>
            <span class="d-sm-none">Cz</span>
          </a>
          <div class="d-flex align-items-center order-lg-2" data-bs-theme="dark">
            <button type="button"
              class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale"
              aria-label="Toggle search bar">
              <i class="ci-search animate-target"></i>
            </button>
            <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake" href="#"
              aria-label="Account">
              <i class="ci-user animate-target"></i>
            </a>
            <button type="button"
              class="btn btn-icon btn-lg btn-secondary bg-white bg-opacity-10 border-0 position-relative rounded-circle ms-2"
              aria-label="Shopping cart">
              <span
                class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success bg-opacity-100 border border-3 border-info rounded-pill"
                style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
              <span
                class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                <i class="ci-shopping-cart animate-target ms-n1"></i>
              </span>
            </button>
            <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
              data-bs-target="#navbarInfoCollapse" aria-controls="navbarInfoCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse" id="navbarInfoCollapse">
            <ul class="navbar-nav pt-2 pt-lg-0 me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-trigger="hover"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action link</a></li>
                  <li><a class="dropdown-item" href="#!">Yet another link</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </nav>
        </header>

        <header class="navbar navbar-expand-lg bg-body-secondary rounded px-3 mb-4">
          <a class="navbar-brand" href="#!">
            <span class="d-flex flex-shrink-0 text-primary me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                <path
                  d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                  fill="currentColor"></path>
                <g fill="#fff">
                  <path
                    d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                  </path>
                  <use href="#czlogo6"></use>
                  <use href="#czlogo6" x="8.516" y="-2.172"></use>
                </g>
                <defs>
                  <path id="czlogo6"
                    d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                  </path>
                </defs>
              </svg>
            </span>
            <span class="d-none d-sm-inline">Cartzilla</span>
            <span class="d-sm-none">Cz</span>
          </a>
          <div class="d-flex align-items-center order-lg-2">
            <button type="button"
              class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale"
              aria-label="Toggle search bar">
              <i class="ci-search animate-target"></i>
            </button>
            <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake" href="#!"
              aria-label="Account">
              <i class="ci-user animate-target"></i>
            </a>
            <button type="button"
              class="btn btn-icon btn-lg btn-secondary bg-body border-0 position-relative rounded-circle ms-2"
              aria-label="Shopping cart">
              <span
                class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 rounded-pill"
                style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-secondary-bg)">3</span>
              <span
                class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                <i class="ci-shopping-cart animate-target ms-n1"></i>
              </span>
            </button>
            <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
              data-bs-target="#navbarGrayCollapse" aria-controls="navbarGrayCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse" id="navbarGrayCollapse">
            <ul class="navbar-nav pt-2 pt-lg-0 me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-trigger="hover"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action link</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Yet another link</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </nav>
        </header>

        <header class="navbar navbar-expand-lg bg-primary-subtle rounded px-3">
          <a class="navbar-brand" href="#!">
            <span class="d-flex flex-shrink-0 text-primary me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                <path
                  d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                  fill="currentColor"></path>
                <g fill="#fff">
                  <path
                    d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                  </path>
                  <use href="#czlogo7"></use>
                  <use href="#czlogo7" x="8.516" y="-2.172"></use>
                </g>
                <defs>
                  <path id="czlogo7"
                    d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                  </path>
                </defs>
              </svg>
            </span>
            <span class="d-none d-sm-inline">Cartzilla</span>
            <span class="d-sm-none">Cz</span>
          </a>
          <div class="d-flex align-items-center order-lg-2">
            <button type="button"
              class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale"
              aria-label="Toggle search bar">
              <i class="ci-search animate-target"></i>
            </button>
            <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake" href="#!"
              aria-label="Account">
              <i class="ci-user animate-target"></i>
            </a>
            <button type="button"
              class="btn btn-icon btn-lg btn-secondary bg-primary bg-opacity-10 border-0 position-relative rounded-circle ms-2"
              aria-label="Shopping cart">
              <span
                class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success bg-opacity-100 border border-3 rounded-pill"
                style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-primary-bg-subtle)">3</span>
              <span
                class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                <i class="ci-shopping-cart animate-target ms-n1"></i>
              </span>
            </button>
            <button type="button" class="navbar-toggler collapsed ms-3" data-bs-toggle="collapse"
              data-bs-target="#navbarPrimaryCollapse" aria-controls="navbarPrimaryCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse" id="navbarPrimaryCollapse">
            <ul class="navbar-nav pt-2 pt-lg-0 me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-trigger="hover"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action link</a></li>
                  <li><a class="dropdown-item" href="#!">Yet another link</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </nav>
        </header>
      </div>
      <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
        <div class="position-relative" data-bs-theme="dark">
          <button type="button"
            class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
            data-copy-code="#navbar-colors-code">
            <i class="ci-copy fs-sm me-1"></i>
            Copy
          </button>
          <pre id="navbar-colors-code" class="code-highlight"><code class="language-html">&lt;!-- Change to "container-fluid" for full width navbar --&gt;

&lt;!-- Dark navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg navbar-dark bg-dark px-0&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Cartzilla&lt;/span&gt;
      &lt;span class=&quot;d-sm-none&quot;&gt;Cz&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;d-flex align-items-center order-lg-2&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale&quot; aria-label=&quot;Toggle search bar&quot;&gt;
        &lt;i class=&quot;ci-search animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;a class=&quot;btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake&quot; href=&quot;#&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ci-user animate-target&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2&quot; aria-label=&quot;Shopping cart&quot;&gt;
        &lt;span class=&quot;position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill&quot; style=&quot;--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em&quot;&gt;3&lt;/span&gt;
        &lt;span class=&quot;position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg&quot;&gt;
          &lt;i class=&quot;ci-shopping-cart animate-target ms-n1&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarDarkCollapse&quot; aria-controls=&quot;navbarDarkCollapse&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarDarkCollapse&quot;&gt;
      &lt;ul class=&quot;navbar-nav pt-2 pt-lg-0 me-auto&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;


&lt;!-- Info navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg navbar-dark bg-info px-0&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Cartzilla&lt;/span&gt;
      &lt;span class=&quot;d-sm-none&quot;&gt;Cz&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;d-flex align-items-center order-lg-2&quot; data-bs-theme=&quot;dark&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale&quot; aria-label=&quot;Toggle search bar&quot;&gt;
        &lt;i class=&quot;ci-search animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;a class=&quot;btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake&quot; href=&quot;#&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ci-user animate-target&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-secondary bg-white bg-opacity-10 border-0 position-relative rounded-circle ms-2&quot; aria-label=&quot;Shopping cart&quot;&gt;
        &lt;span class=&quot;position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success bg-opacity-100 border border-3 border-info rounded-pill&quot; style=&quot;--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em&quot;&gt;3&lt;/span&gt;
        &lt;span class=&quot;position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg&quot;&gt;
          &lt;i class=&quot;ci-shopping-cart animate-target ms-n1&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarInfoCollapse&quot; aria-controls=&quot;navbarInfoCollapse&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarInfoCollapse&quot;&gt;
      &lt;ul class=&quot;navbar-nav pt-2 pt-lg-0 me-auto&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;


&lt;!-- Gray navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-body-secondary px-0&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Cartzilla&lt;/span&gt;
      &lt;span class=&quot;d-sm-none&quot;&gt;Cz&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;d-flex align-items-center order-lg-2&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale&quot; aria-label=&quot;Toggle search bar&quot;&gt;
        &lt;i class=&quot;ci-search animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;a class=&quot;btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake&quot; href=&quot;#&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ci-user animate-target&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-secondary bg-body border-0 position-relative rounded-circle ms-2&quot; aria-label=&quot;Shopping cart&quot;&gt;
        &lt;span class=&quot;position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 rounded-pill&quot; style=&quot;--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-secondary-bg)&quot;&gt;3&lt;/span&gt;
        &lt;span class=&quot;position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg&quot;&gt;
          &lt;i class=&quot;ci-shopping-cart animate-target ms-n1&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarGrayCollapse&quot; aria-controls=&quot;navbarGrayCollapse&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarGrayCollapse&quot;&gt;
      &lt;ul class=&quot;navbar-nav pt-2 pt-lg-0 me-auto&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;


&lt;!-- Subtle primary navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-primary-subtle px-0&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;&gt;&lt;/path&gt;&lt;use href=&quot;#czlogo&quot;&gt;&lt;/use&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;&gt;&lt;/use&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;&gt;&lt;/path&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Cartzilla&lt;/span&gt;
      &lt;span class=&quot;d-sm-none&quot;&gt;Cz&lt;/span&gt;
    &lt;/a&gt;
    &lt;div class=&quot;d-flex align-items-center order-lg-2&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-scale&quot; aria-label=&quot;Toggle search bar&quot;&gt;
        &lt;i class=&quot;ci-search animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;a class=&quot;btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake&quot; href=&quot;#&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ci-user animate-target&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-secondary bg-primary bg-opacity-10 border-0 position-relative rounded-circle ms-2&quot; aria-label=&quot;Shopping cart&quot;&gt;
        &lt;span class=&quot;position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success bg-opacity-100 border border-3 rounded-pill&quot; style=&quot;--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em; --cz-border-color: var(--cz-primary-bg-subtle)&quot;&gt;3&lt;/span&gt;
        &lt;span class=&quot;position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg&quot;&gt;
          &lt;i class=&quot;ci-shopping-cart animate-target ms-n1&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler collapsed ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarPrimaryCollapse&quot; aria-controls=&quot;navbarPrimaryCollapse&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarPrimaryCollapse&quot;&gt;
      &lt;ul class=&quot;navbar-nav pt-2 pt-lg-0 me-auto&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;
          &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
        </div>
      </div>
    </div>
  </section>


  <!-- Responsive offcanvas menu -->
  <section id="navbar-offcanvas" class="cd-section">
    <h4 class="mb-4">Responsive offcanvas menu</h4>
    <ul class="nav nav-tabs" role="tablist" style="max-width: 240px">
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-3" role="tab"
          aria-controls="preview-3" aria-selected="true">
          <i class="ci-eye opacity-75 ms-n1 me-2"></i>
          Preview
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3" role="tab"
          aria-controls="html-3" aria-selected="false">
          <i class="ci-code opacity-75 ms-n1 me-2"></i>
          HTML
        </button>
      </li>
    </ul>
    <div class="tab-content">
      <div id="preview-3" class="tab-pane pt-4 pb-2 fade show active" role="tabpanel">
        <div class="bg-dotted rounded p-3 p-sm-4">
          <iframe class="w-100 shadow rounded" src="navbar-offcanvas.html" height="522"
            title="Navbar with offcanvas menu" style="max-width: 375px"></iframe>
        </div>
      </div>
      <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
        <div class="position-relative" data-bs-theme="dark">
          <button type="button"
            class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
            data-copy-code="#navbar-offcanvas-code">
            <i class="ci-copy fs-sm me-1"></i>
            Copy
          </button>
          <pre id="navbar-offcanvas-code" class="code-highlight"><code class="language-html">&lt;!-- Navbar with offcanvas menu on screens smaller than 500px (xs) --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-body sticky-top p-0&quot;&gt;
  &lt;div class=&quot;container py-3&quot;&gt;

    &lt;!-- Navbar brand (Logo) --&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;/&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;/&gt;&lt;use href=&quot;#czlogo&quot;/&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;/&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;/&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      Cartzilla
    &lt;/a&gt;

    &lt;!-- Menu toggler --&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#navbarOffcanvas&quot; aria-controls=&quot;navbarOffcanvas&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;

    &lt;!-- Offcanvas menu --&gt;
    &lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;navbarOffcanvas&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;navbarOffcanvasLabel&quot;&gt;
      &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;navbarOffcanvasLabel&quot;&gt;Menu&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;offcanvas-body pt-0&quot;&gt;
        &lt;ul class=&quot;navbar-nav ms-lg-4&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Services&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item dropdown&quot;&gt;
            &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot; aria-expanded=&quot;false&quot;&gt;
              Dropdown
            &lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
              &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropend&quot;&gt;
                &lt;a class=&quot;dropdown-item dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                  Dropdown
                &lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;hr&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Contact&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
