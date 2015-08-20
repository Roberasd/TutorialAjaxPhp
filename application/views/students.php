<?php include("parts/header.php"); ?>
		<section> 
	       <article>
	       		<h2 id="titles">Lista de Estudiantes</h2>
	         	<table class="table table-hover">
		            <tr>
		              	<th>Nombre</th>
		             	<th>Apellidos</th>
		             	<th>Email</th> 
		             	<th>Edad</th> 
		            </tr>  

		            <?php
		              if($students == null) {
		            ?>
		            
		            <td colspan="8"> <?php echo "No hay registros" ?> </td>
		              <?php

		            }else
		            {


		              for($i=0;$i<count($students);$i++){ ?>
		            <tr>
		              	<td>	<?php echo $students[$i]['nombre'] 		?>	</td>
		             	<td>	<?php echo $students[$i]['apellidos']	?>	</td>
		             	<td>	<?php echo $students[$i]['email'] 		?>	</td>
		             	<td>	<?php echo $students[$i]['edad'] 		?>	</td>
		            </tr>

		         <?php  } //fin del for
		            }  //fin del if

		          ?>
	         </table>        
	       </article>
       	</section>
<?php include("parts/footer.php"); ?>