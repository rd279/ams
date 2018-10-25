<?php 
class M_SOTK extends CI_Model{
	function list(){
		$hasil = $this->db->query("SELECT * from kantor");
		return $hasil->result();
	}

	function simpan($id,$name){
		$hasil = $this->db->query("INSERT INTO kantor(id,name)VALUE('$id','$name')");
		return $hasil;
	}

	function get_by_id($id){
		$hasil = $this->db->query("SELECT * FROM kantor WHERE id='$id'");
		if ($hasil->num_rows()>0) {
			foreach ($hasil->result() as $data) {
				$hasil = array(
					'id' => $data->id,
					'name' => $data->name 
				);
			}
		}
		return $hasil;
	}

	function update($id,$name){
		$hasil = $this->db->query("UPDATE kantor SET name='$name' WHERE id='$id'");
		return $hasil;
	}

	function hapus($id){
		$hasil = $this->db->query("DELETE FROM kantor WHERE id='$id'");
		return $hasil;
	}

}
?>