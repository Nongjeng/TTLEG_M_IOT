<section class="vh-100 ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black m-0 mt-3">
        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4 mt-3" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0 ">TT-Leg Mechine</span>
          <!-- <img src="./public/img/logoTATC.jpg"   style="width: 5%;"> -->
        </div>
        <?php
        include "./Controllers/login.php";
        ?>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="post">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input name="username" type="text" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input name="password" type="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="submit" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

          </form>

        </div>
        <!-- <a href="/home">aaaa</a> -->
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-flex align-items-center justify-content-center w-100 vh-100">
        <img src="./public/img/logoTATC.jpg" alt="Login image" style="object-fit: cover; object-position: center; margin-bottom: 20%;">
      </div>
    </div>
  </div>
</section>