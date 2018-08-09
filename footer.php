<!-- footer-->
<div class="footer-container">
    <div class="text-center padding-top-10px">
        <ul class="top-bottom-menu">
            <li><a href="http://localhost/marine_houses/about-us.php">ABOUT US</a></li>
            <li><a href="http://localhost/marine_houses/shipping-returns.php">SHIPPING  &amp; RETURNS</a></li>
            <li><a href="http://localhost/marine_houses/privacy.php">PRIVACY POLICY</a></li>
            <li><a href="http://localhost/marine_houses/contact-us.php">CONTACT US</a></li>
        </ul>
    </div>
    <div id="copywrite" class="text-center"></div>

</div>
</div> <!-- /container -->

<!--&copy; 2016 MarineHouses All Rights Reserved.-->


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="javascript/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="javascript/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

<script src="javascript/js.js"></script>

</body>
</html>





<!-- Small modal -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Please sign in</h4>
            </div>
            <div class="modal-body">
                <div class="form-signin">
                    <p id="login-notice" class="form-signin-heading"></p>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control margin-top-10px" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit" onclick="login_notice()">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>