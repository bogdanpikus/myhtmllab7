<?php
Header ("Content-type: image/jpeg"); //HTTP-заголовок для картинки
$im = ImageCreate (200, 100); //створюємо image
$background = ImageColorAllocate ($im, $r, $g, $b); //створюємо колір

ImageJpeg ($im); //виводимо image

ImageDestroy ($im); //звільнимо пам'ять, виділену під image


