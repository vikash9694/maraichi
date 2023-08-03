<?php




if (isset($_GET['id'])) {

	$sql = "SELECT * FROM home_page WHERE id=" . $_GET['id'];
	$sql1 = $con->query($sql);
	$updErr = $sql1->fetch_assoc();

}
?>

<!--**********************************
			Content body start
		***********************************-->
<div class="content-body">
	<form action="form-element.php" method="POST" enctype="multipart/form-data">
		<!-- row -->
		<div class="container-fluid">
			<div class="d-flex align-items-center mb-4">
				<h4 class="fs-20 font-w600 mb-0 me-auto">New Job</h4>
				<div>
					<a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"> <i
							class="fas fa-envelope"></i></a>
					<a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i
							class="fas fa-phone-alt"></i></a>
					<a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>

				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								
								<div class="col-xl-4  col-md-4 mb-4">
									<label class="form-label font-w600">Section1 heading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section1-heading"
										placeholder="Section1 heading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section1-heading'];
										} ?>">
								</div>
								

								<div class="col-xl-4  col-md-4 mb-4">
									<label class="form-label font-w600">Section1 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section1-subheading"
										placeholder="Section1 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section1-subheading'];
										} ?>">
								</div>


								<div class="col-xl-4  col-md-4 mb-4">
									<label class="form-label font-w600">Section1 image<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section1-image"
										placeholder="Section1 image" aria-label="name" value="">
									<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section1-image']; ?>"
											width="50"><?php } ?>
								</div>
									
								<div class="col-xl-4  col-md-4 mb-4">
									<label class="form-label font-w600">Section2 heading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section2-heading"
										placeholder="Section2 heading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section2-heading'];
										} ?>">
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section2 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section2-subheading"
										placeholder="Section2 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section2-subheading'];
										} ?>">
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section 3 image<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section3-image"
										placeholder="Section3 image" aria-label="name" value="">
										<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section3-image']; ?>"
											width="50"><?php } ?>
								</div>

								



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section4 heading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section4-heading"
										placeholder="Section4 heading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section4-heading'];
										} ?>">
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section4 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section4-subheading"
										placeholder="Section4 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section4-subheading'];
										} ?>">
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section4 image<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section4-image"
										placeholder="Section4 image" aria-label="name" value="">
										<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section4-image']; ?>"
											width="50"><?php } ?>
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section5 discount code<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section5-discount-code"
										placeholder="Section5 discount code" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section5-discount-code'];
										} ?>">
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section5 image<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section5-image"
										placeholder="Section5 image" aria-label="name" value="">
										<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section5-image']; ?>"
											width="50"><?php } ?>
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section6 heading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section6-heading"
										placeholder="Section6 heading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section6-heading'];
										} ?>">
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section6 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section6-subheading"
										placeholder="Section6 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section6-subheading'];
										} ?>">
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section6 image<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section6-image"
										placeholder="Section6 image" aria-label="name" value="">
										<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section6-image']; ?>"
											width="50"><?php } ?>
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section7 image<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section7-image"
										placeholder="Section7 image" aria-label="name" value="">
										<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section7-image']; ?>"
											width="50"><?php } ?>
								</div>

								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section7 logo<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="file" class="form-control solid" name="section7-logo"
										placeholder="Section7 logo" aria-label="name" value="">
										<?php if (isset($_GET['id'])) { ?><img src="../images/<?php echo $updErr['section7-logo']; ?>"
											width="50"><?php } ?>
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section7 heading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section7-heading"
										placeholder="Section7 heading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section7-heading'];
										} ?>">
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section7 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section7-subheading"
										placeholder="Section7 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section7-subheading'];
										} ?>">
								</div>


								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section8 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section-new"
										placeholder="Section7 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section-new'];
										} ?>">
								</div>



								<div class="col-xl-6  col-md-6 mb-4">
									<label class="form-label font-w600">Section8 subheading<span
											class="text-danger scale5 ms-2">*</span></label>
									<input type="text" class="form-control solid" name="section-subnew"
										placeholder="Section7 subheading" aria-label="name"
										value="<?php if (isset($_GET['id'])) {
											echo $updErr['section-subnew'];
										} ?>">
								</div>

								<div>
									<span>Status:<label class="radio-inline mx-3"><input type="radio" name="status"
												value="active" <?php if (isset($_GET['id'])) {
													echo ($updErr['status'] == "active") ? 'checked="checked"' : "";
												} ?>>
											Active</label></span>
									<span><label class="radio-inline me-3"><input type="radio" name="status"
												value="inactive" <?php if (isset($_GET['id'])) {
													echo ($updErr['status'] == "inactive") ? 'checked="checked"' : "";
												} ?>> In
											Active</label></span>
								</div>

								<input type="hidden" name="hiddenid"
									value="<?php if (isset($_GET['id'])) {
										echo $updErr['id'];
									} ?>">
							</div>
							<div class="card-footer text-end">
								<div>

									<input type="submit" name="submit" class="btn btn-secondary" value="submit">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<fieldset>

								<legend>Hello</legend>



								</fieldset>
	</form>
	
</div>
<!--**********************************
			Content body end
		***********************************-->