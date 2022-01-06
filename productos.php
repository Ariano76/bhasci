<?php include("template/cabecera.php");?>

<?php 
/*include("administrador/config/bd.php");*/
use Phppot\DataSource;
require_once './administrador/config/bd.php';
$db = new DataSource();
$conn = $db->getConnection();

/*$sql = $conexion->prepare("select * from libros");
$sql = $conn->prepare("select * from libros");
$sql->execute();*/

$sqlSelect = "SELECT * FROM libros";
$listaLibros = $db->select($sqlSelect);


/*$listaLibros = $result->fetchAll(PDO::FETCH_ASSOC);*/

?>

<div class="container">
	<div class="row">


		<?php foreach ($listaLibros as $libro) {?>

			<div class="col-md-3">			
				<div class="card text-center">
					<img class="card-img-top" src="./img/<?php echo $libro['imagen']; ?>" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">ver mas</a>
					</div>
				</div>
			</div>

			
		<?php }
		?>	


	</div>
</div>





<?php include("template/pie.php"); ?>