<style>
    .no-border-table {
        border: none !important;
    }

    .no-border-table th,
    .no-border-table tr,
    .no-border-table td {
        border: none !important;
    }
</style>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title mb-0">Inventory Items, Stock</h6>
            <!-- <a href="#" title="">View All</a> -->
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-card pt-3">
            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="index.html#ExamToppers">All</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="index.html#NewAdmission">Dairy</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="index.html#SeaFood">SeaFood</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="index.html#Vegetable">Vegetables</a></li>
        </ul>
        <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content mt-3">
                <div role="tabpanel" class="tab-pane in active" id="ExamToppers">
                    <div class="table-responsive">
                        <table class="table no-border-table myDataTable card-table align-middle table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Stock Status</th>
                                    <th>In stock</th>
                                    <th>Weekly Usage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Whole Milk</td>
                                    <td><span class="badge bg-success">In Stock</span></td>
                                    <td>40 Liters</td>
                                    <td>
                                        <div class="imrs">
                                            <img src="/Public/chart.png" height="100" alt="">
                                        </div>
                                        <!-- <div class="item-chart-selector"></div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Oat Milk</td>
                                    <td><span class="badge bg-danger">Low Stock</span></td>
                                    <td>5 Liters</td>
                                    <td>
                                        <div class="imrs">
                                            <img src="/Public/chart.png" height="100" alt="">
                                        </div>
                                        <!-- <div class="item-chart-selector"></div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Soy Milk</td>
                                    <td><span class="badge bg-success">In Stock</span></td>
                                    <td>65 Liters</td>
                                    <td>
                                        <div class="imrs">
                                            <img src="/Public/chart.png" height="100" alt="">
                                        </div>
                                        <!-- <div class="item-chart-selector"></div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2% Skim Milk</td>
                                    <td><span class="badge bg-success">In Stock</span></td>
                                    <td>76 Liters</td>
                                    <td>
                                    <div class="imrs">
                                            <img src="/Public/chart.png" height="100" alt="">
                                        </div>
                                        <!-- <div class="item-chart-selector"></div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cheddar Chese</td>
                                    <td><span class="badge bg-warning">Low Stock</span></td>
                                    <td>15 Liters</td>
                                    <td>
                                    <div class="imrs">
                                            <img src="/Public/chart.png" height="100" alt="">
                                        </div>
                                        <!-- <div class="item-chart-selector"></div> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="NewAdmission">
                    <div class="table-responsive">
                        <table class="table myDataTable card-table align-middle table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Stock Status</th>
                                    <th>In stock</th>
                                    <th>Weekly Usage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Whole Milk</td>
                                    <td><span class="badge bg-success">In Stock</span></td>
                                    <td>40 Liters</td>
                                    <td>MCA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .card end -->
</div>