<?php require_once('public/inc/header.inc.php'); 
if (userConnect()) {
?>
		<div><a href="index.php?op=new">Ajouter un utilisateur</a></div>
		<table class="contacts">
			<thead>
				<tr>
					<th>Username</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Password</th>
					<th colspan="2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user) :  ?>
					<tr>
						<td><?php echo htmlentities($user->username);  ?></td>
						<td><?php echo htmlentities($user->firstname);  ?></td>
						<td><?php echo htmlentities($user->lastname);  ?></td>
						<td><?php echo htmlentities($user->password);  ?></td>
						<td>
							<a href="index.php?op=delete&id=<?php echo $user->id_user; ?>">
								delete
							</a>

						</td>
						<td>
							<a href="index.php?op=update&id=<?php echo $user->id_user; ?>">
								update
							</a>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
<?php 
    header('location:profil.php');
    exit();
} ?>




