<?


class Nguoi {

	 protected $name;
     public function showTriTue() {
          echo " $this->name IQ 120";
     }
}

class Cho {

	 public $name;
     public function showTriTue() {
          echo " $this->name Ngu như chó";
     }
}

class Quang extends Cho {
	 public $name = 'Quang';
}
$quang_san = new Quang();
$quang_san->showTriTue();
echo "<br>";

/*class Diep extends Nguoi {
	 protected $name = 'Diep';
}
$diep_san = new Diep();
$diep_san->showTriTue();
echo "<br>";

class Cho {
     public function showTriTue() {
          echo “Ngu như chó”;
     }
}*/

//class Diep extends Cho {
//	  public $name = 'Diep';
//    public function showTriTue() {
//         echo "$this->name IQ 100";
//     }
//}

class Diep extends Cho {
      // lớp cha là protected thì lớp con phải là protected hoặc public, không được dùng private
	  public $name = 'Diep';
      public function showTriTue() {
          echo "Lúc mới sinh: ";
          parent::showTriTue();
          echo "<br/> $this->name lúc lớn: IQ 100";
     }
}
$diep_san = new Diep();
$diep_san->showTriTue();



class Truyxuat {
    private $_chi_dung_duoc_trong_class;
    protected $chi_dung_duoc_trong_class_va_trong_cac_lop_con_ke_thua;
    public $o_dau_cung_dung_duoc;
    private function _hamPrivate()
    {
          echo "<br/> Chỉ dùng được trong class";
    }



    protected function hamProtected()
    {
          echo "<br/> Chỉ dùng được trong class và trong các lớp con kế thừa";
    }

    public function hamPublic()
    {
          echo "<br/> Ở đâu cũng dùng được";
    }
}

class TruyxuatOLopCon extends Truyxuat {
    public function cacHamOLopChaCoTheSuDungDuoc($age)
    {
        $this->hamProtected();
        $this->hamPublic();
        echo "<br/> Age co gia tri la $age";
    }
    public function congThemTuoi($tuoi)
    {
         
        return $tuoi + 1;

    }

}


$truy_xuat = new TruyxuatOLopCon();
$age = 30;
$truy_xuat->cacHamOLopChaCoTheSuDungDuoc($age);

$truy_xuat->o_dau_cung_dung_duoc = 'diep';
echo "<br/> Gia tri la $truy_xuat->o_dau_cung_dung_duoc <br/>";

$ket_qua = $truy_xuat->congThemTuoi(10);
echo $ket_qua;























