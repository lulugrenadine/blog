<h2>Gestion des articles</h2>

<hr />  <!-- pour faire un trait -->

<div class="actions">
	<a href="add_article.php">Ajouter un article</a>
</div>

<table>

<table class="articles">

	<thead>
		<th style="width:40px;">ID</th>
		<th style="width:200px;">Titre</th>
		<th style="width:150px;">Date</th>
		<th style="width:100px;">Actions</th>
		
	</thead>
	
	<?php while ($row = mysql_fetch_assoc($articles)) { ?>
			<tr>
				<td><?php echo $row['id_article'] ?></td>
				<td><?php echo $row['title'] ?></td>
				<td><?php echo $row['date'] ?></td>
				<td>
					<a href="edit_article.php?id_article=<?php echo $row['id_article']?>"> 
					Modifier</a>
					<a href="gestion_articles.php?action=delete_article&id_article=<?php echo $row['id_article']?>">
					Supprimer</a>
				</td>
			</tr>
		<?php } ?>
	
</table>