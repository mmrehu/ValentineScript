<?php
$Q1 = "Your 1st question here";
$Q2 = "Your 2d question here";
$Q3 = "Your 3d question here";
$O11 = "Your 1st question 1 st option";
$O12 = "Your 1st question 2nd option";
$O21 = "Your 2nd question 1 st option";
$O22 = "Your 2d question 2nd option";
$O31 = "yes";
$O32 = "no";
$A1 = "Your 1st question reject alert here";
$A2 = "Your 2d question reject alert here";

$lst = "final last message here";
$audioFileno1 = "Your 1st question 1 st option music.mp3";
$audioFileno2 = "Your 1st question 2nd option music.mp3";
$audioFileno3 = "Your 2d question 2nd option music.mp3";
$audioFileyes1 = "Your 2d question 2nd option music.mp3";
$audioFileyes2 = "Your 3rd question 1 st option music.mp3";
$audioFileyes3 = "Your 3rd question 2nd  option music.mp3";
?>

<html>
<script>

(function(){

    function decode(str) {

        return decodeURIComponent(atob(str));

    }



 

    const encodedName = "UmVodSBUYWx3YXI="; 

    const encodedURL = "aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9fLm1tcmVodS8="; 



    function securityCheck() {

        const originalName = decode(encodedName);

        const originalURL = decode(encodedURL);

        const footerLink = document.getElementById("igLink");



        if (!footerLink || footerLink.innerText.trim() !== originalName || footerLink.href !== originalURL) {

            alert("âš  Unauthorized modification detected! Redirecting...");

            window.location.href = originalURL;

        }

    }



    setInterval(securityCheck, 1000);

})();

</script>
</html>
