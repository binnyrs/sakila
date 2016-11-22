<?php
class conf_ApplicationDelegate {
    function getPermissions($record) {
        if (isAdmin()) {
            return Dataface_PermissionsTool::ALL();
        } else if (getUser()) {
            return Dataface_PermissionsTool::READ_ONLY();
        } else {
            return Dataface_PermissionsTool::NO_ACCESS();
        }
    }
}