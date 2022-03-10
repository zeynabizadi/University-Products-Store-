<?php echo null; ?>

<div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <i class="fa fa-user"></i>
        &nbsp;
        &nbsp;
        <span class="fs-4">پنل کاربری</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="home.php" class="nav-link link-dark" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                صفحه اصلی پنل
            </a>
        </li>
        <li>
            <a href="speedometer.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer"/></svg>
                داشبورد
            </a>
        </li>
        <li>
            <a href="table.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                مالی و فروش
            </a>
        </li>
        <li>
            <a href="grid.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                محصول
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropup">
        <span id="dropdownMenuButton" class="pointer" data-mdb-toggle="dropdown" aria-expanded="false" >
            بیشتر
        </span>
        <ul class="dropdown-menu border" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="<?php echo $path; ?>/user/profile.php">پروفایل</a></li>
            <li><a class="dropdown-item" href="?logout=true">خروج از حساب</a></li>
        </ul>
    </div>
</div>