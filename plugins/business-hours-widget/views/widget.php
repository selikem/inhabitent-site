<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim($monday_friday)) > 0) :?>
    <p><b>Monday-Friday:</b> <?php echo $monday_friday; ?></p>
<?php endif; ?>
<?php if ( strlen( trim($saturday)) > 0) :?>
    <p><b>Saturday:</b> <?php echo $saturday; ?></p>
<?php endif; ?>
<?php if ( strlen( trim($sunday)) > 0) :?>
    <p><b>Sunday:</b> <?php echo $sunday; ?></p>
<?php endif; ?>