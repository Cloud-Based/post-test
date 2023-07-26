<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update</h1>
        
    </div>

    <form class="col-lg-8" action="<?= site_url('admin/account/accountcontroller/updateUser'); ?>" method="post">
        <input type="hidden" name="username" value="<?php echo $user->username; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name="name" value="<?php echo $user->name; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role" value="<?php echo $user->author; ?>">
                <option value="Admin" selected>Admin</option>
                <option value="Author">Author</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>  

    </div>
</main>