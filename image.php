<?php
Header ("Content-type: image/jpeg"); //HTTP-��������� ��� ��������
$im = ImageCreate (200, 100); //��������� image
$background = ImageColorAllocate ($im, $r, $g, $b); //��������� ����

ImageJpeg ($im); //�������� image

ImageDestroy ($im); //�������� ���'���, ������� �� image


