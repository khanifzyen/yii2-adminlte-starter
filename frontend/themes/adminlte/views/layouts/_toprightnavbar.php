<!--begin::End Navbar Links-->
<ul class="navbar-nav ms-auto">
    <?php
    // Navbar Search
    echo $this->render('toprightnavbar/_navbar_search');
    // Messages Dropdown Menu
    echo $this->render('toprightnavbar/_message');
    // Notifications Dropdown Menu
    echo $this->render('toprightnavbar/_notification');
    // Fullscreen Toggle
    echo $this->render('toprightnavbar/_fullscreen_toggle');
    // User Menu
    echo $this->render('toprightnavbar/_user_menu'); ?>
</ul>
<!--end::End Navbar Links-->