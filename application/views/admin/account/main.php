<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Account</h1>
        
    </div>

      <a href="<?= site_url('admin/account/create'); ?>">Tambah Account</a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
          <?php $i=1; foreach($users as $user) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $user->name; ?></td>
              <td><?php echo $user->role; ?></td>
              <td>
                <a href="<?php echo site_url('admin/account/show/'.$user->username); ?>">show</a>
                <a href="<?php echo site_url('admin/account/update/'.$user->username); ?>">edit</a>
                <a href="<?php echo site_url('admin/account/delete/'.$user->username); ?>">hapus</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>
</main>