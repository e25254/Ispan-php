<?php

$p = '123456';

echo password_verify($p,'$2y$10$vPmtS8./jHsa4CCcRPv8Je2IZ/GHKqVec2VQRBafC3XH509GKj9EC') ? 'yes' : 'no' ;