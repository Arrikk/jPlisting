
<div class="row g-3">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="input-group">
                  <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#add_sales_order" type="button">Add Order</button>
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="sales-orders.html#">Date</a></li>
                    <li><a class="dropdown-item" href="sales-orders.html#">Customer</a></li>
                    <li><a class="dropdown-item" href="sales-orders.html#">Status</a></li>
                    <li><a class="dropdown-item" href="sales-orders.html#">Biller</a></li>
                  </ul>
                  <input type="text" class="form-control" placeholder="Search...">
                  <button class="btn btn-secondary" type="button">Search</button>
                </div>
              </div>
              <table id="myDataTable_no_filter" class="table card-table myDataTable mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Status</th>
                    <th>Biller</th>
                    <th>Tex</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>22 Feb 2021</td>
                    <td>Chris Fox</td>
                    <td>$22</td>
                    <td>$21</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Chris</td>
                    <td>1%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>13 Feb 2021</td>
                    <td>Brian Swader</td>
                    <td>$77</td>
                    <td>$70</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Brian</td>
                    <td>2%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>28 Feb 2021</td>
                    <td>Richard Foos</td>
                    <td>$120</td>
                    <td>$110</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Richard</td>
                    <td>5%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>28 Feb 2021</td>
                    <td>Frank Camly</td>
                    <td>$105</td>
                    <td>$100</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Frank</td>
                    <td>2%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>11 March 2021</td>
                    <td>Chris Fox</td>
                    <td>$100</td>
                    <td>$100</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Chris</td>
                    <td>0%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>13 March 2021</td>
                    <td>Orlando Lentz</td>
                    <td>$200</td>
                    <td>$180</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Orlando</td>
                    <td>10%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>14 March 2021</td>
                    <td>Chris Fox</td>
                    <td>$100</td>
                    <td>$90</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Chris</td>
                    <td>10%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>9 April 2021</td>
                    <td>Barbara Kelly</td>
                    <td>$100</td>
                    <td>$95</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Barbara</td>
                    <td>5%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>2 May 2021</td>
                    <td>Robert Hammer</td>
                    <td>$200</td>
                    <td>$190</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>Robert</td>
                    <td>5%</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                      <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Modal: Add sale -->
            <!-- <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#add_items" type="button">Add Items</button> -->
            <div class="modal fade" id="add_sales_order" tabindex="-1" aria-labelledby="add_sales_order" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add Sales Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h6 class="fw-bold">Basic Information</h6>
                    <div class="row g-3">
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="date" class="form-control datepicker" placeholder="Date">
                          <label>Date</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="Reference No *">
                          <label>Reference No *</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="Biller *">
                          <label>Biller *</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" placeholder="Customer *">
                          <label>Customer *</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <select class="form-select">
                            <option value="1">GST 5%</option>
                            <option value="2">Vat 5%</option>
                          </select>
                          <label for="floatingSelect">Order Tax *</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <input type="number" class="form-control" placeholder="Order Discount">
                          <label>Order Discount</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <select class="form-select">
                            <option value="1">Completed</option>
                            <option value="2">Pending</option>
                          </select>
                          <label for="floatingSelect">Sale Status *</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-floating">
                          <select class="form-select">
                            <option value="1">Pending</option>
                            <option value="2">Due</option>
                            <option value="3">Paid</option>
                          </select>
                          <label for="floatingSelect">Payment Status *</label>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <label for="formFile" class="form-label">Attach Document</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-floating">
                          <textarea type="text" class="form-control" placeholder="Description" style="height: 100px"></textarea>
                          <label>Sale Note *</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .row end -->