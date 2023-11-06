
                
                <!-- CONTENT -->
                </div>
        </div>
    </div>

    <!-- loading animation -->
    <div class="animation_container">
        <span class="loader"></span>
    </div>
    <script>
       window.onload = function(){
        document.querySelector(".animation_container").style.display = "none";
       }
    </script>





    <script>
       document.getElementById("btn_for_sidebar").addEventListener("click",(e)=>{
        e.preventDefault();
        console.log(document.querySelector("._bottom_left").style.left);
        document.querySelector("._bottom_left").classList.toggle("move_it");
       });
    </script>
</body>

</html>