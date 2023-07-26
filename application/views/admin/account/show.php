<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $user->name; ?></h1>        
    </div>

    <h5>username : </h5>
    <h6><?php echo $user->username; ?></h6>

    <h5 class="mt-4">Role : </h5>
    <p><?php echo $user->role; ?></p>

    </div>
</main>