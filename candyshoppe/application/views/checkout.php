<div>
<?php echo validation_errors('<p class="error">'); ?>
<?php echo form_open("checkout/credit_validation"); ?>
   <p>
  <label for="number">Credit Card Number: </label>
  <input type="text" id="number" name="number" value="<?php echo set_value('number'); ?>" />
  </p>
   <p>
  <label for="month">Expiry Month: </label>
  <input type="text" id="month" name="month" value="<?php echo set_value('month'); ?>" />
  </p>
  <p>
  <label for="year">Expiry Year: </label>
  <input type="text" id="year" name="year" value="<?php echo set_value('year'); ?>" />
  </p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div>