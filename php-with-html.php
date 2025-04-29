<?php
$h2_color = "skyblue";
echo "<h1 style='color:green'>php with html</h1>";
echo "<h1 style='color:red'>php with html</h1>";
?>

<?php
$name = "naved ali";
echo "<h1 style='color: orange'>my name is $name</h1>";
?>

<h1 style="color: red">
  my real name is <?php
    echo $name
  ?>
</h1>

<h2 style="color: <?php echo $h2_color ?>"><?php echo $name ?></h2>
<h2 style="color: <?php echo $h2_color ?>">my name is <?php echo $name ?></h2>