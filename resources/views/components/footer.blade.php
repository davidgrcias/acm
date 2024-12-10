@php
    $view = \App\Models\View::first(); // You can adjust this to get the correct view data
@endphp

<footer class="site-footer">
    <div class="container">
        <div class="row align-items-center">

            <!-- Contact Section -->
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <h5 class="text-white mx-auto px-3 py-6 text-center text-md-start">{{ $view->contact_title }}</h5>
                <ul class="container flex flex-column pt-4 pb-4 px-3 text-center text-md-start">
                    <li class="text-white footer-menu-item pt-1 pb-1">{{  $view->contact_name }}</li>
                    <li class="text-white footer-menu-item pt-1 pb-1">{{ $view->contact_phone_number }}</li>
                    <li class="text-white footer-menu-item pt-1 pb-1">{{ $view->contact_email }}</li>
                </ul>
            </div>

            <!-- Logo Section -->
            <div class="col-lg-6 col-md-6 col-12 text-center text-md-end mb-4">
                <img src="{{ asset('storage/' . $view->favicon_logo) }}" alt="ARK Care Ministry"
                    class="object-cover w-75 h-auto">
            </div>

        </div>
    </div>

    <hr class="my-3" style="width: 95%; border: none; background-color: white; height: 1px; margin: 0 auto;">

    <div class="pt-3 pb-3">
        <div class="container">
            <div class="row align-items-center">

                <!-- Copyright Text -->
                <div class="col-lg-6 col-md-6 col-12 text-center text-md-start mb-3 mb-md-0">
                    <p class="copyright-text mb-0" style="padding-left: 1rem;">© 2024 Ark Care Ministry. All rights reserved.</p>
                </div>

                <!-- Social Icons -->
                <div class="col-lg-6 col-md-6 col-12 text-center text-md-end">
                    <ul class="social-icon d-flex justify-content-center justify-content-md-end gap-3" style="padding-right: 1rem;">
                        <li class="social-icon-item px-1">
                            <a href="{{ asset('storage/' . $view->instagram_link) }}" class="social-icon-link bi-instagram px"></a>
                        </li>
                        <li class="social-icon-item px-1">
                            <a href="{{ asset('storage/' . $view->whatsapp_link) }}" class="social-icon-link bi-whatsapp"></a>
                        </li>
                        <li class="social-icon-item px-1">
                            <a href="{{ asset('storage/' . $view->linktree_link) }}" class="social-icon-link bi-line"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>





<!-- JAVASCRIPT FILES -->
<script src="templateUSER/js/jquery.min.js"></script>
<script src="templateUSER/js/bootstrap.min.js"></script>
<script src="templateUSER/js/jquery.sticky.js"></script>
<script src="templateUSER/js/click-scroll.js"></script>
<script src="templateUSER/js/counter.js"></script>
<script src="templateUSER/js/custom.js"></script>

</body>

</html>
