<?php

defined("BASEPATH") OR exit("No direct script access allow");


class Admin extends CI_Model{
	
	
	
	public function __construct(){
		
		parent::__construct();

		
	}
	
	

		public function insertoption($option_name,$option_value){
		$on=$this->db->get_where("fdm_va_options",array('option_name'=>$option_name));
		$os=$on->num_rows();
		if($os=='0'){
			$data=array("option_name"=>$option_name,
					   "option_value"=>$option_value);
			$oss=$this->db->insert("fdm_va_options",$data);
		}
		if($os='1'){
				$data=array("option_name"=>$option_name,
					   "option_value"=>$option_value);
			$oss=$this->db->set($data);
			$oss=$this->db->where("option_name",$option_name);
			$oss=$this->db->update("fdm_va_options");
		}		
	}
	public function get_option($option_name){
		$option=$this->db->get_where("fdm_va_options",array("option_name"=>$option_name));
		$o=$option->row();
		if($o){
		return $o->option_value;	
		}else{
			$oo='0';
		return $oo;
		}
	}
		public function generateNewsid(){
		$i='1';
		do{
			$id="NEWS".random_string("numeric",8);
			$chk=$this->db->get_where("fdm_va_news_and_community",array('id'=>$id))->num_rows();
			if($chk>0){
				$i='1';
			}else{
				$i='10';
			}
			
		}while($i<5);
		
		return $id;
	}


	public function generateOtp(){
		
		
		$i='1';
		
		do{
			
			$id=random_string("numeric",8);
			
			$chk=$this->db->get_where("fdm_va_otp",array('otp'=>$id))->num_rows();
			
			if($chk>0){
				$i='1';
				
			}else{
				$i='10';
			}
			
			
		}while($i<5);
		
		return $id;
	}

	public function get_admin($value=""){

		return $this->db->get_where("tbl_auths",array("id"=>$this->session->userdata("admin_id")))->row()->$value;


	}

	public function get_role(){
		return $this->db->get_where("fdm_va_roles")->result();
	}

	public function get_user($value=""){

		return $this->db->get_where("fdm_va_users",array("id"=>$this->session->userdata("user_id")))->row()->$value;
	}

	public function get_user_role(){
		$rr = $this->db->get_where("fdm_va_auths",array("id"=>$this->session->userdata("admin_id"),"role"=>2))->row();
        return $rr;
	}

	public function get_admin_role(){

		return $this->db->get_where("fdm_va_auths",array("id"=>$this->session->userdata("admin_id"),"role"=>1))->row();
	}
	public function get_editor_role(){

		return $this->db->get_where("fdm_va_auths",array("id"=>$this->session->userdata("admin_id"),"role"=>3))->row();
	}

	public function get_module($id){
		$umr = $this->db->get_where("fdm_va_admin_role_access",array("user_id"=>$id))->result_array();
		//print_r($umr);
		$kk = array();
		foreach ($umr as $key) {
		$kk[] =  $key["module_id"];

		}
		return $kk;

	}

	public function getUrlmodule($uid,$mid){

		$mod = $this->db->get_where("fdm_va_admin_role_access",array("user_id"=>$uid,"module_id"=>$mid))->row();
		return $mod;

	}

	public function getheaderLogo(){

		return $this->db->query("select * from fdm_va_general_logo where deleted=0 and logo_type='Header' order by id desc")->row()->logo;
	}

	public function getfooterLogo(){

		return $this->db->query("select * from fdm_va_general_logo where deleted=0 and logo_type='Footer' order by id desc")->row()->logo;
	}

	function seo_friendly_url($string){
	    $string = str_replace(array('[\', \']'), '', $string);
	    $string = preg_replace('/\[.*\]/U', '', $string);
	    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
	    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
	    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
	    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
	    return strtolower(trim($string, '-'));
	}
	
	
	public function info($column=""){
		
		return $this->db->get_where("fdm_va_general_contact")->row()->$column;
		
	}
	
	
	public function generateCaptcha(){
		
		
		$this->load->helper("captcha");
		// Captcha Conf

	
		$config = array(
            'img_path'      => 'uploads/captcha/',
            'img_url'       => base_url().'uploads/captcha/',
			'img_width' => 160,
			'img_height' => 35,
			'word_length'   => 6,
//			'font_size' => 50,
            'font_path'     => FCPATH.'uploads/captcha/fonts/verdana.ttf',
		);
	
        $captcha = create_captcha($config);
        
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);
        
        // Pass captcha image to view
        $captchaImg = $captcha['image'];
	
		return($captchaImg);
		
// Captcha conf ends	
		
		
		
	}


	public function moduleCheck(){
		
		$id = $this->session->userdata("admin_id");
	
		$userstatus = $this->db->get_where("fdm_va_auths",array("id"=>$id))->row();
	
		if($userstatus->status != "Active"){
		   $msg = '<div class="alert alert-danger alert-dismissable"><button type = "button" class ="close" data-dismiss = "alert" aria-hidden = "true">&times;</button>Please Login To Access Users</div>';	
			$this->session->set_flashdata("fmsg",$msg);
			redirect("login");
		}
		
		$ar = $this->db->get_where("fdm_va_roles",array("id"=>$id))->row();	
		//$arole = $ar->role_name;
		if($userstatus->role==1){

		}else{

			   $url = $this->uri->segment(1);

			   $m = $this->db->get_where("fdm_va_modules",array("module_link"=>$url))->row();

			   $ua = $this->db->get_where("fdm_va_admin_role_access",array("user_id"=>$id,"module_id"=>$m->module_id))->row();

					if($m->module_id==$ua->module_id){
					   // echo "yes";

					}else{
					   //echo "no";
					   redirect("dashboard/error_module");
					}

		}
		
	}
	
	public function replaceString(){
		
		$find = array("'","!","?","*","%","#","$","&","@","^","(",")","[","]","/","{","}","|",",");
		
		return $find;
	} 
	public function getRow($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_contact');
        //fetch data by conditions
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        //return fetched data
        return $result;
    }
	public function delete($id){
        if(is_array($id)){
            $this->db->where_in('id', $id);
        }else{
            $this->db->where('id', $id);
        }
        $delete = $this->db->delete('tbl_contact');
        return $delete?true:false;
    }

	//subscribes//





	public function getRow_subscribes($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_booking');
        //fetch data by conditions
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        //return fetched data
        return $result;
    }
	public function delete_booking($id){
        if(is_array($id)){
            $this->db->where_in('id', $id);
        }else{
            $this->db->where('id', $id);
        }
        $delete = $this->db->delete('tbl_booking');
        return $delete?true:false;
    }

	public function delete_subscribes($id){
        if(is_array($id)){
            $this->db->where_in('id', $id);
        }else{
            $this->db->where('id', $id);
        }
        $delete = $this->db->delete('tbl_subscribers');
        return $delete?true:false;
    }
	
}