Class
    store   \logstore_legacy\log
Found usages  (37 usages found)
    Class static member access  (7 usages found)
        moodle  (7 usages found)
            admin/tool/log/store/legacy/classes/log  (6 usages found)
                store.php  (6 usages found)
                    store  (6 usages found)
                        get_events_select  (2 usages found)
                            108 $sort = self::tweak_sort_by_id($sort);
                            111 list($selectwhere, $params, $sort) = self::replace_sql_legacy($selectwhere, $params, $sort);
                        get_events_select_count  (1 usage found)
                            192 list($selectwhere, $params) = self::replace_sql_legacy($selectwhere, $params);
                        get_events_select_iterator  (2 usages found)
                            153 $sort = self::tweak_sort_by_id($sort);
                            156 list($selectwhere, $params, $sort) = self::replace_sql_legacy($selectwhere, $params, $sort);
                        replace_sql_legacy  (1 usage found)
                            77 foreach (self::$standardtolegacyfields as $from => $to) {
            admin/tool/log/store/legacy/tests/fixtures  (1 usage found)
                store.php  (1 usage found)
                    unittest_logstore_legacy  (1 usage found)
                        replace_sql_legacy  (1 usage found)
                            41 return parent::replace_sql_legacy($select, $params, $sort);
    Unclassified usage  (11 usages found)
        moodle  (11 usages found)
            admin/tool/log/store/legacy/classes/log  (5 usages found)
                store.php  (5 usages found)
                    store  (5 usages found)
                        __construct  (1 usage found)
                            42 $this->helper_setup($manager);
                        get_events_select  (1 usage found)
                            126 $events[$data->id] = $this->get_log_event($data);
                        get_events_select_iterator  (1 usage found)
                            165 return new \core\dml\recordset_walk($recordset, array($this, 'get_log_event'));
                        is_logging  (1 usage found)
                            210 return (bool)$this->get_config('loglegacy', true);
                        legacy_add_to_log  (1 usage found)
                            240 if (!$this->is_logging()) {
            admin/tool/log/store/legacy/tests  (1 usage found)
                store_test.php  (1 usage found)
                    logstore_legacy_store_testcase  (1 usage found)
                        test_log_writing  (1 usage found)
                            52 $this->assertInstanceOf('logstore_legacy\log\store', $store);
            report/log/tests  (1 usage found)
                lib_test.php  (1 usage found)
                    report_log_lib_testcase  (1 usage found)
                        test_report_log_supports_logstore  (1 usage found)
                            69 'logstore_legacy' => '\logstore_legacy\log\store',
            report/loglive/tests  (1 usage found)
                lib_test.php  (1 usage found)
                    report_loglive_lib_testcase  (1 usage found)
                        test_report_participation_supports_logstore  (1 usage found)
                            45 'logstore_legacy' => '\logstore_legacy\log\store',
            report/outline/tests  (1 usage found)
                lib_test.php  (1 usage found)
                    report_outline_lib_testcase  (1 usage found)
                        test_report_participation_supports_logstore  (1 usage found)
                            81 'logstore_legacy' => '\logstore_legacy\log\store',
            report/participation/tests  (1 usage found)
                lib_test.php  (1 usage found)
                    report_participation_lib_testcase  (1 usage found)
                        test_report_participation_supports_logstore  (1 usage found)
                            44 'logstore_legacy' => '\logstore_legacy\log\store',
            report/stats/tests  (1 usage found)
                lib_test.php  (1 usage found)
                    report_stats_lib_testcase  (1 usage found)
                        test_report_participation_supports_logstore  (1 usage found)
                            66 'logstore_legacy' => '\logstore_legacy\log\store',
    Usage in extends clause  (1 usage found)
        moodle  (1 usage found)
            admin/tool/log/store/legacy/tests/fixtures  (1 usage found)
                store.php  (1 usage found)
                    unittest_logstore_legacy  (1 usage found)
                        29 class unittest_logstore_legacy extends \logstore_legacy\log\store {
    Usage in instanceof  (18 usages found)
        moodle  (18 usages found)
            blocks/conncampus  (1 usage found)
                block_conncampus.php  (1 usage found)
                    block_conncampus  (1 usage found)
                        get_content  (1 usage found)
                            86 if ($reader instanceof logstore_legacy\log\store) {
            blocks/progress  (1 usage found)
                lib.php  (1 usage found)
                    block_progress_attempts  (1 usage found)
                        1307 } else if ($reader instanceof logstore_legacy\log\store) {
            mod/certificate  (1 usage found)
                locallib.php  (1 usage found)
                    certificate_get_course_time  (1 usage found)
                        544 if ($reader instanceof \logstore_legacy\log\store) {
            mod/customcert/classes  (1 usage found)
                certificate.php  (1 usage found)
                    certificate  (1 usage found)
                        get_course_time  (1 usage found)
                            186 if ($reader instanceof \logstore_legacy\log\store) {
            report/log  (5 usages found)
                locallib.php  (5 usages found)
                    report_log_print_graph  (1 usage found)
                        62 if (!($reader instanceof \core\log\sql_internal_table_reader) && !($reader instanceof logstore_legacy\log\store)) {
                    report_log_usercourse  (2 usages found)
                        117 if (!($reader instanceof \core\log\sql_internal_table_reader) && !($reader instanceof logstore_legacy\log\store)) {
                        122 if ($reader instanceof logstore_legacy\log\store) {
                    report_log_userday  (2 usages found)
                        169 if (!($reader instanceof \core\log\sql_internal_table_reader) && !($reader instanceof logstore_legacy\log\store)) {
                        175 if ($reader instanceof logstore_legacy\log\store) {
            report/log/classes  (5 usages found)
                table_log.php  (5 usages found)
                    report_log_table_log  (5 usages found)
                        col_eventname  (1 usage found)
                            276 if ($this->filterparams->logreader instanceof logstore_legacy\log\store) {
                        get_action_sql  (1 usage found)
                            372 if ($this->filterparams->logreader instanceof logstore_legacy\log\store) {
                        get_cm_sql  (1 usage found)
                            404 if ($this->filterparams->logreader instanceof logstore_legacy\log\store) {
                        query_db  (2 usages found)
                            432 $useextendeddbindex = !($this->filterparams->logreader instanceof logstore_legacy\log\store)
                            505 if (!($this->filterparams->logreader instanceof logstore_legacy\log\store)) {
            report/loglive/classes  (1 usage found)
                table_log.php  (1 usage found)
                    report_loglive_table_log  (1 usage found)
                        col_eventname  (1 usage found)
                            234 if ($this->filterparams->logreader instanceof logstore_legacy\log\store) {
            report/outline  (1 usage found)
                lib.php  (1 usage found)
                    report_outline_supports_logstore  (1 usage found)
                        122 if ($instance instanceof \core\log\sql_internal_table_reader || $instance instanceof \logstore_legacy\log\store) {
            report/participation  (1 usage found)
                lib.php  (1 usage found)
                    report_participation_supports_logstore  (1 usage found)
                        68 if ($instance instanceof \core\log\sql_internal_table_reader || $instance instanceof \logstore_legacy\log\store) {
            report/stats  (1 usage found)
                lib.php  (1 usage found)
                    report_stats_supports_logstore  (1 usage found)
                        129 if ($instance instanceof \core\log\sql_internal_table_reader || $instance instanceof \logstore_legacy\log\store) {
