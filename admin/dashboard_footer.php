<!-- CONTENT -->
</div>
</div>
</div>

<!-- loading animation -->
<div class="animation_container">
    <span class="loader"></span>
</div>

<!-- sweetalert2 - start -->
<?php
if ($curPageName == "blogs.php") {
    include "common_Js_scripts.php"; ?>
    <script>
        $(document).ready(function() {
            $(document).on("click", "._blog_delete_btn", function() {
                var dataId = $(this).attr("data-id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });


            });
        });
    </script>
<?php } ?>
<!-- sweetalert2 - end -->


<script>
    window.onload = function() {
        document.querySelector(".animation_container").style.display = "none";
    }
</script>





<script>
    document.getElementById("btn_for_sidebar").addEventListener("click", (e) => {
        e.preventDefault();
        console.log(document.querySelector("._bottom_left").style.left);
        document.querySelector("._bottom_left").classList.toggle("move_it");
    });
</script>
</body>

</html>