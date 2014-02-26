// <?php

// function foobar($arg, $arg2) {
//     echo __FUNCTION__, " got $arg and $arg2\n";
// }

// // class foo {
// //     function bar($arg, $arg2) {
// //         echo __METHOD__, " got $arg and $arg2\n";
// //     }
// // }
// // Call the foobar() function with 2 arguments

// call_user_func_array("foobar", array("one", "two"));

// // // Call the $foo->bar() method with 2 arguments
// // $foo = new foo;
// // call_user_func_array(array($foo, "bar"), array("three", "four"));

// ?>


// http://forex.cbm.gov.mm/api/latest/latest.json
<?php

$string = file_get_contents("http://forex.cbm.gov.mm/api/latest/latest.json");
$json_a = json_decode($string, true);

foreach ($json_a as $person_name => $person_a) {
    echo $person_a['status'];
}

?>

