<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{!! route('home') !!}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <img src="{{ url('/') }}/public/front/images/Favicon.png" alt="Logo" class="img-fluid" style="width:30px; height:auto;">
            </span>
            <span class="logo-text">{{ Auth::user()->name }} </span>
        </a>
        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                    href="{!! route('admin/dashboard') !!}"><i class="icofont-home fs-5"></i>
                    <span>Dashboard</span></a></li>
            <li
                class="collapsed{{ Request::is('admin/home*') || Request::is('admin/heroslide*') || Request::is('admin/others*') || Request::is('admin/network*')  ? ' active' : '' }}">
                <a class="m-link{{ Request::is('admin/home*') || Request::is('admin/heroslide*') || Request::is('admin/others*') || Request::is('admin/network*')  ? ' active' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#menu-home" href="#">
                    <i class="icofont-ui-home fs-5"></i>
                    <span>Home Page</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse{{ Request::is('admin/home*') || Request::is('admin/heroslide*') || Request::is('admin/others*') || Request::is('admin/network*') ? ' show' : '' }}"
                    id="menu-home">
                    <li class="{{ Request::is('admin/heroslide*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('heroslide.index') ? ' active' : '' }}"
                            href="{!! route('heroslide.index') !!}">
                            <i class="icofont-presentation fs-5"></i>
                             <!-- <i class="fa-solid fa-sliders"></i> -->
                            <span>Hero Slide </span>
                        </a>
                    </li> 
                                      
                    <li class="{{ Request::is('admin/others*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('others.index') ? ' active' : '' }}"
                            href="{!! route('others.index') !!}">
                            <i class="icofont-gears fs-5"></i>
                            <span>Process </span>
                        </a>
                    </li>
                    
                    <li class="{{ Request::is('admin/network*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('network.index') ? ' active' : '' }}"
                            href="{!! route('network.index') !!}">
                            <i class="icofont-wall-clock fs-5"></i>
                            <span>Network</span>
                        </a>
                    </li>
                </ul>
                
                    
               
            </li>
            

            <li class="collapsed{{ Request::is('admin/resource*') || Request::is('admin/faq*') || Request::is('admin/testimonials*') ? ' active' : '' }}">
                <a class="m-link{{ Request::is('admin/resource*') || Request::is('admin/faq*') || Request::is('admin/testimonials*') ? ' active' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#menu-resource" href="#">
                    <i class="icofont-document-folder fs-5"></i>
                    <span>Resource</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse{{ Request::is('admin/resource*') || Request::is('admin/faq*') || Request::is('admin/testimonials*') ? ' show' : '' }}"
                    id="menu-resource">
                    <li class="{{ Request::is('admin/faq*') ? ' active' : '' }}">
                        <a class="ms-link {{ Request::is('admin/faq*') ? 'active' : '' }}" 
                            href="{!! route('faq.index') !!}">
                            <i class="icofont-question-circle fs-5"></i>
                            <span>Faq</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/testimonials*') ? ' active' : '' }}">
                        <a class="ms-link {{ Request::is('admin/testimonials*') ? 'active' : '' }}" 
                            href="{!! route('testimonials.index') !!}">
                            <i class="icofont-question-circle fs-5"></i>
                            <span>Testimonials</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="m-link {{ Request::is('admin/blog*') ? 'active' : '' }}" href="{!! route('blog.index') !!}">
                    <i class="icofont-newspaper fs-5"></i>
                    <span>Blogs</span>
                </a>
            </li>
            <!--<li>-->
            <!--    <a class="m-link {{ Request::is('admin/category*') ? 'active' : '' }}" href="{!! route('category.index') !!}">-->
            <!--        <i class="icofont-newspaper fs-5"></i>-->
            <!--        <span>Category</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li>-->
            <!--    <a class="m-link {{ Request::is('admin/services*') ? 'active' : '' }}" href="{!! route('services.index') !!}">-->
            <!--        <i class="icofont-newspaper fs-5"></i>-->
            <!--        <span>Services</span>-->
            <!--    </a>-->
            <!--</li>-->
            <li>
                <a class="m-link {{ Request::is('admin/milestone*') ? 'active' : '' }}" href="{!! route('milestone.index') !!}">
                    <i class="icofont-wall-clock fs-5"></i>
                    <span>Milestone</span>
                </a>
            </li>
            <li class="collapsed {{ Request::is('admin/project*') || Request::is('admin/projectcategory*') ? ' active' : '' }}">
                <a class="m-link {{ Request::is('admin/project*') || Request::is('admin/projectcategory*') ? ' active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-project" href="#">
                    <i class="icofont-tasks-alt fs-5"></i>
                    <span>Project</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse{{ Request::is('admin/project*') || Request::is('admin/project*') ? ' show' : '' }}" id="menu-project">
                    <li class="{{ Request::is('admin/project*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('project.index') ? ' active' : '' }}" href="{!! route('project.index') !!}">
                            <i class="icofont-tasks-alt fs-5"></i>
                            <span>Project</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/projectcategory*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('projectcategory.index') ? ' active' : '' }}" href="{!! route('projectcategory.index') !!}">
                            <i class="icofont-listing-box fs-5"></i>
                            <span>Project Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/certificates*') ? 'active' : '' }}" href="{!! route('certificates.index') !!}">
                    <i class="icofont-wall-clock fs-5"></i>
                    <span>Certificates</span>
                </a>
            </li>

            <li class="collapsed {{ Request::is('admin/jobcategory*') || Request::is('admin/job*') ? ' active' : '' }}">
                <a class="m-link {{ Request::is('admin/jobcategory*') || Request::is('admin/job*') ? ' active' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#menu-job" href="#">
                    <i class="icofont-briefcase fs-5"></i>
                    <span>Job</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse {{ Request::is('admin/jobcategory*') || Request::is('admin/job*') ? ' show' : '' }}" id="menu-job">
                    <li class="{{ Request::is('admin/jobcategory*') ? 'active' : '' }}">
                        <a class="ms-link {{ Request::routeIs('jobcategory.index') ? 'active' : '' }}" href="{!! route('jobcategory.index') !!}">
                            <i class="icofont-tags fs-5"></i>
                            <span>Job Category</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/job*') && !Request::is('admin/jobcategory*') ? 'active' : '' }}">
                        <a class="ms-link {{ Request::routeIs('job.index') ? 'active' : '' }}" href="{!! route('job.index') !!}">
                            <i class="icofont-business-man fs-5"></i>
                            <span>Job</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="collapsed {{ Request::is('admin/category*') || Request::is('admin/services*') ? ' active' : '' }}">
                <a class="m-link {{ Request::is('admin/category*') || Request::is('admin/services*') ? ' active' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#menu-services" href="#">
                    <i class="icofont-briefcase fs-5"></i>
                    <span>Service</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse {{ Request::is('admin/category*') || Request::is('admin/services*') ? ' show' : '' }}" id="menu-services">
                    <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                        <a class="ms-link {{ Request::routeIs('category.index') ? 'active' : '' }}" href="{!! route('category.index') !!}">
                            <i class="icofont-tags fs-5"></i>
                            <span>Category</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/category*') && !Request::is('admin/services*') ? 'active' : '' }}">
                        <a class="ms-link {{ Request::routeIs('services.index') ? 'active' : '' }}" href="{!! route('services.index') !!}">
                            <i class="icofont-business-man fs-5"></i>
                            <span>Service</span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>

        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>