<?php
$error = '';
$success = '';
if(isset($_GET['error'])){
    $error = $_GET['error'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>File Upload</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Upload a File</h4>
        </div>
        <div class="card-body">
            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars($success) ?>
                </div>
            <?php endif; ?>

            <form action="saveImage.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">Choose File</label>
                    <input type="file" class="form-control-file <?= $error ? 'is-invalid' : '' ?>" name="image" id="file" >
                    <?php if ($error): ?>
                        <div class="invalid-feedback">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Upload</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
