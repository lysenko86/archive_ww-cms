<?php
/*
    Класс для работы с изображениями
*/
    class classImg{
        private $photoMaxX = 1200;
        private $photoMaxY = 1200;
        private $photos    = array(1200, 160);
        private $slider    = array(1200, 150);
        private $news      = array(250, 50);
        public function __construct(){}
        public function checkImageMaxXY($inputName, $type){
            if (!empty($_FILES[$inputName]['tmp_name'])){
                $tmpName = $_FILES[$inputName]['tmp_name'];
                switch ($type){
                    case '.jpg': $img = imagecreatefromjpeg($tmpName); break;
                    case '.gif': $img = imagecreatefromgif($tmpName); break;
                    case '.png': $img = imagecreatefrompng($tmpName); break;
                }
                $imgX = imagesx($img);
                $imgY = imagesy($img);
                imagedestroy($img);
                if ($imgX > $this->photoMaxX || $imgY > $this->photoMaxY) return false;
                else return true;
            }
            else return false;
        }
        public function addImage($id, $catalog, $photo, $watermark=false){
            if (file_exists(DIR_UPLOAD."$catalog/$id.jpg")) unlink(DIR_UPLOAD."$catalog/$id.jpg");
            move_uploaded_file($_FILES[$photo]['tmp_name'], DIR_UPLOAD."$catalog/$id.jpg");
            foreach ($this->$catalog as $v) $this->createCopyImage(DIR_UPLOAD."$catalog/{$id}.jpg", DIR_TMP."$catalog/{$id}_$v.jpg", $v, $v);
            if ($watermark) foreach ($this->$catalog as $v) $this->genWaterMark(DIR_TMP."$catalog/{$id}_$v.jpg");
        }
        public function delImage($id, $catalog){
            if (file_exists(DIR_UPLOAD."$catalog/$id.jpg")) unlink(DIR_UPLOAD."$catalog/$id.jpg");
            foreach ($this->$catalog as $v) if (file_exists(DIR_TMP."$catalog/{$id}_$v.jpg")) unlink(DIR_TMP."$catalog/{$id}_$v.jpg");
        }
        public function getImages($id, $catalog){
            $arr = array();
            foreach ($this->$catalog as $v) $arr[$v] = file_exists(DIR_TMP."$catalog/{$id}_$v.jpg") ? "/tmp/$catalog/{$id}_$v.jpg" : '/template/images/nophoto.gif';
            $arr['source'] = file_exists(DIR_UPLOAD."$catalog/$id.jpg") ? "/upload/$catalog/$id.jpg" : '/template/images/nophoto.gif';
            return $arr;
        }
        public function createCopyImage($fName, $fNewName, $newX, $newY){
            if (file_exists($fNewName)) unlink($fNewName);
            $type = substr($fName, strlen($fName)-4);
            switch ($type){
                case '.jpg': $img = imagecreatefromjpeg($fName); break;
                case '.gif': $img = imagecreatefromgif($fName); break;
                case '.png': $img = imagecreatefrompng($fName); break;
            }
            $imgX = imagesx($img);
            $imgY = imagesy($img);
            $imgNX = $imgNY = 0;
            if ($imgX > $newX || $imgY > $newY){
                $imgNX = $newX;
                $imgNY = floor($newX * $imgY / $imgX);
                if ($imgNY > $newY){
                    $imgNX = floor($newY * $imgX / $imgY);
                    $imgNY = $newY;
                }
                $imgN = imagecreatetruecolor($imgNX, $imgNY);
                imagecopyresized($imgN, $img, 0, 0, 0, 0, $imgNX, $imgNY, $imgX, $imgY);
                imagejpeg($imgN, $fNewName, 100);
                imagedestroy($imgN);
            }
            else copy($fName, $fNewName);
            imagedestroy($img);
        }
        public function genWaterMark($fName){
            $photo   = $photoRez = $fName;
            $mark    = DIR_TEMPLATE.'images/watermark.png';
            $info    = getimagesize($photo);
            $photo_w = $info[0];
            $photo_h = $info[1];
            $photo_t = $info['mime'];
            if ($photo_t == 'image/gif') $img = imagecreatefromgif($photo);
            elseif ($photo_t == 'image/png') $img = imagecreatefrompng($photo);
            elseif ($photo_t == 'image/jpeg') $img = imagecreatefromjpeg($photo);
            $imgMark             = imagecreatefrompng($mark);
            $imgMark_widthSmall  = $imgMark_width  = imagesx($imgMark);
            $imgMark_heightSmall = $imgMark_height = imagesy($imgMark);
            if ($photo_w - $imgMark_width < 0){
                $imgMark_widthSmall  = $imgMark_width - abs($photo_w - $imgMark_width);
                $imgMark_heightSmall = round(($imgMark_widthSmall * $imgMark_height) / $imgMark_width);
            }
            $imgMark_pos_x       = round(($photo_w - $imgMark_widthSmall) / 2);
            $imgMark_pos_y       = round(($photo_h - $imgMark_heightSmall) / 2);
            imagecopyresampled($img, $imgMark, $imgMark_pos_x, $imgMark_pos_y, 0, 0, $imgMark_widthSmall, $imgMark_heightSmall, $imgMark_width, $imgMark_height);
            imagejpeg($img, $photoRez);
            imagedestroy($img);
            imagedestroy($imgMark);
            return $fName;
        }
        public function __destruct(){}
    }
?>