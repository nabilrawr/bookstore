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
                <div class="w-100 p-3 bg-light-pink">
                  <h5><p>Total Pending Rent</p></h5>
                  <h4 class="text-pink">{{ $totalPending }}</h4>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-100 p-3 bg-light-purple">
                    <h5><p>Total Pickup Book</p></h5>
                  <h4 class="text-purple">{{ $totalPickup }}</h4>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-100 p-3 bg-light-success">
                    <h5><p>Total Rent Book</p></h5>
                  <h4 class="text-success">{{ $totalRent }}</h4>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-100 p-3 bg-light-orange">
                    <h5><p>Total Completed</p></h5>
                  <h4 class="text-orange">{{ $totalComplete }}</h4>
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
                    <h5 class="mb-0">Pending & Pickup Book List</h5>
                  </div>
                 </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar tableFixHead">

                        <table class="table table-bordered table-striped mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>No.</th>
                        <th>Pickup Date</th>
                        <th>Pickup Time</th>
                        <th>Book Title</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

                          @foreach ( $rentals as $rental)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                                <?php
                                $tempDate = explode(' ',$rental->start_date);
                                ?>
                                <td>{{ $tempDate[0] }}</td>
                                <td>{{ $tempDate[1] }}</td>
                                <td>{{ $rental->title }}</td>
                                {{-- status pending=8 --}}
                                @if ($rental->name == 'pending')
                                    <td><span class="badge bg-light-warning text-warning w-100">{{ $rental->name }}</span></td>
                                @else
                                    <td><span class="badge bg-light-success text-success w-100">{{ $rental->name }}</span></td>
                                @endif


                          </tr>
                          @endforeach
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-10 w-100">
                <div id='barchart'></div>
            </div>
          </div>
      </div><!--end row-->

  </main>
<!--end page main-->


<script>
    var options = {
          series: [{
            name: "Total Book Rented",
            data: {{ $data1['total'] }}
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





















        var options = {
          series: [{
          data: {{ $data2['total'] }}
        }],
          chart: {
          type: 'bar',
          height: 680
        },
        plotOptions: {
          bar: {
            barHeight: '100%',
            distributed: true,
            horizontal: true,
            dataLabels: {
              position: 'bottom'
            },
          }
        },
        colors: ['#DE5D83', '#523f02', '#3f5202', '#085202', '#025252', '#022252', '#4b075c', '#5c0742',
          '#5c0707', '#69d2e7','#79443B', '#DEB887', '#702963', '#00CC99', '#DFFF00', '#00FF6F', '#f9a3a4', '#90ee7e'
        ],
        dataLabels: {
          enabled: true,
          textAnchor: 'start',
          style: {
            colors: ['#fff']
          },
          formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
          },
          offsetX: 0,
          dropShadow: {
            enabled: true
          }
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
        xaxis: {
          categories: {!! $data2['categoryName']->toJson()  !!},
        },
        yaxis: {
          labels: {
            show: false
          }
        },
        title: {
            text: 'Total Book By Category',
            align: 'center',
            floating: true
        },
        tooltip: {
          theme: 'dark',
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function () {
                return ''
              }
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#barchart"), options);
        chart.render();

</script>

@endsection
