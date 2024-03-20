<?php
class TaiKhoanDTO {
    public $MaTaiKhoan; 
    public $MatKhau; 
    public $MaNguoiDung;
    public $MaNhomQuyen;
    public $TrangThai;

    function TaiKhoanDTO($MaTaiKhoan, $MatKhau, $MaNguoiDung, $MaNhomQuyen, $TrangThai) {
        $this->MaTaiKhoan = $MaTaiKhoan;
        $this->MatKhau = $MatKhau;
        $this->MaNguoiDung = $MaNguoiDung;
        $this->MaNhomQuyen = $MaNhomQuyen;
        $this->TrangThai = $TrangThai;
    }

    public function getMaTaiKhoan() {
        return $this->MaTaiKhoan;
    }

    public function setMaTaiKhoan($MaTaiKhoan) {
        $this->MaTaiKhoan = $MaTaiKhoan;
    }

    public function getMatKhau() {
        return $this->MatKhau;
    }

    public function setMatKhau($MatKhau) {
        $this->MatKhau = $MatKhau;
    }

    public function getMaNguoiDung() {
        return $this->MaNguoiDung;
    }

    public function setMaNguoiDung($MaNguoiDung) {
        $this->MaNguoiDung = $MaNguoiDung;
    }

    public function getMaNhomQuyen() {
        return $this->MaNhomQuyen;
    }

    public function setMaNhomQuyen($MaNhomQuyen) {
        $this->MaNhomQuyen = $MaNhomQuyen;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>