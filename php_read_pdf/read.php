<?php

$file = "CV_Foysal_PHP.pdf";
if (file_exists($file)) {


    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename=" ' . $file . ' " ');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);
} else {
    echo '    <div class="wrapper">
            <form action="" method="post">
                <button style="position:absolute; top: 50%;left: 50%; transform: translate(-50%, -50%); height: 50px; width: 220px; background-color: crimson; border: 1px solid black; outline: none;
                cursor: pointer; font-size: 1.4rem;" >File Not Found</button>
            </form>
        </div>';
}
