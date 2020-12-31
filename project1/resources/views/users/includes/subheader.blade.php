<!--Markup for Sub-header-->
        <section id="sub-header">
            <div class="container">
                <div class="left-sidebar">
                    <div id="mySidebar" class="sidebar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <h4>About Me</h4>
                        <p>Name: Abir Das</p>
                        <p>ID: 1502910201048</p>
                        <p>E-mail: abirdas422@gmail.com</p>
                        <p>Contact No: 01819951151</p>
                    </div>

                    <div id="main">
                        <button class="openbtn" onclick="openNav()">☰ Welcome!</button>

                    </div>

                    <script>
                        function openNav() {
                            document.getElementById("mySidebar").style.width = "250px";
                            document.getElementById("main").style.marginLeft = "250px";
                        }

                        function closeNav() {
                            document.getElementById("mySidebar").style.width = "0";
                            document.getElementById("main").style.marginLeft= "0";
                        }
                    </script>
                </div>
                <nav>
                    <ul type="none">
                        <li><a href="https://www.facebook.com/abir.das.421" target="_blank">
                            <i class="fab fa-facebook-square fa-lg"></i></a></li>
                        <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsCWzRFfGHPltxJxxfTgwrgVcMSJvtkdfkKWfVWQXcQDnKlZSSfsHrzhRQqSwFqwRNHXcnbv"
                               target="_blank"><i class="far fa-envelope fa-lg"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>