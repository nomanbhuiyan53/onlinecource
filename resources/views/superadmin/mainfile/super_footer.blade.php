<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files --> 
  <script src="{{ asset('super/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('super/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('super/assets/js/main.js') }}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
  $('.delete-confirm').on('click', function (event) {
      event.preventDefault();
      const url = $(this).attr('href');
      swal({
          title: 'Are you sure?',
          text: 'This User will be permanantly deleted!',
          icon: 'warning',
          buttons: ["Cancel", "Yes!"],
      }).then(function(value) {
          if (value) {
              window.location.href = url;
          }
      });
  });
  </script>
  @method('pageJs')

</body>

</html>