<?php

$random_code = md5(uniqid(rand(), true));

echo $random_code;