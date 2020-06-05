<?php
    #substr
    // $output = substr("Hello", 1, 3);
    // echo $output;

    #strlen
    // $output = strlen("Hellow World");
    // echo $output;

    #strpos
    // $output = strpos('hello', 'l');
    // $output = strrpos('hello', 'l');
    // echo $output;

    #trim
    // $text = "Hello world";
    // var_dump($text);

    #cases
    $text = "this is simple text";
    // echo strtoupper($text);
    // echo strtolower($text);
    // echo ucwords($text);

    #str_replace
    // $text = "Hello world";
    // echo str_replace('hello', 'everyone', $text);

	# is_string()
	# Check if string
	//$val = '22';
	//$output = is_string($val);
	//echo $output;

	/*
	$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4','',' ', 0, '0');

	foreach($values as $value){
		if(is_string($value)){
			echo "{$value} is a string<br>";
		}
	}
    */
    /*
	$string =
	"Lorem ipsum dolor sit amet, consectetur
	adipiscing elit. Nunc ut elit id mi ultricies
	adipiscing. Nulla facilisi. Praesent pulvinar,
	sapien vel feugiat vestibulum, nulla dui pretium orci,
	non ultricies elit lacus quis ante. Lorem ipsum dolor
	sit amet, consectetur adipiscing elit. Aliquam
	pretium ullamcorper urna quis iaculis. Etiam ac massa
	sed turpis tempor luctus. Curabitur sed nibh eu elit
	mollis congue. Praesent ipsum diam, consectetur vitae
	ornare a, aliquam a nunc. In id magna pellentesque
	tellus posuere adipiscing. Sed non mi metus, at lacinia
	augue. Sed magna nisi, ornare in mollis in, mollis
	sed nunc. Etiam at justo in leo congue mollis.
	Nullam in neque eget metus hendrerit scelerisque
	eu non enim. Ut malesuada lacus eu nulla bibendum
	id euismod urna sodales. ";

    $compressed = gzcompress($text);
    echo gzuncompress($compressed);
    */
?>