<?php include 'header.php'; ?>

<section class="container">
    <div class="jumbotron form-group bg-white">
        <p class="display-3">Establishment Protocols</p>
        <div class="form-group">
            <label for="exampleTextarea">Update Header</label>
            <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Update Content</label>
            <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">only SVG/PNG/JPEG File will be accepted</small>
        </div>
        <button type="button" class="btn btn-info btn-lg btn-block">UPDATE</button>
    </div>

</section>

<?php include 'footer.php' ?>