<? echo $content; ?>


<h3><?php echo $title ?></h3>


<form method="post" action="/_assets/mail.php" id="form" name="form" class="form">
	<div class="form-group name">
		<input id="name" name="name" type="text" class="form-control" placeholder="name">
	</div>
	<div class="form-group phone">
		<input id="phone" name="phone" type="tel" class="form-control" placeholder="phone">
	</div>
	<div class="form-group email">
		<input id="email" name="email" type="email" class="form-control" placeholder="email">
	</div>
	<div class="form-group checks">
		<p>please check the relevant categories</p>
		<div class="checkbox">
			<label>
				<input id="category" name="category[]" type="checkbox" value="Category 1"> Category 1
			</label>
			<label>
				<input id="category" name="category[]" type="checkbox" value="Category 2"> Category 2
			</label>
			<label>
				<input id="category" name="category[]" type="checkbox" value="Category 3"> Category 3
			</label>
			<label>
				<input id="category" name="category[]" type="checkbox" value="Category 4"> Category 4
			</label>
		</div>
	</div>
	<div class="form-group comments">
		<textarea id="comments" name="comments" class="form-control" placeholder="comments" rows="5"></textarea>
	</div>
	<div class="form-group blank"><button id="submit" type="submit" class="btn btn-primary btn-block">&emsp;send&emsp;</button></div>
</form>


<div class="confirmation">
	<p>Thanks! We will contact you soon.</p>
</div>