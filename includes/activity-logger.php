<?php
    function logActivity($pdo,$user_id,$email,$action,$status='success'){
        try{
            // Get Client IP Address
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';



        }catch(PDOException $e){
            error_log("Activity Log Error:" .$e->getMessage());
            return false;
            }
    }
 