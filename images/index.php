<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table avec bouton Supprimer et Modifier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Galerie d'images</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" name="image" id="image" required>
            </div>
            <div class="form-group">
                <label for="subheading">Sous-titre de l'image :</label>
                <input type="text" name="subheading" id="subheading" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter l'image</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inclure le fichier de configuration de la base de données
                include_once 'config.php';

                // Vérifier si le formulaire a été soumis
            
               
                
                // Vérifier si le formulaire d'ajout a été soumis
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image']) && isset($_POST['subheading'])) {
                    $image = $_FILES['image'];
                    $subheading = $_POST['subheading'];
                
                    // Vérifier s'il y a une erreur lors de l'upload de l'image
                    if ($image['error'] === UPLOAD_ERR_OK) {
                        $filename = $image['name'];
                        $tmpFilePath = $image['tmp_name'];
                
                        // Déplacer le fichier temporaire vers le répertoire de destination
                        $destinationPath = '../assets/img/gallery/' . $filename;
                        move_uploaded_file($tmpFilePath, $destinationPath);
                
                        // Insérer les données dans la base de données
                        $insertQuery = "INSERT INTO images (filename, subheading) VALUES ('$filename', '$subheading')";
                        $insertResult = mysqli_query($conn, $insertQuery);
                
                        if ($insertResult) {
                            // L'image a été ajoutée avec succès
                            echo '<div class="alert alert-success">L\'image a été ajoutée avec succès.</div>';
                        } else {
                            // Une erreur s'est produite lors de l'ajout de l'image
                            echo '<div class="alert alert-danger">Une erreur s\'est produite lors de l\'ajout de l\'image : ' . mysqli_error($conn) . '</div>';
                        }
                    } else {
                        // Une erreur s'est produite lors de l'upload de l'image
                        echo '<div class="alert alert-danger">Une erreur s\'est produite lors de l\'upload de l\'image : ' . $image['error'] . '</div>';
                    }
                }
                
                


                // Vérifier si le formulaire de suppression a été soumis
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
                    $deleteId = $_POST['delete_id'];

                    // Supprimer l'image de la base de données
                    $deleteQuery = "DELETE FROM images WHERE id = $deleteId";
                    $deleteResult = mysqli_query($conn, $deleteQuery);

                    if ($deleteResult) {
                        // L'image a été supprimée avec succès
                        echo '<div class="alert alert-success">L\'image a été supprimée avec succès.</div>';
                    } else {
                        // Une erreur s'est produite lors de la suppression de l'image
                        echo '<div class="alert alert-danger">Une erreur s\'est produite lors de la suppression de l\'image : ' . mysqli_error($conn) . '</div>';
                    }
                }

                // Vérifier si le formulaire de modification a été soumis
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_id'])) {
                    $editId = $_POST['edit_id'];
                    $subheading = $_POST['subheading'];

                    // Mettre à jour la description de l'image dans la base de données
                    $updateQuery = "UPDATE images SET subheading = '$subheading' WHERE id = $editId";
                    $updateResult = mysqli_query($conn, $updateQuery);

                    if ($updateResult) {
                        // La description de l'image a été mise à jour avec succès
                        echo '<div class="alert alert-success">La description de l\'image a été mise à jour avec succès.</div>';
                    } else {
                        // Une erreur s'est produite lors de la mise à jour de la description de l'image
                        echo '<div class="alert alert-danger">Une erreur s\'est produite lors de la mise à jour de la description de l\'image : ' . mysqli_error($conn) . '</div>';
                    }
                }

                // Récupérer les images de la base de données
                $selectQuery = "SELECT * FROM images";
                $selectResult = mysqli_query($conn, $selectQuery);

                while ($row = mysqli_fetch_assoc($selectResult)) {
                    $imagePath = '../assets/img/gallery/' . $row['filename'];
                    $subheading = $row['subheading'];
                    $imageId = $row['id'];
                ?>
                    <tr>
                        <td><img src="<?php echo $imagePath; ?>" alt="Image" width="100" height="100"></td>
                        <td>
                            <form method="POST" action="">
                                <input type="hidden" name="edit_id" value="<?php echo $imageId; ?>">
                                <input type="text" name="subheading" value="<?php echo $subheading; ?>" required>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                            <form method="POST" action="">
                                <input type="hidden" name="delete_id" value="<?php echo $imageId; ?>">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
