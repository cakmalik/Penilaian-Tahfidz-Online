<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }} <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Tables -->
    <x-menu :href="route('home')" :icon="'home'" :text="'Dashboard'"
        :active="Request::segment(1) == 'home' ? 'active' : ''" />
    <x-menu :href="route('institutions.index')" :icon="'building'" :text="'institutions'"
        :active="Request::segment(1) == 'institutions' ? 'active' : ''" />
    <x-menu :href="route('students.index')" :icon="'users'" :text="'Students'"
        :active="Request::segment(1) == 'students' ? 'active' : ''" />
    <x-menu :href="route('teachers.index')" :icon="'user'" :text="'teachers'"
        :active="Request::segment(1) == 'teachers' ? 'user' : ''" />
    <x-menu :href="route('category.index')" :icon="'list'" :text="'category'"
        :active="Request::segment(1) == 'category' ? 'active' : ''" />
    <x-menu :href="route('grades.index')" :icon="'list'" :text="'grades'"
        :active="Request::segment(1) == 'grades' ? 'active' : ''" />
    <x-menu :href="route('result.index')" :icon="'list'" :text="'result'"
        :active="Request::segment(1) == 'result' ? 'active' : ''" />

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mb-5">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <p class="text-center mb-2"><strong>ANITA</strong> <br> tahfidz assessment application, keep memorization with
            grades
        </p>
        <a class="btn btn-success btn-sm" href="https://wa.me/085333920007">Support</a>
    </div>

</ul>
