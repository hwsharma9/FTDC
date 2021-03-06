<?php  if (!defined('BASEPATH'))  exit('No direct script access allowed');
class Common_Model extends CI_Model
{
	public $data=array();
	function __construct()
	{
		parent::__construct();		
	}
	public function getData($tablename='', $where = array(), $field = array(),$order=array(),$limit=array(),$count='0')
	{
		if(!empty($field))
		{
			$this->db->select($field);
		}else{
			$this->db->select('*');
		}
		$this->db->from($tablename);
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if($order)
		{
			$this->db->order_by($order['field'],$order['by']);
		}
		if(isset($limit['limit']) && isset($limit['offset']))
		{
			$this->db->limit($limit['limit'],$limit['offset']);
		}

		if(isset($limit['limit']) && !isset($limit['offset']))
		{
			$this->db->limit($limit['limit']);
		}
		$query = $this->db->get();
		if($count==0){
			$result = $query->result_array();
		}else{
			$result = $query->num_rows();
		}
		if($result)
		{
			$query->free_result();
			return $result;
		}else{
			return false;
		}
	}
	
	public function getsData($tablename='', $where = array(), $field = array(),$order=array(),$limit=array(),$count='0')
	{
		if(!empty($field))
		{
			$this->db->select($field);
		}else{
			$this->db->select('*');
		}
		$this->db->from($tablename);
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if($order)
		{
			$this->db->order_by($order[0],$order[1]);
		}
		if(isset($limit['limit']) && isset($limit['offset']))
		{
			$this->db->limit($limit['limit'],$limit['offset']);
		}

		if(isset($limit['limit']) && !isset($limit['offset']))
		{
			$this->db->limit($limit['limit']);
		}
		$query = $this->db->get();
		if($count==0){
			$result = $query->result_array();
		}else{
			$result = $query->num_rows();
		}
		if($result)
		{
			$query->free_result();
			return $result[0];
		}else{
			return false;
		}
	}
	public function updateData($tablename='',$data=array(),$where=array())
	{
		return $this->db->update($tablename, $data, $where);
	}
	
	function getField($tablename,$post)
	{
		$content = array();
		$result = $this->db->list_fields($tablename);
		foreach($result as $field)
		{
			$data[] = $field;
		}
		foreach ($post as $key => $value) {
			if(in_array($key, $data))
			{
				$content[$key] = $value;
			}
		}
		return $content;
	}
	public function insertData($tablename='',$data=array())
	{
		return $this->db->insert($tablename, $data);
	}
	public function where_in($colname='',$in='')
	{
		if(isset($colname) && isset($in))
		{
		 $this->db->where_in($colname ,$in);
		  return $this;
		}
	}
	public function jsonEncode($data=array())
	{
		header('Content-type:"application/json; charset=utf-8"');
		return json_encode($data);
	}
	public function deletedata($tablename='',$where=''){
		if(!empty($tablename) && !empty($where)):
			$this->db->where($where);
			$this->db->delete($tablename);
		else: return "Invalid Input Provided";
		endif;
	}
	public function sendMail($message='',$from='',$to='',$bcc=array(),$subject='',$name='Dragon Recruiting')
	{
		//$this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'crmmarketing101';
        $config['smtp_port'] = '465';
        $config['charset']='utf-8';
        $config['newline']="\r\n";
        $config['crlf'] = "\n";

        $this->email->initialize($config);

		$this->email->clear();
		$this->email->from($from,$name);//"contact@dragonrecruiting.net"
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->bcc($bcc);//array('contact@dragonrecruiting.net')
		if($this->email->send())
		{
			return true;
		}else{
			return false;
		}
	}

	public function getDropDowns($dropdowns=array())
	{
		foreach ($dropdowns as $key => $value) {
			$data[$value] = $this->getData($value);
		}
		return $data;
	}

    public function getCount($table,$limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get($table);
        $result = count($query->result());
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;   
    }

    public function getNumRecord($table,$where="",$groupby="",$like="")
	{
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if(!empty($like))
		{
			$this->db->like($like[0],$like[1],$like[2]);
		}
		if(!empty($groupby))
		{
			$this->db->group_by($groupby);
		}
		$query = $this->db
							->from($table)
							->get();
							
		return $query->num_rows();
	}

    public function mailer($message,$to,$subject)
    {
    	require_once(APPPATH.'/third_party/PHPMailer-master/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "starwebindia.sandeep@gmail.com";  // user email address
        $mail->Password   = "star@123"; 

		$mail->Body = $message;
		$receiver = $to;

		$mail->AddAddress($receiver, "Receiver");
        if(!$mail->Send()) {
            return false;
        } else {
            return true;
        }
    }


	public function getMaxId($table='',$max='') {

		$query = $this->db->query("SELECT max(".$max.") as ".$max." FROM ".$table)->result_array();
		//echo $this->db->last_query();die;//SELECT max(partnerid) FROM `partner`
		if($query[0][$max]){
			$id = (int) ($query[0][$max]+1);
		}else{
			$id = 1;
		}
		return $id;
	}


	public function getMaxCountId($table='',$max='',$where=array()) {

		$this->db->select("count(".$max.") as ".$max);
		$this->db->from($table);
		if($where){
			$this->db->where($where);
		}
		$query = $this->db->get()->result_array();
		//$query = $this->db->query("SELECT max(".$max.") as ".$max." FROM ".$table)->result_array();
		//echo $this->db->last_query();die;//SELECT max(partnerid) FROM `partner`
		if($query[0][$max]){
			$id = (int) ($query[0][$max]+1);
		}else{
			$id = 1;
		}
		return $id;
	}

	public function getKeywordArray($keyword)
	{
		$commonWords = $this->config->item("commonWords");
		//$keyword = "we are specialized in,supplying&medical%items@and!ambulance vehicle and consumables also uniform and tactical items";
		$keyword = preg_replace('/\b('.implode('|',$commonWords).')\b/','',$keyword);
		$keyword = preg_replace('/[^A-Za-z0-9\-]/', '-',trim($keyword));
		$keyword = reduce_multiples($keyword,"-");
		$karray = array_unique(array_map('strtolower',explode("-", url_title($keyword))));
		return $karray;
	}

}