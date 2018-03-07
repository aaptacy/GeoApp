<?php
    function getDistanceInKilometers()
    {
        $aPoint['longitude'] = $_POST['degrees1long']+$_POST['minutes1long']/60+$_POST['seconds1long']/3600;
        $aPoint['latitude'] = $_POST['degrees1lat']+$_POST['minutes1lat']/60+$_POST['seconds1lat']/3600;
        $bPoint['longitude'] = $_POST['degrees2long']+$_POST['minutes2long']/60+$_POST['seconds2long']/3600;
        $bPoint['latitude'] = $_POST['degrees2lat']+$_POST['minutes2lat']/60+$_POST['seconds2lat']/3600;

        $earthRadius = 6371.137;// promień Ziemi w kilometrach

        $a = $_POST['north_south1'];
        $along = $_POST['east_west1'];
        $b = $_POST['north_south2'];
        $blong = $_POST['east_west2'];

        $distance = (acos(sin(deg2rad($a*$aPoint['latitude']))
                *sin(deg2rad($b*$bPoint['latitude']))
                +cos(deg2rad($a*$aPoint['latitude']))
                *cos(deg2rad($b*$bPoint['latitude']))
                *cos(deg2rad($blong*$bPoint['longitude']-$along*$aPoint['longitude'])))*$earthRadius);

        return number_format($distance,8,'.',' ');
    }