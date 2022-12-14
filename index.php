<?php

function hideEmail (string $email, int $age) {
    if ($age < 18) {
        return 'xxx@xxx.com';
    }
    return $email;
}
var_dump(hideEmail("jonas@gaidys.lt", 15));//gera pavyzdukas
