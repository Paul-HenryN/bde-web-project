<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Suggestion page</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
		<link rel="stylesheet" href="main.css">
		<link rel="icon" href="/favicon.png" sizes="32x32">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script defer src="main.js"></script>
	</head>
	<body>
		<div id="nav-container"></div>
		<section class="hero is-fullheight">
			<div class="hero-body">
				<div class="container">
					<div class="columns is-vcentered">
						<div id="main" class="column is-half is-centered has-nice-link">
							<img id="app-icon"" width="128" height="128">
							<h1 class="title is-2">Suggest</h1>
							<h2 class="title is-6">We appreciate your suggestions 🙌</h2>
							<div id="additional-info"></div>
							<form id="feedback-form" action="https://formcarry.com/s/UBfgr97yfY" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="_gotcha">
								
								<div class="field">
									<label class="label" for="email">Name*</label>
									<div class="control">
										<input class="input is-medium" type="email" name="email" autocomplete="email" required>
									</div>
								</div>
								<div class="field">
									<label class="label" for="email">Event Name*</label>
									<div class="control">
										<input class="input is-medium" type="email" name="email" autocomplete="email" required>
									</div>
								</div>
								<div class="field">
									<label class="label" for="email">Email*</label>
									<div class="control">
										<input class="input is-medium" type="email" name="email" autocomplete="email" required>
									</div>
								</div>
								<div class="field">
									<label class="label" for="message">Description*</label>
									<div class="control">
										<textarea class="textarea is-medium" placeholder="I'm a human. Please be nice." name="message" minlength="20" rows="7" required autofocus></textarea>
									</div>
								</div>
								<div class="field">
									<label class="label" for="email">Attachments</label>
									<div class="control">
										<input type="file" name="attachments" multiple>
									</div>
								</div>
								
								<br>
								<div class="field">
									<div class="control">
										<button class="button is-medium is-primary is-info" type="submit">Send suggestion</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
