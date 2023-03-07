<!-- Left Sidebar  -->
<div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/dashboard">User: {{ Auth::user()->name}} </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Menu</li>
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">News</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/newsSection/create"><i class="fa fa-plus-circle"></i> Make News</a></li>
                                <li><a href="/newsSection"><i class="fa fa-list-alt"></i> All News</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-picture-o"></i><span class="hide-menu">Portfolio</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/gallerySection"><i class="fa fa-trello"></i> Galleries</a></li>
                                <li><a href="/galleryImageSection"><i class="fa fa-upload"></i> Upload Images</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-file-text"></i><span class="hide-menu">Resource</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/resourceSection"><i class="fa fa-file-archive-o"></i> Resource Docs</a></li>
                                <li><a href="/resourceSection/create"><i class="fa fa-upload"></i> Upload File</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-file-text"></i><span class="hide-menu">Video</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/videoSection"><i class="fa fa-file-archive-o"></i> Video Links</a></li>
                                <li><a href="/videoSection/create"><i class="fa fa-upload"></i> Create link</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->