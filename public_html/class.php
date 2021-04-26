<?php
class Diep
{
      private $_muc_do  = 1;
	 function __construct() {
    	$this->_muc_do = 10;
            echo "Đã khởi tạo mức độ là: " . $this->_muc_do;
     }  

      public function noi() {
		  echo "Xàm, mức độ " . $this->_muc_do;
      }

     public function tangMucDoXam()
     {
          $this->_muc_do += 1;
     }
  
     public function ganMucDoXam($muc_do)
     {
          $this->_muc_do = $muc_do;
     }
}

$diep_san = new Diep();
echo "<b> Diep san 1 </b>";
echo "<br>";
$diep_san->ganMucDoXam(10);
echo "<br>";
$diep_san->noi();
echo "<br>";
$diep_san->tangMucDoXam();
echo "<br>";
$diep_san->noi();
echo "<br>";
echo "<b> Diep san 2 </b>";
echo "<br>";
$diep_san2 = new Diep();
echo "<br>";
$diep_san2->noi();
echo "<br>";
$diep_san2->tangMucDoXam();
$diep_san2->noi();


class User
{
      private $_user_id;
      private $_danh_sach_san_pham = '';
    function __construct($user_id){
      $this->_danh_sach_san_pham = array(
        array("id"=>1,"ten"=>"Bao cao su"),
        array("id"=>2,"ten"=>"Keo boi tron"),
      );
      $this->_user_id = $user_id;
    }
    public function showProductsList()
    {
        echo "Danh sách sản phẩm của $this->_user_id";
        echo '<br>';
     foreach($this->_danh_sach_san_pham as $san_pham){
        echo 'id: '. $san_pham['id'] . ', ten san pham: ' . $san_pham['ten'] . '<br>';
     }   
    }

}
echo '<br>';
$nam_gioi = new User(1);
$nam_gioi->showProductsList();






















