<?php
class ChatLieuDTO {
    public $MaChatLieu; 
    public $TenChatLieu; 
    public $TrangThai;

    public function ChatLieuDTO($MaChatLieu, $TenChatLieu, $TrangThai) {
        $this->MaChatLieu = $MaChatLieu;
        $this->TenChatLieu = $TenChatLieu;
        $this->TrangThai = $TrangThai;
    }

    public function getMaChatLieu() {
        return $this->MaChatLieu;
    }

    public function setMaChatLieu($MaChatLieu) {
        $this->MaChatLieu = $MaChatLieu;
    }

    public function getTenChatLieu() {
        return $this->TenChatLieu;
    }

    public function setTenChatLieu($TenChatLieu) {
        $this->TenChatLieu = $TenChatLieu;
    }

    public function getTrangThai() {
        return $this->TrangThai;
    }

    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}

?>