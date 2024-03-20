<?php
class KhuyenMaiDTO {
    public $MaKhuyenMai; 
    public $TenKhuyenMai; 
    public $MucKhuyenMai;
    public $NgayBatDau;
    public $NgayKetThuc;
    public $TrangThai;

    public function KhuyenMaiDTO($MaKhuyenMai, $TenKhuyenMai, $MucKhuyenMai, $NgayBatDau, $NgayKetThuc, $TrangThai) {
        $this->MaKhuyenMai = $MaKhuyenMai;
        $this->TenKhuyenMai = $TenKhuyenMai;
        $this->MucKhuyenMai = $MucKhuyenMai;
        $this->NgayBatDau = $NgayBatDau;
        $this->NgayKetThuc = $NgayKetThuc;
        $this->TrangThai = $TrangThai;
    }

    // Getter for MaKhuyenMai
    public function getMaKhuyenMai() {
        return $this->MaKhuyenMai;
    }

    // Setter for MaKhuyenMai
    public function setMaKhuyenMai($MaKhuyenMai) {
        $this->MaKhuyenMai = $MaKhuyenMai;
    }

    // Getter for TenKhuyenMai
    public function getTenKhuyenMai() {
        return $this->TenKhuyenMai;
    }

    // Setter for TenKhuyenMai
    public function setTenKhuyenMai($TenKhuyenMai) {
        $this->TenKhuyenMai = $TenKhuyenMai;
    }

    // Getter for MucKhuyenMai
    public function getMucKhuyenMai() {
        return $this->MucKhuyenMai;
    }

    // Setter for MucKhuyenMai
    public function setMucKhuyenMai($MucKhuyenMai) {
        $this->MucKhuyenMai = $MucKhuyenMai;
    }

    // Getter for NgayBatDau
    public function getNgayBatDau() {
        return $this->NgayBatDau;
    }

    // Setter for NgayBatDau
    public function setNgayBatDau($NgayBatDau) {
        $this->NgayBatDau = $NgayBatDau;
    }

    // Getter for NgayKetThuc
    public function getNgayKetThuc() {
        return $this->NgayKetThuc;
    }

    // Setter for NgayKetThuc
    public function setNgayKetThuc($NgayKetThuc) {
        $this->NgayKetThuc = $NgayKetThuc;
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