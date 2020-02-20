<?php
/*
PLUGIN NAME: KNOVATEK PORTAL PLUGIN

AUTHOR: MUHAMMAD MINHAJ UDDIN
*/

global $wpdb;

	?>

		<div class="wrap">
	<script>
function update_validation(form) {
    
    var amc_name = form.getElementsByTagName("input")[1].value;
    var fund_name = form.getElementsByTagName("input")[2].value;
    var invest_amt = form.getElementsByTagName("input")[3].value;
    var units = form.getElementsByTagName("input")[4].value;
   var doi = form.getElementsByTagName("input")[5].value;
    var invest_nav = form.getElementsByTagName("input")[6].value;
    var current_nav = form.getElementsByTagName("input")[7].value;
    
        if(amc_name == "") {
            form.getElementsByTagName("p")[0].style.display = "block";
            form.getElementsByTagName("p")[1].style.display = "none";
            form.getElementsByTagName("p")[2].style.display = "none";
            form.getElementsByTagName("p")[3].style.display = "none";
            form.getElementsByTagName("p")[4].style.display = "none";
            form.getElementsByTagName("p")[5].style.display = "none";
            form.getElementsByTagName("p")[6].style.display = "none";

            form.getElementsByTagName("p")[0].innerHTML = "AMC NAME IS EMPTY!!";
            return false;
            
        } else if(fund_name == "") {
              form.getElementsByTagName("p")[1].style.display = "block";
            form.getElementsByTagName("p")[1].innerHTML = "FUND NAME IS EMPTY!!";
         form.getElementsByTagName("p")[2].style.display = "none";
            form.getElementsByTagName("p")[3].style.display = "none";
            form.getElementsByTagName("p")[4].style.display = "none";
            form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                            form.getElementsByTagName("p")[6].style.display = "none";


            return false;
        }  else if(invest_amt == "") {
            form.getElementsByTagName("p")[2].style.display = "block";
            form.getElementsByTagName("p")[2].innerHTML = "INVEST AMT IS EMPTY!!";
 form.getElementsByTagName("p")[3].style.display = "none";
            form.getElementsByTagName("p")[4].style.display = "none";
            form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                            form.getElementsByTagName("p")[6].style.display = "none";

                form.getElementsByTagName("p")[1].style.display = "none";

            return false;
        } else if(isNaN(invest_amt)) {
            form.getElementsByTagName("p")[2].style.display = "block";
            form.getElementsByTagName("p")[2].innerHTML = "INVEST AMT NOT NUMERIC!!";
             form.getElementsByTagName("p")[3].style.display = "none";
            form.getElementsByTagName("p")[4].style.display = "none";
            form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                
                form.getElementsByTagName("p")[1].style.display = "none";
        
            form.getElementsByTagName("p")[6].style.display = "none";

            return false;
        } else if(units == "") {
            form.getElementsByTagName("p")[3].style.display = "block";
            form.getElementsByTagName("p")[3].innerHTML = "UNITS IS EMPTY!!";
           form.getElementsByTagName("p")[4].style.display = "none";
            form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                
                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
            form.getElementsByTagName("p")[6].style.display = "none";

            return false;
        }  else if(isNaN(units)) {
            form.getElementsByTagName("p")[3].style.display = "block";
            form.getElementsByTagName("p")[3].innerHTML = "UNITS ARE NOT NUMERIC!!";
     form.getElementsByTagName("p")[4].style.display = "none";
            form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                            form.getElementsByTagName("p")[6].style.display = "none";

                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
            return false;
        } else if(doi == "") {
            form.getElementsByTagName("p")[4].style.display = "block";
            form.getElementsByTagName("p")[4].innerHTML = "DATE IS EMPTY!!!";
        form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                
                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
                                
                                form.getElementsByTagName("p")[3].style.display = "none";
            form.getElementsByTagName("p")[6].style.display = "none";

            return false;
        }else if(invest_nav == "") {
            form.getElementsByTagName("p")[5].style.display = "block";
            form.getElementsByTagName("p")[5].innerHTML = "INVEST NAV IS EMPTY!!";
                form.getElementsByTagName("p")[0].style.display = "none";
                      form.getElementsByTagName("p")[4].style.display = "none";
                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
                                
                    form.getElementsByTagName("p")[3].style.display = "none";
            form.getElementsByTagName("p")[6].style.display = "none";

            return false;
        }  else if(isNaN(invest_nav)) {
            form.getElementsByTagName("p")[5].style.display = "block";
            form.getElementsByTagName("p")[5].innerHTML = "INVEST NAV IS NOT NUMERIC!!";
              form.getElementsByTagName("p")[6].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                                      form.getElementsByTagName("p")[4].style.display = "none";

                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
                                
                                form.getElementsByTagName("p")[3].style.display = "none";

            return false;
        }else if(current_nav == "") {
            form.getElementsByTagName("p")[6].style.display = "block";
            form.getElementsByTagName("p")[6].innerHTML = "CURRENT NAV IS EMPTY!!";
                    form.getElementsByTagName("p")[4].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
              form.getElementsByTagName("p")[5].style.display = "none";

                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
                                
                                form.getElementsByTagName("p")[3].style.display = "none";
            return false;
        } else if(isNaN(current_nav)) {
            form.getElementsByTagName("p")[6].style.display = "block";
            form.getElementsByTagName("p")[6].innerHTML = "CURRENT NAV IS NOT NUMERIC!!";
                    form.getElementsByTagName("p")[4].style.display = "none";
                form.getElementsByTagName("p")[0].style.display = "none";
                                form.getElementsByTagName("p")[5].style.display = "none";
                form.getElementsByTagName("p")[1].style.display = "none";
                                form.getElementsByTagName("p")[2].style.display = "none";
                                
                                form.getElementsByTagName("p")[3].style.display = "none";
            return false;
        }  else {
    
        return true;
          event.preventDefault();
	             document.getElementById("successMsg").style.display = "block";
	            
	            
	        }
}
	
	
	function validation() {

	    document.getElementById("insertForm").onsubmit = function() {
	        
	   	     document.getElementById("errorMsg_invest_amt").style.display = "none";
	             document.getElementById("errorMsg_amc").style.display = "none";
	             document.getElementById("errorMsg_fund").style.display = "none";
	             document.getElementById("errorMsg_invest_nav").style.display = "none";
	             document.getElementById("errorMsg_current_nav").style.display = "none";
	             	             document.getElementById("errorMsg_unit").style.display = "none";
	             	             
	             	
	             	             document.getElementById("errorMsg_doi").style.display = "none";
	        if(document.getElementById("amc_name").value == "" || document.getElementById("amc_name").value == null) {
	            
	    document.getElementById("errorMsg_amc").style.display = "block";
	    
	            document.getElementById("errorMsg_amc").innerHTML = "PLEASE ENTER AMC NAME";
	            event.preventDefault();
	            return false;
	        } else if(document.getElementById("fund_name").value == "" || document.getElementById("fund_name").value == null) {
	    document.getElementById("errorMsg_fund").style.display = "block";
	            document.getElementById("errorMsg_fund").innerHTML = "PLEASE ENTER FUND NAME";
	            
	            event.preventDefault();
	            return false;
	            
	        } else if(isNaN(document.getElementById("invest_amt").value)) {
	              document.getElementById("errorMsg_invest_amt").style.display = "block";
	    
	            document.getElementById("errorMsg_invest_amt").innerHTML = "PLEASE ENTER INVEST AMT IN NUMERIC";
	            event.preventDefault();
	            return false;
	        } else if(document.getElementById("invest_amt").value == "" || document.getElementById("invest_amt").value == null) {
	            
	    document.getElementById("errorMsg_invest_amt").style.display = "block";
	    
	            document.getElementById("errorMsg_invest_amt").innerHTML = "PLEASE ENTER INVEST AMT";
	            event.preventDefault();
	            return false;
	            
	        }else if(document.getElementById("no_of_units").value == "") {
	            
	    document.getElementById("errorMsg_unit").style.display = "block";
	            document.getElementById("errorMsg_unit").innerHTML = "PLEASE ENTER UNITS";
	            event.preventDefault();
	            return false;
	        } else if(isNaN(document.getElementById("no_of_units").value)) {
	            
	             document.getElementById("errorMsg_unit").style.display = "block";
	            document.getElementById("errorMsg_unit").innerHTML = "PLEASE ENTER UNITS IN NUMERIC";
	            event.preventDefault();
	            return false;
	        } else if(document.getElementById("doi").value == "") {
	            
	    document.getElementById("errorMsg_doi").style.display = "block";
	            document.getElementById("errorMsg_doi").innerHTML = "PLEASE ENTER DATE";
	            event.preventDefault();
	            return false;
	        } else if(document.getElementById("invest_nav").value == "") {
	            
	    document.getElementById("errorMsg_invest_nav").style.display = "block";
	            document.getElementById("errorMsg_invest_nav").innerHTML = "PLEASE ENTER INVEST NAV";
	            event.preventDefault();
	            return false;
	        } else if(isNaN(document.getElementById("invest_nav").value)) {
	            
	             document.getElementById("errorMsg_invest_nav").style.display = "block";
	            document.getElementById("errorMsg_invest_nav").innerHTML = "PLEASE ENTER INVEST NAV IN NUMERIC";
	            event.preventDefault();
	            return false;
	        } else if(document.getElementById("current_nav").value == "") {
	            
	    document.getElementById("errorMsg_current_nav").style.display = "block";
	            document.getElementById("errorMsg_current_nav").innerHTML = "PLEASE ENTER CURRENT NAV";
	            event.preventDefault();
	            return false;
	        } else if(isNaN(document.getElementById("current_nav").value)) {
	            
	             document.getElementById("errorMsg_current_nav").style.display = "block";
	  
	            document.getElementById("errorMsg_current_nav").innerHTML = "PLEASE ENTER CURRENT NAV IN NUMERIC";
	            event.preventDefault();
	            return false;
	        }
	        else {
	              return true;
	             event.preventDefault();
	             document.getElementById("successMsg").style.display = "block";
	            
	            
	        }
	    };
	}
	
	window.onload = function() {
	    

	   validation();
                
	            

	    
	   

	}


		
</script>
<?php 
$current_user = wp_get_current_user();
$comingID = $_GET['id'];
$mySEL = $wpdb->get_results("SELECT * from wp_users where id='$comingID'");
foreach ($mySEL as $selprint) {
 ?>


	<table style="width:100%; border-spacing: 15px; border-collapse: separate;" ><tr><td><h1 style="font-family: IMPACT;">KNOVATEK PORTAL</h1></td><td><center><h1 style="font-family: IMPACT;">DATA OF "<?php echo $selprint->user_login; ?>"</h1></center></td><td style='float: right;'>	

		<?php } ?>
	
	<?php 
$username = get_current_user_id();
if($username == '1') {
?>
  <button type="button" class="btn btn-lg btn-primary" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal">Upload Data</button><a href='admin.php?page=portal-plugin-custom' />&nbsp;<button type="button" class="btn btn-lg btn-primary">BACK TO MAIN</button></a>
<?php } ?>
   </td></tr></table>

	<table class="table table-striped">
	<tr>
	    <th>AMC NAME</th>
	<th>FUND NAME</th>
	<th>INVEST AMT</th>
	<th>Units</th>
	<th>DOI</th>
	<th>INVEST NAV</th>
	<th>CURRENT NAV</th>
	<th>PNL</th>
	<th>USER</th>
<?php $username = get_current_user_id(); 
 	if($username == '1') {
 	?>
 	<th>Action</th>
 	</tr>
 	<?php } ?>
		
		<?php
$comingID = $_GET['id'];

$username_id = get_current_user_id();
    if($username_id == '1') {
		$selectData = $wpdb->get_results("SELECT * FROM client_data where user_id = '$comingID'");
    } else {
        	$selectData = $wpdb->get_results("SELECT * FROM client_data where user='$current_user->user_login'");
        	
        	
    }	
		foreach($selectData as $print) { ?>
	
 		<tr>
 		<td><?php echo $print->AMC_NAME; ?></td>
 		<td><?php echo $print->FUND_NAME; ?></td>
 		<td><?php echo $print->INVEST_AMT; ?></td>
 		<td><?php echo $print->unit; ?></td>
 		<td><?php echo $print->DOI; ?></td>
 		<td><?php echo $print->INVEST_NAV; ?></td>
 		<td><?php echo $print->CURRENT_NAV; ?></td>
 		<td><?php echo $print->PNL; ?></td>
 	    <td><?php echo $print->USER; ?></td>
 		<TD><?php $username = get_current_user_id(); 
 	if($username == '1') {
 	?><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li>
  <a href="#edit<?php echo $print->id; ?>" data-toggle="modal"><button type="button" class="btn btn-primary" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#edit" >Edit</button></a>
	</li>
    <li>
  <a href="#del<?php echo $print->id; ?>" data-toggle="modal"> <button type="button" class="btn btn-primary" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#delete">Delete</button></a>
	</li>
  </ul>
</div>
<?php } } ?>	</tr>


</table>

		<?php
		
		$selectData = $wpdb->get_results("SELECT * FROM client_data order by id");
			foreach($selectData as $print) { ?>
		
 		<div class="modal fade" id="del<?php echo $print->id; ?>" role="dialog" >
 			<div class="modal-dialog" >
 				<div class="content" >
                        <br/><br/><br/><br/><br/>
						<div class="alert alert-danger" role="alert">Do You Really Want To Delete It???</div>
 						<form action="" method="post" />
 						<input type="text" value="<?php echo $print->id; ?>" name="del_id">
 						<input type="submit" CLASS="btn btn-danger" value="DELETE" name="del_script"/>
 						</form>
 					

 				</div>
 			</div>
 		</div>
 		
 			<div class="container">
 			    
 			    
	<div class="modal fade" id="edit<?php echo $print->id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
        
        </div>
        <div class="modal-body">
               
         <form method="post" action="" id="updateForm" onsubmit="return update_validation(this)">
            <div class="form-group">
  	<label for="id" />ID</label>
  	<input type="text" name="update_id" value="<?php echo $print->id; ?>">
  </div>
   <div class="form-group">
<label for="amc_name">CURRENT USER: </label>

        <?php 

	 $newcomingID = $_GET['id'];
        $querys = $wpdb->get_results("select distinct USER from client_data where user_id='$newcomingID'");
        foreach ($querys as $printed) { ?>
        <?php echo $printed->USER; ?>
        <?php } ?>
  </div>
  
   <div class="form-group">

    <label for="amc_name">CHANGE USER</label>
    <select name='user'>
        <?php 
        $query = $wpdb->get_results("select * from wp_users order by ID");
        foreach ($query as $prints) { ?>
        <option><?php echo $prints->user_login; ?></option> 
        <?php } ?>
        </select>

  </div>
  
  <div class="form-group">

<div class="form-group">
      <p id="update_errorMsg" style="display: none;" class="alert alert-danger" ></p>
    <label for="amc_name">AMC_NAME</label>
    <input type="text" name='update_amc_name' id='update_amc_name' class="form-control" value="<?php echo $print->AMC_NAME; ?>" >
    
  </div>
  </div>
  <div class="form-group">
            <p id="update_errorMsg" style="display: none;" class="alert alert-danger" ></p>
     
    <label for="fund_name">FUND_NAME</label>
    <input type="text" name='update_fund_name' id='update_fund_name' class="form-control" value="<?php echo $print->FUND_NAME; ?>" >
  </div>
   <div class="form-group">
             <p id="update_errorMsg" class="alert alert-danger" style="display: none;" ></p>
      <div class="alert alert-warning" id="update_warnMsg" role="alert" style="display: none;"></div>
      
    <label for="invest_amt">Invest AMT</label>
    <input type="text" name='update_invest_amt' id='update_invest_amt' class="form-control" value= "<?php echo $print->INVEST_AMT; ?>" >
    
  </div>
   <div class="form-group">
         <p id="update_errorMsg" class="alert alert-danger" style="display: none;"></p>
      <div class="alert alert-warning" id="update_warnMsg" role="alert" style="display: none;"></div>
    
    <label for="units">No of Units</label>
<input type="text" name="no_of_units" id="update_units"  class="form-control" value="<?php echo $print->unit; ?>">
  </div>
   <div class="form-group">
                <p id="update_errorMsg" class="alert alert-danger" style="display: none;"></p>

    <label for="DOI">DOI</label>
    <input type="date" name='update_doi' id='update_doi' class="form-control" value="<?php echo $print->DOI; ?>" >
  </div>
   <div class="form-group">
   	      <p id="update_errorMsg" class="alert alert-danger" style="display: none;" ></p>
      <div class="alert alert-warning" id="update_warnMsg" role="alert" style="display: none;"></div>
     
    <label for="invest_nav">Invest Nav</label>
    <input type="text" name='update_invest_nav' id='update_invest_nav' class="form-control" value="<?php echo $print->INVEST_NAV; ?>">
  </div>
   <div class="form-group">
   	      <p id="update_errorMsg" class="alert alert-danger" style="display: none;"></p>
      <div class="alert alert-warning" id="update_warnMsg" role="alert" style="display: none;"></div>
 
    <label for="current_nav">Current Nav</label>
    <input type="text" name='update_current_nav' id='update_current_nav' class="form-control" value="<?php echo $print->CURRENT_NAV; ?>">
  </div>
  
  
  
  <input type="submit" name='edit_data_scripts' class="btn btn-primary" value="UPDATE" >
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
        </div>
      </div>
      
    </div>
  </div>

<?php } ?>
  </div>

		

	
	
	
	
	

	<?php include("knovatek_plugin_header.php"); ?>






	<div class="container">


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD DATA</h4>
        </div>
        <div class="modal-body">
            
         <form method="post" action="" id="insertForm">
             
    
              <div class="form-group">

    <label for="amc_name">USER</label>
    <select name='user'>
        <?php 
	$comingID = $_GET['id'];
        $query = $wpdb->get_results("select * from wp_users where id='$comingID'");
        foreach ($query as $print) { ?>
        <option><?php echo $print->user_login; ?></option> 
        <?php } ?>
        </select>

  </div>
  
  <div class="form-group">
<p id="errorMsg_amc" class="alert alert-danger" style="display: none" ></p>
    <label for="amc_name">AMC_NAME</label>
    <input type="text" name='amc_name' id="amc_name" class="form-control" placeholder="AMC_NAME" >

  </div>


  <div class="form-group">
      
<p id="errorMsg_fund" class="alert alert-danger" style="display: none" ></p>
    <label for="fund_name">FUND_NAME</label>
    <input type="text" name='fund_name' id="fund_name"  class="form-control" placeholder="Fund Name" >
  </div>
   <div class="form-group">
       
<p id="errorMsg_invest_amt" class="alert alert-danger" style="display: none" ></p>
    <label for="invest_amt">Invest AMT</label>
    <input type="text" name='invest_amt' id="invest_amt"  class="form-control" placeholder="Invest AMT">
  </div>

    <div class="form-group">
        <p id="errorMsg_unit" class="alert alert-danger" style="display: none" ></p>

    <label for="units">No of Units</label>
    <input type="text" name="no_of_units" id="no_of_units"  class="form-control" placeholder="No Of Units">
  </div>
   <div class="form-group">
               <p id="errorMsg_doi" class="alert alert-danger" style="display: none" ></p>

    <label for="DOI">DOI</label>
    <input type="date" name='doi' id="doi" class="form-control" placeholder="Date Of Investment">
  </div>
   
  <div class="form-group">
      <p id="errorMsg_invest_nav" class="alert alert-danger" style="display: none" ></p>

    <label for="invest_nav">Invest Nav</label>
    <input type="text" name='invest_nav' id="invest_nav" class="form-control" placeholder="Invest Nav">
  </div>
   <div class="form-group">
       <p id="errorMsg_current_nav" class="alert alert-danger" style="display: none" ></p>

    <label for="current_nav">Current Nav</label>
    <input type="text" name='current_nav' class="form-control" id="current_nav" placeholder="CURRENT NAV">
  </div>

  <input type="submit" name='update_data_scripts' class="btn btn-primary" value="UPLOAD">
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
        </div>
      </div>
      
    </div>
  </div>
  






</div> 


<?php
if(array_key_exists('update_data_scripts',$_POST)) {
$AMC_NAME = $_POST['amc_name'];
$FUND_NAME = $_POST['fund_name'];
$INVEST_AMT = $_POST['invest_amt'];
$DATE = $_POST['doi'];
$INSERT_INVEST_NAV = $_POST['invest_nav'];
$INSERT_CURRENT_NAV = $_POST['current_nav'];
$INSERT_UNIT = $_POST['no_of_units'];
$USER = $_POST['user'];
$admin = wp_get_current_user();
$ADDED_BY = $admin->user_login;
$selectQuery = $wpdb->get_results("SELECT * FROM wp_users where user_login = '$USER'");

foreach($selectQuery as $print) {
$USER_ID = $print->ID;
$USER_LOGIN = $print->user_login;
}
	$INSERT_PNL = $INSERT_CURRENT_NAV - $INSERT_INVEST_NAV;
	$INSERT_PNL /= $INSERT_UNIT;
	
	
$insertData = $wpdb->get_results("INSERT into client_data values(NULL,'$AMC_NAME','$FUND_NAME','$INVEST_AMT','$INSERT_UNIT','$DATE','$INSERT_INVEST_NAV','$INSERT_CURRENT_NAV','$INSERT_PNL','$USER_LOGIN','$ADDED_BY','$USER_ID')"); 

if(!$insertData) {
   echo  '<br/><div class="alert alert-success" role="alert">';
    echo '<h4 class="alert-heading">Well done!</h4>';
  echo '<p>Kindly click on the REFRESH button to view updated content!!</p></div>';
    echo("<meta http-equiv='refresh' content='1'>"); 



} 	
	
}


if(array_key_exists('edit_data_scripts', $_POST)) {
	$AMC_NAME = $_POST['update_amc_name'];
$FUND_NAME = $_POST['update_fund_name'];
$INVEST_AMT = $_POST['update_invest_amt'];
$DATE = $_POST['update_doi'];
$INVEST_NAV = $_POST['update_invest_nav'];
$CURRENT_NAV = $_POST['update_current_nav'];
$ID = $_POST['update_id'];
$unit = $_POST['no_of_units'];
$USER = $_POST['user'];
$admin = wp_get_current_user();
$ADDED_BY = $admin->user_login;

$selectQuery = $wpdb->get_results("SELECT * FROM wp_users where user_login = '$USER'");

foreach($selectQuery as $print) {
$USER_ID = $print->ID;
$USER_LOGIN = $print->user_login;
}

	$PNL = $CURRENT_NAV - $INVEST_NAV;
	$PNL /= $unit;
	
	$updateData = $wpdb->get_results("UPDATE client_data set AMC_NAME='$AMC_NAME',FUND_NAME='$FUND_NAME',INVEST_AMT='$INVEST_AMT',unit = '$unit',DOI='$DATE',INVEST_NAV='$INVEST_NAV',CURRENT_NAV='$CURRENT_NAV',PNL='$PNL',USER='$USER_LOGIN',ADDED_BY ='$ADDED_BY', USER_ID='$USER_ID' where id='$ID'");
	
	if(!$updateData) {  
	echo  '<br/><div class="alert alert-success" role="alert">';
    echo '<h4 class="alert-heading">Well done! The Data has been updated.</h4>';
  echo '<p>The Page will reload in a glimpse.</p></div>';
    echo("<meta http-equiv='refresh' content='1'>"); 
	}
}

if(array_key_exists('del_script',$_POST)) {
	$ID = $_POST['del_id'];
	$deleteData = $wpdb->get_results("DELETE from client_data where id='$ID'");
	if(!$deleteData) {

		 echo  '<br/><div class="alert alert-danger" role="alert">';
    echo '<h4 class="alert-heading">The Row Has Been Deleted!!</h4>';
  echo '<p>The Page will reload in a glimpse</p></div>';
  	        echo("<meta http-equiv='refresh' content='1'>");
 
	}
}



