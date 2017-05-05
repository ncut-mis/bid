<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Excel;

class ExcelController extends Controller
{
    // Excel 檔案到處功能 
    public function export() 
    { 	
    	$cellData =[
    		 ['學號','姓名','成績'], 
    		 ['10001','AAAAA','99'], 
    		 ['10002','BBBBB','92'], 
    		 ['10003','CCCCC','95'], 
    		 ['10004','DDDDD','89'], 
    		 ['10005','EEEEE','96'], 
    	]; 
    	/*Excel::create('學生成績',function ($excel) use ($cellData)
    		{
    			$excel->sheet('score', function ($sheet) use ($cellData){
    				$sheet->rows($cellData);
    			});
    		})->export('xls'); */
    	Excel::create('學生成績',function($excel) use ($cellData)
    		{ 
    			$excel->sheet('score', function($sheet) use ($cellData)
    			{
    				 $sheet->rows($cellData); 
    			}); 
    		})->store('xls')->export('xls');
	} 

	public function import()
	{ 
		$filePath = 'storage/exports/'.iconv('UTF-8', 'GBK', '學生成績').'.xls';
		Excel::load($filePath, function($reader) {
			$data = $reader->all();
			dd($data); 
		});
	}
}

