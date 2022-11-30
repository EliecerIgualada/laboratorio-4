<?php
class cifrado {
    private $base64;
    private $md5;
    private $sha1;
    private $crc32;
    private $crypt;
    private $hashsha224;
    private $hashsha512;
    private $hashwhirlpool;
    private $hashsnefru;
    private $hashhaval1283;
    private $hashhaval1285;

    public function setBase64($base64){
        $this->base64=$base64;
    }
    public function setMd5($md5){
        $this->md5=$md5;
    }
    public function setSha1($sha1){
        $this->sha1=$sha1;
    }
    public function setCrc32($crc32){
        $this->crc32=$crc32;
    }
    public function setCrypt($crypt){
        $this->crypt=$crypt;
    }
    public function setHashsha224($hashsha224){
        $this->hashsha224=$hashsha224;
    }
    public function setHashsha512($hashsha512){
        $this->hashsha512=$hashsha512;
    }
    public function setHashwhirlpool($hashwhirlpool){
        $this->hashwhirlpool=$hashwhirlpool;
    }
    public function setHashsnefru($hashsnefru){
        $this->hashsnefru=$hashsnefru;
    }
    public function setHashhaval1283($hashhaval1283){
        $this->hashhaval1283=$hashhaval1283;
    }
    public function setHashhaval1285($hashhaval1285){
        $this->hashhaval1285=$hashhaval1285;
    }


    public function getBase64(){
        return $this->base64;
    }
    public function getMd5(){
        return $this->md5;
    }
    public function getSha1(){
        return $this->sha1;
    }
    public function getCrc32(){
        return $this->crc32;
    }
    public function getCrypt(){
        return $this->crypt;
    }
    public function getHashsha224(){
        return $this->hashsha224;
    }
    public function getHashsha512(){
        return $this->hashsha512;
    }
    public function getHashwhirlpool(){
        return $this->hashwhirlpool;
    }
    public function getHashsnefru(){
        return $this->hashsnefru;
    }
    public function getHashhaval1283(){
        return $this->hashhaval1283;
    }
    public function getHashhaval1285(){
        return $this->hashhaval1285;
    }
}
?>