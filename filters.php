<?php
    /*
    if(filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        //remove irreval chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br />';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email is valid';
        } else {
            echo 'email is not valid';
        }
    }
    */
    $arr = array(
        'name' => 'Ahmed Eleaswy',
        'age' => 17,
        'email' => 'elesawy325@gmail.com'
    )

    $filters = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        )
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min-range' => 16,
                'max-range' => 120
            ),
            'email' => FILTER_VALIDATE_EMAIL
        )
    )
    print_r(filter_var_array($arr, $filters));
?>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="data" />
    <button type="submit">Submit</button>
</form>