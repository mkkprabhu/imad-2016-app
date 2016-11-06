<html>
<head>
    <title>Request a Blog | MC.Naveen</title>
    <link rel="stylesheet" href="style.css">
    <style text="text/javascript">
    body { padding:0px; margin:0px; }
    .full { background-color: black; width: 100%; height: 100%; }
    .menu { height: 50px; width: 100%; background-color: black; position: fixed; }
    .behindMenu { height: 50px; width: 100%; }
    .logo {width: 100%; height: 150px;}
    .content {background-color: yellow;}
    
 
    .jo-sociallocker.jo-sociallocker-msie {
        background-color: hsl(200, 65%, 91%);
        border-color: hsl(190, 65%, 84%);
        color: hsl(200, 50%, 45%);
    }
    .jo-sociallocker {
        background-color: hsl(50, 81%, 94%);
        border: 1px solid hsl(39, 83%, 91%);
        -moz-border-radius: 4px 4px 4px 4px;
        -webkit-border-radius: 4px 4px 4px 4px;
        border-radius: 4px 4px 4px 4px;
        margin-bottom: 20px;
        padding: 8px 35px 8px 14px;
        -moz-text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
        -webkit-text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
        text-shadow: 0 1px 0 hsla(0, 100%, 100%, 0.5);
        width:80%;
        height: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .jo-sociallocker-button{
        float: left;
        margin-left: 10px;
    }
    .jo-sociallocker-after-text{
        margin-bottom: 20px;
    }
    .jo-sociallocker-buttons{
        height:60px;
        width: 60%;
    }
    .jo-sociallocker-strong{
        font-size: 80px;
        color: hsl(0, 0%, 0%);
    }

    
    </style>
    
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="http://demo.phpgang.com/social-locker-jquery/social-locker.js"></script>

<script type="text/javascript">
    jQuery.noConflict();                    
    jQuery(document).ready(function ($) {
        $("#lock-my-div").sociallocker({
            text: {
                header: "The content is locked!", // replace content with this heading
                message: "Please support us, click like button below to unlock the content." // hidden content message
            },
 
            theme: "starter", // Theme
 
            locker: {
                close: false,
                timer: 0
            },
 
            buttons: {   // Buttons you want to show on box
                order: ["facebook-like", "twitter-follow"] 
            },
 
            facebook: {  
                appId: "104922053201747",
                like: {
                    title: "Like us",
                    url: "https://www.facebook.com/the.mcnaveen" // link to like in Facebook button
                }
            },
 
            twitter: {

                follow: {
                    title: "Follow us", 
                    url: "http://twitter.com/the_mcnaveen" // Twitter profile to follow 
                }
            },
 
          
        });
    });
</script> 
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69082552-4', 'auto');
  ga('send', 'pageview');

</script>

<meta property="og:title" content="Request a Tutorial | MC.Naveen" />
<meta property="og:description" content="MC.Naveen is one of the youngest blogger from Thanjavur, Tamil Nadu, India. His blog focus on PHP,HTML,CSS,JS,Linux" />


</head>
<body>
<div class="wrapper">
<div class="menu">   </div>
<div class="behindMenu"></div>
<div class="logo">   </div>
<div class="full">
	<br><center><br>
	<div id="lock-my-div" style="display: none;">  
		<h1>Request New Tutorial/Blog</h1>
		<form action="sendmail.php" method="POST">
<input type="text" name="name" placeholder="Name" required autocomplete="off" style="
width: 80%;
height: 100px;
font-size: 70px;
border-top: 0px none;
border-left: 0px none;
border-right: 0px none;
background-color: black;
outline: 0;
color: white;
"><br><br>
<input type="email" name="email" placeholder="Email" required autocomplete="off" style="
width: 80%;
height: 100px;
font-size: 70px;
border-top: 0px none;
border-left: 0px none;
border-right: 0px none;
background-color: black;
outline: 0;
color: white;
"><br><br>
<br><textarea name="message" required placeholder="What is the topic ??  " style="
width: 80%;
height: 100px;
font-size: 40px;
border-top: 0px none;
border-left: 0px none;
border-right: 0px none;
background-color: black;
outline: 0;
color: white;
cols: 30;
resize: none;
">
</textarea>
<br><br>
<input type="submit" value="Send" style="
width: 80%;
height: 50px;
font-size: 25px;
background-color: black;
color: white;
outline: 0px none;
">
</form>

</center>
</div>
</div>
<div class="content">  </div>
</div>

</body>
</html>
