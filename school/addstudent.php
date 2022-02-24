<?php
	if(isset($_POST['submit'])){
		$section = $_POST['section'];
		if($section != ""){
			echo "<script>console.log('".$section."')</script>";
		} else{
			echo "<script>console.log('no data')</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="./tailwind.css" />
	</head>
	<body>
		<div class="h-screen w-screen overflow-hidden">
			<div class="relative h-full w-full flex items-center justify-center">
				<form
					method="POST"
					action="./addstudent.php"
					class="relative h-auto w-[500px] bg-white border px-4 py-5 grid gap-8"
				>
					<div class="relative w-full font-extrabold">Add a student</div>
					<div class="relative w-full h-auto grid gap-8 grid-cols-2">
						<div class="relative h-auto w-auto grid gap-2">
							<div class="relative text-sm font-semibold">Student Name</div>
							<div class="relative h-[40px] w-full rounded-md border">
								<input
									required
									type="text"
									name="username"
									placeholder="username"
									minlength="4"
									maxlength="40"
									class="h-full w-full px-3 text-xs bg-transparent"
								/>
							</div>
						</div>
						<div class="relative h-auto w-auto flex items-center">
							<div class="relative h-auto w-auto grid gap-2">
								<div class="relative text-sm font-semibold">Section</div>
								<div class="relative h-auto w-auto flex items-center">
									<div
										class="relative h-[40px] text-xs font-semibold w-[120px]"
									>
										<input
											required
											type="radio"
											name="section"
											value="technical"
											class="h-[20px] w-[20px] px-3 text-xs bg-transparent"
										/>
										Technical
									</div>
									<div
										class="relative h-[40px] text-xs font-semibold w-[120px]"
									>
										<input
											required
											type="radio"
											name="section"
											value="general"
											class="h-[20px] w-[20px] px-3 text-xs bg-transparent"
										/>
										General
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="relative w-full h-auto grid gap-8 grid-cols-2">
						<div class="relative h-auto w-auto grid gap-2">
							<div class="relative text-sm font-semibold">Current Grade</div>
							<div class="relative h-[40px] w-full rounded-md border">
								<input
									required
									type="number"
									name="class"
									placeholder="class"
									min="1"
									max="12"
									class="h-full w-full px-3 text-xs bg-transparent"
								/>
							</div>
						</div>
						<div class="relative h-auto w-auto grid gap-2">
							<div class="relative text-sm font-semibold">Roll number</div>
							<div class="relative h-[40px] w-full rounded-md border">
								<input
									required
									type="number"
									name="rollno"
									placeholder="rollno"
									min="1"
									max="100"
									class="h-full w-full px-3 text-xs bg-transparent"
								/>
							</div>
						</div>
					</div>
					<div class="relative w-full h-auto">
						<div class="relative h-auto w-auto grid gap-2">
							<div
								class="relative h-[40px] w-full rounded-md border bg-blue-500 text-white font-extrabold"
							>
								<input
									type="submit"
									name="submit"
									placeholder="class"
									value="Add"
									class="h-full w-full px-3 bg-transparent cursor-pointer"
								/>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
