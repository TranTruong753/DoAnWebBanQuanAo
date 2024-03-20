<?php
class ChiTietSanPhamDTO {
    public $MaChiTietSanPham; 
    public $MaSanPham; 
    public $MaMauSac; 
    public $MaKichCo; 
    public $HinhAnh; 
    public $SoluongNhap; 
    public $SoluongTon;
    public $TrangThai;

    public function ChiTietSanPhamDTO($maChiTiet, $maSanPham, $maMau, $maKichCo, $hinhAnh, $soLuongNhap, $soLuongTon, $trangThai) {
        $this->MaChiTietSanPham = $maChiTiet;
        $this->MaSanPham = $maSanPham;
        $this->MaMauSac = $maMau;
        $this->MaKichCo = $maKichCo;
        $this->HinhAnh = $hinhAnh;
        $this->SoluongNhap = $soLuongNhap;
        $this->SoluongTon = $soLuongTon;
        $this->TrangThai = $trangThai;
    }

    // Phương thức thiết lập MaChiTietSanPham
    public function setMaChiTietSanPham($value) {
        $this->MaChiTietSanPham = $value;
    }

    // Phương thức lấy MaChiTietSanPham
    public function getMaChiTietSanPham() {
        return $this->MaChiTietSanPham;
    }

    // Phương thức thiết lập MaSanPham
    public function setMaSanPham($value) {
        $this->MaSanPham = $value;
    }

    // Phương thức lấy MaSanPham
    public function getMaSanPham() {
        return $this->MaSanPham;
    }

    // Phương thức thiết lập MaMauSac
    public function setMaMauSac($value) {
        $this->MaMauSac = $value;
    }

    // Phương thức lấy MaMauSac
    public function getMaMauSac() {
        return $this->MaMauSac;
    }

    // Phương thức thiết lập MaKichCo
    public function setMaKichCo($value) {
        $this->MaKichCo = $value;
    }

    // Phương thức lấy MaKichCo
    public function getMaKichCo() {
        return $this->MaKichCo;
    }

    // Phương thức thiết lập HinhAnh
    public function setHinhAnh($value) {
        $this->HinhAnh = $value;
    }

    // Phương thức lấy HinhAnh
    public function getHinhAnh() {
        return $this->HinhAnh;
    }

    // Phương thức thiết lập SoluongNhap
    public function setSoluongNhap($value) {
        $this->SoluongNhap = $value;
    }

    // Phương thức lấy SoluongNhap
    public function getSoluongNhap() {
        return $this->SoluongNhap;
    }

    // Phương thức thiết lập SoluongTon
    public function setSoluongTon($value) {
        $this->SoluongTon = $value;
    }

    // Phương thức lấy SoluongTon
    public function getSoluongTon() {
        return $this->SoluongTon;
    }

    // Phương thức thiết lập TrangThai
    public function setTrangThai($value) {
        $this->TrangThai = $value;
    }

    // Phương thức lấy TrangThai
    public function getTrangThai() {
        return $this->TrangThai;
    }
}
?>