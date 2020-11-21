<?php
session_start(); 
require_once('vendor/autoload.php');
use MonologLogger;
use MonologHandlerStreamHandler;
use MonologHandlerSwiftMailerHandler;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Community Jigsaw</title>
</head>
<body>
  <h1>
  Community Jigsaw Application
  </h1>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
    </div>
 
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>