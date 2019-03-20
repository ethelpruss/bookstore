<!DOCTYPE html>
<html lang="en">

<?php 
    include "dependencies.php";
    echo '<body>';
    include "headerNav.php";
?>

<!--Section: Contact v.2-->
<div class="container" id="contactContainer">

    <div class="jumbotron" id="contactJumbo">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-left my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-left w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>

        
        <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
            
                <div class="alert alert-danger" id="status" role='alert'>
                    <p></p>
                </div>   

                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="contactFormName" name="name" class="form-control" required>
                                <label for="name" class="form-text text-muted">Your name</label>

                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="email" class="form-control" required>
                                <label for="email" class="form-text text-muted">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" required>
                                <label for="subject" class="form-text text-muted">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                <label for="message" class="form-text text-muted">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="text-center text-md-right">
                    <button type="submit" class="btn btn-outline-dark btn-lg" id="sendButton"><i class="fas fa-envelope fa-lg" style="color:#b04e3b;"></i></button>
                </div>

                </form>


            <!--Grid column-->

        </div>
    </div>
</div>

</div>



<?php 
 include "footer.php";
?>

</body>
</html>
<script src="/bookstore/javascript/contact.js" type="text/javascript" ></script>