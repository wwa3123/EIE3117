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
                    <img src="https://i.imgur.com/qtak
                    BsB.png"
                      alt="Login image" class="" style="object-fit: cover; object-position: middle; width:100%; height:100%;">
                </div>


                <div class="card-body p-5 text-center">
                  <form action="updateprofile.php" method="post" id="profile">
                    <h3 class="mb-5">profile</h3>

                    <div class="form-floating mb-4">
                      <textarea id="description" name="description" class="form-control form-control-lg" row=3 form="profile"></textarea>
                      <label class="form-label" for="description">description</label>
                    </div>
                    
                      <div class="row g-2">
                        <div class="col-sm-4 form-floating mb-4" >
                          <select name="typeField" id="typeField" class="form-select form-select-lg" >
                            <option value="ICT">ICT</option>
                            <option value="English">English</option>
                          </select>
                          <label for="typeField"> Field of study</label>
                        </div>

                      </div> 


                    <button class="btn btn-primary btn-lg btn-block" type="submit">update</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  </html>
