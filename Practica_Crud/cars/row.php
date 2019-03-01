<tr>
	<td><?=$car['id']?></td>
	<td><?=$car['datee']?></td>
	<td><?=$car['status']?></td>
	<td>
		<a class="btn btn-warning" href="/cars/update.php?id=<?=$car['id']?>">Editar</a>
		<a class="btn btn-danger" href="/cars/delete.php?id=<?=$car['id']?>">Eliminar</a>
	</td>
</tr>