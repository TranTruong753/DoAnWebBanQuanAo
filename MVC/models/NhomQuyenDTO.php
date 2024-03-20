<?php
class NhomQuyenDTO {
    public $MaNhomQuyen; 
    public $TenNhomQuyen; 
    public $TrangThai;

     function NhomQuyenDTO($MaNhomQuyen, $TenNhomQuyen, $TrangThai) {
        $this->MaNhomQuyen = $MaNhomQuyen;
        $this->TenNhomQuyen = $TenNhomQuyen;
        $this->TrangThai = $TrangThai;
    }

    public function getMaNhomQuyen() {
        return $this->MaNhomQuyen;
    }

    public function setMaNhomQuyen($MaNhomQuyen) {
        $this->MaNhomQuyen = $MaNhomQuyen;
    }

    public function getTenNhomQuyen() {
        return $this->TenNhomQuyen;
    }

    public function setTenNhomQuyen($TenNhomQuyen) {
        $this->TenNhomQuyen = $TenNhomQuyen;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>