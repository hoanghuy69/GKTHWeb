<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <ul>
        <li class="menu-title">Navigation</li>

        <li class="has_sub">
          <a href="dashboard.php" class="waves-effect"><i class="fas fa-cubes"></i> <span> Dashboard </span>
          </a>
        </li>
        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-box"></i> <span>
              Category </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="add-category.php">Add Category</a></li>
            <li><a href="manage-categories.php">Manage Category</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-inbox"></i> <span>Sub
              Category </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="add-subcategory.php">Add Sub Category</a></li>
            <li><a href="manage-subcategories.php">Manage Sub Category</a></li>
          </ul>
        </li>
        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-edit"></i> <span> Posts
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="add-post.php">Add Posts</a></li>
            <li><a href="manage-posts.php">Manage Posts</a></li>
            <li><a href="trash-posts.php">Trash Posts</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-pager"></i> <span> Pages
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contactus.php">Contact us</a></li>
          </ul>
        </li>
        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-comments"></i> <span>
              Comments </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="unapprove-comment.php">Waiting for Approval </a></li>
            <li><a href="manage-comments.php">Approved Comments</a></li>
          </ul>
        </li>
        <?php
          
          $roles = mysqli_query($con,"SELECT AdminUserName,Roles FROM tbladmin WHERE (AdminUserName='$admin')");
          while($rol=mysqli_fetch_array($roles)){
            if($rol['Roles']=="Super Admin"){
          
        ?>
        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user-friends"></i> <span> Admin
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="add-admin.php">Create Admin</a></li>
            <li><a href="manage-admin.php">Manage Admin</a></li>
          </ul>
        </li>
        <?php
          }}
        ?>
      </ul>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

    <div class="help-box">
      <h5 class="text-muted m-t-0">For Help ?</h5>
      <p class=""><span class="text-custom">Email:</span> <br /> chithientest@gmail.com</p>
    </div>

  </div>
  <!-- Sidebar -left -->

</div>