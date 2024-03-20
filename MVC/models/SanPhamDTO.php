<?php
class SanPhamDTO {
    public $MaSanPham; 
    public $TenSanPham; 
    public $GiaSanPham;
    public $TSoLuongTon;
    public $SoLuongNhap;
    public $GiaNhap;
    public $TongTienNhap;
    public $MaTheLoai;
    public $MaChatLieu;
    public $MaThuongHieu;
    public $TrangThai;

    public function SanPhamDTO($MaSanPham, $TenSanPham, $GiaSanPham, $SoLuongTon, $SoLuongNhap, $GiaNhap, $TongTienNhap, $MaTheLoai, $MaChatLieu, $MaThuongHieu, $TrangThai) {
        $this->MaSanPham = $MaSanPham;
        $this->TenSanPham = $TenSanPham;
        $this->GiaSanPham = $GiaSanPham;
        $this->SoLuongTon = $SoLuongTon;
        $this->SoLuongNhap = $SoLuongNhap;
        $this->GiaNhap = $GiaNhap;
        $this->TongTienNhap = $TongTienNhap;
        $this->MaTheLoai = $MaTheLoai;
        $this->MaChatLieu = $MaChatLieu;
        $this->MaThuongHieu = $MaThuongHieu;
        $this->TrangThai = $TrangThai;
    }

    public function getMaSanPham() {
        return $this->MaSanPham;
    }

    public function setMaSanPham($MaSanPham) {
        $this->MaSanPham = $MaSanPham;
    }

    public function getTenSanPham() {
        return $this->TenSanPham;
    }

    public function setTenSanPham($TenSanPham) {
        $this->TenSanPham = $TenSanPham;
    }

    public function getGiaSanPham() {
        return $this->GiaSanPham;
    }

    public function setGiaSanPham($GiaSanPham) {
        $this->GiaSanPham = $GiaSanPham;
    }

    public function getSoLuongTon() {
        return $this->SoLuongTon;
    }

    public function setSoLuongTon($SoLuongTon) {
        $this->SoLuongTon = $SoLuongTon;
    }

    public function getSoLuongNhap() {
        return $this->SoLuongNhap;
    }

    public function setSoLuongNhap($SoLuongNhap) {
        $this->SoLuongNhap = $SoLuongNhap;
    }

    public function getGiaNhap() {
        return $this->GiaNhap;
    }

    public function setGiaNhap($GiaNhap) {
        $this->GiaNhap = $GiaNhap;
    }

    public function getTongTienNhap() {
        return $this->TongTienNhap;
    }

    public function setTongTienNhap($TongTienNhap) {
        $this->TongTienNhap = $TongTienNhap;
    }

    public function getMaTheLoai() {
        return $this->MaTheLoai;
    }

    public function setMaTheLoai($MaTheLoai) {
        $this->MaTheLoai = $MaTheLoai;
    }

    public function getMaChatLieu() {
        return $this->MaChatLieu;
    }

    public function setMaChatLieu($MaChatLieu) {
        $this->MaChatLieu = $MaChatLieu;
    }

    public function getMaThuongHieu() {
        return $this->MaThuongHieu;
    }

    public function setMaThuongHieu($MaThuongHieu) {
        $this->MaThuongHieu = $MaThuongHieu;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>