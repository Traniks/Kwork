<?php
if( stristr($_SERVER['REQUEST_URI'], basename(__FILE__)) ){
	header('HTTP/1.0 404 Not Found', true, 404); exit("404 Not Found");
}
/*
	?phrase_id=2141240
	?phrase_id=2141240&region_id=2141236

	Файлы с заменами в папке replacements
	
*/
$CheckUTMData = CheckUTMData();
$Phone = $CheckUTMData["NewPhone"] ? $CheckUTMData["NewPhone"] : $DefData["Phone"];
$PageUTMData = [
	"Title" => $CheckUTMData["NewTitle"] ? $CheckUTMData["NewTitle"] : $DefData["Title"],
	"Phone" => [
		"PhoneLink" => str_replace(["+","(",")","-"," "], "", $Phone),
		"PhoneShow" => $Phone,
	],
];

/**/
function CheckUTMData(){
	$GETArr = array();
	if(@count($_GET)>0){
		foreach($_GET AS $Key => $Val){
			
			$Key = strip_tags(trim($Key));
			$Val = strip_tags(trim($Val));
			if($Key != "" AND $Val != ""){
				$GETArr[$Key] = $Val;
			}
			
		}
	}
	
	$REtDataArr = [
		"NewTitle" => FALSE,
		"NewPhone" => FALSE,
	];
	
	//Заголовок и телефон 
	if(@$GETArr['phrase_id'] != ""){//Если UTM есть
		
		//Заголовок
		$NewTitle = UTMCheckNewData($GETArr['phrase_id'], "title.csv");
		if(@$NewTitle){//Если заголовок найден
			$NewTitleArr = explode(' ', $NewTitle);
			$i = 1;
			foreach($NewTitleArr as $Key => $word){
				//if($i % 2 == 0){
				if($i % 4 == 0 && $i != 0){
					$NewTitleArr[$Key] = $word ."<br data-v-c046ed3e=''/>";
				}
				if($i > 3){ BREAK;}
				$i++;
			}
			$REtDataArr["NewTitle"] = implode(" ", $NewTitleArr);
		}
		
		//Телефон 
		$NewPhone = UTMCheckNewData($GETArr['phrase_id'], "number.csv");
		if($NewPhone){
			$REtDataArr["NewPhone"] = $NewPhone;
		}
		
	}
	
	return $REtDataArr;
	
}//END FUNCTION

/*
	Ищет замены
*/
function UTMCheckNewData($DataID, $csvFileName){
	
	//Разбираем файл 
	$keywords = @explode("\n",  trim(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/PL/replacements/'.$csvFileName)));
	
	foreach($keywords as $v){
		$v = explode(';', $v);
		
		$v[0] = trim($v[0]);//ID 
		$v[1] = trim($v[1]);//Текст
		
		if(@$DataID == $v[0] AND $v[1] != ""){
			return $v[1];//Текст
		}
	}
	
	//Нечего не нашел
	return FALSE;
	
}//END FUNCTION