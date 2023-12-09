<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/signup.css">
</head>

<body>
	<div class="d-flex justify-content-center align-items-center vh-100">

		<form class="shadow w-450 p-3" action="./signupcon.php" method="post">

			<h4 class="display-4  fs-1">Create Account</h4><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo htmlspecialchars($_GET['error']); ?>
				</div>
			<?php } ?>

			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo htmlspecialchars($_GET['success']); ?>
				</div>
			<?php } ?>

			<div class="mb-3">
				<label class="form-label">Full Name</label>
				<input type="text" class="form-control" name="full_name" value="<?php echo (isset($_GET['full_name'])) ? htmlspecialchars($_GET['full_name']) : "" ?>">
			</div>

			<div class="mb-3">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo (isset($_GET['email'])) ? htmlspecialchars($_GET['email']) : "" ?>">
			</div>

			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="password">
			</div>

			<button type="submit" class="btn btn-primary btn-lg active">Create</button>
			<a href="./user.php" class="btn btn-secondary btn-lg active">Back</a>
		</form>
	</div>
</body>

</html>