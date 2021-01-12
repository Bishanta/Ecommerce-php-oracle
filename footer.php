<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<footer class="bg">
        <div class="footer-box">
            <div class="footer-coloumn">
                    <h2 style="color: #fa7d09;">About Ignite Portal</h2>
                    <p>Ignite portal is an ecommerce<br> site establish by local people who<br> want
                        to promote their local goods<br> among the local people. Their aim<br> is to
                        provide eciffient and hassle<br> free way of shopping local products.
                       <br/> Launched in 2020, IGNITE E-COMM<br/>ERCE PORTAL is the leading platfor<br/>m for  global wholesale trade.
                    </p>
                </div>
                <div class="footer-coloumn ">
                    <h2 style="color: #fa7d09;">Menu</h2>
                     <div class="mb-20">
                                <a style="text-decoration:none;cursor:pointer;color: #ff4301;" href="index.php"><i>HOME</i></a>
                            </div>
                          
                            <div class="mb-20">
                                <a style="text-decoration:none;cursor:pointer;color: #ff4301;" href="faq.php"><i>FAQ</i></a>
                            </div>
                            <div class="mb-20">
                                <a style="text-decoration:none;cursor:pointer;color: #ff4301;" href="AboutUs.php"><i>ABOUT US</i></a>
                            </div>
                            <div class="mb-20">
                                <a style="text-decoration:none;cursor:pointer;color: #ff4301;" href="contactus.php"><i>CONTACT US</i></a>
                            </div>
                    
                </div>
                <div class="footer-coloumn">
                    <h2 style="color: #fa7d09;">Contact</h2>
                   
                    <p><i class="fas fa-map-marker-alt fa-sm"></i> 5 Stratton St, United Kingdom</p>

                    
                    <p><i class="fas fa-phone mt-4 fa-sm"></i> +44 20 7123 1234</p>

                    
                    <p><i class="fas fa-envelope mt-4 fa-sm"></i>  <a href="mailto:ignite123@gmail.com" style="color: white; text-decoration: none;">ignite123@gmail.com</a> </p>
                    <br>
                    <p><b style="color: #fa7d09;">CONNECT WITH US</b></p>

        <div>
        <ul class="social-network social-circle">
          <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
          <li><a href="#" class="icoFacebook" title="Facebook" ><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-youtube"></i></a></li>
            <br/><br/>
        </ul>

      </div>
                </div>
        </div>

</footer>
    
    
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
            var y = document.getElementById("navbar");
            if (y.className === "navbar") {
                y.className += " responsive";
            } else {
                y.className = "navbar";
            }
        }

        function subnavtoggle(x) {
            x.classList.toggle("nav-open");
        }


    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

    // COUNTDOWN TIMER 
    let countDown = new Date('Sep 30, 2020 00:00:00').getTime(),
        x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        //if (distance < 0) {
        //  clearInterval(x);
        //  
        //}

        }, second)
    </script>
    <div class="copyright">© Copyright 2020 Ignite E-Commerce Portal - All Rights Reserved </div>

</body>
</html>