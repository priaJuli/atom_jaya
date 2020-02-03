<?php
  include("includes/session.php");
include("includes/connection.php");
class ClusteringKMean {
      private $objek = array();
      private $centroidCluster = null;
      private $cekObjCluster = null;
      private $Ratio = null;
      private $wcv = null;
      private $bcv = null;
      public function __construct($obj,$cnt) {
            $this->centroidCluster = $cnt;
            for ($i=0;$i<count($obj);$i++){
                  $this->objek[$i] = new objek($obj[$i]);
          $this->cekObjCluster[$i] = 0;
            }
      }
      
      public function setClusterObjek($itr){               
            echo "<table width='500' cellpadding=0 cellspacing=0>
                        <tr><th colspan='100'>ITERASI ".$itr."</th></tr>
            <tr><th>Nama Barang</th>";            
            // for ($i=0;$i<count($this->objek[0]->data);$i++){
            //       echo "<th>C ".($i+1)."</th>";
            // }
            echo "<th>Stok</th>";
            echo "<th>Jumlah Transaksi</th>";
            echo "<th>Jumlah Terjual</th>";
            echo "<th>Rata Penjualan</th>";
            for ($j=0;$j<count($this->centroidCluster);$j++){
                  echo "<th>Cluster ".($j+1)."</th>";
            }
            echo "<th>Jarak Terpendek</th>";            
            echo "</tr>";     


            for ($i=0;$i<count($this->objek);$i++){
                  $this->objek[$i]->setCluster($this->centroidCluster);
                  echo "<td>".$this->objek[$i]->data[4]."</td>";      
                  
                  for ($j=0;$j<count($this->objek[$i]->data)-1;$j++)
                        echo "<td>".$this->objek[$i]->data[$j]."</td>";
                              
                  for ($j=0;$j<count($this->centroidCluster);$j++){
                        if ($j == $this->objek[$i]->getCluster()){
                          if($j == 0){
                            $warnaC = "color: #ff1a1a";
                          }elseif($j == 1){
                            $warnaC = "color: #0066ff";
                          }else{
                            $warnaC = "color: #33cc33";
                          }
                          echo "<td style=\"".$warnaC."\">".number_format($this->objek[$i]->getJarak($j),2)."</td>";

                          $cl = $j+1;

                        }
                              
                        else  {echo "<td>".number_format($this->objek[$i]->getJarak($j),2)."</td>";}
                  }
                  
                  echo "<td style=\"".$warnaC."\">C".$cl."</td>";                  
                  echo "</tr>";
            }
            echo "</table><br><br>";                      
    
            // yang asli
            // for ($i=0;$i<count($this->cekObjCluster);$i++){
            //       if ($this->cekObjCluster[$i]!=$this->objek[$i]->getCluster()){ //!= false brarti ono perubahan
            //             $cek = FALSE;
            //             break;
            //       }
            // }
            
            $this->Ratio = $this->getRatio();
            
      }

      public function getCentroidCluster(){
          for ($i=0;$i<count($this->centroidCluster);$i++){
                echo "Cluster ".($i+1)." -> ";
                for ($j=0;$j<count($this->centroidCluster[$i]);$j++){
                  echo number_format($this->centroidCluster[$i][$j],2)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                echo "<br>";
              }
              echo "<br> Nilai BCV = ".number_format($this->bcv,2)."<br>";
            echo "Nilai WCV = ".number_format($this->wcv,2)."<br>";
          echo "Ratio akhir = ".$this->getRatio()."<br>";
      }
      
      public function setCentroidCluster(){
           for ($i=0;$i<count($this->centroidCluster);$i++){
                 $countObj = 0;
                 $x = array();            
                 
                 for ($j=0;$j<count($this->objek);$j++){
                       if ($this->objek[$j]->getCluster()==$i){
                             for ($k=0;$k<count($this->objek[$j]->dataK);$k++){
                                    $x[$k] += $this->objek[$j]->dataK[$k];
                                    // echo "<br>".$k." ".$j."<br>";
                              }
                             $countObj++;
                       }
                 }
                 
                 for ($k=0;$k<count($this->centroidCluster[$i]);$k++){
                       if ($countObj>0)
                       {
                        $this->centroidCluster[$i][$k] = $x[$k]/$countObj;
                        echo number_format($this->centroidCluster[$i][$k],2)." || ";
                       }
                       else{
                        echo "<font color='red'>Terdapat ketidak sesuai Nilai Awal Cluster</font><br>";
                        break;
                       }            
                 }
                 echo "<br>";
           }

      }

      public function getRatio(){
            $C1C2 = 0;
            $C1C3 = 0;
            $C2C3 = 0;
            $Wcv = 0;
            for ($k=0; $k < count($this->objek); $k++) { 
                $kuad = pow($this->objek[$k]->getJarakPendek(), 2);
                $Wcv += $kuad;
                // echo "Jarak data".$k." terhadap cluster = ".$this->objek[$k]->getJarak()."<br>kuadrat: ".$kuad."<br>";
            }
            for ($i=0; $i < count($this->centroidCluster); $i++) {
              $p = pow($this->centroidCluster[0][$i] - $this->centroidCluster[1][$i], 2);
              $C1C2 = $C1C2 + $p;
              
            }
            // $C1C2 = sqrt($C1C2);    
            // echo "C1C2 = ".sqrt($C1C2)."<br>";
            
            for ($i=0; $i < count($this->centroidCluster); $i++) { 
              $p = pow($this->centroidCluster[0][$i] - $this->centroidCluster[2][$i], 2);
              $C1C3 = $C1C3 + $p;
              
            }
            // $C1C3 = sqrt($C1C3);
            // echo "C1C3 = ".sqrt($C1C3)."<br>";
            
            for ($i=0; $i < count($this->centroidCluster); $i++) { 
              $p = pow($this->centroidCluster[1][$i] - $this->centroidCluster[2][$i], 2);
              $C2C3 = $C2C3 + $p;
              
            }
            // $C2C3 = sqrt($C2C3);
            // echo "C2C3 = ".sqrt($C2C3)."<br>";
            $BCV = sqrt($C1C2) + sqrt($C1C3) + sqrt($C2C3);
            // echo "BCV = ".$BCV."<br>";
            // echo "WCV = ".$wcv."<br>";
            $ratio = number_format(($BCV / $Wcv),3);
            // echo "Ratio = ".$ratio."<br>";            $Wcv= number_format($Wcv,2);

            $this->Ratio = $ratio;
            $this->bcv = $BCV;
            $this->wcv = $Wcv;
            return $ratio;
      }

      public function printRatio(){
            echo "Nilai BCV = ".number_format($this->bcv,2)."<br>";
            echo "Nilai WCV = ".number_format($this->wcv,2)."<br>";
            echo "Nilai Ratio = ".$this->Ratio."<br>";
      }

}

?>