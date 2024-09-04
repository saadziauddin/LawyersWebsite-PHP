    <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/user.jpeg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?php echo $_SESSION['name']; ?>
                </p>
                <p class="designation">
                  Admin Panel
                </p>
              </div>
            </div>
          </li>

          <li class="nav-item mt-2">
            <a class="nav-link" href="validatepage.php?index">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="validatepage.php?customer">
              <i class="far fa-file-alt menu-icon"></i>
              <span class="menu-title">Customers</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="validatepage.php?lawyer">
              <i class="fas fa-file menu-icon"></i>
              <span class="menu-title">Lawyers</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="validatepage.php?depart">
              <i class="fas fa-window-restore menu-icon"></i>
              <span class="menu-title">Departments</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="validatepage.php?appointment">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">Appointments</span>
            </a>
          </li>
          
        </ul>
      </nav>
    <!-- partial -->