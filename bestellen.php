<?php
/**
 * Created by PhpStorm.
 * User: Niels Helmantel
 * Date: 6-1-2017
 * Time: 00:17
 */

session_start();

include("HTML HEAD.php");
include "database.php";
$pdo = connecttodb();

?>

<h1>Bestelling afronden.</h1>



<table class="col-md-6 producten table">
	<tr>
		<th>Product</th>
		<th>Prijs</th>
		<th>Aantal</th>
	</tr>
	<?php
		$subtotaal = 0;
		$totaal = 0;
		if (isset($_SESSION['winkelwagen'])) {
			foreach ($_SESSION['winkelwagen'] as $item) {
				$subtotaal = $item['prijs'] * $item['aantal'];
				$totaal += $subtotaal;
				echo "<tr>";
				echo "<td>" . $item['productnummer'] . "</td>";
				echo "<td>" . $item['prijs'] . "</td>";
				echo "<td>" . $item['aantal'] . "</td>";
				echo "</tr>";
			}
		}
		?>
                </tr>
                <tr>
                    <td>Totaal</td>
                    <?php
                    echo "<td>" . $totaal . " Euro" ."</td>";
                    ?>
				</tr>
</table>



		<form class="winkelwagenknop" action="winkelwagen.php">
		<button><link href="winkelwagen.php">Terug naar winkelwagen</button>
		</form>
		<br>
		<br>


		<?php





		?>
		<form class="afrondknop" action="bestelt.php">
		<button>Bestelling definitief afronden</button>
		<br>
		</form>


	//-->$winkelwagen = array(
	//	'productnummer' => $productnummer,
	//	'prijs' => $prijs,
	//	'aantal' => $aantal

//	);

//	$bestelnummer =+ 1;
//	$emailadres = $_GET[$user];
//	$productnummer = $_GET['productnummer'];
//	$aantal = $_GET['aantal'];
//	$datum = date("Y-m-d H:i:s");
//	$betaald = 0;


//	$stmt = $pdo->prepare("INSERT INTO bestelregel (bestelnummer, emailadres, productnummer,
//	aantal, datum, betaald) VALUES (:bestelnummer, :email, :pnummer, :aantal, :datum, :betaald)");

//	$stmt->execute(array(
//    	"bestelnummer" => $bestelnummer,
//    	"email" => $emailadres,
  //  	"pnummer" => $productnummer,
    //	"aantal" => $aantal,
    //	"datum" => $datum,
    //	"betaald" => $betaald,

//	));


?>