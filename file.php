<!-- <form action="file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="my_file[]" multiple="multiple"></br></br>
    <input type="submit" value="upload">
</form> -->


<?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") :

    // $image = $_FILES["my_file"];
    // $image_name = $image["name"];
    // $image_type = $image["type"];
    // $image_temp = $image["tmp_name"];
    // $image_size = $image["size"];
    // $image_error = $image["error"];

    // $type_image = ['jpg', 'gif', 'jpeg', 'png'];

    // $reuslt = implode(".",$type_image);
    // echo $reuslt;
    // echo "<pre>";
    // print_r(explode("/",$reuslt));
    // if ($image_error[0] == 4) :

    //     echo "<div style='background: #FFF; margin: 20px; padding: 20px;'> انتا مرفعتش حاجة</div><br/>";

    // else :
    //     $count_image = count($image_name);


    //     for ($i = 0; $i < $count_image; $i++) {
    //         $error = [];

    //         $tmp = explode('.', $image_name[$i]);
    //         $image_extension[$i] = strtolower(end($tmp));

    //         $image_rond[$i] = rand(0, 100000000000000) . '.' . $image_extension[$i];

    //         if ($image_size[$i] > 10000) {
    //             $error[] = "<div style='background: #777; margin: 20px; padding: 20px;'>" . $image_name[$i] . "حجم الملف كبير جدا</div><br/>";
    //         }

    //         if (!in_array($image_extension[$i], $type_image)) {
    //             $error[] = "<div>$image_name[$i] ليست صورة </div>";
    //         }

    //         if (empty($error)) :

    //             move_uploaded_file($image_temp[$i], $_SERVER["DOCUMENT_ROOT"] . "\phpproject\\" . $image_rond[$i]);
    //             echo "<div style='background: #111; color: #999959; margin: 20px; padding: 20px;'> $image_name[$i] تم الرفغ</div><br/>";

    //         else :

    //             foreach ($error as $value) {
    //                 echo $value;
    //             }

    //         endif;
    //     }
    // endif;
// endif;

?>


















<?php

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    $error = [];

    $image = $_FILES["my_file"];
    $image_name = $image["name"];
    $image_type = $image["type"];
    $image_temp = $image["tmp_name"];
    $image_size = $image["size"];




    echo "<pre>";
    print_r($image);
    echo "</pre>";

    $type_image = ['jpg', 'gif', 'jpeg', 'png'];

    // $image_extension = strtolower(end(explode('.',$image_name)));

    $tmp = explode('.', $image_name);
    $image_extension = strtolower(end($tmp));

    if ($image_size > 100000000) {
        $error[] = "<div> حجم الملف كبير جدا</div>";
    }

    if (!in_array($image_extension, $type_image)) {
        $error[] = "<div> ليست صورة </div>";
    }

    if (empty($error)) :
        move_uploaded_file($image_temp, $_SERVER["DOCUMENT_ROOT"] . "\phpproject\\" . $image_name);
        echo "تم الرفغ";
    else :
        foreach ($error as $value) :
            echo $value;
        endforeach;
    endif;
    */
// endif;

?>