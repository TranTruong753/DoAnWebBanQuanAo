<?php
class NhanVienDTO {
    public $MaNhanVien; 
    public $TenNhanVien; 
    public $SoDienThoai; 
    public $CCCD; 
    public $Tuoi; 
    public $MaTaiKhoan; 
    public $TrangThai;

    public function NhanVienDTO($MaNhanVien, $TenNhanVien, $SoDienThoai, $CCCD, $Tuoi, $MaTaiKhoan, $TrangThai) {
        $this->MaNhanVien = $MaNhanVien;
        $this->TenNhanVien = $TenNhanVien;
        $this->SoDienThoai = $SoDienThoai;
        $this->CCCD = $CCCD;
        $this->Tuoi = $Tuoi;
        $this->MaTaiKhoan = $MaTaiKhoan;
        $this->TrangThai = $TrangThai;
    }

    // Getter for MaNhanVien
    public function getMaNhanVien() {
        return $this->MaNhanVien;
    }

    // Setter for MaNhanVien
    public function setMaNhanVien($MaNhanVien) {
        $this->MaNhanVien = $MaNhanVien;
    }

    // Getter for TenNhanVien
    public function getTenNhanVien() {
        return $this->TenNhanVien;
    }

    // Setter for TenNhanVien
    public function setTenNhanVien($TenNhanVien) {
        $this->TenNhanVien = $TenNhanVien;
    }

    // Getter for SoDienThoai
    public function getSoDienThoai() {
        return $this->SoDienThoai;
    }

    // Setter for SoDienThoai
    public function setSoDienThoai($SoDienThoai) {
        $this->SoDienThoai = $SoDienThoai;
    }

    // Getter for CCCD
    public function getCCCD() {
        return $this->CCCD;
    }

    // Setter for CCCD
    public function setCCCD($CCCD) {
        $this->CCCD = $CCCD;
    }

    // Getter for Tuoi
    public function getTuoi() {
        return $this->Tuoi;
    }

    // Setter for Tuoi
    public function setTuoi($Tuoi) {
        $this->Tuoi = $Tuoi;
    }

    // Getter for MaTaiKhoan
    public function getMaTaiKhoan() {
        return $this->MaTaiKhoan;
    }

    // Setter for MaTaiKhoan
    public function setMaTaiKhoan($MaTaiKhoan) {
        $this->MaTaiKhoan = $MaTaiKhoan;
    }

    // Getter for TrangThai
    public function getTrangThai() {
        return $this->TrangThai;
    }

    // Setter for TrangThai
    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>