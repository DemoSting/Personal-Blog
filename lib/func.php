<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
/**
* 成功的提示信息
*/

function succ($res) {
	$result = 'succ';
	require(ROOT . '/view/admin/info.html');
	exit();
}

/**
* 失败返回的报错信息
*/

function error($res) {
	$result = 'fail';
	require(ROOT . '/view/admin/info.html');
	exit();
}


//#################安全专题######################

/**
 * 过滤非法字符
 * @param $arr
 * @return string
 */
function _addslasshes($arr){
    foreach($arr as $k=>$v){
        if(is_string($arr)){
            $arr[$k] = addslashes($v);
        }else if(is_array($v)){
            $arr[$k] = $this->_addslasshes($v);
        }
    }
    return $arr;
}

?>