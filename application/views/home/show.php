<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $post->title; ?></h1>        
    </div>

    <h5>username : </h5>
    <h6><?php echo $post->username; ?></h6>

    <h5 class="mt-4">Tanggal : </h5>
    <h6><?php echo $post->date; ?></h6>

    <h5 class="mt-4">Content : </h5>
    <p><?php echo $post->content; ?></p>

    </div>
</main>