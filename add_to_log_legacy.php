Function
    add_to_log
Found usages  (117 usages found)
    Function call  (110 usages found)
        moodle  (110 usages found)
            admin/tool/log/store/legacy/tests  (4 usages found)
                store_test.php  (4 usages found)
                    logstore_legacy_store_testcase  (4 usages found)
                        test_log_writing  (4 usages found)
                            72 add_to_log($course1->id, 'xxxx', 'yyyy', '', '7', 0, 0);
                            75 add_to_log($course2->id, 'aaa', 'bbb', 'info.php', '666', $module2->cmid, $user1->id);
                            145 add_to_log($course1->id, 'xxxx', 'yyyy', '', '7', 0, 0);
                            156 add_to_log($course1->id, 'xxxx', 'yyyy', '', '7', 0, 0);
            auth/googleoauth2  (1 usage found)
                lib.php  (1 usage found)
                    oauth_add_to_log  (1 usage found)
                        54 add_to_log($courseid, $module, $action, $url, $info, $cm, $user);
            auth/gsaml  (4 usages found)
                auth.php  (4 usages found)
                    auth_plugin_gsaml  (4 usages found)
                        loginpage_hook  (2 usages found)
                            241 add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','User has saml request but needs login/redirect', 0,0);
                            248 add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','User islogged in and samlrequest', 0,0);
                        user_authenticated_hook  (2 usages found)
                            80 add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','User has accessed gservice first', 0,0);
                            131 add_to_log(SITEID, 'user', 'login', "view.php?id=$user->id&course=".SITEID,
            auth/liveid  (2 usages found)
                auth.php  (2 usages found)
                    auth_plugin_liveid  (2 usages found)
                        user_login  (2 usages found)
                            64 add_to_log(SITEID, 'auth_liveid', 'sucesses login','','liveid auth success', 0,0);
                            68 add_to_log(SITEID, 'auth_liveid', 'fail login','','liveid auth failed', 0,0);
            blocks/accesskey/controller  (3 usages found)
                default.php  (3 usages found)
                    block_accesskey_controller_default  (3 usages found)
                        createbatch_action  (1 usage found)
                            163 add_to_log(SITEID, 'block_accesskey', 'create batch', "view.php?".$this->url->get_query_string());
                        editaccesskey_action  (1 usage found)
                            313 add_to_log(SITEID, 'block_accesskey', 'edit batchkey', "view.php?".$this->url->get_query_string());
                        editbatch_action  (1 usage found)
                            238 add_to_log(SITEID, $this->component, 'edit batch', "view.php?".$this->url->get_query_string());
            blocks/content_rollover/helper  (4 usages found)
                run_tasks.php  (4 usages found)
                    block_content_rollover_helper_run_tasks  (4 usages found)
                        direct  (4 usages found)
                            34 add_to_log(SITEID, 'content_rollover', 'clone course block content rollover', '', $msg);
                            100 add_to_log($tocourse->courseid, 'content_rollover', 'send message error', '', $e->getMessage());
                            105 add_to_log($tocourse->id, 'content_rollover', 'clone course block content rollover', '', trim($e->getMessage() . $e->getTraceAsString()));
                            125 add_to_log(SITEID, 'content_rollover', 'send message to admin', '', $e->getMessage());
            blocks/course_signals  (1 usage found)
                block_course_signals.php  (1 usage found)
                    block_course_signals  (1 usage found)
                        get_content  (1 usage found)
                            104 add_to_log($COURSE->id, 'course_signals', 'get signal error', null, $client->errormsg());
            blocks/efolio/controller  (2 usages found)
                default.php  (2 usages found)
                    block_efolio_controller_default  (2 usages found)
                        login_action  (2 usages found)
                            114 add_to_log(SITEID, 'user', 'login', "view.php?id=$user->id&course=".SITEID, $user->id, 0, $user->id);
                            115 add_to_log(SITEID, 'user', 'login efolio', "view.php?id=$user->id&course=".SITEID, $user->id, 0, $user->id);
            blocks/joulesync/controller  (1 usage found)
                default.php  (1 usage found)
                    block_joulesync_controller_default  (1 usage found)
                        viewinfo_action  (1 usage found)
                            108 add_to_log($COURSE->id, 'course', 'view joulesync meeting', "view.php?id=$COURSE->id", format_string($meeting->get_name()));
            blocks/locations/jslibs  (4 usages found)
                getgeocode.php  (4 usages found)
                    output_data_by_citystate  (2 usages found)
                        134 add_to_log(SITEID, 'block_locations', 'getgeo bycitystate','', $url, 0,0);
                        140 add_to_log(SITEID, 'block_locations', 'citystate returns','', "lon:".$lon." lat:".$lat, 0,0);
                    output_data_by_zip  (2 usages found)
                        92 add_to_log(SITEID, 'block_locations', 'getgeocode byzip','', $url, 0,0);
                        98 add_to_log(SITEID, 'block_locations', 'byzipcode returns','', "lon:".$lon." lat:".$lat, 0,0);
            blocks/mychildshomework/helper  (3 usages found)
                sent_emails.php  (3 usages found)
                    block_mychildshomework_helper_sent_emails  (3 usages found)
                        direct  (3 usages found)
                            27 add_to_log(SITEID, "mychildshomework", 'Run cron', '', get_string("runcron_cancelled", self::COMPONENT));
                            148 add_to_log(SITEID, 'mychildshomework', 'send_emailtoadmin', '', $e2->getMessage());
                            154 add_to_log(SITEID, "mychildshomework", 'Run cron');
            blocks/rating_tool  (3 usages found)
                lib.php  (2 usages found)
                    block_rating_tool_update_database  (2 usages found)
                        177 add_to_log(SITEID, 'block_rating_tool', $error_name, null, trim($e->getMessage()));
                        185 add_to_log(SITEID, 'block_rating_tool', $error_name, null, 'error to insert block_rating_tool id: '.$key);
                submit.php  (1 usage found)
                    113 add_to_log(SITEID, 'block_rating_tool', 'error submit', null, $e->getMessage());
            blocks/rating_tool/cli  (6 usages found)
                rating_tool_update.php  (6 usages found)
                    63 add_to_log(SITEID, 'block_rating_tool', 'update', null, 'result code: '.BLOCK_RATING_TOOL_UPGRADE_ERRORS);
                    66 add_to_log(SITEID, 'block_rating_tool', 'update', null, 'result code: '.BLOCK_RATING_TOOL_NOTHING_TO_UPGRADE);
                    69 add_to_log(SITEID, 'block_rating_tool', 'update', null, 'result code: '.BLOCK_RATING_TOOL_UPGRADED_OK);
                    79 add_to_log(SITEID, 'block_rating_tool', 'update check', null, 'result code: '.BLOCK_RATING_TOOL_UPGRADE_ERRORS);
                    82 add_to_log(SITEID, 'block_rating_tool', 'update check', null, 'result code: '.BLOCK_RATING_TOOL_NOTHING_TO_UPGRADE);
                    85 add_to_log(SITEID, 'block_rating_tool', 'update check', null, 'result code: '.BLOCK_RATING_TOOL_UPGRADED_OK);
            blocks/rating_tool/db  (2 usages found)
                upgrade.php  (2 usages found)
                    xmldb_block_rating_tool_upgrade  (2 usages found)
                        94 add_to_log(SITEID, 'block_rating_tool', 'error update', null, trim($e->getMessage()));
                        99 add_to_log(SITEID, 'block_rating_tool', 'error update', null, 'error with new blockinstance');
            blocks/resetpwd/helper  (1 usage found)
                reset.php  (1 usage found)
                    block_resetpwd_helper_reset  (1 usage found)
                        direct  (1 usage found)
                            18 add_to_log(SITEID,
            blocks/table_export/helper  (3 usages found)
                table_export.php  (3 usages found)
                    block_table_export_helper_table_export  (3 usages found)
                        direct  (3 usages found)
                            86 add_to_log(SITEID, 'user', 'export conduit tables', '', $e->getMessage());
                            95 add_to_log(SITEID, 'user', 'export conduit tables', '', $e2->getMessage());
                            100 add_to_log(SITEID, 'user', 'export conduit tables', '', 'Finished exporting');
            enrol/imsenterprisev2  (1 usage found)
                lib.php  (1 usage found)
                    enrol_imsenterprisev2_plugin  (1 usage found)
                        process_group_tag  (1 usage found)
                            505 add_to_log(SITEID, "course", "new", "view.php?id=$course->id", "$course->fullname (ID $course->id)");
            local/aggregated_att_report/helper  (3 usages found)
                aggregated_att_report.php  (3 usages found)
                    local_aggregated_att_report_helper_aggregated_att_report  (3 usages found)
                        direct  (3 usages found)
                            72 add_to_log(SITEID, 'user', 'export aggregated attendance report', '', $e->getMessage());
                            81 add_to_log(SITEID, 'user', 'export aggregated attendance report', '', $e2->getMessage());
                            86 add_to_log(SITEID, 'user', 'export aggregated attendance report', '', 'Finished exporting');
            mod/aspirelists  (1 usage found)
                launch.php  (1 usage found)
                    22 add_to_log($course->id, "aspirelists", "launch", "launch.php?id=$cm->id", "$list->id");
            mod/berkleeattendance  (4 usages found)
                locallib.php  (4 usages found)
                    berkleeattendance  (4 usages found)
                        add_status  (1 usage found)
                            1348 add_to_log($this->course->id, 'berkleeattendance', 'status added', $this->url_preferences(),
                        delete_sessions  (1 usage found)
                            1311 add_to_log($this->course->id, 'berkleeattendance', 'sessions deleted', $this->url_manage(),
                        update_session_from_form_data  (1 usage found)
                            866 add_to_log($this->course->id, 'berkleeattendance', 'session updated', $url, $info, $this->cm->id);
                        update_sessions_duration  (1 usage found)
                            1326 add_to_log($this->course->id, 'berkleeattendance', 'sessions duration updated', $this->url_manage(),
            mod/biosigid  (2 usages found)
                index.php  (1 usage found)
                    41 add_to_log($course->id, 'biosigid', 'view all', 'index.php?id='.$course->id, '');
                view.php  (1 usage found)
                    57 add_to_log($course->id, BIOSIGID_MODULE_NAME, 'view', "view.php?id={$cm->id}", $biosigid->name, $cm->id);
            mod/datavalidate  (10 usages found)
                edit.php  (2 usages found)
                    197 add_to_log($course->id, 'datavalidate', 'update', "view.php?d=$datavalidate->id&amp;rid=$rid", $datavalidate->id, $cm->id);
                    247 add_to_log($course->id, 'datavalidate', 'add', "view.php?d=$datavalidate->id&amp;rid=$recordid", $datavalidate->id, $cm->id);
                field.php  (3 usages found)
                    124 add_to_log($course->id, 'datavalidate', 'fields add',
                    166 add_to_log($course->id, 'datavalidate', 'fields update',
                    197 add_to_log($course->id, 'datavalidate', 'fields delete',
                index.php  (1 usage found)
                    42 add_to_log($course->id, "datavalidate", "view all", "index.php?id=$course->id", "");
                templates.php  (2 usages found)
                    76 add_to_log($course->id, 'datavalidate', 'templates view', "templates.php?id=$cm->id&amp;d=$datavalidate->id", $datavalidate->id, $cm->id);
                    139 add_to_log($course->id, 'datavalidate', 'templates saved', "templates.php?id=$cm->id&amp;d=$datavalidate->id", $datavalidate->id, $cm->id);
                view.php  (2 usages found)
                    255 add_to_log($course->id, 'datavalidate', 'view', "view.php?id=$cm->id", $datavalidate->id, $cm->id);
                    372 add_to_log($course->id, 'datavalidate', 'record delete', "view.php?id=$cm->id", $datavalidate->id, $cm->id);
            mod/equella  (10 usages found)
                callbackmulti.php  (1 usage found)
                    96 add_to_log($mod->course, $mod->modulename, 'add equella resource', $url, "$mod->modulename ID: $mod->instance", $mod->instance);
                externallib.php  (6 usages found)
                    equella_external  (6 usages found)
                        add_item_to_course  (2 usages found)
                            571 add_to_log($eq->course, "course", "add mod", "../mod/$modname/view.php?id=$cmid", "$modname $eqid");
                            572 add_to_log($eq->course, $modname, "add equella resource", "view.php?id=$cmid", "$eqid", $cmid);
                        edit_item  (2 usages found)
                            633 add_to_log($eq->course, "course", "update mod", "../mod/equella/view.php?id=$cm->id", "equella $eq->instance");
                            634 add_to_log($eq->course, "equella", "update equella resource", "view.php?id=$cm->id", "$eq->instance", $cm->id);
                        move_item  (2 usages found)
                            687 add_to_log($item->course, "course", "update mod", "../mod/equella/view.php?id=$cm->id", "equella $item->instance");
                            688 add_to_log($item->course, "equella", "update equella resource", "view.php?id=$cm->id", "$item->instance", $cm->id);
                index.php  (1 usage found)
                    37 add_to_log($course->id, "equella", "view all", "index.php?id=$course->id", "");
                ltilaunch.php  (1 usage found)
                    52 add_to_log($course->id, "equella", "view equella resource", "view.php?id=$cm->id", $equella->id, $cm->id);
                view.php  (1 usage found)
                    57 add_to_log($course->id, "equella", "view equella resource", "view.php?id=$cm->id", $equella->id, $cm->id);
            mod/gpra  (1 usage found)
                view.php  (1 usage found)
                    53 add_to_log($course->id, 'gpra', 'view', "view.php?id={$cm->id}", $gpra->name, $cm->id);
            mod/hotpot  (1 usage found)
                lib.php  (1 usage found)
                    hotpot_add_to_log  (1 usage found)
                        2358 add_to_log($courseid, $module, $action, $url, $info, $cmid, $userid);
            mod/joulesync  (1 usage found)
                index.php  (1 usage found)
                    16 add_to_log($COURSE->id, 'joulesync', 'view all', "index.php?id=$COURSE->id", '');
            mod/joulesync/controller  (1 usage found)
                default.php  (1 usage found)
                    mod_joulesync_controller_default  (1 usage found)
                        view_action  (1 usage found)
                            66 add_to_log($COURSE->id, 'joulesync', 'view joulesync meeting', "view.php?id={$this->cm->id}", format_string($this->instance->name), $this->cm->id);
            mod/recordingsbn  (4 usages found)
                view.php  (4 usages found)
                    70 add_to_log($course->id, 'recordingsbn', 'resource viewed', "view.php?id={$cm->id}", $recordingsbn->name, $cm->id);
                    145 add_to_log($course->id, 'recordingsbn', 'recording published', "", $recordingsbn->name, $cm->id);
                    157 add_to_log($course->id, 'recordingsbn', 'recording unpublished', "", $recordingsbn->name, $cm->id);
                    169 add_to_log($course->id, 'recordingsbn', 'recording deleted', '', $recordingsbn->name, $cm->id);
            mod/respondusws  (4 usages found)
                index.php  (1 usage found)
                    76 add_to_log($respondusws_course->id, "respondusws", "view all", "index.php?id=$respondusws_course->id");
                servicelib.php  (1 usage found)
                    respondusws_addtolog  (1 usage found)
                        784 add_to_log($course_id, "respondusws", $action,
                view.php  (2 usages found)
                    104 add_to_log($respondusws_course->id, "respondusws", "view", "view.php?id=$respondusws_cm->id",
                    107 add_to_log($respondusws_course->id, "respondusws", "view", "view.php?a=$respondusws_module->id",
            mod/studymateclass  (4 usages found)
                index.php  (1 usage found)
                    77 add_to_log($studymateclass_course->id, "studymateclass", "view all", "index.php?id=$studymateclass_course->id");
                servicelib.php  (1 usage found)
                    studymateclass_addtolog  (1 usage found)
                        507 add_to_log($course_id, "studymateclass", $action,
                view.php  (2 usages found)
                    108 add_to_log($studymateclass_course->id, "studymateclass", "view",
                    111 add_to_log($studymateclass_course->id, "studymateclass", "view",
            mod/tadc  (2 usages found)
                index.php  (1 usage found)
                    34 add_to_log($course->id, 'tadc', 'view all', 'index.php?id='.$course->id, '');
                view.php  (1 usage found)
                    60 add_to_log($course->id, 'tadc', 'view', "view.php?id={$cm->id}", $title, $cm->id);
            mod/turnitintool  (1 usage found)
                lib.php  (1 usage found)
                    turnitintool_add_to_log  (1 usage found)
                        7496 add_to_log($courseid, "turnitintool", $event_name, $link, $desc, $cmid);
            mod/turnitintooltwo  (1 usage found)
                lib.php  (1 usage found)
                    turnitintooltwo_add_to_log  (1 usage found)
                        90 add_to_log($courseid, "turnitintooltwo", $eventname, $link, $desc, $cmid);
            mod/videofurnace  (2 usages found)
                index.php  (1 usage found)
                    39 add_to_log($course->id, 'videofurnace', 'view all', 'index.php?id='.$course->id, '');
                view.php  (1 usage found)
                    56 add_to_log($course->id, 'videofurnace', 'view', "view.php?id={$cm->id}", $videofurnace->name, $cm->id);
            mod/webexactivity  (1 usage found)
                view.php  (1 usage found)
                    391 add_to_log($course->id, 'webexactivity', 'view', 'view.php?id='.$cm->id, $webexmeeting->id, $cm->id);
            outcome/classes/controller  (10 usages found)
                edit_controller.php  (4 usages found)
                    edit_controller  (4 usages found)
                        outcomeset_action  (1 usage found)
                            100 add_to_log($COURSE->id, 'outcome', 'view outcome sets', 'admin.php?action=outcomeset');
                        outcomeset_delete_action  (1 usage found)
                            175 add_to_log($COURSE->id, 'outcome', 'delete outcome set', 'admin.php?action=outcomeset', $outcomeset->id);
                        outcomeset_edit_action  (1 usage found)
                            140 add_to_log($COURSE->id, 'outcome', 'edit outcome set', 'admin.php?action=outcomeset', $outcomeset->id);
                        outcomeset_restore_action  (1 usage found)
                            195 add_to_log($COURSE->id, 'outcome', 'restore outcome set', 'admin.php?action=outcomeset', $outcomeset->id);
                report_controller.php  (6 usages found)
                    report_controller  (6 usages found)
                        default_action  (1 usage found)
                            122 add_to_log($COURSE->id, 'outcome', 'view course outcome sets', 'course.php?contextid='.$PAGE->context->id);
                        report_course_coverage_table_action  (1 usage found)
                            246 add_to_log($COURSE->id, 'outcome', 'view course outcome coverage', 'course.php?contextid='.$PAGE->context->id);
                        report_course_performance_table_action  (1 usage found)
                            191 add_to_log($COURSE->id, 'outcome', 'view course outcome performance', 'course.php?contextid='.$PAGE->context->id);
                        report_course_unmapped_table_action  (1 usage found)
                            273 add_to_log($COURSE->id, 'outcome', 'view course outcome unmapped', 'course.php?contextid='.$PAGE->context->id);
                        report_course_user_performance_table_action  (1 usage found)
                            218 add_to_log($COURSE->id, 'outcome', 'view course user outcome performance', "course.php?contextid={$PAGE->context->id}&action=report_course_user_performance_table");
                        report_marking_table_action  (1 usage found)
                            142 add_to_log($COURSE->id, 'outcome', 'view outcome marking', 'course.php?contextid='.$PAGE->context->id);
            report/outcome/classes/controller  (2 usages found)
                performance_controller.php  (2 usages found)
                    performance_controller  (2 usages found)
                        course_performance_action  (1 usage found)
                            109 add_to_log(get_site()->id, 'admin', 'view site outcome course performance', 'report/outcome/index.php?action=course_performance&section=reportoutcomecourseperformance');
                        performance_action  (1 usage found)
                            82 add_to_log(get_site()->id, 'admin', 'view site outcome performance', 'report/outcome/index.php?action=performance&section=reportoutcomeperformance');
    Unclassified usage  (5 usages found)
        moodle  (5 usages found)
            auth/googleoauth2  (1 usage found)
                lib.php  (1 usage found)
                    oauth_add_to_log  (1 usage found)
                        53 } else if (function_exists('add_to_log')) {
            mod/assign  (1 usage found)
                locallib.php  (1 usage found)
                    assign  (1 usage found)
                        add_to_log  (1 usage found)
                            3530 call_user_func_array('add_to_log', $args);
            mod/hotpot  (1 usage found)
                lib.php  (1 usage found)
                    hotpot_add_to_log  (1 usage found)
                        2356 } else if (function_exists('add_to_log')) {
            mod/iassign  (1 usage found)
                locallib.php  (1 usage found)
                    iassign  (1 usage found)
                        add_to_log  (1 usage found)
                            3693 call_user_func_array('add_to_log', $args);
            mod/workshop  (1 usage found)
                locallib.php  (1 usage found)
                    workshop  (1 usage found)
                        log  (1 usage found)
                            1788 call_user_func_array('add_to_log', $args);
    Usage in comments  (2 usages found)
        moodle  (2 usages found)
            mod/workshop  (2 usages found)
                locallib.php  (2 usages found)
                    workshop  (2 usages found)
                        1763 * Workshop wrapper around {@see add_to_log()}
                        3463 * Converts absolute URL to relative URL needed by {@see add_to_log()}
