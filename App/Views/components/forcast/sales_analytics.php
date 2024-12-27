<div class="col-md-12">
    <div class="card">
        <!-- Nav tabs -->
        <div class="card-body">
            <div class="d-flex flex-wrap flex-row align-items-center">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="fw-bold">Sales vs Forecast</div>
                            <!-- <div><span class="h6 fw-bold">245</span> <small class="text-muted">Hours</small></div> -->
                        </div>
                    </div>
                </div>
                <div class="ms-lg-4 ms-lg-4 ms-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="fw-bold">1-7 Aug</div>
                            <!-- <div><span class="h6 fw-bold">45</span> <small class="text-muted">Session</small></div> -->
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-block ms-auto">
                </div>
                <ul class="nav nav-tabs tab-card pt-3">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="index.html#Sales">Sales</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="index.html#Orders">Orders</a></li>
                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content mt-3">
                <div role="tabpanel" class="tab-pane in active" id="Sales">
                    <div class="row">
                        <div class="col-lg-7">
                            <div id="sales_forcast_analytics">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="table-responsive">
                                <table class="table myDataTable card-table align-middle table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Sales</th>
                                            <th><i class="fa fa-circle me-2 chart-text-color1"></i> Actual</th>
                                            <th><i class="fa fa-circle me-2 chart-text-color3"></i> Forecasted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Sales</td>
                                            <td>
                                                <span class="fw-bold">$76,434.40</span>
                                            </td>
                                            <td>$54,434.23</td>
                                        </tr>
                                        <tr>
                                            <td>Dine in</td>
                                            <td>
                                                <span class="fw-bold">$65,434.40</span>
                                            </td>
                                            <td>$44,434.23</td>
                                        </tr>
                                        <tr>
                                            <td>Puck up</td>
                                            <td>
                                                <span class="fw-bold">$93,434.40</span>
                                            </td>
                                            <td>$45,434.23</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery</td>
                                            <td>
                                                <span class="fw-bold">$26,434.40</span>
                                            </td>
                                            <td>$43,434.23</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="Orders">
                    <div class="table-responsive">
                        <table class="table myDataTable card-table align-middle table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Number</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dean Otto</td>
                                    <td>22</td>
                                    <td>+404-447-6013</td>
                                    <td><span class="badge bg-primary">MCA</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .card end -->
</div>