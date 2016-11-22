<?php
function getUser(){
    static $user =-1;
    if (is_int($user) and $user == -1 ){
        $user = Dataface_AuthenticationTool::getInstance()->getLoggedInUser();
    }
    return $user;
}
function getRole(){
    static $role = -1;
    if ( is_int($role) and $role == -1 ){
        $user = getUser();
        if ( !$user ) return null;
        $role = $user->val('role');
    }
    return $role;
}
function isAdmin(){
    return (getRole() == 'ADMIN');
}
