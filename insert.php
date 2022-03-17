<!-- connection and form filling -->
<?php> include "fetch.php";<?>

<?php  
// include "fetch.php";
$user_name = $_POST['user_name'];
$country1 = $_POST['country1'];

if(!empty($user_name) || !empty($country1)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "atlas";

    //create conection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    //throw error if any
    if (mysqli_connect_error()){
        die('Database connection error(:'.mysqli_connect_errno().')'.mysqli_connect_error());
    }
//     else {
//         $SELECT = select 'state' from 'atlas.states' where $country1='atlas.countries.ID';
//     }
// }
else{
    echo 'Fill all fields';
    die();
}


?>
