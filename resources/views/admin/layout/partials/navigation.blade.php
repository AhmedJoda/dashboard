<div class="container-fluid">


    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dashboardsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        الرئيسية
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dashboardsDropdown">
                        <li>
                            <a class="dropdown-item" href="index.html">Admin Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="project-dashboard.html">Project Management</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="sales-dashboard.html">Sales Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="crm-dashboard.html">CRM Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="ecommerce-dashboard.html">Ecommerce Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="quick-dashboard.html">Quick Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="smart-dashboard.html">Smart Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="helpdesk-dashboard.html">Help Desk Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="layoutsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Layouts
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
                                <li>
                                    <a class="dropdown-item" href="default-layout.html">Default Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="default-layout-light.html">Light Color Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="fixed-layout.html">Fixed Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="boxed-layout.html">Boxed Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="card-options.html">Card Options</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="drag-drop-cards.html">Drag and Drop Cards</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        زيارة الواجهة
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                        <li>
                            <a class="dropdown-item" href="chat.html">Chat App</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="tasks.html">Tasks App</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="documents.html">Documents</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="calendarsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Calendars
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="calendarsDropdown">
                                <li>
                                    <a class="dropdown-item" href="calendar.html">Daygrid View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-external-draggable.html">External Draggable</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-google.html">Google Calendar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-list-view.html">List View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-selectable.html">Selectable</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-week-numbers.html">Week Numbers</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="contacts.html">Contacts</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="datepickers.html">Datepickers</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="comments.html">Comments</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="timeline.html">Timeline</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        {{trans('admin.settings.title')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <li>
                            <a class="dropdown-item" href="{{url('admin/settings')}}">{{trans('admin.settings.index')}}</a>
                        </li>
                        <li>
                        <a class="dropdown-item" href="{{url('admin/social_settings')}}">{{trans('admin.settings.social')}}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pricing.html">Pricing Plans</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="search-results.html">Search Results</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-settings.html">Account Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="customGallery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customGallery">
                                <li>
                                    <a class="dropdown-item" href="gallery.html">Gallery Slider</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="gallery2.html">Gallery Thumbnail</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="gallery3.html">Gallery Hover</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="icons.html">Icons</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="typography.html">Typography</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-edit1 nav-icon"></i>
                        الإشعارات الإدارية
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                        <li>
                            <a class="dropdown-item" href="wizard.html">Wizards</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bs-select.html">BS Select</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="input-tags.html">Input Tags</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="input-masks.html">Input Mask</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="customDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Custom Forms
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                <li>
                                    <a class="dropdown-item" href="contact.html">Contact Form</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contact2.html">Contact Form #2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contact3.html">Contact Form #3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contact4.html">Contact Form #4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="form-inputs.html">Form Inputs</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="input-groups.html">Input Groups</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="check-radio.html">Check Boxes</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="range-sliders.html">Range Sliders</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="editor.html">Editor</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-image nav-icon"></i>
                        التحكم بالمشرفين
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">
                        
                            <li>
                                <a class="dropdown-item" href="{{url('admin/admin-users')}}">المشرفين</a>
                            </li>
                            
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="navsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Navbars
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navsDropdown">
                                <li>
                                    <a class="dropdown-item" href="nav.html">Nav</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="tabs.html">Tabs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="componentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Components
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="componentsDropdown">
                                <li>
                                    <a class="dropdown-item" href="jumbotron.html">Jumbotron</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="labels-badges.html">Labels &amp; Badges</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="list-items.html">List Items</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pagination.html">Paginations</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="progress.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pills.html">Pills</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="spinners.html">Spinners</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="gridDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Grid
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="gridDropdown">
                                <li>
                                    <a class="dropdown-item" href="grid.html">Grid</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="grid-doc.html">Grid Doc</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="imagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Images
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="imagesDropdown">
                                <li>
                                    <a class="dropdown-item" href="avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="media-objects.html">Media Objects</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="images.html">Thumbnails</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="text-avatars.html">Text Avatars</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="accordionsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Accordions
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="accordionsDropdown">
                                <li>
                                    <a class="dropdown-item" href="accordion.html">Accordion</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="accordion-icons.html">Accordion Icons</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="accordion-arrows.html">Accordion Arrows</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="accordion-lg.html">Accordion Large</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="alertDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Notifications
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="alertDropdown">
                                <li>
                                    <a class="dropdown-item" href="bootstrap-alerts.html">Default Alerts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="custom-alerts.html">Custom Alerts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="toasts.html">Toasts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="carousel.html">Carousels</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="modals.html">Modals</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="popovers-tooltips.html">Tooltips</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layoutsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-layers2 nav-icon"></i>
                        التحكم بالأقسام
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="submenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opens Right
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="submenuDropdown">
                                <li>
                                    <a class="dropdown-item" href="chat.html">Submenu 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="icons.html">Submenu 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="submenuLeftDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opens Left
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="submenuLeftDropdown">
                                <li>
                                    <a class="dropdown-item" href="chat.html">Submenu 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="icons.html">Submenu 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="graphsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-pie-chart1 nav-icon"></i>
                        التحكم بالأعضاء
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="graphsDropdown">
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="apexDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Apex Graphs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="apexDropdown">
                                <li>
                                    <a class="dropdown-item" href="area-graphs.html">Area Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="bubble.html">Bubble Graphs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="bar-graphs.html">Bar Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="candlestick.html">Candlestick</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="column-graphs.html">Column Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="donut-graphs.html">Donut Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="line-graphs.html">Line Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="mixed-graphs.html">Mixed Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pie-graphs.html">Pie Charts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="radial-chart.html">Radial Graph</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="morris.html">Morris Graphs</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="flot-graphs.html">Flot Graphs</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="c3-graphs.html">C3 Graphs</a>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="mapsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vector Maps
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="mapsDropdown">
                                <li>
                                    <a class="dropdown-item" href="vector-maps.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="google-maps.html">Google Maps</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-alert-triangle nav-icon"></i>
                         خدمات الموقع
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                        <li>
                            <a class="dropdown-item" href="login.html">الإضافات</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="signup.html">البلاغات</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="forgot-pwd.html">روابط الموقع</a>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="subscribeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                روابط التواصل الإجتماعى
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="subscribeDropdown">
                                <li>
                                    <a class="dropdown-item" href="subscribe.html">Subscribe</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="subscribe2.html">Subscribe 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="errorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Error Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="errorDropdown">
                                <li>
                                    <a class="dropdown-item" href="error.html">404</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="error2.html">505</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-alert-triangle nav-icon"></i>
                        اتصل بنا
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                        <li>
                            <a class="dropdown-item" href="login.html">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="signup.html">Signup</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="forgot-pwd.html">Forgot Password</a>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="subscribeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Subscribe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="subscribeDropdown">
                                <li>
                                    <a class="dropdown-item" href="subscribe.html">Subscribe</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="subscribe2.html">Subscribe 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="errorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Error Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="errorDropdown">
                                <li>
                                    <a class="dropdown-item" href="error.html">404</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="error2.html">505</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin/translations')}}" >
                        التحكم بالترجمة والمسميات
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.user.title') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/cities') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.city.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}
                {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
                
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->