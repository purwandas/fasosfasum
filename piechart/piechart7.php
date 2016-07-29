<?php

class pieChart
{
 private $canvasWidth;
 private $canvasHeight;
 private $tickness;
 private $color = array();
 private $image;
 private $degree = array();
 private $value = array();
 private $description = array();
 private $font;
 private $fontcolor;
 private $bgcolor;
 private $bgR;
 private $bgG;
 private $bgB;
 private $fontR;
 private $fontG;
 private $fontB;
 private $title = array();
 
 public function __construct($canvasWidth, $canvasHeight, $tickness)
 {
 $this->canvasWidth = $canvasWidth;
 $this->canvasHeight = $canvasHeight;
 $this->image = imagecreatetruecolor($this->canvasWidth, $this->canvasHeight);
 $this->tickness = $tickness;
 }
 
 public function setTitle($title)
 {
 $this->title[] = $title;
 }
 
 public function setFontColor($fontcolor)
 {
 if ($fontcolor)
 {
 $this->fontcolor = imagecolorallocate($this->image, hexdec(substr(trim($fontcolor),1,2)), hexdec(substr(trim($fontcolor),3,2)), hexdec(substr(trim($fontcolor),5,2)));
 } else {$this->fontcolor = imagecolorallocate($this->image, 0, 0, 0);}
 }
 
 public function setBGColor($bgcolor)
 {
 if ($bgcolor)
 {
 $this->bgR = hexdec(substr(trim($bgcolor), 1, 2));
 $this->bgG = hexdec(substr(trim($bgcolor), 3, 2));
 $this->bgB = hexdec(substr(trim($bgcolor), 5, 2));
 $this->bgcolor = imagecolorallocate($this->image, hexdec(substr(trim($bgcolor),1,2)), hexdec(substr(trim($bgcolor),3,2)), hexdec(substr(trim($bgcolor),5,2)));
 } else {$this->bgcolor = imagecolorallocate($this->image, 0, 0, 0);}
 }
 
 public function setFont($font)
 {
 $this->font = $font;
 }
 
 public function Tickness($tickness)
 {
 $this->tickness = $tickness;
 }
 
 private function pieSlice()
 {
 $total = 0;
 for ($i=0; $i < count($this->value); $i++)
 {
 $total += $this->value[$i];
 }
 
 for ($i=0; $i < count($this->value); $i++)
 {
 $this->degree[$i] = $this->value[$i] / $total * 360;
 $R = mt_rand(25,250);
 $G = mt_rand(25,250);
 $B = mt_rand(25,250);
 $this->color["light"][$i] = imagecolorallocate($this->image, $R, $G, $B);
 $this->color["dark"][$i] = imagecolorallocate($this->image, $R - 20, $G - 20, $B - 20);
 }
 }
 
 public function setValue($description, $value)
 {
 $this->value[] = $value;
 $this->description[] = $description;
 }
 
 public function showPie()
 {
 imagefill($this->image, 0, 0, imagecolorallocate($this->image, $this->bgR, $this->bgG, $this->bgB));
 
 $pieX = ceil($this->canvasWidth / 2);
 $pieY = ceil($this->canvasHeight / 2) - 60;
 
 $this->pieSlice();
 
 for ($i = $this->tickness + $pieY; $i > $pieY; $i--)
 {
 $start = 0;
 for ($iterate=0; $iterate < count($this->value); $iterate++)
 {
 imagefilledarc($this->image, $pieX, $i, $this->canvasWidth - 50, ($this->canvasWidth - 50)/2, $start, $start + $this->degree[$iterate], $this->color["dark"][$iterate], IMG_ARC_PIE);
 $start += $this->degree[$iterate];
 }
 }
 
 $start = 0;
 $x1 = 20;
 $y1 = 0 + $this->canvasHeight * 2 / 3;
 $x2 = 30;
 $y2 = 10 + $this->canvasHeight * 2 / 3;
 
 for ($iterate=0; $iterate < count($this->value); $iterate++)
 {
 imagefilledarc($this->image, $pieX, $pieY, $this->canvasWidth - 50, ($this->canvasWidth - 50)/2, $start, $start + $this->degree[$iterate], $this->color["light"][$iterate], IMG_ARC_PIE);
 imagefilledrectangle($this->image, $x1, $y1, $x2, $y2, $this->color["light"][$iterate]);
 imagettftext($this->image, 9, 0, $x2 + 5, $y2, $this->fontcolor, $this->font, $this->description[$iterate] . " = " . $this->value[$iterate]);
 $start += $this->degree[$iterate];
 $y1 += 15;
 $y2 += 15;
 }
 
 $py = 30;
 for ($i=0; $i<count($this->title); $i++)
 {
 $textbox = imagettfbbox(12, 0, $this->font, $this->title[$i]);
 $px = ($this->canvasWidth - $textbox[4])/2;
 $py = 30 + $i * 30;
 
 imagettftext($this->image, 12, 0, $px, $py, $this->fontcolor, $this->font, $this->title[$i]);
 }
 
 header('Content-type: image/png');
 imagepng($this->image);
 simagedestroy($this->image);
 }
}
 
$img = new pieChart(300, 430, 26);
$img->setFont("lsans.ttf");
$img->setValue("http://www.doditsuprianto.com", 56);
$img->setValue("http://www.meozit.com", 100);
$img->setValue("http://www.goiklan.com", 78);
$img->setValue("http://www.phpclasses.org", 190);
$img->setValue("http://www.hotscripts.com",120);
$img->setValue("http://www.google.com", 45);
$img->setBGColor("#001122");
$img->setFontColor("#FFFFFF");
$img->setTitle("FIRST TITLE ON THE FIRST LINE");
$img->setTitle("SECOND TITLE ON THE SECOND LINE");
$img->showPie();
?>
 
