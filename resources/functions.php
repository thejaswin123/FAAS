<?php
$domain_name = "https://ranksboost.com/";
$site_title = "FAWS";
$admin_email_address = "example@any.com";
//...........................................................................
//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPP...PEEEEEEEEEE.ERRRRRRRRR....
//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPPP..PEEEEEEEEEE.ERRRRRRRRRR...
//.HHHH...HHHH..EEEEEEEEEEE.ELLL.......PPPPPPPPPPP.PEEEEEEEEEE.ERRRRRRRRRR...
//.HHHH...HHHH..EEEE........ELLL.......PPPP...PPPP.PEEE........ERRR...RRRRR..
//.HHHH...HHHH..EEEE........ELLL.......PPPP...PPPP.PEEE........ERRR...RRRRR..
//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPPPP.PEEEEEEEEE..ERRRRRRRRRR...
//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPPP..PEEEEEEEEE..ERRRRRRRRRR...
//.HHHHHHHHHHH..EEEEEEEEEE..ELLL.......PPPPPPPPP...PEEEEEEEEE..ERRRRRRR......
//.HHHH...HHHH..EEEE........ELLL.......PPPP........PEEE........ERRR.RRRR.....
//.HHHH...HHHH..EEEE........ELLL.......PPPP........PEEE........ERRR..RRRR....
//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR..RRRRR...
//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR...RRRRR..
//.HHHH...HHHH..EEEEEEEEEEE.ELLLLLLLLL.PPPP........PEEEEEEEEEE.ERRR....RRRR..
//...........................................................................

function last_id()
{
  global $connection;
  return mysqli_insert_id($connection);
}

function set_message($msg)
{
  if(!empty($msg))
  {
    $_SESSION['message'] = $msg;
  } else {
    $msg = "";
  }
}

function set_error_message($msg)
{
  if(!empty($msg))
  {
    $_SESSION['error_message'] = $msg;
  }
  else
  {
    $msg = "";
  }
}

function redirect($location)
{
  header("Location: $location");
}

function query($sql)
{
  global $connection;
  return mysqli_query($connection, $sql);// use to send query to database
}

function confirm($result)
{
  global $connection;
  if(!$result)
  {
    die("QUERY FAILED". mysqli_error($connection));//mysqli_error — Returns a string description of the last error
  }
}

function escape_string($string)
{
  global $connection;
  return mysqli_real_escape_string($connection, $string);//Escapes special characters in a string for use in an SQL statement
}

function fetch_array($result)
{
  return mysqli_fetch_array($result); //use for fetch from database
}

function num_rows($result)
{
  return mysqli_num_rows($result);
}

function run_query($sql)
{
  $query = query($sql);
  confirm($query);
}

function get_page()
{
  if (isset($_GET['page'])) { 
    $page = $_GET['page'];
    $filename = "pages/".$page.".php";
    if (file_exists($filename)) {
      include $filename;
    }
  } else {
    include("pages/dashboard.php");
  }
}

function get_user_data($id,$user)
{
  $query = query("SELECT * FROM {$user}s WHERE {$user}_id = $id");
  confirm($query);
  $data = fetch_array($query);
  return $data;
}

function get_user_field_id($id,$user,$field)
{
  $query = query("SELECT {$field} FROM {$user}s WHERE {$user}_id = $id");
  confirm($query);
  $data = fetch_array($query);
  return $data[$field];
}

function count_as_total($table,$where)
{
  $query = query("SELECT * FROM {$table} {$where}");
  confirm($query);
  $count = num_rows($query);
  return $count;
}

function sum_as_total($table,$where,$field)
{
  $query = query("SELECT SUM($field) AS Total FROM {$table} {$where}");
  confirm($query);
  $data = fetch_array($query);
  return $data['Total'];
}

function sum_as_total_farmer($table,$where,$field)
{
  $query = query("SELECT SUM($field) AS Total FROM {$table} {$where}");
  confirm($query);
  $data = fetch_array($query);
  return $data['Total'];
}

function show_sweet_alert($alert)
{
  echo "<script>$(document).ready(function(){".$alert."();});</script>";
}

function show_sweet_alert_parm($alert,$parm)
{
  echo "<script>$(document).ready(function(){".$alert."('".$parm."');});</script>";
}

function get_active_class($page)
{
  $current = "";
  
  if (isset($_GET['page'])) 
  {
    $current = $_GET['page'];
  }

  if ($page == $current) {
    echo " active ";
  }

  if ($page == "dashboard" && $current == "") {
    echo " active ";
  }
}

function genrate_password_div($email,$type,$pattren=true)
{
  if ($pattren) {
    $pattren='pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$" title="8-15 charecters | 1 Upercase | 1 Number | 1 Special Charecter"';
  } else {
    $pattren="";
  }
$confirm = <<<DELIMETER
<div class="row">
  <div class="col-12">
    <div class="mb-3">
      Your Email is "<b>{$email}</b>"
    </div>
    <div class="form-group">
      <label>Current Password <span class="text-danger">*</span></label>
      <input type="password" name="current_password" class="form-control" placeholder="Type Current Password" {$pattren} required>
    </div>
    <button class="btn btn-success" type="submit" name="change_password"><i class="nc-icon nc-key-25"></i> Change Password</button>
  </div>
</div>
DELIMETER;

$change = <<<DELIMETER
<div class="row">
  <div class="col-12">
    <div class="mb-3">
      Your Email is "<b>{$email}</b>"
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
      <label>Type New Password <span class="text-danger">*</span></label>
      <input type="password" name="password" class="form-control" placeholder="Type New Password" required {$pattren}>
    </div>
      </div>
      <div class="col-6">
        <div class="form-group">
      <label>Re-Type Password <span class="text-danger">*</span></label>
      <input type="password" name="confirm_password" class="form-control" placeholder="Re-Type Password" required {$pattren}>
    </div>
      </div>
    </div>
    <button class="btn btn-success" type="submit" name="reset_password"><i class="nc-icon nc-key-25"></i> Change Password</button>
  </div>
</div>
DELIMETER;

  if (isset($_POST['change_password'])) {
    extract($_POST);
    if (check_user_password($email,$current_password,$type)) {
      echo $change;
    } else {
      show_sweet_alert("password_error()");
    }
  } else {
    echo $confirm;
  }
}

function genrate_menu()
{
$default = <<<DELIMETER
<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link" style='color:white !important' href="index.php">
            Home
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" style='color:white !important' href="farmer-registration.php">Become Farmer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style='color:white !important' href="supplier-registration.php">Become Suplier</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style='color:white !important' href="about.php">About Us</a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle btn btn-primary text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="farmer-login.php">Farmer</a>
            <a class="dropdown-item" href="supplier-login.php">Supplier</a>
        </div>
    </li>
</ul>
DELIMETER;
if (isset($_SESSION['farmer_id'])) {
}
$farmer = <<<DELIMETER
<ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" style='color:white !important' href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style='color:white !important' href="farmer/index.php?page=all_orders">Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style='color:white !important' href="worker/">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-item btn btn-primary" href="logout.php">Sign Out</a>
    </li>
</ul>
DELIMETER;
$supplier = <<<DELIMETER
<ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" style='color:white !important' href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style='color:white !important' href="supplier/index.php?page=all_orders">Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style='color:white !important' href="supplier/">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-item btn btn-primary" href="logout.php">Sign Out</a>
    </li>
</ul>
DELIMETER;
  if (isset($_SESSION['farmer_id'])) {
    echo $farmer;
  } elseif (isset($_SESSION['supplier_id'])) {
    echo $supplier;
  } else {
    echo $default;
  }
}

function get_table_fiels($table,$field,$sql){
    $query = query("SELECT {$field} FROM {$table} {$sql}");
    confirm($query);
    $data=fetch_array($query);
    return $data[$field];
}

function update_field($sql)
{
  $query = query($sql);
  confirm($query);
}

function get_table_record($table,$where="")
{
  $query = query("SELECT * FROM {$table} {$where}");
  confirm($query);
  $data = fetch_array($query);
  return $data;
}

function validate_admin_login_page()
{
  if (isset($_SESSION['admin_id'])) {
    redirect("index.php");
  }
}


function validate_admin_login()
{
  if (!isset($_SESSION['admin_id'])) {
    redirect("login.php");
  }
}

function admin_login()
{
  if (isset($_POST['admin_login'])) {
    extract($_POST);
    $password = md5($password);
    $query=query("SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'");
    confirm($query);
    $num = num_rows($query);
    if ($num == 1 ) {
      $data=fetch_array($query);
      $id = $data["admin_id"];
      extract($data);
      $_SESSION['admin_id'] = $id;
      $_SESSION['admin_name'] = $username;
      redirect("index.php");
    } else {
      show_sweet_alert("admin_login_error");
    }
  }
}

function get_farmers_admin()
{
  $query = query("SELECT * FROM farmers");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($farmer=fetch_array($query)) {
    $crops=sum_as_total("crops","WHERE farmer_id=".$farmer['id']."","quantity")."kg";
    $btn = "";
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$farmer['farmer_id']}</td>
  <td>{$farmer['name']}</td>
  <td>{$farmer['phone']}</td>
  <td>{$crops}</td>
  <td>
    {$btn}
    <a href="index.php?page=farmer_profile&farmer={$farmer['id']}" class="btn-sm btn-primary text-center"> Profile</a>
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="6" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function get_crops_admin()
{
  $query = query("SELECT * FROM crops");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($crop=fetch_array($query)) {
    $farmer_id = get_table_field_id($crop['farmer_id'],"farmer","farmer_id");
    $amount = "$".$crop['amount']."/kg";
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td><a href="index.php?page=farmer_profile&farmer={$crop['farmer_id']}">{$farmer_id}</a></td>
  <td>{$crop['name']}</td>
  <td>{$crop['quantity']}</td>
  <td>{$amount}</td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="5" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function get_crops_purchased_admin()
{
  $query = query("SELECT * FROM crop_purchased");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($crop=fetch_array($query)) {
    $farmer_id = get_table_field_id($crop['farmer_id'],"farmer","farmer_id");
    $supplier_id = get_table_field_id($crop['supplier_id'],"supplier","supplier_id");
    $crop_name = get_table_field_id($crop['crop_id'],"crops","name",false);
    $total = "$".($crop['amount']*$crop['quantity']);
    $amount = "$".$crop['amount']."/kg";
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td><a href="index.php?page=farmer_profile&farmer={$crop['farmer_id']}">{$farmer_id}</a></td>
  <td><a href="index.php?page=supplier_profile&supplier={$crop['supplier_id']}">{$supplier_id}</a></td>
  <td>{$crop_name}</td>
  <td>{$crop['quantity']}</td>
  <td>{$amount}</td>
  <td>{$total}</td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="5" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function get_complaints_admin()
{
  $query = query("SELECT * FROM complaints");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($complaint=fetch_array($query)) {
    $farmer_id = get_table_field_id($complaint['farmer_id'],"farmer","farmer_id");
    $supplier_id = get_table_field_id($complaint['supplier_id'],"supplier","supplier_id");
    $complaint_id = $complaint['id'];
    $accept = "";
    $reject = "";
    if ($complaint['status'] == 0) {
      $accept = '<a href="index.php?page=complaints&approve='.$complaint_id.'" class="btn-sm btn-success">Approve</a>';
      $reject = '<a href="index.php?page=complaints&reject='.$complaint_id.'" class="btn-sm btn-danger">Reject</a>';
    }

    if ($complaint['status'] == 1) {
      $accept = '<span class="text-success">Solved</span>';
    } elseif ($complaint['status'] == 2) {
      $accept = '<span class="text-danger">Rejected</span>';
    }
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$complaint['complainer']}</td>
  <td><a href="index.php?page=farmer_profile&farmer={$complaint['farmer_id']}">{$farmer_id}</a></td>
  <td><a href="index.php?page=supplier_profile&supplier={$complaint['supplier_id']}">{$supplier_id}</a></td>
  <td>{$complaint['complaint']}</td>
  <td>
    {$accept}
    {$reject}
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="5" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}


function get_tips_admin()
{
  $query = query("SELECT * FROM farmer_tips");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($tip=fetch_array($query)) {
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$tip['title']}</td>
  <td>
    <a href="index.php?page=add_tips&delete={$tip['id']}" class="btn btn-danger">Delete</a>
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="3" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function get_tips_farmer()
{
  $query = query("SELECT * FROM farmer_tips");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($tip=fetch_array($query)) {
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$tip['title']}</td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="2" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}



function get_table_field_id($id,$table,$field,$type=true)
{
  if ($type) {
    $table = $table."s";
  }
  $query = query("SELECT {$field} FROM {$table} WHERE id = $id");
  confirm($query);
  $data = fetch_array($query);
  return $data[$field];
}

function get_farmer_info($id)
{
    $query = query("SELECT * FROM farmers WHERE id={$id}");
    confirm($query);
    $data = fetch_array($query);
    return $data;
}

function get_supplier_info($id)
{
    $query = query("SELECT * FROM suppliers WHERE id={$id}");
    confirm($query);
    $data = fetch_array($query);
    return $data;
}

function get_suppliers_admin()
{
  $query = query("SELECT * FROM suppliers");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($supplier=fetch_array($query)) {
    $crops=sum_as_total("crop_purchased","WHERE supplier_id=".$supplier['id']."","quantity")."kg";
    $btn = "";
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$supplier['supplier_id']}</td>
  <td>{$supplier['name']}</td>
  <td>{$supplier['phone']}</td>
  <td>{$crops}</td>
  <td>
    {$btn}
    <a href="index.php?page=supplier_profile&supplier={$supplier['id']}" class="btn-sm btn-primary text-center"> Profile</a>
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="6" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}


// 

function farmer_login()
{
  echo "string";
  if (isset($_POST['farmer_login'])) {
    extract($_POST);
    $query = query("SELECT * FROM farmers WHERE farmer_id = '{$farmer_id}' AND password = '{$password}'");
    confirm($query);
    $count = num_rows($query);
    if ($count == 1) {
      $data = fetch_array($query);
      $_SESSION['user_login'] = true;
      $_SESSION['farmer_id'] = $data['farmer_id'];
      $_SESSION['farmer_name'] = $data['name'];
      $_SESSION['user_type'] = "farmer";
      $_SESSION['user_id'] = $data['id'];
      redirect("farmer/");
    } else {
      show_sweet_alert("login_error");
    }
  }
}

function validate_farmer_login()
{
  if (isset($_SESSION['farmer_id'])) {
    return false;
  } else {
    return true;
  }
}

function update_farmer()
{
  if (isset($_POST['update_farmer'])) {
    unset($_POST['update_farmer']);
    $id = $_SESSION['user_id'];
    $sql = "";
    foreach ($_POST as $name => $value) {
      $sql .= $name."='".escape_string($value)."',";
    }
    $sql = substr($sql, 0, -1);
    echo "UPDATE `farmers` SET {$sql} WHERE id = {$id}";
    $query = run_query("UPDATE `farmers` SET {$sql} WHERE id = {$id}");
    show_sweet_alert("information_updated");
  }
}

function get_crops_purchased_farmer()
{
  $id = $_SESSION['user_id'];
  $query = query("SELECT * FROM crop_purchased WHERE farmer_id = {$id}");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($crop=fetch_array($query)) {
    $supplier_id = get_table_field_id($crop['supplier_id'],"supplier","supplier_id");
    $crop_name = get_table_field_id($crop['crop_id'],"crops","name",false);
    $total = "$".($crop['amount']*$crop['quantity']);
    $amount = "$".$crop['amount']."/kg";
    $accept = "";
    $reject = "";
    $crop_id = $crop['id'];
    if ($crop['status'] == 1) {
      $accept = "<span class='text-danger'>Accepted</span>";
    } elseif ($crop['status'] == 0) {
      $accept = "<a href='index.php?page=all_orders&accept={$crop_id}' class='btn-sm btn-success'>Accept</a>";
      $reject = "<a href='index.php?page=all_orders&reject={$crop_id}' class='btn-sm btn-danger'>Reject</a>";
    } elseif ($crop['status'] == 2) {
      $accept = "<span class='text-danger'>Rejected</span>";
    } elseif ($crop['status'] == 3) {
      $accept = "<span class='text-success'>Received</span>";
    }
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td><a href="index.php?page=supplier_profile&supplier={$crop['supplier_id']}">{$supplier_id}</a></td>
  <td>{$crop_name}</td>
  <td>{$crop['quantity']}kg</td>
  <td>{$amount}</td>
  <td>{$total}</td>
  <td>
    {$accept}
    {$reject}
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="7" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function get_crops_farmer()
{
  $id = $_SESSION['user_id'];
  $query = query("SELECT * FROM crops WHERE farmer_id = {$id}");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($crop=fetch_array($query)) {
    $total = "$".($crop['amount']*$crop['quantity']);
    $amount = "$".$crop['amount']."/kg";
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$crop['name']}</td>
  <td>{$crop['quantity']}kg</td>
  <td>{$amount}</td>
  <td>
    <a href="index.php?page=crops&delete={$crop['id']}" class="btn-sm btn-danger">Delete</a>
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="7" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}


function add_crop()
{
  if (isset($_POST['add_crop'])) {
    extract($_POST);
    $id = $_SESSION['user_id'];
    $query = query("INSERT INTO crops(farmer_id,name,quantity,amount) VALUES ({$id},'{$name}',{$quantity},{$price})");
    confirm($query);
    redirect("index.php?page=crops");
  }
}

function delete_crop()
{
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = query("DELETE FROM crops WHERE id = {$id}");
    confirm($query);
    redirect("index.php?page=crops");
  }
}

function add_complaint()
{
  if (isset($_POST['add_complaint'])) {
    extract($_POST);
    $id = $_SESSION['user_id'];
    echo "INSERT INTO complaints(complainer,farmer_id,supplier_id,complaint) VALUES ('farmer',{$id},{$supplier},'{$complaint}')";
    $query = query("INSERT INTO complaints(complainer,farmer_id,supplier_id,complaint) VALUES ('farmer',{$id},{$supplier},'{$complaint}')");
    confirm($query);
    redirect("index.php?page=complaint");
  }
}

function accept_order()
{
  if (isset($_GET['accept'])) {
    $id = $_GET['accept'];
    $query = query("UPDATE crop_purchased SET status=1 WHERE id={$id}");
    confirm($query);
    redirect("index.php?page=all_orders");
  }
}

function received_order()
{
  if (isset($_GET['received'])) {
    $id = $_GET['received'];
    $query = query("UPDATE crop_purchased SET status=3 WHERE id={$id}");
    confirm($query);
    $query = query("SELECT crop_id,quantity FROM crop_purchased WHERE id={$id}");
    confirm($query);
    $data = fetch_array($query);
    $purchased_quantity = $data['quantity'];
    $id = $data['crop_id'];
    $query = query("SELECT quantity FROM crops WHERE id={$id}");
    confirm($query);
    $data = fetch_array($query);
    $old_quantity = $data['quantity'];
    $new_quantity = intval($old_quantity)-intval($purchased_quantity);
    $query = query("UPDATE crops SET quantity={$new_quantity} WHERE id={$id}");
    confirm($query);
    redirect("index.php?page=all_orders");
  }
}

function reject_order()
{
  if (isset($_GET['reject'])) {
    $id = $_GET['reject'];
    $query = query("UPDATE crop_purchased SET status=2 WHERE id={$id}");
    confirm($query);
    redirect("index.php?page=all_orders");
  }
}

function get_complaints_farmer()
{
  $id = $_SESSION['user_id'];
  $query = query("SELECT * FROM complaints WHERE farmer_id = {$id} AND complainer = 'farmer'");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($complaint=fetch_array($query)) {
    $status ="";
    if ($complaint['status'] == 1) {
      $status ="<span class='text-success'>Solved</span>";
    } else if ($complaint['status'] == 2) {
      $status ="<span class='text-danger'>Rejected</span>";
    } else if ($complaint['status'] == 0) {
      $status ="<span class='text-primary'>Proccessing</span>";
    }
    $supplier_id = get_table_field_id($complaint['supplier_id'],"supplier","supplier_id");
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$supplier_id}</td>
  <td>{$complaint['complaint']}</td>
  <td>{$status}</td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="7" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function get_complaints_supplier()
{
  $id = $_SESSION['user_id'];
  $query = query("SELECT * FROM complaints WHERE supplier_id = {$id} AND complainer = 'supplier'");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($complaint=fetch_array($query)) {
    $status ="";
    if ($complaint['status'] == 1) {
      $status ="<span class='text-success'>Solved</span>";
    } else if ($complaint['status'] == 2) {
      $status ="<span class='text-danger'>Rejected</span>";
    } else if ($complaint['status'] == 0) {
      $status ="<span class='text-primary'>Proccessing</span>";
    }
    $supplier_id = get_table_field_id($complaint['supplier_id'],"supplier","supplier_id");
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td><a href="index.php?page=supplier_profile&supplier={$complaint['supplier_id']}">{$supplier_id}</a></td>
  <td>{$complaint['complaint']}</td>
  <td>{$status}</td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="7" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function generate_suppliers_dropdown()
{
  $query = query("SELECT * FROM suppliers");
  confirm($query);
  while ($data=fetch_array($query)) {
    echo "<option value='{$data['id']}'>{$data['supplier_id']}</option>";
  }
}

function generate_farmers_dropdown()
{
  $query = query("SELECT * FROM farmers");
  confirm($query);
  while ($data=fetch_array($query)) {
    echo "<option value='{$data['id']}'>{$data['farmer_id']}</option>";
  }
}





// 


function validate_supplier_login()
{
  if (isset($_SESSION['supplier_id'])) {
    return false;
  } else {
    return true;
  }
}

function supplier_login()
{
  if (isset($_POST['supplier_login'])) {
    extract($_POST);
    $query = query("SELECT * FROM suppliers WHERE supplier_id = {$supplier_id} AND password = '{$password}'");
    confirm($query);
    $count = num_rows($query);
    if ($count == 1) {
      $data = fetch_array($query);
      $_SESSION['user_login'] = true;
      $_SESSION['supplier_id'] = $data['supplier_id'];
      $_SESSION['user_id'] = $data['id'];
      $_SESSION['supplier_name'] = $data['name'];
      redirect("supplier/");
    } else {
      show_sweet_alert("login_error");
    }
  }
}

function get_crops_supplier()
{
  $id = $_SESSION['user_id'];
  $query = query("SELECT * FROM crops");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($crop=fetch_array($query)) {
    $farmer_id = get_table_field_id($crop['farmer_id'],"farmer","farmer_id");
    $amount = "$".$crop['amount']."/kg";
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$farmer_id}</td>
  <td>{$crop['name']}</td>
  <td>{$crop['quantity']}kg</td>
  <td>{$amount}</td>
  <td>
    <a href="index.php?page=order_crop&crop={$crop['id']}&farmer={$crop['farmer_id']}" class="btn-sm btn-info">Order</a>
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="7" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function order_crops()
{
  if (isset($_POST['order_crop'])) {
    print_r($_POST);
    $farmer = $_GET['farmer'];
    $id = $_SESSION['user_id'];
    $crop = $_GET['crop'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $query = query("INSERT INTO crop_purchased(farmer_id,supplier_id,crop_id,quantity,amount,details) VALUES ({$farmer},{$id},{$crop},{$quantity},{$price},'{$details}')");
    confirm($query);
    redirect("index.php?page=all_orders");
  }
}

function get_crops_purchased_supplier()
{
  $id = $_SESSION['user_id'];
  $query = query("SELECT * FROM crop_purchased WHERE supplier_id = {$id}");
    confirm($query);
  $sr=1;
  $count = num_rows($query);
if ($count > 0) {
  while ($crop=fetch_array($query)) {
    $farmer_id = get_table_field_id($crop['farmer_id'],"farmer","farmer_id");
    $crop_name = get_table_field_id($crop['crop_id'],"crops","name",false);
    $total = "$".($crop['amount']*$crop['quantity']);
    $amount = "$".$crop['amount']."/kg";
    $accept = "";
    $reject = "";
    $crop_id = $crop['id'];
    if ($crop['status'] == 1) {
      $accept = "<a href='index.php?page=all_orders&received={$crop_id}' class='btn-sm btn-success'>Recived</a>";
    } elseif ($crop['status'] == 0) {
      $accept = "<span class='text-info'>Proccessing</span>";
    } elseif ($crop['status'] == 2) {
      $accept = "<span class='text-danger'>Rejected</span>";
    } elseif ($crop['status'] == 3) {
      $accept = "<span class='text-success'>Received</span>";
    }
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$farmer_id}</td>
  <td>{$crop_name}</td>
  <td>{$crop['quantity']}kg</td>
  <td>{$amount}</td>
  <td>{$total}</td>
  <td>
    {$accept}
    {$reject}
  </td>
</tr>
DELIMETER;
$sr++;
echo $div;
  }
} else {
  echo '<tr><td colspan="7" class="text-center text-danger"><h5>No data found</h5></td></tr>';
}
}

function add_complaint_supplier()
{
  if (isset($_POST['add_complaint'])) {
    extract($_POST);
    $id = $_SESSION['user_id'];
    $query = query("INSERT INTO complaints(complainer,supplier_id,farmer_id,complaint) VALUES ('supplier',{$id},{$farmer},'{$complaint}')");
    confirm($query);
    redirect("index.php?page=complaint");
  }
}

function solve_complaint()
{
  if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $query = query("UPDATE complaints SET status=1 WHERE id={$id}");
    confirm($query);
    redirect("index.php?page=complaints");
  }
}

function reject_complaint()
{
  if (isset($_GET['reject'])) {
    $id = $_GET['reject'];
    echo "UPDATE complaints SET status=2 WHERE id={$id}";
    $query = query("UPDATE complaints SET status=2 WHERE id=".$id."");
    confirm($query);
    redirect("index.php?page=complaints");
  }
}

function last_record_id($table)
{
  $query = query("SELECT id,{$table}_id FROM {$table}s ORDER BY id DESC LIMIT 1;");
  confirm($query);
  $data = fetch_array($query);
  $field = $table."_id";
  $field = intval($data[$field])+1;
  if ($field == 1) {
    $field = 1001;
  }
  return $field;
}

function farmer_register()
{
  if (isset($_POST['farmer_register'])) {
    $_POST['farmer_id '] = last_record_id("farmer");
    unset($_POST['farmer_register']);
    extract($_POST);
    $fields = "";
    $values = "";
    foreach ($_POST as $name => $value) {
      $fields .= $name.",";
      $values .= "'".escape_string($value)."',";
    }
    $fields = substr($fields, 0, -1);
    $values = substr($values, 0, -1);
    $sql = "INSERT INTO farmers({$fields}) VALUES ({$values})";
    $query = run_query($sql);
    $worker_id = last_id();
    show_sweet_alert("farmer_registered");
  }
}


function supplier_register()
{
  if (isset($_POST['supplier_register'])) {
    $_POST['supplier_id '] = last_record_id("supplier");
    unset($_POST['supplier_register']);
    extract($_POST);
    $fields = "";
    $values = "";
    foreach ($_POST as $name => $value) {
      $fields .= $name.",";
      $values .= "'".escape_string($value)."',";
    }
    $fields = substr($fields, 0, -1);
    $values = substr($values, 0, -1);
    $sql = "INSERT INTO suppliers({$fields}) VALUES ({$values})";
    $query = run_query($sql);
    $worker_id = last_id();
    show_sweet_alert("supplier_registered");
  }
}

function get_farmers()
{
  $query = query("SELECT * FROM farmers");
  confirm($query);
  $sr = 1;
  while ($data = fetch_array($query)) {
    extract($data);
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$farmer_id}</td>
  <td>{$name}</td>
  <td>{$phone}</td>
</tr>
DELIMETER;
echo $div;
$sr++;
  }
}

function get_suppliers()
{
  $query = query("SELECT * FROM suppliers");
  confirm($query);
  $sr = 1;
  while ($data = fetch_array($query)) {
    extract($data);
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$supplier_id}</td>
  <td>{$name}</td>
  <td>{$phone}</td>
</tr>
DELIMETER;
echo $div;
$sr++;
  }
}

function add_request()
{
  if (isset($_POST['add_request'])) {
    extract($_POST);
    $query = query("INSERT INTO `requests`(`name`, `price`, `description`) VALUES ('".$name."','".$price."','".$description."')");
    confirm($query);
    redirect("index.php?page=requests");
  }
}

function get_requests_in_supplier()
{
  $query = query("SELECT * FROM `requests`");
  confirm($query);
  $sr = 1;
  while ($data = fetch_array($query)) {
    extract($data);
    $price = "$".$price;
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$name}</td>
  <td>{$description}</td>
  <td>  {$price}</td>
  <td><a href="index.php?page=requests&delete={$data['id']}" class="btn-sm btn-danger">Delete</a></td>
</tr>
DELIMETER;
echo $div;
$sr++;
  }
}


function get_requests_in_farmer()
{
  $query = query("SELECT * FROM `requests`");
  confirm($query);
  $sr = 1;
  while ($data = fetch_array($query)) {
    extract($data);
    $price = "$".$price;
$div = <<<DELIMETER
<tr>
  <td>{$sr}</td>
  <td>{$name}</td>
  <td>{$description}</td>
  <td>  {$price}</td>
</tr>
DELIMETER;
echo $div;
$sr++;
  }
}

function delete_request()
{
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = query("DELETE FROM `requests` WHERE id = {$id}");
    confirm($query);
    header("location: index.php?page=requests");
  }
}