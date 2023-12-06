<?php
namespace App\Helpers;

use Validator;

class Helpers {
    public static function timezoneSet(){
        date_default_timezone_set('Asia/Jakarta');
    }
	public static function breadCrumb($request){
		$title = $request->title ? $request->title : '';
		$data['title'] = $title;
		$breadCrumb = [];
		if(is_array($request->breadCrumb) && count($request->breadCrumb)>0){
			foreach($request->breadCrumb as $k => $v){
				array_push($breadCrumb,ucwords($v));
			}
		}
		$data['breadCrumb'] = $breadCrumb;
		return $data;
	}
	public static function resHttp($data=[]){
		$keyData = ['message','code','response'];
		$arr = [];
		foreach($keyData as $key => $val){
			$arr[$val] = isset($data[$val]) ? $data[$val] : ( # Cek key, apakah sudah di set
				$val=='code' ? 500 : (
					$val=='message' ? '-' : []
				)
			);
		}
		$code = $arr['code'];
		$msg = $arr['message'];

		$metadata = [
			'code'    => $arr['code'],
			'message' => $arr['message'],
		];
		$payload['metadata'] = $metadata;
		$payload['response'] = $arr['response'];
		return response()->json($payload,$code);
	}
    # Modify logging payload for exception handler start
	public static function getMessage($e){
		$conn = $e instanceof \PDOException; # Instance database connection(boolean)
		$sqlState = self::cekSqlState($e,[
         '42000', # Syntax error
         '42S02',
         '42S22',
         '1364'
      ]);
		$payload = [
			'title' => 'System error',
			'message' => 'Kami tidak dapat menemukan apa yang terjadi!',
			'detail' => 'Silahkan hubungi admin atau kunjungi halaman ini nanti.',
			'code' => 500,
		];
		if(request()->ajax() || request()->is_api){
			$payload['message'] = 'System error';
		}
		if($sqlState || $conn){
			$payload['title'] = 'Query exception';
			switch($sqlState){
				case '42000':
					$payload['message']='Harap perbaiki query database terlebih dahulu!';
					break;
				case '42S02':
					$payload['message']='Base table or view not found';
					break;
				case '42S22':
					$payload['message']='Unknown column';
					break;
				case '1364':
					$payload['message']="Field doesn't have a default value";
					break;
				default:
					$payload['message']='Harap perbaiki koneksi database terlebih dahulu!';
					$payload['title']='Connection refused';
					break;
			}
		}
		if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException){
			$payload['title'] = 'Not Found';
			$payload['message'] = 'Halaman yang Anda cari tidak ditemukan';
			$payload['detail'] = 'Bagaimana Anda sampai di sini adalah sebuah misteri.<br>Tetapi Anda dapat mengklik tombol di bawah untuk kembali ke halaman sebelumnya';
			$payload['code'] = 404;
			if(request()->ajax()){
				$payload['message'] = 'Url not found';
			}
		}
		return $payload;
	}
   # Modify logging payload for exception handler end
}
