
<!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="{{route('dashboard')}}">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('pos') }}">
                                    <span class="badge bg-pink float-end">Hot</span>
                                   <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span> POS </span>
                                </a>
                            </li>


                            <li class="menu-title mt-2">Human Resource</li>


                            <li>
                                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                    <i class="mdi mdi-cart-outline"></i>
                                    <span>Manage Employee </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommerce">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.employee')}}">All Employees</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add.employee')}}">Add Employee</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarCrm" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span>Manage Customer </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                    <div class="collapse" id="sidebarCrm">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('all.customer')}}">All Customers</a>
                                            </li>
                                            <li>
                                                <a href="{{route('add.customer')}}">Add Customer</a>
                                            </li>

                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <a href="#sidebarEmail" data-bs-toggle="collapse">
                                    <i class="mdi mdi-email-multiple-outline"></i>
                                    <span> Manage Supplier </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEmail">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.supplier')}}">All Suppliers</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add.supplier')}}">Add Supplier</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-title mt-2">Financial Resource</li>
                            

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span> Expense </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('add.expense') }}">Add Expense</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('today.expense') }}">Today Expense</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('month.expense') }}">Monthly Expense</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('year.expense') }}">Yearly Expense</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarEcommercee" data-bs-toggle="collapse">
                                    <i class="mdi mdi-cart-outline"></i>
                                    <span>Manage Salary </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommercee">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary') }}">Total Salary Status</a>
                                        </li>

                                       <li>
                                            <a href="{{ route('month.salary') }}">Last Month Salary</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarProjects" data-bs-toggle="collapse">
                                    <i class="mdi mdi-briefcase-check-outline"></i>
                                    <span> Emplyee Attendance </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProjects">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('employee.attend.list')}}">Employee Attendance</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-title mt-2">Product Management</li>

                           

                            <li>
                                <a href="#product" data-bs-toggle="collapse">
                                    <i class="mdi mdi-email-multiple-outline"></i>
                                    <span> Products  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="product">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.product') }}">All Product </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('add.product') }}">Add Product </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('import.product') }}">Import Product </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#category" data-bs-toggle="collapse">
                                    <i class="mdi mdi-briefcase-check-outline"></i>
                                    <span> Category </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="category">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.category')}}">All Category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Custom</li>

                           

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="pages-starter.html">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-sitemap.html">Sitemap</a>
                                        </li>
                                        <li>
                                            <a href="pages-invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="pages-faqs.html">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="pages-search-results.html">Search Results</a>
                                        </li>
                                        <li>
                                            <a href="pages-pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="pages-maintenance.html">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="pages-coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-two.html">Error 404 Two</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                        <li>
                                            <a href="pages-500-two.html">Error 500 Two</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
