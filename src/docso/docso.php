<?php
namespace DocSo;
class DocSo{
    private $number;
    private $digit = array();
    public function __construct($num){
        //echo $num;
        $this->number = $num;
    }
    public function getDigit(){
        $temp = $this->number;
        while($temp!=0){
            array_push($this->digit, $temp%10);
            $temp= floor($temp/10); 
        }
    }
    public function doc(){
        $this->getDigit();
        // for($i=0; $i< count($this->digit); $i++){
        //     echo $this->digit[$i];
        // }
        switch(count($this->digit)){
            case 1:
                return $this->doc3ChuSo(0,0,$this->digit[0]);
            case 2:
                return $this->doc3ChuSo(0,$this->digit[1],$this->digit[0]);   
            case 3:
                return $this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);   
            case 4:
                return $this->doc3ChuSo(0,0,$this->digit[3]).' ngin '.$this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);       
            case 5:
                return $this->doc3ChuSo(0,$this->digit[4],$this->digit[3]).' ngin '.$this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);       
            case 6:
                return $this->doc3ChuSo($this->digit[5],$this->digit[4],$this->digit[3]).' ngin '.$this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);       
            case 7:
                return $this->doc3ChuSo(0,0,$this->digit[6]).' trieu '. $this->doc3ChuSo($this->digit[5],$this->digit[4],$this->digit[3]).' ngin '.$this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);    
            case 8:
                return $this->doc3ChuSo(0,$this->digit[7],$this->digit[6]).' trieu '. $this->doc3ChuSo($this->digit[5],$this->digit[4],$this->digit[3]).' ngin '.$this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);  
            case 9:
                return $this->doc3ChuSo($this->digit[8],$this->digit[7],$this->digit[6]).' trieu '. $this->doc3ChuSo($this->digit[5],$this->digit[4],$this->digit[3]).' ngin '.$this->doc3ChuSo($this->digit[2],$this->digit[1],$this->digit[0]);       

        }
    }
    public function docChuSo($number){
        switch ($number) {
            case 0:
                return 'khong';
            case 1:
                return 'mot';
            case 2:
                return 'hai';
            case 3:
                return 'ba';
            case 4:
                return 'bon';
            case 5:
                return 'nam';
            case 6:
                return 'sau';
            case 7:
                return 'bay';
            case 8:
                return 'tam';
            case 9:
                return 'chin';
        }
    }
    public function doc3ChuSo($num1=0, $num2=0, $num3=0){
        if($num1){
            return $this->docChuSo($num1).' tram '.($num2==1?'':$this->docChuSo($num2)).' muoi '.($num3==0?'':$this->docChuSo($num3));
        }
        if($num2){
            
            return ($num2==1?'':$this->docChuSo($num2)).' muoi '.($num3==0?'':$this->docChuSo($num3));
        }
        return $this->docChuSo($num3);
    }
}

?>