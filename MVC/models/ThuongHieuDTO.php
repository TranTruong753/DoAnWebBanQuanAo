<?php
class ThuongHieuDTO {
    public $MaThuongHieu; 
    public $TenThuongHieu; 
    public $TrangThai;

    public function ThuongHieuDTO($MaThuongHieu, $TenThuongHieu, $TrangThai) {
        $this->MaThuongHieu = $MaThuongHieu;
        $this->TenThuongHieu = $TenThuongHieu;
        $this->TrangThai = $TrangThai;
    }

    public function getMaThuongHieu() {
        return $this->MaThuongHieu;
    }

    public function setMaThuongHieu($MaThuongHieu) {
        $this->MaThuongHieu = $MaThuongHieu;
    }

    public function getTenThuongHieu() {
        return $this->TenThuongHieu;
    }

    public function setTenThuongHieu($TenThuongHieu) {
        $this->TenThuongHieu = $TenThuongHieu;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }

}
?>