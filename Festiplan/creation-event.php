<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>FestiPlan</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/creation-event.css">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <div class="container">
        <h2>Créer un Nouvel évènement</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div>
                <label>Titre de l'évènement</label>
                <input type="text" name="title" maxlength="50" value="<?php echo $title; ?>">
                <span><?php echo $title_err; ?></span>
            </div>
            <div>
                <label>Description</label>
                <textarea name="description" rows="5" cols="3"><?php echo $description; ?></textarea>
                <span><?php echo $description_err; ?></span>
            </div>
            <div>
                <label>Date de l'évènement</label>
                <input type="datetime-local" name="event_date" value="<?php echo $event_date; ?>">
                <span><?php echo $event_date_err; ?></span>
            </div>
            <div>
                <label>Lieu</label>
                <input type="text" name="location" maxlength="60" value="<?php echo $location; ?>">
                <span><?php echo $location_err; ?></span>
            </div>
            <div>
                <label>Évènement public</label>
                <input type="checkbox" name="is_public" <?php echo $is_public ? 'checked' : ''; ?>>
            </div>
            <div>
                <label>Image de l'évènement</label>
                <label for="fileInput" class="custom-file-input">Sélectionnez une photo</label>
                <input type="file" id="fileInput" name="profile_image" accept="image/*" style="display: none;">
                <span><?php echo $image_err; ?></span>
            </div>

            <div>
                <img id="imagePreview" src="" alt="Aperçu de l'image" style="max-width: 200px; max-height: 200px; display: none;" />
            </div>

            <div class="container_submit_button">
                <button class="custom_button" type="submit">Créer l'évènement</button>
            </div>
        </form>
    </div>

    <?php include('includes/footer.php'); ?>

    <script src="js/create-event.js"></script>

</body>

</html>
