<?php

$layoutFooter = '
</div>


<footer class="content-footer footer bg-footer-theme">
     <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
       <div class="mb-2 mb-md-0">
         ©
         <script>
          if(new Date().getFullYear() == 2023){
          document.write(new Date().getFullYear());
          } else {
           document.write("2023 - " + new Date().getFullYear());
          }
          </script>
         , made with ❤️ by
         <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
       </div>
       <div>
         <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
         <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
         <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/" target="_blank" class="footer-link me-4">Demo free</a>

         <a
           href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
           target="_blank"
           class="footer-link me-4"
           >Documentation</a
         >

       </div>
     </div>
   </footer>
   <!-- / Footer -->

   <div class="content-backdrop fade"></div>
 </div>
 <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../bakso/assets/vendor/libs/popper/popper.js"></script>
<script src="../bakso/assets/vendor/js/bootstrap.js"></script>
<script src="../bakso/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../bakso/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../bakso/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../bakso/assets/js/main.js"></script>

<!-- Page JS -->
<script src="../bakso/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

';
