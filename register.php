<!DOCTYPE html>
<html>

    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap Icon CSS-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	</head>

<body>
<section class="bg-primary" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            
            <div class="card-header p-5" style="height:10vh">
                <img src="https://i.imgur.com/qtakBsB.png"
						      alt="Login image" class="" style="object-fit: cover; object-position: middle; width:100%; height:100%;">
            </div>


            <div class="card-body p-5 text-center">
              <form>
                <h3 class="mb-5">register</h3>

                <div class="form-floating mb-4">
                  <input type="text" id="typeUsername" name="typeUsername" class="form-control form-control-lg" />
                  <label class="form-label" for="typeUsername">username</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="email" id="typeEmail" name="typeEmail" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmail">Email</label>
                </div>
                
                  <div class="row g-2">

                    <div class="col-sm-8 form-floating mb-8">
                      <input type="date" id="typeBirthday"  name="typeBirthday"class="form-control form-control-lg" />
                      <label class="form-label" for="typeBirthday">Birthday</label>
                    </div>

                    <div class="col-sm-4 form-floating mb-4" >
                      <select name="typeGender" id="typeGender" class="form-select form-select-lg" >
                        <option value="javascript">M</option>
                        <option value="php">F</option>
                      </select>
                      <label for="typeGender">Gender</label>
                    </div>

                  </div> 

                <div class="form-floating mb-4">
                  <input type="password" id="typePassword" name="typePassword" class="form-control form-control-lg" />
                  <label class="form-label" for="typePassword">Password</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" id="retypePassword" name="retypePassword" class="form-control form-control-lg" />
                  <label class="form-label" for="retypePassword">Confirm Password</label>
                </div>


                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> I have agree the <a href="#!" class="link-info">terms of service</a> </label>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
