<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"> <?php echo $_SESSION['username'];?></p>
                    <p class="designation">Premium user</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="all-registion.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">All Registration</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Products </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="all-product.php">All New Product </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-new-product.php">
                            <span class="menu-title">Add New Product</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">User </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="all-user.php">All Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-new-user.php">Add New User </a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Category </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="all-category.php">All Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-new-category.php">Add New Category </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Brand </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="all-brand.php">All Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-new-brand.php">Add New Brand </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Form elements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login.html"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>