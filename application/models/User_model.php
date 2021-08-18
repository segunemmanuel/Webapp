<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class  User_model extends CI_Model {
 
 public function userExists($email)
 {
// SEARCHES THE DB
    $this->db->where('email', $email);
// FETCH RESULT/table from the database
    $query = $this->db->get('users');
     

    if($query->num_rows()>0)
    {
return TRUE;

    }
    else{
        return FALSE;
    }

 }


//  INSERT USER REGISTRATION DATA
 public function insertUserRegistrationData($email,$fullname,$rawpass,$sex)
 {
 $data=array(
'fullname'=> $fullname,
'sex'=>$sex,
'password'=>$rawpass,
'email'=>$email

 );  

 $this->db->insert('users', $data);
$insert_id=$this->db->insert_id();
return $insert_id;
 }
// Process user login

public function getLoginInData($email,$rawpass){
$this->db->where('email',$email);
$this->db->where('password',$rawpass);

// FETCH RESULT/table from the database
$query = $this->db->get('users');


if($query->num_rows()>0)
{
return TRUE;

}
else{
    return FALSE;
}

}



 
public function userEmailExists($email)
{
// SEARCHES THE DB
   $this->db->where('email', $email);
// FETCH RESULT/table from the database
   $query = $this->db->get('users');
    

   if($query->num_rows()>0)
   {
return TRUE;

   }
   else{
       return FALSE;
   }

}





//  INSERT USER PASSWORD  DATA

public function insertpasswordresetcode($data)
{
 $this->db->insert('passreset', $data);
$insert_id=$this->db->insert_id();
return $insert_id;
}










//  Check if code and token exists
public function passwordResetCodeExists($tokenID,$status)
{
// SEARCHES THE DB
   $this->db->where('token', $tokenID);
   $this->db->where('status', $status);

// FETCH RESULT/table from the database
   $query = $this->db->get('passreset');
     return 

$result=  $query-> row();
if(isset($result)){
return  $result->email;

}
else{
    return false;
}

}



}
