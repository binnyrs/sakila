<?php
class tables_users {
    function getPermissions(Dataface_Record $record = null) {
        if (isAdmin()) return null;
        if ($record and getUser() and $record->val('username') === getUser()->val('username')) {
            return Dataface_PermissionsTool::ALL();
        }
        return Dataface_PermissionsTool::NO_ACCESS();
    }

    function role__permissions(Dataface_Record $record = null) {
        if (isAdmin()) return null;
        if ($record and getUser() and $record->val('username') === getUser()->val('username')) {
            return Dataface_PermissionsTool::READ_ONLY();
        }
        return Dataface_PermissionsTool::NO_ACCESS();
    }

}