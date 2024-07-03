<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  </head>
  <body class="dashboard-page">
    <!-- Header -->
    <nav class="navbar navbar-expand bg-primary navbar-light">
      <div class="container-lg">
        <a class="navbar-brand" href="#">
          <i class="bi bi-emoji-kiss"></i> Navbar
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-end mt-2">
                <li>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                  >
                    <i class="bi bi-person-circle"></i> Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-key"></i> Change Password
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-sliders"></i> Settings
                  </a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-box-arrow-left"></i> Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end Header -->

    <div class="container-lg">
      <div class="row">
        <!-- Sidebar Navigasi-->
        <div class="col-lg-3">
          <nav class="navbar navbar-expand bg-body-tertiary rounded-1 mt-2 border">
            <div class="container-fluid">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="offcanvas offcanvas-start"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
              >
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="nav nav-pills flex-column flex-grow-1">
                    <li class="nav-item">
                      <a class="nav-link link-dark" aria-current="page" href="index.html">
                        <i class="bi bi-speedometer2"></i> Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="datatenagamedis.php">
                        <i class="bi bi-database"></i> data tenaga medis
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="laporanketidakdisiplinan.php">
                        <i class="bi bi-list"></i> laporan ketidak disiplinan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="kategoripelanggaran.php">
                        <i class="bi bi-list"></i> kategori pelanggaran
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="manajemenkasus.php">
                        <i class="bi bi-list"></i> manajemen kasus
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="laporananalitik.php">
                        <i class="bi bi-list"></i> laporan analitik
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="pelatihandanpembinaan.php">
                        <i class="bi bi-list"></i> pelatihan dan pembinaan
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!-- end Sidebar Navigasi-->
      </div>
    </div>

    <!-- Footer-->
    <div class="text-center bg-light fixed-bottom py-2">
      Copyright 2024 Makfira Ramadhani
    </div>
    <!-- end Footer -->

    <!-- Modal -->
    <div
      class="modal fade modal-xl"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder=""
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleFormControlInput2"
                  placeholder=""
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="exampleFormControlSelect1">
                  <option selected>Choose...</option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end Modal-->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      $(document).ready(function() {
        if ($('body').hasClass('dashboard-page')) {
          $('.nav-link[href="index.html"]').addClass('active');
        } else if ($('body').hasClass('table-page')) {
          $('.nav-link[href="table.html"]').addClass('active');
