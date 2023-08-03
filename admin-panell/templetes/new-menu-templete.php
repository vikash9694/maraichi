<?php
     if(isset($_GET['id'])){

		$sql = "SELECT * FROM menus WHERE id=".$_GET['id'];
		$sql1 = $con->query($sql);
		$sqlarr = $sql1->fetch_assoc();
	
  	 }
   ?>

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
		<form action="menu-list.php" method="post">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4">
					<h4 class="fs-20 font-w600 mb-0 me-auto">New Job</h4>
					<div>
						<a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"> <i class="fas fa-envelope"></i></a>
						<a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
						<a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>
					
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">page_name<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" name="page_name" placeholder="page_name" aria-label="name" value="<?php if(isset($_GET['id'])){echo $sqlarr['page_name']; } ?>">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">page_slug<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" name="page_slug" placeholder="page_slug" aria-label="name" value="<?php if(isset($_GET['id'])){echo $sqlarr['page_slug']; } ?>">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">page_url<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" name="page_url" placeholder="page_url" aria-label="name" value="<?php if(isset($_GET['id'])){echo $sqlarr['page_url']; } ?>">
									</div>
								<div>
									<span>Status:<label class="radio-inline mx-3"><input type="radio" name="status" value="active" <?php  if(isset($_GET['id'])){ echo ($sqlarr['status']=="active")?'checked="checked"':""; } ?> > Active</label></span>
									<span><label class="radio-inline me-3"><input type="radio" name="status" value="inactive" <?php  if(isset($_GET['id'])){ echo ($sqlarr['status']=="inactive")?'checked="checked"':""; } ?>  > In Active</label></span>
								</div>
								<input type="hidden" name="hiddenid" value="<?php if(isset($_GET['id'])){echo $sqlarr['id']; } ?>">
							</div>
							<div class="card-footer text-end">
								<div>
									<input type="submit" name="close" class="btn btn-primary me-3"  value="close">
									<input type="submit" name="submit" class="btn btn-secondary" value="submit">
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			</form>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->