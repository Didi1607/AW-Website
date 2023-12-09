<div class="footer">
   
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./public/vendor/global/global.min.js"></script>
<script src="./public/js/quixnav-init.js"></script>
<script src="./public/js/custom.min.js"></script>
<script src="./public/vendor/raphael/raphael.min.js"></script>
<script src="./public/vendor/morris/morris.min.js"></script>
<script src="./public/vendor/circle-progress/circle-progress.min.js"></script>
<script src="./public/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./public/vendor/gaugeJS/dist/gauge.min.js"></script>
<script src="./public/vendor/flot/jquery.flot.js"></script>
<script src="./public/vendor/flot/jquery.flot.resize.js"></script>
<script src="./public/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="./public/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="./public/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="./public/vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="./public/js/dashboard/dashboard-1.js"></script>
<script src="./public/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="./public/js/plugins-init/datatables.init.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alertSection = document.getElementById('alertSection');

        if (alertSection) {
            setTimeout(function() {
                alertSection.remove();
            }, 3000);
        }
    });
</script>
<script>
document.getElementById("inputRePassword").addEventListener("input", function() {
    var password = document.getElementById("inputPassword").value;
    var rePassword = document.getElementById("inputRePassword").value;
    var message = document.getElementById("passwordMatchMessage");

    if (password === rePassword) {
        // Mật khẩu trùng khớp
        message.textContent = "Password matches";
        message.style.color = "green"; // Màu xanh cho thông báo trùng khớp
    } else {
        // Mật khẩu không trùng khớp
        message.textContent = "Password does not match";
        message.style.color = "red"; // Màu đỏ cho thông báo không trùng khớp
    }
});
</script>

</body>

</html>
</body>

</html>