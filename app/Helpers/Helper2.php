<?php
namespace App\Helpers;

class Helper2
{
    // public static function NCOGenerator($model, $trow, $length = 4, $prefix){
    //     $data = $model::orderBy('id','desc')->first();
    //     if(!$data){
    //         $og_length = $length;
    //         $last_number = '';
    //     }else{
    //         $code = substr($data->$trow, strlen($prefix)+1);
    //         $actial_last_number =  ($code/1)*1;
    //         $increment_last_number = $actial_last_number+1;
    //         $last_number_length = strlen($increment_last_number);
    //         $og_length = $length - $last_number_length;
    //         $last_number = $increment_last_number;
    //     }
    //     $zoros = "";
    //     for($i=1;$i<$og_length;$i++){
    //         $zoros.="0";
    //     }
    //     return $prefix.':'.$zoros.$last_number;
    // }
    
        //  public static function checkKeys(Applicant $randStr)
        //   {
        //      $sql = "SELECT * FROM applicants";
        //       $result = mysqli_query($sql);
    
        //       while($row = myqli_fetch_assoc($result)){
        //           if($row['NCO_code']=$randStr){
        //               $keyExists = true;
        //              break;
        //           }else{
        //               $keyExists = false;
        //           }
        //       }
        //       return $keyExists;
        //   }
    
           public static function NCOGenerator($model, $trow, $length = 4, $prefix)
            {
                $keyLength=6;
                $prefix='APLX';
               $str = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
               $randStr = substr(str_shuffle($str), 0,$keyLength);
            
        //       $checkKey = checkKeys($randStr);
    
        //      while($checkKey == true) {
        //          $randStr = substr(str_shuffle($str), 0,$keyLength);
        //           $checkKey = checkKeys($randStr);
        //      }
            return  $randStr;
            return $prefix.':'.$randStr;
    
          }
    
}




?>