<?php

?>
  <section class="add-image-page">
    <div>
      <h1>Add An Image</h1>
    </div>
  </section>
  <section class="image-form">
    <div id="content">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
    </div>
    <div id="display-image">
      <?php

      ?>
    </div>
  </section>
<?php ?>
