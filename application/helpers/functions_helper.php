<?php

/**
 * Description of MY_Functions
 *
 * @author pet
 */

function gravatar($email, $size){
    return 'http://www.gravatar.com/avatar/' . md5($email) . '?s='.$size;
}
