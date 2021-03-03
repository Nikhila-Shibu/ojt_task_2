<?php
class mainmodel extends CI_model
{
public function encpaswdz($pass)
{
	return password_hash($pass, PASSWORD_BCRYPT);
}	
public function inreg($b,$c)
{
	    $this->db->insert("login",$c);
		$loginid=$this->db->insert_id();
		$b['loginid']=$loginid;
	    $this->db->insert("user_register",$b);
}


public function selectpass($email,$pass)
{
	$this->db->select('password');
	$this->db->from("login");
	$this->db->where("email",$email);
	$qry=$this->db->get()->row('password');
	return $this->verifypass($pass,$qry);
}
public function verifypass($pass,$qry)
{
	return password_verify($pass,$qry);
}
public function getuserid($email)
{
	$this->db->select('id');
	$this->db->from("login");
	$this->db->where("email",$email);
	return $this->db->get()->row('id');
}
public function getuser($id)
{
	$this->db->select('*');
	$this->db->from("login");
	$this->db->where("id",$id);
	return $this->db->get()->row();
}
public function view()
{
	$this->db->select('*');
	$this->db->join('login','login.id=user_register.loginid','inner');
	$qry=$this->db->get("user_register");
	return $qry;
}
 public function approve($id)
{   $this->db->set('status','1');
$qry=$this->db->where("id",$id);
$qry=$this->db->update("login");
return $qry;
}
public function reject($id)
{   $this->db->set('status','2');
$qry=$this->db->where("id",$id);
$qry=$this->db->update("login");
return $qry;
}
public function deletedetails($id)
{
	$this->db->where("id",$id);
	$qry=$this->db->join('user_register','login.id=user_register.loginid','inner');
	$this->db->delete("user_register");
	$qry=$this->db->where("login.id",$id);
	$this->db->delete("login");
}
public function userupdateform($id)
{
$this->db->select('*');
$qry=$this->db->join("login",'login.id=user_register.loginid','inner');
$qry=$this->db->where("user_register.loginid",$id);
$qry=$this->db->get("user_register");
return $qry;
}
public function userupdateform2($a,$b,$id)
{
        $this->db->select('*');
        $qry=$this->db->where("loginid",$id);
        $qry=$this->db->join('user_register','login.id=user_register.loginid','inner');
        $qry=$this->db->update("user_register",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


}
function is_email_available($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get("login");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }  
 public function is_phno_available($mobile)  
      {  
           $this->db->where('mobile', $mobile);  
           $query = $this->db->get("login");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }     

public function is_uname_available($username)
       {  
           $this->db->where('username', $username);  
           $query = $this->db->get("login");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }
 
}
?>