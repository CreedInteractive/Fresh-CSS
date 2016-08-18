<section id="progressbar">
	<h2>Score</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
	    		<div class="progress progress--score">
					<div class="progress__green" style="width:<?php echo (12/24) * 100; ?>%;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="progress progress--score">
					<div class="progress__yellow" style="width:<?php echo (2/24) * 100; ?>%;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="progress progress--score">
					<div class="progress__red" style="width:<?php echo (20/24) * 100; ?>%;"></div>
				</div>
			</div>
		</div>
	</div>

	<h2>Subscore</h2>
	<div class="container-fluid subscore">
		<div class="row">
			<div class="col-sm-4">
	    		<div class="progress progress--subscore">
					<div class="progress__green" style="width:<?php echo (16/24) * 100; ?>%;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="progress progress--subscore">
					<div class="progress__yellow" style="width:<?php echo (23/24) * 100; ?>%;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="progress progress--subscore">
					<div class="progress__red" style="width:<?php echo (1/24) * 100; ?>%;"></div>
				</div>
			</div>
		</div>
	</div>
</section>
