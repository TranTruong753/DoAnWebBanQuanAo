<?php
class ChiTietQuyenDTO {
    public $Id; 
    public $MaNhomQuyen; 
    public $MaChucNang;
    public $HanhDong;

    public function ChiTietQuyenDTO($Id, $MaNhomQuyen, $MaChucNang, $HanhDong) {
        $this->Id = $Id;
        $this->MaNhomQuyen = $MaNhomQuyen;
        $this->MaChucNang = $MaChucNang;
        $this->HanhDong = $HanhDong;
    }

    public function getId() {
        return $this->Id;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function getMaNhomQuyen() {
        return $this->MaNhomQuyen;
    }

    public function setMaNhomQuyen($MaNhomQuyen) {
        $this->MaNhomQuyen = $MaNhomQuyen;
    }

    public function getMaChucNang() {
        return $this->MaChucNang;
    }

    public function setMaChucNang($MaChucNang) {
        $this->MaChucNang = $MaChucNang;
    }

    public function getHanhDong() {
        return $this->HanhDong;
    }

    public function setHanhDong($HanhDong) {
        $this->HanhDong = $HanhDong;
    }
}
?>