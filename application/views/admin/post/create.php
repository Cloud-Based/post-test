<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create</h1>
        
    </div>

    <form class="col-lg-8" action="<?= site_url('admin/post/postcontroller/createAct'); ?>" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="title" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>  

    </div>
</main>