<?php
class KhachHangDTO {
    public $MaKhachHang; 
    public $TenKhachHang; 
    public $Tuoi;
    public $DiaChi;
    public $SoDienThoai;
    public $TrangThai;
    public $Email;
    public $GioiTinh;

    function KhachHang($MaKhachHang,$TenKhachHang,$Tuoi,$DiaChi,$SoDienThoai,$TrangThai,$Email,$GioiTinh){
        $this->MaKhachHang = $MaKhachHang;
        $this->TenKhachHang = $TenKhachHang;
        $this->Tuoi = $Tuoi;
        $this->DiaChi = $DiaChi;
        $this->SoDienThoai = $SoDienThoai;
        $this->TrangThai = $TrangThai;
        $this->Email = $Email ;
        $this->GioiTinh = $GioiTinh ;
    }

   // Phương thức thiết lập MaKhachHang
    public function setMaKhachHang($value) {
        $this->MaKhachHang = $value;
    }

    // Phương thức lấy MaKhachHang
    public function getMaKhachHang() {
        return $this->MaKhachHang;
    }

    // Phương thức thiết lập TenKhachHang
    public function setTenKhachHang($value) {
        $this->TenKhachHang = $value;
    }

    // Phương thức lấy TenKhachHang
    public function getTenKhachHang() {
        return $this->TenKhachHang;
    }

    // Phương thức thiết lập Tuoi
    public function setTuoi($value) {
        $this->Tuoi = $value;
    }

    // Phương thức lấy Tuoi
    public function getTuoi() {
        return $this->Tuoi;
    }

    // Phương thức thiết lập DiaChi
    public function setDiaChi($value) {
        $this->DiaChi = $value;
    }

    // Phương thức lấy DiaChi
    public function getDiaChi() {
        return $this->DiaChi;
    }

    // Phương thức thiết lập SoDienThoai
    public function setSoDienThoai($value) {
        $this->SoDienThoai = $value;
    }

    // Phương thức lấy SoDienThoai
    public function getSoDienThoai() {
        return $this->SoDienThoai;
    }

    // Phương thức thiết lập TrangThai
    public function setTrangThai($value) {
        $this->TrangThai = $value;
    }

    // Phương thức lấy TrangThai
    public function getTrangThai() {
        return $this->TrangThai;
    }

    // Phương thức thiết lập TrangThai
    public function setEmail($value) {
        $this->Email = $value;
    }

    // Phương thức lấy TrangThai
    public function getEmail() {
        return $this->Email;
    }

    // Phương thức thiết lập TrangThai
    public function setGioTinh($value) {
        $this->GioiTinh = $value;
    }

    // Phương thức lấy TrangThai
    public function getGioiTinh() {
        return $this->GioiTinh;
    }

}
?>