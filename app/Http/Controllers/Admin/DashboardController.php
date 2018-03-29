<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;


class DashboardController extends Controller
{
    //
    public function index()
       {
    	    return view('admin.pages.dashboard.home');
       }

    public function database()
      {
        $tables      = false;
        $backup_name = false
        $host = env('DB_HOST');
        $user = env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        $name = env('DB_DATABASE');

        set_time_limit(3000); 
        $mysqli = new mysqli($host,$user,$pass,$name); $mysqli->select_db($name); $mysqli->query("SET NAMES 'utf8'");
        $queryTables = $mysqli->query('SHOW TABLES'); 
        while($row = $queryTables->fetch_row()) { $target_tables[] = $row[0]; }   
        if ($tables !== false) { $target_tables = array_intersect( $target_tables, $tables); } 

        $content = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET time_zone = \"+00:00\";\r\n\r\n\r\n/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\r\n/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\r\n/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\r\n/*!40101 SET NAMES utf8 */;\r\n--\r\n-- Database: `".$name."`\r\n--\r\n\r\n\r\n";
        foreach($target_tables as $table){
            if (empty($table)){ continue; } 
            $result = $mysqli->query('SELECT * FROM `'.$table.'`');     $fields_amount=$result->field_count;  $rows_num=$mysqli->affected_rows;     $res = $mysqli->query('SHOW CREATE TABLE '.$table); $TableMLine=$res->fetch_row(); 
            $content .= "\n\n".$TableMLine[1].";\n\n";
            for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) {
                while($row = $result->fetch_row())  { //when started (and every after 100 command cycle):
                    if ($st_counter%100 == 0 || $st_counter == 0 )  {$content .= "\nINSERT INTO ".$table." VALUES";}
                        $content .= "\n(";    for($j=0; $j<$fields_amount; $j++){ $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); if (isset($row[$j])){$content .= '"'.$row[$j].'"' ;}  else{$content .= '""';}     if ($j<($fields_amount-1)){$content.= ',';}   }        $content .=")";
                    //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                    if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) {$content .= ";";} else {$content .= ",";} $st_counter=$st_counter+1;
                }
            } $content .="\n\n\n";
        }
        $content .= "\r\n\r\n/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\r\n/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\r\n/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;";
        $backup_name = $backup_name ? $backup_name : $name."_(".date('H-i-s')."_".date('d-m-Y').")__rand".rand(1,11111111).".sql";
        ob_get_clean(); header('Content-Type: application/octet-stream');   header("Content-Transfer-Encoding: Binary"); header("Content-disposition: attachment; filename=\"".$backup_name."\"");
        echo $content; 
        exit;
      }
      
    public function logout(Request $request)
       {
          $request->session()->flush();
    	    Session::flush(); 

          echo 'dd'.$request->session()->get('admin');

          die;

          return redirect('/');
       }
}

