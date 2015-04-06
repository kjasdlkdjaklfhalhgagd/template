<?php
//必要なmetaタグは先に突っ込んでおく

//読み込んで
$contents = @file_get_contents("php/meta.txt");
//metaキーワード一気に出力
echo $contents;