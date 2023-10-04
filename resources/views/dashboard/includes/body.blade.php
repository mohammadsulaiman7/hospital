<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        @if (Session::has('success'))
        <div class="alert alert-info" id="myAlert">
            {{Session::get('success')}}
        </div>
        @endif
        {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$12.34</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Potential growth</h6>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$17.34</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Revenue current</h6>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$12.34</h3>
                    <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-danger">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Daily Income</h6>
            </div>
          </div>
        </div> --}}
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$31.53</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Expense current</h6>
            </div>
          </div>
        </div>
      </div>


      {{-- Transaction History --}}


      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Transaction History</h4>
              <canvas id="transaction-history" class="transaction-chart"></canvas>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Transfer to Paypal</h6>
                  <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">$236</h6>
                </div>
              </div>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Tranfer to Stripe</h6>
                  <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">$593</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">

            {{-- Open projects  --}}

            @include('dashboard.news.index')
            {{--End  Open projects  --}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Clinics</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$1212.12</h2>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                  <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-hospital text-danger ms-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Pharmacy</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$45850</h2>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                  </div>
                  <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-wallet-travel text-info ms-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>surgeries</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$2039</h2>
                    <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                  </div>
                  <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-doctor text-success ms-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Clients  --}}
      
      @include('dashboard.patients.index')
      @include('dashboard.doctors.list')
      @include('dashboard.specialities.index')

      {{-- End clients  --}}


      <div class="row">
      {{-- Messages  --}}

        {{-- <div class="col-md-6 col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title">Messages</h4>
                <p class="text-muted mb-1 small">View all</p>
              </div>
              <div class="preview-list">
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <img src="" alt="" class="rounded-circle" />
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Herman May</h6>
                        <p class="text-muted text-small">4 Hours Ago</p>
                      </div>
                      <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}



        {{-- End messages  --}}


        
          {{-- <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Portfolio Slide</h4>
                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                  <div class="item">
                    <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="assets/images/dashboard/Img_5.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="assets/images/dashboard/img_6.jpg" alt="">
                  </div>
                </div>
                <div class="d-flex py-4">
                  <div class="preview-list w-100">
                    <div class="preview-item p-0">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">CeeCee Bass</h6>
                            <p class="text-muted text-small">4 Hours Ago</p>
                          </div>
                          <p class="text-muted">Well, it seems to be working now.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-muted">Well, it seems to be working now. </p>
                <div class="progress progress-md portfolio-progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div> --}}
        @include('dashboard.appointments.index')
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Visitors by Countries</h4>
              <div class="row">
                <div class="col-md-5">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-us"></i>
                          </td>
                          <td>USA</td>
                          <td class="text-right"> 1500 </td>
                          <td class="text-right font-weight-medium"> 56.35% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-de"></i>
                          </td>
                          <td>Germany</td>
                          <td class="text-right"> 800 </td>
                          <td class="text-right font-weight-medium"> 33.25% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-au"></i>
                          </td>
                          <td>Australia</td>
                          <td class="text-right"> 760 </td>
                          <td class="text-right font-weight-medium"> 15.45% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-gb"></i>
                          </td>
                          <td>United Kingdom</td>
                          <td class="text-right"> 450 </td>
                          <td class="text-right font-weight-medium"> 25.00% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-ro"></i>
                          </td>
                          <td>Romania</td>
                          <td class="text-right"> 620 </td>
                          <td class="text-right font-weight-medium"> 10.25% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-br"></i>
                          </td>
                          <td>Brasil</td>
                          <td class="text-right"> 230 </td>
                          <td class="text-right font-weight-medium"> 75.00% </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-7">
                  <div id="audience-map" class="vector-map"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer"> 
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->