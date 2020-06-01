<?php if ($data['reponse'] !== null) { ?>
	<div class="row">
		<div class="col-md-12">
			<?php if ($data['reponse'] == true) { ?>
				<div class="alert alert-success">
					<?= $data['message'] ?>
				</div>
			<?php } ?>

			<?php if ($data['reponse'] == false) { ?>
				<div class="alert alert-danger">
					<?= $data['message'] ?>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>