<?php echo null ?>

<div class="modal fade" id="nav-menu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">منو</h5>
                <i class="fa fa-times float-end close-modal pointer" data-mdb-dismiss="modal"></i>
            </div>
            <div class="modal-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>">خانه</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $path; ?>/shop/shop.php?category=engineering"  role="button"  aria-expanded="false">فنی مهندسی</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link " href="<?php echo $path; ?>/shop/shop.php?category=humanities"  role="button"  aria-expanded="false">
                        علوم انسانی
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo $path; ?>/shop/shop.php?category=science"  role="button"  aria-expanded="false">
                        علوم پایه
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo $path; ?>/shop/shop.php?category=medical"  role="button" aria-expanded="false">
                        علوم پزشکی
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo $path; ?>/shop/shop.php?category=art"  role="button"  aria-expanded="false">
                        هنر
                        </a>
                      </li>
                </ul>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search">
                        <span>&nbsp;&nbsp;</span>
                        <button class="btn btn-outline-dark" type="submit">جستجو</button>
                      </form>
                </ul>
            </div>
        </div>
    </div>
</div>