<?php include("header.php"); ?>

<section class="s-manager">
	<form method="POST" action="assets/php/actions/register-manager.php" class="s-manager-box">
		<h1 class="s-manager-title">Register Site</h1>
		
		<div class="s-manager-group">
			<label class="s-manager-label">Name</label>
			<input type="text" name="name" class="s-manager-input" placeholder="Website name">
		</div>
		<div class="s-manager-group">
			<label class="s-manager-label">Url</label>
			<input type="text" name="url" class="s-manager-input" placeholder="Website url">
		</div>
		<div class="s-manager-group">
			<label class="s-manager-label">Description</label>
			<textarea name="description" class="s-manager-textarea" rows="4" placeholder="Website description"></textarea>
		</div>
		<div class="s-manager-group">
			<label class="s-manager-label">Keys</label>
			<textarea name="keys" class="s-manager-textarea" rows="4" placeholder="Website keys"></textarea>
		</div>
		<input type="hidden" name="type_register" value="save">
		<div class="s-manager-group s-manager-align">
			<button class="s-manager-button">Save</button>
		</div>
	</form>
</section>

<?php include("footer.php"); ?>