<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script scr="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Blood Type | LifeFlow</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cover">
        <h1 class="title">SEARCH BLOOD TYPE</h1>
        <div class="srch">
            <form method="post">
                <input type="text" name="search" placeholder="Search...">
                <button class="srch-btn" name="submit" type="submit">Search</button>
            </form>
        </div>
        <div class="hospital_list">
            <p><b>Mandaluyong City Medical Center</b></p>
            <p><b>Located in: </b>Addition Hills Elementary School - Mandaluyong</p>
            <p><b>Address: </b>F. Martinez Ave, Mandaluyong, 1550 Metro Manila</p>
            <p><b>Hours: </b>Open Now</p>
            <p><b>Phone: </b>(02)8532 0480</p>
            <input type="button" value="Check on the map" onclick="McMc()">
            <iframe id="map1" style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2863526714623!2d121.03406507407996!3d14.58275217751542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8359c3d4077%3A0x9d1b4e7026186ba9!2sMandaluyong%20City%20Medical%20Center!5e0!3m2!1sen!2sph!4v1700664339590!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <script src="mapScript.js"></script>
            <br>
            <br>

            <p><b>Health Cube Medical Clinics - Shaw</b></p>
            <p><b>Located in: </b>High Pointe Medical Hub</p>
            <p><b>Address: </b>241 Shaw Blvd, Mandaluyong, 1552 Metro Manila</p>
            <p><b>Hours: </b>Open ⋅ Closes 6PM</p>
            <p><b>Phone: </b>(02) 8652 1111</p>
            <input type="button" onclick="HcMc()" value="Check on the map">
            <iframe id="map2" style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.138833165104!2d121.03021497408027!3d14.591163777309678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9cd3669d10d%3A0x22d91eae626d1012!2sHealth%20Cube%20Medical%20Clinics%20-%20Shaw!5e0!3m2!1sen!2sph!4v1700661630080!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <script src="mapScript.js"></script>
            <br>
            <br>

            <p><b>VRP Medical Center</b></p>
            <p><b>Address: </b>163 Epifanio de los Santos Ave, Mandaluyong, 1501 Metro Manila</p>
            <p><b>Hours: </b>Open 24 hours</p>
            <p><b>Phone: </b>(02) 8464 9999</p>
            <input type="button" value="Check on the map" onclick="vrp()">
            <iframe id="map3" style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.386699228619!2d121.04750777407983!3d14.577027677655433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c846d0f1f3db%3A0xeae8de5f7569f35d!2sVRP%20Medical%20Center!5e0!3m2!1sen!2sph!4v1700661972891!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <script src="mapScript.js"></script>
        </div>
    </div>
</body>
</html>