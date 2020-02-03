<?php
class objek {
     private $cluster = null;
     var $data = array();
     var $dataK = array();
     var $jarak = array();
     VAR $jarakp = null;
     
     function __construct($dt) {
           $this->data = $dt;
           $this->dataK[0] = $dt[1];
           $this->dataK[1] = $dt[2];
           $this->dataK[2] = $dt[3];
     }
     
     public function setCluster($cls){
      
            $C = 0;
            $D = null;
            $lopc = 0;
            foreach ($cls as $center) {
              $tempD = 0;
              for ($i=0; $i < count($this->dataK); $i++) { 
                // echo "AttrD = ".$this->data[$i]."&nbspAttribut Center = ".$center[$i]."<br>";
                // echo "AttrD - AttrCenter = ".($center[$i] - $this->data[$i])."<br>";
                
                  $tempD += pow(($center[$i] - $this->dataK[$i]), 2);
                
                // echo "Kuadrat = ".$tempD."<br>";
              }

              $sqrt = number_format(sqrt($tempD),8);
              $this->jarak[$lopc] = $sqrt;
              // echo "Nilai D sebelumnya = ".$D."<br>";
              // echo "Nilai SQRT = ".$sqrt."<br>";
              if(!$D){
                $D = $sqrt;
                $C = $lopc;
              }
              elseif($D > $sqrt){
                $D = $sqrt;
                $C = $lopc;
              }
              
              $lopc++;
            }
            $this->jarakp = $D;
            $this->cluster = $C;
            
     }
     
     public function getCluster(){
           return $this->cluster;
     }

     public function getJarak($clus){
           return $this->jarak[$clus];
     }

     public function getJarakPendek(){
            return $this->jarakp;
     }
}

?>
