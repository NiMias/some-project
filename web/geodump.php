<?php //phpinfo();
set_time_limit(600);

$mysqli = new mysqli(
        'localhost', // host
        'root', // user
        'nopsnops', // pass
        'symfony' // dbname
        );

$mysqli->set_charset("utf8");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$f = fopen('ualist.csv', 'r');
$x = 0;

while(($line = fgetcsv($f, null, ";")) != 0) {
    $line[0] = $mysqli->real_escape_string($line[0]);
    $result =  $mysqli->query("SELECT `oblast_id` FROM `oblast` WHERE `name` = '" . $line[0] . "'");
    
    if($result && $result->num_rows > 0) {
        $oblast = $result->fetch_assoc();
        $oblast_id = $oblast['oblast_id'];
    } else {
        $result = $mysqli->query("INSERT INTO `oblast` (`name`) VALUES ('" . $line[0] . "')");
        
        if(!$result || ($oblast_id = $mysqli->insert_id) == 0) {
            var_dump($line);
            exit('1');
        }
    }
    
    
    $line[1] = $mysqli->real_escape_string($line[1]);
    $result =  $mysqli->query("SELECT `rayon_id` FROM `rayon` WHERE `name` = '" . $line[1] . "' AND `oblast_id` = " . $oblast_id . "");
    
    if($result->num_rows > 0) {
        $rayon = $result->fetch_assoc();
        $rayon_id = $rayon['rayon_id'];
    } else {
        $result = $mysqli->query("INSERT INTO `rayon` (`name`, `oblast_id`) VALUES ('" . $line[1] . "', " . $oblast_id . ")");
        
        if(!$result || ($rayon_id = $mysqli->insert_id) == 0) {
            var_dump($line);
            exit('2');
        }
    }
    
    
    $line[2] = $mysqli->real_escape_string($line[2]);
    $result =  $mysqli->query("SELECT `misto_id` FROM `misto` WHERE `name` = '" . $line[2] . "' AND `rayon_id` = " . $rayon_id . "");
    
    if($result->num_rows > 0) {
        $misto = $result->fetch_assoc();
        $misto_id = $misto['misto_id'];
    } else {
        $result = $mysqli->query("INSERT INTO `misto` (`name`, `rayon_id`) VALUES ('" . $line[2] . "', " . $rayon_id . ")");
        
        if(!$result || ($misto_id = $mysqli->insert_id) == 0) {
            var_dump($line);
            exit('3');
        }
    }
    
}

exit("ok\n");