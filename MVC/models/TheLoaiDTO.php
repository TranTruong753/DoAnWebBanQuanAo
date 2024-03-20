<?php
class TheLoaiDTO {
    public $MaTheLoai; 
    public $TenTheLoai; 
    public $TrangThai;

    public function TheLoaiDTO($MaTheLoai, $TenTheLoai, $TrangThai) {
        $this->MaTheLoai = $MaTheLoai;
        $this->TenTheLoai = $TenTheLoai;
        $this->TrangThai = $TrangThai;
    }

    public function getMaTheLoai() {
        return $this->MaTheLoai;
    }

    public function setMaTheLoai($MaTheLoai) {
        $this->MaTheLoai = $MaTheLoai;
    }

    public function getTenTheLoai() {
        return $this->TenTheLoai;
    }

    public function setTenTheLoai($TenTheLoai) {
        $this->TenTheLoai = $TenTheLoai;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>