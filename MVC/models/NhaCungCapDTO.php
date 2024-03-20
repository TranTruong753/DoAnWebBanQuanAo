<?php
class NhaCungCapDTO {
    public $MaNhaCungCap; 
    public $TenNhaCungCap; 
    public $SoDienThoai; 
    public $DiaChi; 
    public $TrangThai;

    public function NhaCungCapDTO($MaNhaCungCap, $TenNhaCungCap, $SoDienThoai, $DiaChi, $TrangThai) {
        $this->MaNhaCungCap = $MaNhaCungCap;
        $this->TenNhaCungCap = $TenNhaCungCap;
        $this->SoDienThoai = $SoDienThoai;
        $this->DiaChi = $DiaChi;
        $this->TrangThai = $TrangThai;
    }

    public function getMaNhaCungCap() {
        return $this->MaNhaCungCap;
    }

    public function setMaNhaCungCap($MaNhaCungCap) {
        $this->MaNhaCungCap = $MaNhaCungCap;
    }

    public function getTenNhaCungCap() {
        return $this->TenNhaCungCap;
    }

    public function setTenNhaCungCap($TenNhaCungCap) {
        $this->TenNhaCungCap = $TenNhaCungCap;
    }

    public function getSoDienThoai() {
        return $this->SoDienThoai;
    }

    public function setSoDienThoai($SoDienThoai) {
        $this->SoDienThoai = $SoDienThoai;
    }

    public function getDiaChi() {
        return $this->DiaChi;
    }

    public function setDiaChi($DiaChi) {
        $this->DiaChi = $DiaChi;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>