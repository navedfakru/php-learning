<?php
// print_r();
// phpinfo();
if($_FILES['fileUpload']){
  $path = $_FILES['fileUpload']['name'];
  // echo $path;
  $upload_path = "./uploads/".$path;
  // echo $upload_path;
  move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path) || die("faild to upload");
} else {
  die("not filed upload");
}
?>