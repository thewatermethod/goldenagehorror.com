<?php

/**
 * Add Newsletter Subscription fields above 'Update' button.
 *
 * @param WP_User $user User object.
 */


add_action( 'show_user_profile', 'goldenagehorror_additional_profile_fields' );
add_action( 'edit_user_profile', 'goldenagehorror_additional_profile_fields' );

function goldenagehorror_additional_profile_fields( $user ) {

	if( get_user_meta($user->ID, 'goldenagehorror_host') != '' ){
    	$is_host = get_user_meta( $user->ID, 'goldenagehorror_host' ); 
	} else {
		$is_host = 'false';		
	}

    

  if ( !current_user_can( 'edit_user', $user_id ) ) { ?>
    <h3 id="newsletterSubscription">Podcast Host</h3>

    <table class="form-table">
   	 <tr>
   		 <th><label for="goldenagehorror_host">Are they a host?</label></th>
	   		<td>
	   			 <select id="goldenagehorror_host" name="goldenagehorror_host">
	   			 	<option> ---- </option>
	   			 	<option value="true"<?php if($is_host[0]=='true'):echo'selected'; endif;?>>Yes</option>
	   			 	<option value="false" <?php if($is_host[0]=='false'):echo'selected'; endif;?>>No</option>
	   			 </select>   			 
	   		</td>
   	 </tr>
    </table>

  <?php } ?>
    <?php
}


/**
 * Save additional profile fields.
 *
 * @param  int $user_id Current user ID.
 */
function goldenagehorror_subscribe_save_profile_fields( $user_id ) {


    if ( !current_user_can( 'edit_user', $user_id ) ) {
   	 return false;
    }

    if ( empty( $_POST['goldenagehorror_host'] ) ) {
   	 	return false;
    }



    update_user_meta( $user_id, 'goldenagehorror_host', $_POST['goldenagehorror_host'] );
}

add_action( 'personal_options_update', 'goldenagehorror_subscribe_save_profile_fields' );
add_action( 'edit_user_profile_update', 'goldenagehorror_subscribe_save_profile_fields' );