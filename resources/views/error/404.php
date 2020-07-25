<div id="content">
	<div class="bg bg-dark"></div>
	<div class="row m-0 p-0 w-100 h-100">

		<div class="row col60 rounded bg-light h-50 position-relative m-auto">

			<div class="h-100 col45 p-3">
				<img src="resources/images/system-images/avatar/avatar-confused.png" class="w-100 h-100 rounded-circle">
			</div>

			<div class="h-100 col55 p-3 text-center row m-0">

				<div class="m-auto">
					<p class="font3 font-weight-bold"><?php echo $view->get('content')['messages']['not-found']; ?></p>
					<p class="font4">Não foi possível encontrar o caminho "<?php echo $view->get('pathFailed'); ?>"</p>
				</div>
				
			</div>
		
		</div>

	</div>
</div>
