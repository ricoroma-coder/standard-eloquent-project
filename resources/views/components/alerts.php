<?php
	if (isset($data) && !empty($data)) {
		if (isset($data['error'])) {
			foreach ($data['error'] as $value) {
?>
				<div class="col-sm-12 messages">
					<div class="col100 alert alert-danger" role="alert">
						<?php echo $value; ?>
					</div>
				</div>
<?php
			}
		}
		else if (isset($data['success'])) {
			foreach ($data['success'] as $value) {
?>
				<div class="col-sm-12 messages">
					<div class="col100 alert alert-success" role="alert">
						<?php echo $value; ?>
					</div>
				</div>
<?php
			}
		}
	}

?>