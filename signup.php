<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
		<div class="container-fluid justify-content-center">
			<a class="navbar-brand justify-content-center" href="#">Signup Here</a>
		</div>
	</nav>
<section class="h-100 bg-dark " >

  <div class="container  py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
		  <div class="col-xl-6 d-none d-xl-block">
				<img src="https://img.freepik.com/premium-photo/siberian-haski-dog-snow-looks-around-high-quality-photo-winter-husky-dog_112397-321.jpg?w=2000"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-md-6">
              <div class="card-body col-xxl-6 ">
                <form class="justify content center" onsubmit="return validateForm()" name="myForm" action="process.php" method="post">
				<h3 class="mb-5 text-uppercase"> signup and login page</h3>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline" id="name">
                      First Name<input type="text" class="form-control form-control-lg" id="fname"name="fname" >
					</div>
					</div>
                  
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      Last Name<input type="text"  id="Lname"class="form-control form-control-lg" name="Lname" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      Mother's name <input type="text" name="Mname" id="Mname" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      Father's name<input type="text" name="fathername" id="fathername" class="form-control form-control-lg" required />
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  Address<input type="text" name="address" id="address" class="form-control form-control-lg" />
				</div>
			
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4" id="gender">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    Female<input class="form-check-input" type="radio" name="gender" id="femaleGender" value="f" />
                  </div>

				 <div class="form-check form-check-inline mb-0 me-4">
                    Male<input class="form-check-input" type="radio" name="gender" id="maleGender"  value="m" checked>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    Other<input class="form-check-input" type="radio" name="gender" id="otherGender" value="o" />
				  </div>
                </div>

               <div class="form-outline mb-4">
                 City <input type="text" name="city" class="form-control form-control-lg" required/>
				</div>
				
				<div class="form-outline mb-4">
                  State<input type="text" name="state" class="form-control form-control-lg" required/>
				</div>
				
				<div class="form-outline mb-4">
                  DOB<input type="text" name="dob" class="form-control form-control-lg" required/>
               </div>
			   
			   <div class="form-outline mb-4" id="phone">
                  Phone Number<input type="text" name="fphone" class="form-control form-control-lg" required>
                </div>

                <div class="form-outline mb-4" id="pin">
                 Pincode <input type="text" name="pin" class="form-control form-control-lg" required/>
                </div>
             
				<div class="form-outline mb-4" id="email">
                 Email <input type="email" name="femail" class="form-control form-control-lg"  required/>
                </div>
                
				<div class="form-outline mb-4">
                 Password <input type="password" name="password" class="form-control form-control-lg" required/>
                </div>
				
				<div>
					<a href="./login.php" >Already have account? Log in </a>
				</div> 
                <div class="d-flex justify-content-end pt-3">
                  <input type="reset" class="btn btn-light btn-lg">
                  <button type="submit" class="btn btn-warning btn-lg ms-2" value="submit">Submit form</button>
                </div>
				
				</form>
					
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="form.js"></script>
</body>
</html>
