<ul class="sidebar-nav">
    <x-menu :href="route('home')" :icon="'sliders'" :text="'Dashboard'"
        :active="Request::segment(1) == 'home' ? 'active' : ''" />
    <x-menu :href="route('institutions.index')" :icon="'sliders'" :text="'institutions'"
        :active="Request::segment(1) == 'institutions' ? 'active' : ''" />
    <x-menu :href="route('students.index')" :icon="'sliders'" :text="'Students'"
        :active="Request::segment(1) == 'students' ? 'active' : ''" />
    <x-menu :href="route('teachers.index')" :icon="'sliders'" :text="'teachers'"
        :active="Request::segment(1) == 'teachers' ? 'active' : ''" />
    <x-menu :href="route('category.index')" :icon="'sliders'" :text="'category'"
        :active="Request::segment(1) == 'category' ? 'active' : ''" />
    <x-menu :href="route('grades.index')" :icon="'sliders'" :text="'grades'"
        :active="Request::segment(1) == 'grades' ? 'active' : ''" />
    <x-menu :href="route('result.index')" :icon="'sliders'" :text="'result'"
        :active="Request::segment(1) == 'result' ? 'active' : ''" />
</ul>
