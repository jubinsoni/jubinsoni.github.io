<?php
    include_once 'header.php'
?>
    <section id="last" style="height: 80%">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Easy Registration</h2>
                    <hr class="primary">
                    <br><br>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="form-horizontal column" action="">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="text">Nick Name:</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="tel">Phone:</label>
                            <div class="col-md-4">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91-7234567890" pattern="[+][0-9]{2}-[789][0-9]{2}[0-9]{3}[0-9]{4}" required />
                                <span class="validity"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="button" class="btn btn-default btn-block btn-lg wow flipInX">Proceed To Payment <i class="ion-android-arrow-forward"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include_once 'footer.php'
?>