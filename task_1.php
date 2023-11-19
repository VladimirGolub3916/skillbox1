<?php
$textStorage = array();
function add(&$array, $title, $text) {
    $array[] = array('title' => $title, 'text' => $text);
}
add($textStorage, 'Заголовок 1', 'Текст 1');
add($textStorage, 'Заголовок 2', 'Текст 2');
print_r($textStorage);
function remove($index, &$array){
    if (isset($array[$index])) {
        array_splice($array, $index, 1);
        return true;
    }
    return false;
}
remove(1, $textStorage);
print_r($textStorage);
function edit($index, $newTitle, $newText, &$array) {
    if(isset($array[$index])) {
    $array[$index]['title'] = $newTitle;
    $array[$index]['text'] = $newText;
    return true;
    }
    echo('введено не правильно'. PHP_EOL);
    return false;
}
edit(0,'Новый заголовок','Привет мир',$textStorage);
print_r($textStorage);
?>