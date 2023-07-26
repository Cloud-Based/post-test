<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
        
    </div>

      <a href="<?= site_url('admin/post/create'); ?>">Tambah Post</a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
          <?php $i=1; foreach($posts as $post) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $post->title; ?></td>
              <td>
                <a href="<?php echo site_url('admin/post/show/'.$post->idpost); ?>">show</a>
                <a href="<?php echo site_url('admin/post/update/'.$post->idpost); ?>">edit</a>
                <a href="<?php echo site_url('admin/post/delete/'.$post->idpost); ?>">hapus</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>
</main>