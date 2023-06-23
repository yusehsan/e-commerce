
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{route('categories.index')}}">
                        <!-- <img src="images/logo.png" alt="" /> --><span>E-commerce</span></a></div>
                <li class="label">Main</li>
                <li><a class="sidebar-sub-toggle"  href="#"><i class="ti-layout-grid2"></i> Categories
                        <span class="badge badge-primary">3</span> <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a  href="{{ route('categories.create') }}"class="ti-plus" >  add category </a></li>
                        <li><a href="{{route('categories.create')}}" class="ti-trash">  delete category </a></li>
                        <li><a href="{{route('categories.create')}}" class="ti-marker-alt">  update  category </a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid2"></i> Sub Categories
                        <span class="badge badge-primary">3</span> <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="index.html"class="ti-plus" >  add Subcategory </a></li>
                        <li><a href="index.html" class="ti-trash">  delete Subcategory </a></li>
                        <li><a href="index.html" class="ti-marker-alt">  update  Subcategory </a></li>
                    </ul>
                </li>
                <li class="label">Product</li>
                <li><a class="sidebar-sub-toggle">
                        <i class="ti-package"></i> Products
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="add product.html" class=" ti-plus"> add product</a></li>
                        <li><a href="delete product.html"class="ti-trash"> delete product</a></li>
                        <li><a href="update product.html" class="ti-marker-alt"> update product</a></li>

                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle">
                        <i class="ti-target"></i>
                        Orders  <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="page-login.html">Pending Orders</a></li>
                        <li><a href="page-register.html">Completed Orders</a></li>
                        <li><a href="page-reset-password.html">Cancel Orders</a></li>
                    </ul>
                </li>
                <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
                <li><a><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
