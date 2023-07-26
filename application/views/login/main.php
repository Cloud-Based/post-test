<main class="form-signin w-100 m-auto">
  <form action="<?php echo site_url('logincontroller/loginAct'); ?>" method="post">
    <h1 class="h3 mb-3 fw-normal">Please login</h1>

    <div class="form-floating">
      <input type="username" class="form-control" id="username" placeholder="Username" name="username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="password">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
  </form>
</main>
