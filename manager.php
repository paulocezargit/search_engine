<?php include("header.php"); ?>

<section class="s-manager">
	<form id="manager-form" method="POST" action="assets/php/actions/register-manager.php" class="s-manager-box">
		<h1 class="s-manager-title">Register Site</h1>

		<div class="s-manager-group">
			<label class="s-manager-label">Name</label>
			<input type="text" name="name" id="name" class="s-manager-input" placeholder="Website name">
		</div>
		<div class="s-manager-group">
			<label class="s-manager-label">Url</label>
			<input type="text" name="url" id="url" class="s-manager-input" placeholder="Website url">
		</div>
		<div class="s-manager-group">
			<label class="s-manager-label">Description</label>
			<textarea name="description" id="description" class="s-manager-textarea" rows="4" placeholder="Website description"></textarea>
		</div>
		<div class="s-manager-group">
			<label class="s-manager-label">Keys</label>
			<textarea name="keys" id="keys" class="s-manager-textarea" rows="4" placeholder="Website keys"></textarea>
		</div>
		<input type="hidden" name="type_register" value="save">
		<div class="s-manager-group s-manager-align">
			<button type="submit" class="s-manager-button" id="manager-submit">Save</button>
		</div>
	</form>

</section>

<?php include("footer.php"); ?>