<style>
    .border-radius {
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        padding-left: 4px;
        width: 100px;
        height: 40px;
        top: 7px;
    }


    .border-radius.just-right {
        right: 10px;
    }

    .border-radius.just-left {
        left: 10px;
    }

    .border-radius small,
    .border-radius div {
        margin-left: 5px;
    }

    .border-radius small {
        font-size: x-small;
        position: absolute;
        bottom: 4px;
    }

    .border-radius div {
        font-weight: bolder;
        font-size: small;
    }

    .orange-light {
        background-color: #fdf7ed;
        border-left: 4px solid #ffcc70;
    }

    .red-light {
        background-color: #fdeded;
        border-left: 4px solid #ff7070;
    }

    .purple-light {
        background-color: #f9edfd;
        border-left: 4px solid #de70ff;
    }

    .t-flex {
        display: flex;
        border-left: 1px solid #ccc;
    }

    .t-flex div {
        width: 45px;
        border-left: 1px dashed #e7e7e7;
        height: 55px;
    }

    .table tr td {
        padding: 0 !important;
        position: relative;
    }
</style>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title m-0">Employee Scheduling</h6>
            <div class="dropdown morphing scale-left">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myPatientInvoice" class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="/Public/assets/img/xs/avatar1.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                <span class="fw-bold">Hossein Shams</span>
                            </td>
                            <td class="has-grid">
                                <div class="orange-light border-radius just-left">
                                    <div>Store Mana...</div>
                                    <small class="text-muted">8am-12pm</small>
                                </div>
                            </td>
    
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid">
                                <div class="red-light border-radius just-right">
                                    <div>Store Mana...</div>
                                    <small class="text-muted">1pm-4pm</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/Public/assets/img/xs/avatar2.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                <span class="fw-bold">Frank Camly</span>
                            </td>
    
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid">
                                <div class="purple-light border-radius just-left">
                                    <div>Store A...</div>
                                    <small class="text-muted">5am-9am</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                            <td class="has-grid">
                            <td class="has-grid">
                                <div class="red-light border-radius just-right">
                                    <div>Store Acce...</div>
                                    <small class="text-muted">1pm-4pm</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/Public/assets/img/xs/avatar3.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                <span class="fw-bold">Bruiz Flash</span>
                            </td>
    
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid">
                                <div class="purple-light border-radius just-left">
                                    <div>IT Dept..</div>
                                    <small class="text-muted">10am-2pm</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/Public/assets/img/xs/avatar4.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                <span class="fw-bold">Willy fRANK</span>
                            </td>
    
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid">
                                <div class="red-light border-radius just-left">
                                    <div>Store A...</div>
                                    <small class="text-muted">5am-9am</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                            <td class="has-grid">
                                <div class="orange-light border-radius just-right">
                                    <div>Store Acce...</div>
                                    <small class="text-muted">1pm-4pm</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/Public/assets/img/xs/avatar4.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                <span class="fw-bold">Katridge Braggs</span>
                            </td>
    
                            <td class="has-grid"></td>
                            <td class="has-grid">
                                <div class="orange-light border-radius just-right">
                                    <div>Store Acce...</div>
                                    <small class="text-muted">1pm-4pm</small>
                                </div>
                            </td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                            <td class="has-grid"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    const elem = `
        <div class="t-flex">
            <div></div>
            <div></div>
            <div></div>
        </div>
    `

    const tableData = document.querySelectorAll("td.has-grid")
    console.log(tableData)

    tableData.forEach(element => {
        element.innerHTML += elem
    });
</script>