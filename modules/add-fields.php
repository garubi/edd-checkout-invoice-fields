<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



// output our custom field HTML

add_action('edd_purchase_form_user_info_fields', function () {

    ?>
    <p>
        <label class="edd-label" for="edd-tel"><?php _e('Telefono', 'edd_cif'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('Lo useremo solo in caso di problemi con l\'acquisto o con la tua inserzione', 'edd_cif'); ?></span>
        <input class="edd-input required" name="edd_tel" id="edd-tel" placeholder="<?php _e('Telefono', 'edd_cif'); ?>" value="" type="text" required >
    </p>
	<span id="edd-anagrafica-fatturazione">
		<legend>
			Anagrafica fatturazione
		</legend>
	</span>
	<p>
        <label class="edd-label" for="edd-company"><?php _e('Company Name', 'edd_cif'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('The name of your company', 'edd_cif'); ?></span>
        <input class="edd-input required" name="edd_company" id="edd-company" placeholder="<?php _e('Company Name', 'edd_cif'); ?>" value="" type="text" required>
    </p>
    <p>
        <label class="edd-label" for="edd-vat"><?php _e('VAT', 'edd_cif'); ?> <!-- <span class="edd-required-indicator">*</span></label> -->
        <span class="edd-description"><?php _e('Your VAT for invoice', 'edd_cif'); ?></span>
        <input class="edd-input" name="edd_vat" id="edd-vat" placeholder="<?php _e('VAT', 'edd_cif'); ?>" value="" type="text" >
    </p>
    <p>
        <label class="edd-label" for="edd-fc"><?php _e('Fiscal code', 'edd_cif'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('Your Fiscal code (if you are a company use your VAT)', 'edd_cif'); ?></span>
        <input class="edd-input required" name="edd_fc" id="edd-fc" placeholder="<?php _e('Fiscal code', 'edd_cif'); ?>" value="" type="text" required >
    </p>

    <?php
});
