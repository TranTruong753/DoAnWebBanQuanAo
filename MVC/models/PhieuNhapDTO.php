<?php
class PheiuNhapDTO {
    public $MaPhieuNhap; 
    public $TenPhieuNhap; 
    public $NgayNhap;
    public $TongTien;
    public $MaNhaCungCap;
    public $MaNhanVien;
    public $TrangThai;

    public function PheiuNhapDTO($MaPhieuNhap, $TenPhieuNhap, $NgayNhap, $TongTien, $MaNhaCungCap, $MaNhanVien, $TrangThai) {
        $this->MaPhieuNhap = $MaPhieuNhap;
        $this->TenPhieuNhap = $TenPhieuNhap;
        $this->NgayNhap = $NgayNhap;
        $this->TongTien = $TongTien;
        $this->MaNhaCungCap = $MaNhaCungCap;
        $this->MaNhanVien = $MaNhanVien;
        $this->TrangThai = $TrangThai;
    }

    public function getMaPhieuNhap() {
        return $this->MaPhieuNhap;
    }

    public function setMaPhieuNhap($MaPhieuNhap) {
        $this->MaPhieuNhap = $MaPhieuNhap;
    }

    public function getTenPhieuNhap() {
        return $this->TenPhieuNhap;
    }

    public function setTenPhieuNhap($TenPhieuNhap) {
        $this->TenPhieuNhap = $TenPhieuNhap;
    }

    public function getNgayNhap() {
        return $this->NgayNhap;
    }

    public function setNgayNhap($NgayNhap) {
        $this->NgayNhap = $NgayNhap;
    }

    public function getTongTien() {
        return $this->TongTien;
    }

    public function setTongTien($TongTien) {
        $this->TongTien = $TongTien;
    }

    public function getMaNhaCungCap() {
        return $this->MaNhaCungCap;
    }

    public function setMaNhaCungCap($MaNhaCungCap) {
        $this->MaNhaCungCap = $MaNhaCungCap;
    }

    public function getMaNhanVien() {
        return $this->MaNhanVien;
    }

    public function setMaNhanVien($MaNhanVien) {
        $this->MaNhanVien = $MaNhanVien;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>