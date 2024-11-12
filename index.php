<?php
	session_start();
	$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
	unset($_SESSION["message"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-Sports Registration</title>
</head>
<body>
    <script>
        if ("<?php echo addslashes($message); ?>" !== "") {
			alert("<?php echo addslashes($message); ?>");
		}
    </script>
    <header>
        <img src="assets/p1.png" alt="image">
        <div class="text">
            <p>||Jai Sri Gurudev||</p>
            <h4>BGSKH Education Trust (R.) - A unit of Sri Adichunchanagiri Shikshana Trust(R.)</h4>
            <span class="heading">BGS College of Engineering and Technology (BGSCET)</span><br>
            <p>(Approved by AICTE, New Delhi and Affiliated to VTU, Belagavi)</p>
            <p>Adjacent to Mahalakshmi Metro Station, Mahalakshmipuram, West of Chord Road, Bengaluru -560 086, Karnataka</p></div>
        <img src="assets/p2.png" alt="image" class="p2">
    </header>
    <main>
        <section class="head">
            <center>
                <p class="head">E-Sports Tournament</p>
            </center>
        </section>
        <section>
            <video src="assets/esports trailer.mp4" height="200px" autoplay loop muted></video>
        </section>
        <section class="s3">
            <h3 class="ava">Available Games</h3>
            <div class="cards">
                <div class="card">
                    <a href="free.html"><img src="assets/freefire.webp" alt=""></a>
                    <center>
                        <a href="free.html"><p class="click">Click To Register</p></a>
                    </center>
                </div>
                <div class="card">
                    <a href="pub.html"><img src="assets/bgmi.jpeg" alt=""></a>
                    <center>
                        <a href="pub.html"><p class="click">Click To Register</p></a>
                    </center>
                </div>
            </div>
        </section>
    </main>
    <footer class="foot">
        <h2>Prize Money</h2>
        <span style="padding:5px;border:1px solid white; background-color:orange; color:black;">1st place - 2000</span>&nbsp&nbsp
        <span style="padding:5px;border:1px solid white; background-color:green;">2nd place - 1000</span>
    </footer>
</body>
</html>