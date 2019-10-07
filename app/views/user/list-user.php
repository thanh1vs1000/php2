<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th><a href="add-user">Create</a></th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($user as $pro): ?>
			
		<tr>
			<td><?php echo $pro->id ?></td>
			<td><?php echo $pro->name ?></td>
			<td><?php echo $pro->email ?></td>
			<td><a href="delete-user?id=<?php echo $pro->id ?>" title="">Xóa</a></td>
			
		
		</tr>
		<?php endforeach ?>
	</tbody>
</table>