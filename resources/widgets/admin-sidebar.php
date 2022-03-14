<?php echo null; ?>

<div class="d-flex flex-column bg-light flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <i class="fa fa-user"></i>
        &nbsp;
        &nbsp;
        <!-- <span class="fs-4">پنل مدیر</span> -->
        <span class="fs-4">مدیر گرامی</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?php echo $path; ?>/admin" class="nav-link link-dark" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                صفحه اصلی پنل
            </a>
        </li>
        <li>
            <a href="<?php echo $path; ?>/admin/table.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                مالی و فروش
            </a>
        </li>
        <li>
            <a href="<?php echo $path; ?>/admin/grid.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                محصول
            </a>
        </li>
        <hr>
        <li>
            <a href="<?php echo $path; ?>/admin/profile.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                پروفایل
            </a>
        </li>
    </ul>
    <hr>
    <a class="text-reset" href="?logout=true">خروج از حساب</a>
</div>