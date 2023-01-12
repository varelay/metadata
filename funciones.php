<?php

/**
 * If the variable is empty, return NULL. If the variable contains letters, return the variable wrapped
 * in single quotes. Otherwise, return the variable.
 **/
function revisar_dato ($var) {
    if (empty($var)){
        return 'NULL'; 
    } elseif(preg_match("/[a-z]/i",$var)) {
        return '\''.$var.'\'';
    } else {
        return $var; 
    }
}

function revisar_obj_job_parameters ($var) {
    if (empty($var)){
        return '||'; 
    } elseif(preg_match("/[a-z]/i",$var)) {
        return '\''.$var.'\'';
    } else {
        return $var; 
    }
}

if (isset($_POST['enviar_meta'])) {

    $SRC_SCHEMA_ID = revisar_dato($_POST['SRC_SCHEMA_ID']);
    $OBJ_NAME = revisar_dato($_POST['OBJ_NAME']);
    $ERROR_THRESHOLD = revisar_dato($_POST['ERROR_THRESHOLD']);
    $LOAD_GRP = revisar_dato($_POST['LOAD_GRP']);
    $LOAD_TYPE = revisar_dato($_POST['LOAD_TYPE']);
    $OBJ_JOB_PARAMETERS = revisar_obj_job_parameters($_POST['OBJ_JOB_PARAMETERS']); 
    $SELECT_STMT = revisar_dato($_POST['SELECT_STMT']); 
    $FILTER_CONDITIONS = revisar_dato($_POST['FILTER_CONDITIONS']);
    $ACTIVE_FLG = revisar_dato($_POST['ACTIVE_FLG']);
    $INCR_COL_FILT1 = revisar_dato($_POST['INCR_COL_FILT1']);
    $INCR_DAYS = revisar_dato($_POST['INCR_DAYS']);
    $SPLIT_BY_COL = revisar_dato($_POST['SPLIT_BY_COL']);
    $MAPPERS = revisar_dato($_POST['MAPPERS']);
    $HARDDELETE = revisar_dato($_POST['HARDDELETE']);
    $CREATED_DTTM = revisar_dato($_POST['CREATED_DTTM']);
    $UPDATED_DTTM = revisar_dato($_POST['UPDATED_DTTM']);
    $CREATED_BY = revisar_dato($_POST['CREATED_BY']);
    $UPDATED_BY = revisar_dato($_POST['UPDATED_BY']); 
    $APP_ID = revisar_dato($_POST['APP_ID']); 
    $PARTITION_COL = revisar_dato($_POST['PARTITION_COL']);
    $CONTAINER = revisar_dato($_POST['CONTAINER']);


    echo "INSERT INTO [dbo].[OBJ_METADATA] (
        SRC_SCHEMA_ID 
        ,OBJ_ID
        ,OBJ_NAME
        ,ERROR_THRESHOLD
        ,LOAD_GRP
        ,LOAD_TYPE
        ,OBJ_JOB_PARAMETERS
        ,SELECT_STMT
        ,FILTER_CONDITIONS
        ,ACTIVE_FLG
        ,INCR_COL_FILT1
        ,INCR_DAYS
        ,SPLIT_BY_COL
        ,MAPPERS
        ,HARDDELETE
        ,CREATED_DTTM
        ,UPDATED_DTTM
        ,CREATED_BY
        ,UPDATED_BY
        ,APP_ID
        ,PARTITION_COL
        ,CONTAINER
        ) VALUES(
             $SRC_SCHEMA_ID
            ,(NEXT VALUE FOR [dbo].[OBJ_ID_SEQ])
            ,$OBJ_NAME
            ,$ERROR_THRESHOLD
            ,$LOAD_GRP
            ,$LOAD_TYPE
            ,$OBJ_JOB_PARAMETERS
            ,$SELECT_STMT
            ,$FILTER_CONDITIONS
            ,$ACTIVE_FLG
            ,$INCR_COL_FILT1
            ,$INCR_DAYS
            ,$SPLIT_BY_COL
            ,$MAPPERS
            ,$HARDDELETE
            ,getdate()
            ,getdate()
            ,$CREATED_BY
            ,$UPDATED_BY
            ,$APP_ID
            ,$PARTITION_COL
            ,$CONTAINER
            );
    ";

  }