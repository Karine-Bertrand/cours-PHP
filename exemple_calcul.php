 <?php 
 
    // * Créer deux variables : 
        // $time   // Temps en secondes pour finir la partie
        // $coins  // Pièces acquises pendant la partie
    // 
    // Le joueur marque des points en cumulant les 3 éléments suivants :
    // 
        // temps < 120s : 200 points
        // temps >= 120s et < 180s : 100 points
        // temps >= 180s : 50 points
    // 
        // coins <= 10 : un point par coin acquise
        // coins > 10 et <= 20 : 1,5 point par coin acquise
        // coins > 20 : 2 points par coin acquise
    // 

$time=110; //0;   
$coins=11; //0;   
$points_time=0;     // nb de pts selon les conditions de temps
$points_coins=0;    // nb de pts selon les conditions de coins
$points=$points_time+$points_coins;

if ($time<120) {
    $points_time=200;
} else {
    if ($time>=120 && $time < 180) {
        $points_time = 100;
    } else {
        $points_time = 50;
    }
}

if ($coins > 20) {
    $points_coins = $coins * 2;
} else {
    if ($coins > 10 && $coins <= 20) {
        $points_coins = $coins * 1.5;
    } else {
        $points_coins = $coins;
    }
}
$points=$points_time+$points_coins;

echo "Vos gains : " . $points . "</br>" . "avec : " . $time . "s" . " et " . $coins . " coins";
var_dump($points_time);
var_dump($points_coins);

?>

