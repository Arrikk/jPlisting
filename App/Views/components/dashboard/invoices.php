<div class="row g-3">
    <div class="col-12">
        <!-- invoices: recent -->
        <div class="card fieldset border border-primary">
            <span class="fieldset-tile text-primary bg-body">Recent Invoices:</span>
            <div class="owl-carousel owl-theme" id="recent_invoices">
                <div class="item card ribbon">
                    <div class="option-9 position-absolute text-light"><i class="fa fa-star"></i></div>
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">BB</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 2,500</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Bucky Barnes</li>
                            <li>#RA0015</li>
                            <li>Jan 01 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">DO</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 5,520</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Dean Otto</li>
                            <li>#RA0016</li>
                            <li>Jan 03 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">OL</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 8,000</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Orlando Lentz</li>
                            <li>#RA0017</li>
                            <li>Jan 03 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">AJ</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 12,500</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Andew Jon</li>
                            <li>#RA0018</li>
                            <li>Jan 05 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">AJ</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 7,100</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Andew Jon</li>
                            <li>#RA0018</li>
                            <li>Jan 05 2022</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Plugin Js -->
        <script src="/Public/assets/js/bundle/owlcarousel.bundle.js"></script>
        <!-- Jquery Page Js -->
        <script>
            // recent invoices Carousel
            $('#recent_invoices').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    },
                    1400: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            })
        </script>
    </div>
</div> <!-- .row end -->