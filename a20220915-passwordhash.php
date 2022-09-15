<?php

$p = 'root';

echo sha1($p) ."\n";

echo password_hash($p , PASSWORD_DEFAULT);
