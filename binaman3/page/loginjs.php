
			<?php 
			if(!empty($_POST)){
			$username = htmlspecialchars($_POST['username']);
			$password = md5($_POST['password']);
			
			$stmt = $pdo->prepare("SELECT * FROM login WHERE username = :username");
			$stmt->execute(['username' => $username]);
			$row = $stmt->fetch();
			
			$hash_pass = $row['password'];
			if($password == $hash_pass){
				$_SESSION['login']=array('user' => $username, 'password' => $password);
				echo "<script type='text/javascript'>alert('Login Berhasil!');</script>";
				echo("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./\">");
			} else { 
				echo "<script type='text/javascript'>alert('Login Tidak Berhasil!');</script>";
			}
			}
			?>
			<!-- ============================ Page Title End ================================== -->
			<section class="image-bg hero-header" style="background:#016551 url(assets/img/login-js.png) no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-12">
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-bloc-body pt-3">
									<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
										<li class="nav-item">
                                        <h2 class="m-2">LOGIN JOB SEEKER</h2>
										</li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab" tabindex="0">
											<div class="row gx-3 gy-4">
												<div class="modal-login-form">
													<form action="" method="POST">
													
														<div class="form-floating mb-4">
															<input type="text" name="username" class="form-control" placeholder="name@example.com">
															<label>User Name</label>
														</div>
														
														<div class="form-floating mb-4">
															<input type="password" name="password" class="form-control" placeholder="Password">
															<label>Password</label>
														</div>
														
														<div class="form-group">
															<!-- <button type="submit"  onclick="window.location.href = 'https:?page=profil';" class="btn btn-primary full-width font--bold btn-lg">Log In</button> -->
															<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
														</div>
														
														<div class="modal-flex-item mb-3">
															<div class="modal-flex-first">
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" id="savepassword1" value="option1">
																	<label class="form-check-label" for="savepassword1">Save Password</label>
																</div>
															</div>
															<div class="modal-flex-last">
																<a href="#">Forget Password?</a>
															</div>
														</div>
													</form>
												</div>
												<div class="social-login">
													<a href="#" class="btn connect-google"><i class="fa-brands fa-google"></i> Login With Google</a>
												</div>
                                                <div class="modal-flex-first">
													<div>
                                                        <ul>
														<li><label class="form-check-label">Login As Company? <a href="?page=logincompany"> Klik Here!</a></label></li>
                                                        <li><label class="form-check-label">Don't have an account yet? <a href="?page=register"> Sign Up Here!</a></label></li>
                                                        </ul>
                                                    </div>
												</div>
											</div>
										</div>
										
										<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
											<div class="row gx-3 gy-4">
												<div class="modal-login-form">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>