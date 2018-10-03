<?php
	include_once 'header.php'
?>
<header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">MySecretCounsellor</h1>
                
                <br>
                <div class="typewriter">
                  <h1>Your Privacy</h1>
                  <h1>Our Priority</h1>
                </div>
                <br>
                <!--modal video-->
            	<a type="button" class="btn btn-primary btn-xl" href="./talk_counsellor.php"><i class="ion-android-call"></i>&nbsp;&nbsp; Talk To Your Counsellor</a>
                
                <hr>
            </div>
            <div class="container-fluid">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p class="h5 mb-4"><code>Latest Video</code></p>
                    <div class="embed-responsive embed-responsive-16by9 z-depth-1">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fa3Iczgh8Ok" style="height: 101%" allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p class="h5 mb-4"><code>Feed Back</code></p>
                    <div class="embed-responsive embed-responsive-16by9 z-depth-1">
                        <marquee behavior="scroll" onMouseOver="this.stop();" onMouseOut="this.start();" direction="up"  scrollamount="3" style="background-color: white;">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://www.youtube.com" style="color:black;">1st feedback</a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jubinsoni.github.io" style="color:black;">2nd feedback</a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.google.com" style="color:black;">3rd feedback</a>
                                </li>
                            </ul>
                        </marquee> 
                              <a href="news_section/news_section.htm" target="dis_frame"><span class="button button4">Read More>></span></a>
                    </div>
                    <a target="_balnk" href="./feedback.php" style="color:white;">Link to Feedback page</a>
                </div>
            
            </div>

        </div>
    </header>
<?php
	include_once 'footer.php'
?>