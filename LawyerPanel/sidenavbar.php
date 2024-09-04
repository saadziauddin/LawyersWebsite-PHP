    <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="../AdminPanel/LawyersImages/<?php echo $_SESSION['img']; ?>"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?php echo $_SESSION['name']; ?>
                </p>
                <p class="designation">
                  Lawyer Panel
                </p>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">My Appointments</span>
            </a>
          </li>
          
        </ul>
      </nav>
    <!-- partial -->