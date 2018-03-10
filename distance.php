<?php
/**
 * @param $postName
 * @param $variableType
 * @return mixed
 */
function sanitizeData($postName, $variableType)
    {
        if ($variableType === 'int') {
            return filter_input(INPUT_POST, $postName, FILTER_SANITIZE_NUMBER_INT);
        }

        if($variableType === 'float') {
          return filter_input(INPUT_POST, $postName, FILTER_SANITIZE_NUMBER_FLOAT);
        }


    }
    function getDistance()
    {
        $aPoint['longitude'] = sanitizeData('degrees1long', 'int')
                              +sanitizeData('minutes1long', 'int')/60
                              +sanitizeData('seconds1long', 'float')/3600;
        $aPoint['latitude'] = sanitizeData('degrees1lat', 'int')
                             +sanitizeData('minutes1lat', 'int')/60
                             +sanitizeData('seconds1lat', 'float')/3600;

        $bPoint['longitude'] =   sanitizeData('degrees2long', 'int')
                                +sanitizeData('minutes2long', 'int')/60
                                +sanitizeData('seconds2long', 'float')/3600;
        $bPoint['latitude'] = sanitizeData('degrees2lat', 'int')
                             +sanitizeData('minutes2lat', 'int')/60
                             +sanitizeData('seconds2lat', 'float')/3600;

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

        return number_format($distance,4,'.',' ');
    }