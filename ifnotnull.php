<?php if($Rate != NULL){
?>

<tr>
  <td><?php echo "" ?></td>
  <td><?php echo "To Stair case" ?></td>
  <td><?php echo "M<sup>2</sup>" ?></td>
  <td><?php echo $areaOfLeanUnderPit ?></td>
  <td><?php echo $Rate ?></td>
  <td><?php echo $areaOfLeanUnderPit * $Rate ?></td>
</tr>
<?php
} ?>









      <?php if($areaOfLeanUnderPit != NULL){
        ?>
      <tr>
        <td><?php echo "" ?></td>
        <td><?php echo "To concrete ceiling" ?></td>
        <td><?php echo "M<sup>2</sup>" ?></td>
        <td><?php echo $areaOfLeanUnderPit ?></td>
        <td><?php echo $Rate ?></td>
        <td><?php echo $areaOfPlastering * $Rate ?></td>
      </tr>
      <?php
      } ?>





    <?php if($Rate != NULL){
      ?>

      <tr>
        <td><?php echo "" ?></td>
        <td><?php echo "To Stair case" ?></td>
        <td><?php echo "M<sup>2</sup>" ?></td>
        <td><?php echo $areaOfLeanUnderPit ?></td>
        <td><?php echo $Rate ?></td>
        <td><?php echo $areaOfLeanUnderPit * $Rate ?></td>
      </tr>
      <?php
    } ?>
