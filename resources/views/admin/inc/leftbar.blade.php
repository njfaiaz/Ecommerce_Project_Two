
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{ route('admin.dashboard') }}"> Nj Faiaz</a></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">

        <a href="{{ url('/') }}" class="sl-menu-link" target="_blank">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Visit Site</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.dashboard') }}" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
        @isset(auth()->user()->role->permission['permission']['slider']['list'])
          <a href="{{ route('sliders') }}" class="sl-menu-link @yield('sliders')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Sliders</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
        @endisset

        @isset(auth()->user()->role->permission['permission']['brand']['list'])
          <a href="{{ route('brands') }}" class="sl-menu-link @yield('brands')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Brands</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
        @endisset

    @isset(auth()->user()->role->permission['permission']['cat']['list'])
        <a href="#" class="sl-menu-link @yield('categories')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Categories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('category') }}" class="nav-link @yield('add-category')">Add Category</a></li>
          <li class="nav-item"><a href="{{ route('sub-category') }}" class="nav-link @yield('subcategory')">Sub-Category</a></li>
          <li class="nav-item"><a href="{{ route('sub-sub-category') }}" class="nav-link @yield('subsubcategory')">Sub->Sub-Category</a></li>
        </ul>

    @endisset

    @isset(auth()->user()->role->permission['permission']['product']['list'])
        <a href="#" class="sl-menu-link @yield('products')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Products</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
        @isset(auth()->user()->role->permission['permission']['product']['add'])
          <li class="nav-item"><a href="{{ route('add-product') }}" class="nav-link @yield('add-product')">Add Product</a></li>
        @endisset

        @isset(auth()->user()->role->permission['permission']['product']['list'])
          <li class="nav-item"><a href="{{ route('manage-product') }}" class="nav-link @yield('manage-product')">Manage Product</a></li>
        @endisset
        </ul>
    @endisset

        <a href="{{ route('coupon') }}" class="sl-menu-link @yield('coupon')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Coupon</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->


        <a href="#" class="sl-menu-link @yield('shipping')">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
              <span class="menu-item-label">Shipping Area</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('division') }}" class="nav-link @yield('add-division')">Add Divison</a></li>
            <li class="nav-item"><a href="{{ route('district') }}" class="nav-link @yield('add-district')">Add District</a></li>
            <li class="nav-item"><a href="{{ route('state') }}" class="nav-link @yield('add-state')">Add State</a></li>
          </ul>

        <a href="#" class="sl-menu-link @yield('orders')">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
              <span class="menu-item-label">Orders</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('pending-orders') }}" class="nav-link @yield('pending-orders')">Pending-orders</a></li>

            <li class="nav-item"><a href="{{ route('confirmed-orders') }}" class="nav-link @yield('confirmed-orders')">Confirmed-orders</a></li>

            <li class="nav-item"><a href="{{ route('processing-orders') }}" class="nav-link @yield('processing-orders')">Processing-orders</a></li>

            <li class="nav-item"><a href="{{ route('picked-orders') }}" class="nav-link @yield('picked-orders')">Picked-orders</a></li>

            <li class="nav-item"><a href="{{ route('shipped-orders') }}" class="nav-link @yield('shipped-orders')">Shipped-orders</a></li>

            <li class="nav-item"><a href="{{ route('delivered-orders') }}" class="nav-link @yield('delivered-orders')">Delivered-orders</a></li>

            <li class="nav-item"><a href="{{ route('order-cancel') }}" class="nav-link @yield('cancel-orders')">Cancel-orders</a></li>
          </ul>


          <a href="{{ route('reports') }}" class="sl-menu-link @yield('reports')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Reports</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

           <a href="{{ route('customer.review') }}" class="sl-menu-link @yield('review')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Reviews</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <a href="{{ route('product.stock') }}" class="sl-menu-link @yield('stock')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Stock Management</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <a href="#" class="sl-menu-link @yield('role')">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
              <span class="menu-item-label">Role Management</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('role.create') }}" class="nav-link @yield('add-role')">Add Role</a></li>
            <li class="nav-item"><a href="{{ route('role.index') }}" class="nav-link @yield('all-role')">All Role</a></li>
          </ul>

          <a href="#" class="sl-menu-link @yield('permission')">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
              <span class="menu-item-label">Permission Management</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('permission.create') }}" class="nav-link @yield('add-permission')">Add permission</a></li>
            <li class="nav-item"><a href="{{ route('permission.index') }}" class="nav-link @yield('all-permission')">All permission</a></li>
          </ul>

          <a href="#" class="sl-menu-link @yield('subadmin')">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
              <span class="menu-item-label">Subadmin Management</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('subadmin.create') }}" class="nav-link @yield('add-subadmin')">Add subadmin</a></li>
            <li class="nav-item"><a href="{{ route('subadmin.index') }}" class="nav-link @yield('all-subadmin')">All subadmin</a></li>
          </ul>

          <a href="{{ route('admin.chat') }}" class="sl-menu-link @yield('chat')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">chat</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
