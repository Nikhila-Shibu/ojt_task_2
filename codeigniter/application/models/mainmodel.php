<?php
class mainmodel extends CI_model
{
public function regist($a)
{
$this->db->insert("details",$a);
}
public function encpassword($pass)
{
	return password_hash($pass, PASSWORD_BCRYPT);
}
public function view()
{
	$this->db->select('*');
	$qry=$this->db->get("details");
	return $qry;
}
public function singledata($id)
{
	$this->db->select('*');
	$this->db->where("id",$id);
	$qry=$this->db->get("details");
	return $qry;
}
public function singleselect()
{
	$qry=$this->db->get("details");
	return $qry;
}
public function updatedetails($a,$id)
{
	$this->db->select('*');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("details",$a);
	return $qry;
}
public function deletedetails($id)
{
	$this->db->where('id',$id);
	$this->db->delete("details");
}
public function viewdata()
{
	$this->db->select('*');
	$qry=$this->db->get("form");
	return $qry;
}
public function approve($id)
{
	$this->db->set('status','1');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("form");
	return $qry;
}
public function reject($id)
{
	$this->db->set('status','2');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("form");
	return $qry;
}
public function selectpass($email,$pass)
{
	$this->db->select('password');
	$this->db->from("details");
	$this->db->where("emailid",$email);
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
	$this->db->from("details");
	$this->db->where("emailid",$email);
	return $this->db->get()->row('id');
}
public function getuser($id)
{
	$this->db->select('*');
	$this->db->from("details");
	$this->db->where("id",$id);
	return $this->db->get()->row();
}
}
?>