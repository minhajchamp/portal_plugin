<?php
/*
PLUGIN NAME: KNOVATEK PORTAL PLUGIN
AUTHOR: MUHAMMAD MINHAJ UDDIN
*/
// MAIN MENU
function portal_plugin_menu_option() {
    
    $currentUser = get_current_user_id();
    if($currentUser == '1') {
	add_menu_page('KNOVATEK PORTAL PLUGIN','KNOVATEK PORTAL PLUGIN','manage_options','portal-plugin-custom','portal_plugin_custom_func','','35');
    } else {
        add_menu_page('KNOVATEK PORTAL PLUGIN','KNOVATEK PORTAL PLUGIN','read','portal-plugin-custom','portal_plugin_custom_func_read','','35');
    }

// admin_menu('YOUR TITLE','YOUR TEXT WHEN APPEARING ON LEFT SIDE','USER ACCESS','SLUG','CALL BACK FUNCTION','ICON OF THE PLUGIN','200')
}
// SUB MENU
function portal_plugin_submenu() {
    
 
	add_submenu_page('null','KNOVATEK PORTAL PLUGIN','SUB MENU','read','portal-plugin-custom-users','portal_plugin_custom_users_func','','35');
	
    
}
function portal_plugin_custom_func_read() {
   
	 $id = get_current_user_id();
    $users = wp_get_current_user();
    $user = $users->user_login;
    echo '<script>';
	echo "window.location.href = 'admin.php?page=portal-plugin-custom-users&id=$id&user=$user';";
	echo '</script>';

    require_once "knovatek-portal-plugin-users.php";
	
}





// SUB MENU FUNCTION
function portal_plugin_custom_users_func() {
    
    require_once 'knovatek-portal-plugin-users.php';
}

// MAIN FUNCTION
function portal_plugin_custom_func() {


?>
<center><h1 style="font-family: IMPACT;">DASHBOARD</h1></center><br/>
<?php
global $wpdb;
	$query = $wpdb->get_results("SELECT * FROM wp_users");
	
	?>
<form>
    	<table class="table table-striped" width="100%">
	<tr>
	    <th>USER ID</th>
	<th>USER NAME</th>
	<th>DATA</th>
	</tr>
	<?php foreach($query as $print) { 
	$myUSER = $print->user_login;
	?>
	<form>
	<tr><td><?php echo $print->ID; ?></td>
	<td><?php echo $myUSER; ?></td>
	<td><a href="admin.php?page=portal-plugin-custom-users&id=<?php echo $print->ID; ?>" />CHECK DATA</a></td></tr>
	<?php } ?>
	</table>
    
</form>

<?php
include("knovatek_plugin_header.php");

}

add_action('admin_menu','portal_plugin_menu_option');
add_action('admin_menu','portal_plugin_submenu');



?>
