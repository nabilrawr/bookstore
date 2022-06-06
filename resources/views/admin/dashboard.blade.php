@extends('layouts.master')
<style>
    .my-custom-scrollbar {
    position: relative;
    height: 380px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
    }

    .tableFixHead thead th {
        position: sticky;
        top: 0;
    }



</style>
@section('content')


 <!--start content-->
 <main class="page-content">

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-pink">
                  <p>Total Orders</p>
                  <h4 class="text-pink">8,542</h4>
                </div>
                <div class="w-50 bg-pink p-3">
                   <p class="mb-3 text-white">+ 16% <i class="bi bi-arrow-up"></i></p>
                   <div id="chart1"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-purple">
                  <p>Total Views</p>
                  <h4 class="text-purple">12.5M</h4>
                </div>
                <div class="w-50 bg-purple p-3">
                   <p class="mb-3 text-white">- 3.4% <i class="bi bi-arrow-down"></i></p>
                   <div id="chart2"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-success">
                  <p>Revenue</p>
                  <h4 class="text-success">$64.5K</h4>
                </div>
                <div class="w-50 bg-success p-3">
                   <p class="mb-3 text-white">+ 24% <i class="bi bi-arrow-up"></i></p>
                   <div id="chart3"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Customers</p>
                  <h4 class="text-orange">25.8K</h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white">+ 8.2% <i class="bi bi-arrow-up"></i></p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
      </div><!--end row-->

    <div class="row">
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
          <div class="card w-100 radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                   </div>
                   <div id='chart'></div>
                </div>
            </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-8 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                  <div class="col">
                    <h5 class="mb-0">Recent Orders</h5>
                  </div>
                 </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar tableFixHead">

                        <table class="table table-bordered table-striped mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>#ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#89742</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/11.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$214</td>
                        <td>Apr 8, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div><!--end row-->

  </main>
<!--end page main-->


<script>
    var options = {
          series: [{
            name: "Desktops",
            data: {{ $data['series'] }}
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Booking Trend By Month',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>

@endsection
