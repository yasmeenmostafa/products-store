@include('admin.inc.header')

   
    <body>
        <div class="container-scroller">
      @include('admin.inc.probanner')
           
            <!-- partial:partials/_sidebar.html -->
      @include('admin.inc.sidebar')
            
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
      @include('admin.inc.navbar')
                


                <div class="main-panel">
            @include('admin.inc.errors')

                   @yield('content')
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
      @include('admin.inc.footer')
                   
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
      @include('admin.inc.scripts')

        <!-- End custom js for this page -->
    </body>

    </html>