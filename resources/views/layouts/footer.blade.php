  <!--start overlay-->
  <div class="overlay nav-toggle-icon"></div>
  <!--end overlay-->

  <!--Start Back To Top Button-->
  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
  <!--End Back To Top Button-->

  </div>
  <!--end wrapper-->

  {{-- sweet alert --}}
  <script type="text/javascript">
      $(document).on('click', '.button', function(e) {
          e.preventDefault();
          var id = $(this).data('id');
          swal({
                  title: "Are you sure!",
                  type: "error",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Yes!",
                  showCancelButton: true,
              },
              function() {
                  $.ajax({
                      type: "POST",
                      url: "{{ url('/destroy') }}",
                      data: {
                          id: id
                      },
                      success: function(data) {
                          //
                      }
                  });
              });
      });
  </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
      $('.delete-confirm').on('click', function(event) {
          event.preventDefault();
          const url = $(this).attr('href');
          swal({
              title: 'Are you sure?',
              text: 'This record and it`s details will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
          }).then(function(value) {
              if (value) {
                  window.location.href = url;
              }
          });
      });
  </script>

  {{-- select2 --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @stack('scripts')
  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ asset('template/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('template/assets/js/pace.min.js') }}"></script>
  {{-- <script src="{{asset('template/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('template/assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{asset('template/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script> --}}
  <script src="{{ asset('template/assets/plugins/datetimepicker/js/legacy.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/datetimepicker/js/picker.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/datetimepicker/js/picker.time.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/select2/js/select2.min.js') }}"></script>
  <script src="{{ asset('template/assets/js/form-select2.js') }}"></script>
  <script src="{{ asset('template/assets/js/form-date-time-pickes.js') }}"></script>
  <script src="{{ asset('template/assets/plugins/input-tags/js/tagsinput.js') }}"></script>

  <!--app-->
  <script src="{{ asset('template/assets/js/app.js') }}"></script>
  <script src="{{ asset('template/assets/js/index2.js') }}"></script>
  <script>
      new PerfectScrollbar(".best-product")
  </script>


  </body>

  </html>
