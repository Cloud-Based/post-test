<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create</h1>
        
    </div>

    <form class="col-lg-8" action="<?= site_url('admin/account/accountcontroller/createAct'); ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role">
                <option value="Admin" selected>Admin</option>
                <option value="Author">Author</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>  

    </div>
</main>