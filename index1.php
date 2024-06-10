<body>
    <?php
	$nen=""; $mon=""; $day=""; $hour=""; $min=""; $sec="";
        if(isset($_POST["nen"])==true){
            $nen=$_POST["nen"];
        }
	if(isset($_POST["mon"])==true){
            $mon=$_POST["mon"];
        }
	if(isset($_POST["day"])==true){
            $day=$_POST["day"];
        }
	if(isset($_POST["hour"])==true){
            $hour=$_POST["hour"];
        }
	if(isset($_POST["min"])==true){
            $min=$_POST["min"];
        }
	if(isset($_POST["sec"])==true){
            $sec=$_POST["sec"];
        }
	
        print "<a href="index1.html">戻る</a>\n";
    ?>
</body>
</html>
