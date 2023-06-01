<nav id="sidebar">
    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu {{ active_class(['dashboard/*']) }} main-single-menu">
            <a href="#dashboard" class="dropdown-toggle" data-toggle="collapse" aria-expanded="true">
                <div class="">
                    <i class="las la-home"></i>
                    <span>{{__('Dashboards')}}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="collapsed submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                <li class=" {{ active_class(['dashboard/dashboard1']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard1']) }}" href="{{ url('/dashboard/dashboard1') }}"> {{__('Dashboard 1')}} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard2']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard2']) }}" href="{{ url('/dashboard/dashboard2') }}"> {{__('Dashboard 2')}} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard3']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard3']) }}" href="{{ url('/dashboard/dashboard3') }}"> {{__('Dashboard 3')}} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard4']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard4']) }}" href="{{ url('/dashboard/dashboard4') }}"> {{__('Dashboard 4')}} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard5']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard5']) }}" href="{{ url('/dashboard/dashboard5') }}"> {{__('Dashboard 5')}} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard-social']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard-social']) }}" href="{{ url('/dashboard/dashboard-social') }}"> {{__('Dashboard Social')}} </a>
                </li>
            </ul>
        </li>
        <li class="menu {{ active_class(['apps/*']) }} main-single-menu">
            <a href="#apps" class="dropdown-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                <div class="">
                    <i class="lab la-medapps"></i>
                    <span>{{__('Apps')}}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="apps" data-parent="#accordionExample">
                <li class=" {{ active_class(['apps/calendar']) }}">
                    <a data-active="{{ is_active_route(['apps/calendar']) }}" href="{{ url('/apps/calendar') }}"> {{__('Calendar')}} </a>
                </li>
                <li class=" {{ active_class(['apps/chat']) }}">
                    <a data-active="{{ is_active_route(['apps/chat']) }}" href="{{ url('/apps/chat') }}"> {{__('Chat')}} </a>
                </li>
                <li class=" {{ active_class(['apps/companies/*']) }}">
                    <a href="#pages-companies" data-active="{{ is_active_route(['apps/companies/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['apps/companies/*']) }}" class="dropdown-toggle"> {{__('Companies')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="collapse list-unstyled sub-submenu {{ show_class(['apps/companies/*']) }}" id="pages-companies" data-parent="#pages">
                        <li class=" {{ active_class(['apps/companies/lists']) }}">
                            <a data-active="{{ is_active_route(['apps/companies/lists']) }}" href="{{ url('/apps/companies/lists') }}"> {{__('List')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/companies/company-details']) }}">
                            <a data-active="{{ is_active_route(['apps/companies/company-details']) }}" href="{{ url('/apps/companies/company-details') }}"> {{__('Company Details')}} </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{ active_class(['apps/contacts']) }}">
                    <a data-active="{{ is_active_route(['apps/contacts']) }}" href="{{ url('/apps/contacts') }}"> {{__('Contacts')}} </a>
                </li>
                <li class=" {{ active_class(['apps/ecommerce/*']) }}">
                    <a href="#pages-ecommerce" data-active="{{ is_active_route(['apps/ecommerce/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['apps/ecommerce/*']) }}" class="dropdown-toggle"> {{__('Ecommerce')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="collapse list-unstyled sub-submenu {{ show_class(['apps/ecommerce/*']) }}" id="pages-ecommerce" data-parent="#pages">
                        <li class=" {{ active_class(['apps/ecommerce/dashboard']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/dashboard']) }}" href="{{ url('/apps/ecommerce/dashboard') }}"> {{__('Dashboard')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/products']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/products']) }}" href="{{ url('/apps/ecommerce/products') }}"> {{__('Products')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/product-details']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/product-details']) }}" href="{{ url('/apps/ecommerce/product-details') }}"> {{__('Product Details')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/add-product']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/add-product']) }}" href="{{ url('/apps/ecommerce/add-product') }}"> {{__('Add Product')}}</a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/orders']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/orders']) }}" href="{{ url('/apps/ecommerce/orders') }}"> {{__('Orders')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/order-details']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/order-details']) }}" href="{{ url('/apps/ecommerce/order-details') }}"> {{__('Order Details')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/customers']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/customers']) }}" href="{{ url('/apps/ecommerce/customers') }}"> {{__('Customers')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/sellers']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/sellers']) }}" href="{{ url('/apps/ecommerce/sellers') }}"> {{__('Sellers')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/cart']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/cart']) }}" href="{{ url('/apps/ecommerce/cart') }}"> {{__('Cart')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/ecommerce/checkout']) }}">
                            <a data-active="{{ is_active_route(['apps/ecommerce/checkout']) }}" href="{{ url('/apps/ecommerce/checkout') }}"> {{__('Checkout')}} </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{ active_class(['apps/email/*']) }}">
                    <a href="#pages-email" data-active="{{ is_active_route(['apps/email/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['apps/email/*']) }}" class="dropdown-toggle"> {{__('Email')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="collapse list-unstyled sub-submenu {{ show_class(['apps/email/*']) }}" id="pages-email" data-parent="#pages">
                        <li class=" {{ active_class(['apps/email/inbox']) }}">
                            <a data-active="{{ is_active_route(['apps/email/inbox']) }}" href="{{ url('/apps/email/inbox') }}"> {{__('Inbox')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/email/details']) }}">
                            <a data-active="{{ is_active_route(['apps/email/details']) }}" href="{{ url('/apps/email/details') }}"> {{__('Email Details')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/email/compose']) }}">
                            <a data-active="{{ is_active_route(['apps/email/compose']) }}" href="{{ url('/apps/email/compose') }}"> {{__('Compose Email')}} </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{ active_class(['apps/file-manager']) }}">
                    <a data-active="{{ is_active_route(['apps/file-manager']) }}" href="{{ url('/apps/file-manager') }}"> {{__('File Manager')}} </a>
                </li>
                <li class=" {{ active_class(['apps/invoice-list']) }}">
                    <a data-active="{{ is_active_route(['apps/invoice-list']) }}" href="{{ url('/apps/invoice-list') }}"> {{__('Invoice List')}} </a>
                </li>
                <li class=" {{ active_class(['apps/notes/*']) }}">
                    <a href="#pages-notes" data-active="{{ is_active_route(['apps/notes/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['apps/notes/*']) }}" class="dropdown-toggle"> {{ __('Notes')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="collapse list-unstyled sub-submenu {{ show_class(['apps/notes/*']) }}" id="pages-notes" data-parent="#pages">
                        <li class=" {{ active_class(['apps/notes/list']) }}">
                            <a data-active="{{ is_active_route(['apps/notes/list']) }}" href="{{ url('/apps/notes/list') }}"> {{__('List')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/notes/details']) }}">
                            <a data-active="{{ is_active_route(['apps/notes/details']) }}" href="{{ url('/apps/notes/details') }}"> {{__('Notes Details')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/notes/create']) }}">
                            <a data-active="{{ is_active_route(['apps/notes/create']) }}" href="{{ url('/apps/notes/create') }}"> {{__('Create Note')}} </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{ active_class(['apps/social']) }}">
                    <a data-active="{{ is_active_route(['apps/social']) }}" href="{{ url('/apps/social') }}"> {{__('Social')}} </a>
                </li>
                <li class=" {{ active_class(['apps/task-list']) }}">
                    <a data-active="{{ is_active_route(['apps/task-list']) }}" href="{{ url('/apps/task-list') }}"> {{__('Task List')}} </a>
                </li>
                <li class=" {{ active_class(['apps/tickets/*']) }}">
                    <a href="#pages-tickets" data-active="{{ is_active_route(['apps/tickets/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['apps/tickets/*']) }}" class="dropdown-toggle"> {{__('Tickets')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="collapse list-unstyled sub-submenu {{ show_class(['apps/tickets/*']) }}" id="pages-tickets" data-parent="#pages">
                        <li class=" {{ active_class(['apps/tickets/list']) }}">
                            <a data-active="{{ is_active_route(['apps/tickets/list']) }}" href="{{ url('/apps/tickets/list') }}"> {{__('Ticket List')}} </a>
                        </li>
                        <li class=" {{ active_class(['apps/tickets/details']) }}">
                            <a data-active="{{ is_active_route(['apps/tickets/details']) }}" href="{{ url('/apps/tickets/details') }}"> {{__('Ticket Details')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['apps/widgets']) }}">
                    <a data-active="{{ is_active_route(['apps/widgets']) }}" href="{{ url('/apps/widgets') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span> {{__('Widgets')}}</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu {{ active_class(['pages/*']) }} main-single-menu">
            <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <div class="">
                    <i class="las la-file-alt"></i>
                    <span>{{__('Pages')}}</span>
                </div>
                <div class="menu-badge-container">
                    <span class="menu-badge badge-danger">{{__('New')}}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                <li class="menu {{ active_class(['pages/error/*']) }}">
                    <a href="#other_pages_one" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                        <div class="">
                            <span>{{__('Other Pages 1')}}</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="other_pages_one" data-parent="#pages">
                        <li>
                            <a href="{{ url('/pages/coming-soon') }}"> {{__('Coming Soon')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/pages/coming-soon2') }}"> {{__('Coming Soon 2')}}</a>
                        </li>
                        <li>
                            <a href="{{ url('/pages/contact-us') }}"> {{__('Contact Form')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/pages/contact-us2') }}"> {{__('Contact Form 2')}}</a>
                        </li>
                        <li class=" {{ active_class(['pages/error/*']) }}">
                            <a href="#pages-error" data-active="{{ is_active_route(['pages/error/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['pages/error/*']) }}" class="dropdown-toggle"> {{__('Error')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                            <ul class="collapse list-unstyled sub-submenu {{ show_class(['pages/error/*']) }}" id="pages-error" data-parent="#pages">
                                <li class=" {{ active_class(['pages/error/error404']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/error404']) }}" href="{{ url('/pages/error/error404') }}"> 404 </a>
                                </li>
                                <li class=" {{ active_class(['pages/error/error500']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/error500']) }}" href="{{ url('/pages/error/error500') }}"> 500 </a>
                                </li>
                                <li class=" {{ active_class(['pages/error/error503']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/error503']) }}" href="{{ url('/pages/error/error503') }}"> 503 </a>
                                </li>
                                <li class=" {{ active_class(['pages/error/maintenance']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/maintenance']) }}" href="{{ url('/pages/error/maintenance') }}"> {{__('Maintenance')}} </a>
                                </li>
                                <li class=" {{ active_class(['pages/error/error404-two']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/error404-two']) }}" href="{{ url('/pages/error/error404-two') }}"> 404 Two</a>
                                </li>
                                <li class=" {{ active_class(['pages/error/error500-two']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/error500-two']) }}" href="{{ url('/pages/error/error500-two') }}"> 500 Two </a>
                                </li>
                                <li class=" {{ active_class(['pages/error/error503-two']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/error503-two']) }}" href="{{ url('/pages/error/error503-two') }}"> {{__('')}} 503 Two </a>
                                </li>
                                <li class=" {{ active_class(['pages/error/maintenance-two']) }}">
                                    <a data-active="{{ is_active_route(['pages/error/maintenance-two']) }}" href="{{ url('/pages/error/maintenance-two') }}"> {{__('Maintenance Two')}} </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/pages/faq') }}"> {{__('FAQ')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/pages/faq2') }}"> {{__('FAQ 2')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/faq3']) }}">
                            <a data-active="{{ is_active_route(['pages/faq3']) }}" href="{{ url('/pages/faq3') }}"> {{__('FAQ 3')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('/pages/helpdesk') }}"> {{__('Helpdesk')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['pages/other-page2/*']) }}">
                    <a href="#other_pages_two" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                        <div class="">
                            <span>{{__('Other Pages 2')}}</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="other_pages_two" data-parent="#pages">
                        <li class=" {{ active_class(['pages/other-page2/notifications']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/notifications']) }}" href="{{ url('/pages/other-page2/notifications') }}"> {{__('Notifications')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/pricing']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/pricing']) }}" href="{{ url('/pages/other-page2/pricing') }}"> {{__('Pricing')}} </a>
                        </li>
                        <li>
                            <a data-active="{{ is_active_route(['pages/other-page2/pricing2']) }}" href="{{ url('/pages/other-page2/pricing2') }}"> {{__('Pricing 2')}}</a>
                        </li>
                        <li>
                            <a data-active="{{ is_active_route(['pages/other-page2/privacy-policy']) }}" href="{{ url('/pages/other-page2/privacy-policy') }}"> {{__('Privacy Policy')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/profile']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/profile']) }}" href="{{ url('/pages/other-page2/profile') }}"> {{__('Profile')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/profile-edit']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/profile-edit']) }}" href="{{ url('/pages/other-page2/profile-edit') }}"> {{__('Profile Edit')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/search-result']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/search-result']) }}" href="{{ url('/pages/other-page2/search-result') }}"> {{__('Search Result')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/search-result2']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/search-result2']) }}" href="{{ url('/pages/other-page2/search-result2') }}"> {{__('Search Result 2')}}</a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/sitemap']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/sitemap']) }}" href="{{ url('/pages/other-page2/sitemap') }}"> {{__('Sitemap')}} </a>
                        </li>
                        <li class=" {{ active_class(['pages/other-page2/timeline']) }}">
                            <a data-active="{{ is_active_route(['pages/other-page2/timeline']) }}" href="{{ url('/pages/other-page2/timeline') }}"> {{__('Timeline')}} </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>{{__('Auth Pages')}}</span>
                        </div>
                        <div class="menu-badge-container">
                            <span class="menu-badge badge-danger">{{__('New')}}</span>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="authentication" data-parent="#pages">
                        <li>
                            <a href="#pages-auth-one" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('Style 1')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                            <ul class="collapse list-unstyled sub-sub-submenu" id="pages-auth-one" data-parent="#authentication">
                                <li>
                                    <a href="{{ url('/authentications/style1/login') }}"> {{__('Login')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style1/signup') }}"> {{__('Register')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style1/locked') }}"> {{__('Lock Screen')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style1/forgot-password') }}"> {{__('Forget Password')}} </a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style1/confirm-email') }}"> {{__('Confirm Email')}} </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pages-auth-two" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('Style 2')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                            <ul class="collapse list-unstyled sub-sub-submenu" id="pages-auth-two" data-parent="#authentication">
                                <li>
                                    <a href="{{ url('/authentications/style2/login') }}"> {{__('Login')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style2/signup') }}"> {{__('Register')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style2/locked') }}"> {{__('Lock Screen')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style2/forgot-password') }}"> {{__('Forget Password')}} </a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style2/confirm-email') }}"> {{__('Confirm Email')}} </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pages-auth-three" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('Style 3')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                            <ul class="collapse list-unstyled sub-sub-submenu" id="pages-auth-three" data-parent="#authentication">
                                <li>
                                    <a href="{{ url('/authentications/style3/login') }}"> {{__('Login')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style3/signup') }}"> {{__('Register')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style3/locked') }}"> {{__('Lock Screen')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style3/forgot-password') }}"> {{__('Forget Password')}} </a>
                                </li>
                                <li>
                                    <a href="{{ url('/authentications/style3/confirm-email') }}"> {{__('Confirm Email')}} </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu {{ active_class(['components/*']) }} main-single-menu">
            <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <div class="">
                    <i class="las la-pencil-ruler"></i>
                    <span>{{__('Components')}}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                <li class="menu {{ active_class(['components/forms/*']) }}">
                    <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>Forms</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="forms" data-parent="#components">
                        <li class="{{ active_class(['components/forms/widgets/*']) }}">
                            <a href="#form-widget" data-active="{{ is_active_route(['components/forms/widgets/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['components/forms/widgets/*']) }}" class="dropdown-toggle"> {{__('Widgets')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                            <ul class="collapse list-unstyled sub-sub-submenu {{ show_class(['components/forms/widgets/*']) }}" id="form-widget" data-parent="#components">
                                <li class="{{ active_class(['components/forms/widgets/picker']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/picker']) }}" href="{{ url('/components/forms/widgets/picker') }}"> {{__('Picker')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/tagify']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/tagify']) }}" href="{{ url('/components/forms/widgets/tagify') }}"> {{__('Tagify')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/touch-spin']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/touch-spin']) }}" href="{{ url('/components/forms/widgets/touch-spin') }}"> {{__('Touch Spin')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/maxlength']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/maxlength']) }}" href="{{ url('/components/forms/widgets/maxlength') }}"> {{__('Max Length')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/switch']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/switch']) }}" href="{{ url('/components/forms/widgets/switch') }}"> {{__('Switch')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/select-splitter']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/select-splitter']) }}" href="{{ url('/components/forms/widgets/select-splitter') }}"> {{__('Select Splitter')}}</a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/bootstrap-select']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/bootstrap-select']) }}" href="{{ url('/components/forms/widgets/bootstrap-select') }}"> {{__('Bootstrap Select')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/select2']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/select2']) }}" href="{{ url('/components/forms/widgets/select2') }}"> {{__('Select 2')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/input-masks']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/input-masks']) }}" href="{{ url('/components/forms/widgets/input-masks') }}"> {{__('Input Masks')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/autogrow']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/']) }}" href="{{ url('/components/forms/widgets/autogrow') }}"> {{__('Autogrow')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/range-slider']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/range-slider']) }}" href="{{ url('/components/forms/widgets/range-slider') }}"> {{__('Range Slider')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/clipboard']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/clipboard']) }}" href="{{ url('/components/forms/widgets/clipboard') }}"> {{__('Clipboard')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/typeahead']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/typeahead']) }}" href="{{ url('/components/forms/widgets/typeahead') }}"> {{__('Typeahead')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/widgets/captcha']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/widgets/captcha']) }}" href="{{ url('/components/forms/widgets/captcha') }}"> {{__('Captcha')}} </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ active_class(['components/forms/controls/*']) }}">
                            <a href="#form-control" data-active="{{ is_active_route(['components/forms/controls/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['components/forms/controls/*']) }}" class="dropdown-toggle"> {{__('Controls')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                            <ul class="collapse list-unstyled sub-sub-submenu {{ show_class(['components/forms/controls/*']) }}" id="form-control" data-parent="#components">
                                <li class="{{ active_class(['components/forms/controls/base-inputs']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/controls/base-inputs']) }}" href="{{ url('/components/forms/controls/base-inputs') }}"> {{__('Base Input')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/controls/input-groups']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/controls/input-groups']) }}" href="{{ url('/components/forms/controls/input-groups') }}"> {{__('Input Groups')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/controls/checkbox']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/controls/checkbox']) }}" href="{{ url('/components/forms/controls/checkbox') }}"> {{__('Checkbox')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/controls/radio']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/controls/radio']) }}" href="{{ url('/components/forms/controls/radio') }}"> {{__('Radio')}} </a>
                                </li>
                                <li class="{{ active_class(['components/forms/controls/switch']) }}">
                                    <a data-active="{{ is_active_route(['components/forms/controls/switch']) }}" href="{{ url('/components/forms/controls/switch') }}"> {{__('Switch')}} </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ active_class(['components/forms/validation']) }}">
                            <a data-active="{{ is_active_route(['components/forms/validation']) }}" href="{{ url('/components/forms/validation') }}"> {{__('Validations')}} </a>
                        </li>
                        <li class="{{ active_class(['components/forms/layouts']) }}">
                            <a data-active="{{ is_active_route(['components/forms/layouts']) }}" href="{{ url('/components/forms/layouts') }}"> {{__('Layouts')}} </a>
                        </li>
                        <li class="{{ active_class(['components/forms/text-editor']) }}">
                            <a data-active="{{ is_active_route(['components/forms/text-editor']) }}" href="{{ url('/components/forms/text-editor') }}"> {{__('Text Editor')}} </a>
                        </li>
                        <li class="{{ active_class(['components/forms/file-upload']) }}" >
                            <a data-active="{{ is_active_route(['components/forms/file-upload']) }}" href="{{ url('/components/forms/file-upload') }}"> {{__('File Upload')}} </a>
                        </li>
                        <li class="{{ active_class(['components/forms/multiple-step']) }}">
                            <a data-active="{{ is_active_route(['components/forms/multiple-step']) }}" href="{{ url('/components/forms/multiple-step') }}"> {{__('Multiple Step')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['components/basic-ui1/*']) }}">
                    <a href="#basic_ui_one" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>Basic UI 1</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="basic_ui_one" data-parent="#components">
                        <li class="{{ active_class(['components/basic-ui1/accordions']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/accordions']) }}" href="{{ url('/components/basic-ui1/accordions') }}"> {{__('Accordions')}}  </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/animation']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/animation']) }}" href="{{ url('/components/basic-ui1/animation') }}"> {{__('Animation')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/cards']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/cards']) }}" href="{{ url('/components/basic-ui1/cards') }}"> {{__('Bootstrap Cards')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/carousel']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/carousel']) }}" href="{{ url('/components/basic-ui1/carousel') }}"> {{__('Carousel')}}</a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/countdown']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/countdown']) }}" href="{{ url('/components/basic-ui1/countdown') }}"> {{__('Countdown')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/counter']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/counter']) }}" href="{{ url('/components/basic-ui1/counter') }}"> {{__('Counter')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/dragitems']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/dragitems']) }}" href="{{ url('/components/basic-ui1/dragitems') }}"> {{__('Drag Items')}}</a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/lightbox']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/lightbox']) }}" href="{{ url('/components/basic-ui1/lightbox') }}"> {{__('Lightbox')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui1/lightbox-sideopen']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui1/lightbox-sideopen']) }}" href="{{ url('/components/basic-ui1/lightbox-sideopen') }}"> {{__('Lightbox Side Open')}}</a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['components/basic-ui2/*']) }}">
                    <a href="#basic_ui_two" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>Basic UI 2</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="basic_ui_two" data-parent="#components">
                        <li class="{{ active_class(['components/basic-ui2/list-groups']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/list-groups']) }}" href="{{ url('/components/basic-ui2/list-groups') }}"> {{__('List Group')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/media-object']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/media-object']) }}" href="{{ url('/components/basic-ui2/media-object') }}"> {{__('Media Object')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/modals']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/modals']) }}" href="{{ url('/components/basic-ui2/modals') }}"> {{__('Modals')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/notifications']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/notifications']) }}" href="{{ url('/components/basic-ui2/notifications') }}"> {{__('Notifications')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/scrollspy']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/scrollspy']) }}" href="{{ url('/components/basic-ui2/scrollspy') }}"> {{__('Scroll Spy')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/session-timeout']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/session-timeout']) }}" href="{{ url('/components/basic-ui2/session-timeout') }}"> {{__('Session Timeout')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/sweet-alerts']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/sweet-alerts']) }}" href="{{ url('/components/basic-ui2/sweet-alerts') }}"> {{__('Sweet Alerts')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/tabs']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/tabs']) }}" href="{{ url('/components/basic-ui2/tabs') }}"> {{__('Tabs')}} </a>
                        </li>
                        <li class="{{ active_class(['components/basic-ui2/tour-tutorial']) }}">
                            <a data-active="{{ is_active_route(['components/basic-ui2/tour-tutorial']) }}" href="{{ url('/components/basic-ui2/tour-tutorial') }}"> {{__('Tour Tutorial')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['components/ui-elements1/*']) }}">
                    <a href="#elements_one" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>UI Elements 1</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="elements_one" data-parent="#components">
                        <li class="{{ active_class(['components/ui-elements1/alerts']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/alerts']) }}" href="{{ url('/components/ui-elements1/alerts') }}"> {{__('Alerts')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/avatar']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/avatar']) }}" href="{{ url('/components/ui-elements1/avatar') }}"> {{__('Avatar')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/badges']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/badges']) }}" href="{{ url('/components/ui-elements1/badges') }}"> {{__('Badges')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/breadcrumbs']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/breadcrumbs']) }}" href="{{ url('/components/ui-elements1/breadcrumbs') }}"> {{ __('Breadcrumbs')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/buttons']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/buttons']) }}" href="{{ url('/components/ui-elements1/buttons') }}"> {{ __('Buttons')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/colors']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/colors']) }}" href="{{ url('/components/ui-elements1/colors') }}"> {{ __('Colors')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/dropdown']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/dropdown']) }}" href="{{ url('/components/ui-elements1/dropdown') }}"> {{ __('Dropdown')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/grid']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/grid']) }}" href="{{ url('/components/ui-elements1/grid') }}"> {{ __('Grid')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements1/jumbotron']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements1/jumbotron']) }}" href="{{ url('/components/ui-elements1/jumbotron') }}"> {{ __('Jumbotron')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['components/ui-elements2/*']) }}">
                    <a href="#elements_two" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span>UI Elements 2</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="elements_two" data-parent="#components">
                        <li class="{{ active_class(['components/ui-elements2/list-group']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/list-group']) }}" href="{{ url('/components/ui-elements2/list-group') }}"> {{ __('List Group')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/loading-spinners']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/loading-spinners']) }}" href="{{ url('/components/ui-elements2/loading-spinners') }}"> {{ __('Loading Spinners')}}  </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/paging']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/paging']) }}" href="{{ url('/components/ui-elements2/paging') }}"> {{ __('Paging') }} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/popovers']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/popovers']) }}" href="{{ url('/components/ui-elements2/popovers') }}"> {{ __('Popovers')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/progress-bar']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/progress-bar']) }}" href="{{ url('/components/ui-elements2/progress-bar') }}"> {{ __('Progress Bar')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/ribbons']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/ribbons']) }}" href="{{ url('/components/ui-elements2/ribbons') }}"> {{ __('Ribbons')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/tooltips']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/tooltips']) }}" href="{{ url('/components/ui-elements2/tooltips') }}"> {{ __('Tooltips')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/typography']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/typography']) }}" href="{{ url('/components/ui-elements2/typography') }}"> {{ __('Typography')}} </a>
                        </li>
                        <li class="{{ active_class(['components/ui-elements2/video']) }}">
                            <a data-active="{{ is_active_route(['components/ui-elements2/video']) }}" href="{{ url('/components/ui-elements2/video') }}"> {{ __('Video')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['components/tables']) }}">
                    <a data-active="{{ is_active_route(['components/tables']) }}" href="{{ url('/components/tables') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span> {{__('Tables')}}</span>
                        </div>
                    </a>
                </li>
                <li class="menu {{ active_class(['components/data-tables']) }}">
                    <a data-active="{{ is_active_route(['components/data-tables']) }}" href="{{ url('/components/data-tables') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span> {{__('Datatables')}}</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu {{ active_class(['maps-charts/*']) }} main-single-menu">
            <a href="#mapscharts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="las la-globe-americas"></i>
                    <span> {{__('Maps & Charts')}}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="mapscharts" data-parent="#accordionExample">
                <li class="menu {{ active_class(['maps-charts/maps/*']) }}">
                    <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span> {{__('Maps')}}</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="maps" data-parent="#mapscharts">
                        <li class="menu {{ active_class(['maps-charts/maps/leaflet-map']) }}">
                            <a data-active="{{ is_active_route(['maps-charts/maps/leaflet-map']) }}" href="{{ url('/maps-charts/maps/leaflet-map') }}"> {{__('Leaflet Map')}} </a>
                        </li>
                        <li class="menu {{ active_class(['maps-charts/maps/vector-map']) }}">
                            <a data-active="{{ is_active_route(['maps-charts/maps/vector-map']) }}" href="{{ url('/maps-charts/maps/vector-map') }}"> {{__('Vector Map')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="menu {{ active_class(['maps-charts/charts/*']) }}">
                    <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <span> {{__('Charts')}}</span>
                        </div>
                        <div>
                            <i class="las la-angle-right sidemenu-right-icon"></i>
                        </div>
                    </a>
                    <ul class="collapse list-unstyled sub-submenu" id="charts" data-parent="#mapscharts">
                        <li class=" {{ active_class(['maps-charts/charts/apex-chart']) }}">
                            <a data-active="{{ is_active_route(['maps-charts/charts/apex-chart']) }}" href="{{ url('/maps-charts/charts/apex-chart') }}"> {{__('Apex Chart')}} </a>
                        </li>
                        <li class=" {{ active_class(['maps-charts/charts/chartlist-chart']) }}">
                            <a data-active="{{ is_active_route(['maps-charts/charts/chartlist-chart']) }}" href="{{ url('/maps-charts/charts/chartlist-chart') }}"> {{__('Chartlist Charts')}} </a>
                        </li>
                        <li class=" {{ active_class(['maps-charts/charts/chartjs']) }}">
                            <a data-active="{{ is_active_route(['maps-charts/charts/chartjs']) }}" href="{{ url('/maps-charts/charts/chartjs') }}"> {{__('ChartJS')}} </a>
                        </li>
                        <li class=" {{ active_class(['maps-charts/charts/morris-chart']) }}">
                            <a data-active="{{ is_active_route(['maps-charts/charts/morris-chart']) }}" href="{{ url('/maps-charts/charts/morris-chart') }}"> {{__('Morris Charts')}} </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu {{ active_class(['starter/*']) }} main-single-menu">
            <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="las la-copy"></i>
                    <span> {{__('Starter Kit')}}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                <li class=" {{ active_class(['starter/blank-page']) }}">
                    <a data-active="{{ is_active_route(['starter/blank-page']) }}" href="{{ url('/starter/blank-page') }}"> {{__('Blank Page')}} </a>
                </li>
                <li class=" {{ active_class(['starter/breadcrumbs']) }}">
                    <a data-active="{{ is_active_route(['starter/breadcrumbs']) }}" href="{{ url('/starter/breadcrumbs') }}"> {{__('Breadcrumbs')}} </a>
                </li>
            </ul>
        </li>
        <li class="menu main-single-menu">
            <a href="http://neptuneweb.xyz/documentation/index.html" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="las la-file-code"></i>
                    <span>Documentation</span>
                </div>
            </a>
        </li>
    </ul>
</nav>
