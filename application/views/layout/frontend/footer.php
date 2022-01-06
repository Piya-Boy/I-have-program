<!-- Footer-->
<footer class="text-white text-center text-lg-start bg-dark">
    <div class="text-center bg-dark p-4">
        © 2021 Copyright: Piya Miang-Lae
    </div>
</footer>
<!-- Footer -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.8/dist/sweetalert2.all.min.js"></script>
<script src="asset/js/min.js">
</script>

<?php
if ($this->session->flashdata('status')) {
    $icon = $this->session->flashdata('icon');
    $message = $this->session->flashdata('message');
    echo "<script>
                Swal.fire({
                    icon: '$icon',
                    title: '$message',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>";
}
unset($_SESSION['status']);
?>

</body>

</html>