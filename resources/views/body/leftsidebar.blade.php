      
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
                

                            <li class="menu-title mt-2">Apps</li>


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
                                                <a href=" public function AddCustomer(){
                                                    return view('backend.customer.add_customer');
                                               } // End Method 
                                           
                                           
                                                public function StoreCustomer(Request $request){
                                           
                                                   $validateData = $request->validate([
                                                       'name' => 'required|max:200',
                                                       'email' => 'required|unique:customers|max:200',
                                                       'phone' => 'required|max:200',
                                                       'address' => 'required|max:400',
                                                       'shopname' => 'required|max:200',
                                                       'account_holder' => 'required|max:200', 
                                                       'account_number' => 'required', 
                                                       'image' => 'required',  
                                                   ]);
                                            
                                                   $image = $request->file('image');
                                                   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                                                   Image::make($image)->resize(300,300)->save('upload/customer/'.$name_gen);
                                                   $save_url = 'upload/customer/'.$name_gen;
                                           
                                                   Customer::insert([
                                           
                                                       'name' => $request->name,
                                                       'email' => $request->email,
                                                       'phone' => $request->phone,
                                                       'address' => $request->address,
                                                       'shopname' => $request->shopname,
                                                       'account_holder' => $request->account_holder,
                                                       'account_number' => $request->account_number,
                                                       'bank_name' => $request->bank_name,
                                                       'bank_branch' => $request->bank_branch,
                                                       'city' => $request->city,
                                                       'image' => $save_url,
                                                       'created_at' => Carbon::now(), 
                                           
                                                   ]);
                                           
                                                    $notification = array(
                                                       'message' => 'Customer Inserted Successfully',
                                                       'alert-type' => 'success'
                                                   );
                                           
                                                   return redirect()->route('all.customer')->with($notification); 
                                               } // End Method 
                                           
                                           
                                            public function EditCustomer($id){
                                           
                                                   $customer = Customer::findOrFail($id);
                                                   return view('backend.customer.edit_customer',compact('customer'));
                                           
                                               } // End Method 
                                           
                                           
                                                public function UpdateCustomer(Request $request){
                                           
                                                   $customer_id = $request->id;
                                           
                                                   if ($request->file('image')) {
                                           
                                                   $image = $request->file('image');
                                                   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                                                   Image::make($image)->resize(300,300)->save('upload/customer/'.$name_gen);
                                                   $save_url = 'upload/customer/'.$name_gen;
                                           
                                                   Customer::findOrFail($customer_id)->update([
                                           
                                                       'name' => $request->name,
                                                       'email' => $request->email,
                                                       'phone' => $request->phone,
                                                       'address' => $request->address,
                                                       'shopname' => $request->shopname,
                                                       'account_holder' => $request->account_holder,
                                                       'account_number' => $request->account_number,
                                                       'bank_name' => $request->bank_name,
                                                       'bank_branch' => $request->bank_branch,
                                                       'city' => $request->city,
                                                       'image' => $save_url,
                                                       'created_at' => Carbon::now(), 
                                           
                                                   ]);
                                           
                                                    $notification = array(
                                                       'message' => 'Customer Updated Successfully',
                                                       'alert-type' => 'success'
                                                   );
                                           
                                                   return redirect()->route('all.customer')->with($notification); 
                                                        
                                                   } else{
                                           
                                                       Customer::findOrFail($customer_id)->update([
                                           
                                                       'name' => $request->name,
                                                       'email' => $request->email,
                                                       'phone' => $request->phone,
                                                       'address' => $request->address,
                                                       'shopname' => $request->shopname,
                                                       'account_holder' => $request->account_holder,
                                                       'account_number' => $request->account_number,
                                                       'bank_name' => $request->bank_name,
                                                       'bank_branch' => $request->bank_branch,
                                                       'city' => $request->city, 
                                                       'created_at' => Carbon::now(), 
                                           
                                                   ]);
                                           
                                                    $notification = array(
                                                       'message' => 'Customer Updated Successfully',
                                                       'alert-type' => 'success'
                                                   );
                                           
                                                   return redirect()->route('all.customer')->with($notification); 
                                           
                                                   } // End else Condition  
                                           
                                           
                                               } // End Method 
                                           
                                           
                                            public function DeleteCustomer($id){
                                           
                                                   $customer_img = Customer::findOrFail($id);
                                                   $img = $customer_img->image;
                                                   unlink($img);
                                           
                                                   Customer::findOrFail($id)->delete();
                                           
                                                   $notification = array(
                                                       'message' => 'Customer Deleted Successfully',
                                                       'alert-type' => 'success'
                                                   );
                                           
                                                   return redirect()->back()->with($notification); 
                                           
                                               } // End Method 
                                           
                                           
                                           ">All Customers</a>
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

                           
                            <li>
                                <a href="#sidebarProjects" data-bs-toggle="collapse">
                                    <i class="mdi mdi-briefcase-check-outline"></i>
                                    <span> Projects </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProjects">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="project-list.html">List</a>
                                        </li>
                                        <li>
                                            <a href="project-detail.html">Detail</a>
                                        </li>
                                        <li>
                                            <a href="project-create.html">Create Project</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Custom</li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span> Auth Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="auth-login.html">Log In</a>
                                        </li>
                                        <li>
                                            <a href="auth-login-2.html">Log In 2</a>
                                        </li>
                                        <li>
                                            <a href="auth-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="auth-register-2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="auth-signin-signup.html">Signin - Signup</a>
                                        </li>
                                        <li>
                                            <a href="auth-signin-signup-2.html">Signin - Signup 2</a>
                                        </li>
                                        <li>
                                            <a href="auth-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="auth-recoverpw-2.html">Recover Password 2</a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                                        </li>
                                        <li>
                                            <a href="auth-logout.html">Logout</a>
                                        </li>
                                        <li>
                                            <a href="auth-logout-2.html">Logout 2</a>
                                        </li>
                                        <li>
                                            <a href="auth-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

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