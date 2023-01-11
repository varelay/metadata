<?php

if (isset($_POST['enviar_meta'])) {

    $container = $_POST['container'];
    if (empty($container)){
        echo 'null'; 
    } else {
        echo $container;
    }
    
    echo "INSERT INTO [dbo].[OBJ_METADATA] (
    SRC_SCHEMA_ID 
    ,OBJ_ID, OBJ_NAME
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
        570002
        ,(NEXT VALUE FOR [dbo].[OBJ_ID_SEQ])
        ,'cur_tmp_opm_calendar1'
        ,0
        ,0
        ,'F'
        ,concat((select obj_id from dbo.OBJ_METADATA where SRC_SCHEMA_ID = 570002 and lower(obj_name) in ('cur_tmp_opm_calendario_turnos','cur_tmp_opm_calendar_exceptions')
        )asd ORDER BY asd.OBJ_ID FOR XML PATH('') ), 1, 1, ''))),'|/curated/comex_manufacture/1.0/temps/tmp_opm_calendar1|249|0')
        ,NULL
        ,NULL
        ,'Y'
        ,NULL
        ,NULL
        ,NULL
        ,NULL
        ,'N'
        ,getdate()
        ,getdate()
        ,'aluevano@ppg.com'
        ,'aluevano@ppg.com'
        ,NULL
        ,NULL
        ,NULL
        );
";

  }
