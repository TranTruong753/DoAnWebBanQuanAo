<?php
class ChucNangDTO {
    public $MaChucNang; 
    public $TenChucNang; 
    public $TrangThai;

    public function ChucNangDTO($MaChucNang, $TenChucNang, $TrangThai) {
        $this->MaChucNang = $MaChucNang;
        $this->TenChucNang = $TenChucNang;
        $this->TrangThai = $TrangThai;
    }

    // Phương thức getter cho MaChucNang
    public function get_MaChucNang() {
        return $this->MaChucNang;
    }

    // Phương thức setter cho MaChucNang
    public function set_MaChucNang($new_MaChucNang) {
        $this->MaChucNang = $new_MaChucNang;
    }

    // Phương thức getter cho TenChucNang
    public function get_TenChucNang() {
        return $this->TenChucNang;
    }

    // Phương thức setter cho TenChucNang
    public function set_TenChucNang($new_TenChucNang) {
        $this->TenChucNang = $new_TenChucNang;
    }

    // Phương thức getter cho TrangThai
    public function get_TrangThai() {
        return $this->TrangThai;
    }

    // Phương thức setter cho TrangThai
    public function set_TrangThai($new_TrangThai) {
        $this->TrangThai = $new_TrangThai;
    }
}
?>