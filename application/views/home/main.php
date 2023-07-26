<main>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Name</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($data as $item) { ?>
            <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $item->title; ?></td>
                <td><?php echo $item->username; ?></td>
                <td><?php echo $item->date; ?></td>
                <td>
                    <a href="<?php echo site_url('home/show/'.$item->idpost); ?>">Preview</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</main>