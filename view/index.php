<!-- EJECUTAMOS EL HEADER -->
<?php require "layout/header.php" ?>

<h1>Mi lista de tareas</h1>
<form action="InsertaTarea.php" method="POST">     
    <input type="text" name="nombreTareaIns" placeholder="Tarea...">                                    
    <input type="submit" class="btn btn-primary btn-block" value="Guardar">
</form>

<br>

<table border="1">
	<tr>
		<td>Id</td>
		<td>Tarea</td>
		<td>Estado</td>
	</tr>
    <tbody>
	    <?php 
        if(!empty($dato)):
            foreach ($dato as $key => $value)
                foreach ($value as $va ):
        ?>                
                    <tr>
                        <td><?php echo $va['idTarea'] ?></td>
                        <td><?php echo $va['nombreTarea'] ?></td>
                        <td><?php echo $va['estadoTarea'] ?></td>
                        <td>
                            <form action="ActualizaEstado.php" method="POST">                        
                                <input type="hidden" name="idTareaAct" value="<?php echo $va['idTarea']  ?>">
                                <input type="hidden" name="nombreTareaAct" value="<?php echo $va['nombreTarea']  ?>">
                                <input type="hidden" name="estadoTareaAct" value="<?php echo $va['estadoTarea']  ?>">                                        
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            </form>
                        </td>
                        <td>
                            <form action="EliminaTarea.php" method="POST">                        
                                <input type="hidden" name="idTareaEli" value="<?php echo $va['idTarea']  ?>">                                        
                                <input type="submit" class="btn btn-primary btn-block" value="Eliminar">
                            </form>
                        </td>
                    </tr>
            <?php endforeach; 
        else:?>
            <tr>
                <td colspan="3">No hay registros</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>

<!-- EJECUTAMOS EL FOOTER -->
<?php require "layout/footer.php" ?>