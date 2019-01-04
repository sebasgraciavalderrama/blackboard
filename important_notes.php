<?php

  if ($oldversion < 2018112000) {
        $params = ['topics','folderview','flexpage'];
        $DB->execute('UPDATE {course} SET format = ? WHERE format = ? OR format = ?', $params);
        // Mrooms savepoint reached.
        upgrade_plugin_savepoint(true, 2018111600, 'local', 'mrooms');
    }
    $DB->execute('UPDATE {course_format_options} SET format = ? WHERE format = ? OR format = ?', $params);
    $DB->execute('DELETE FROM{course_format_options} WHERE format = ? OR format = ?', $params);

/*
    EXPECTED BEHAVIOUR:

    The courses with the folowing formats: 'flexpage' and 'folderview' should have 'topics' now instead.
    No other course format should have folderview or flexpage as its value.
    1. Execute the upgrade
    2. You can navigate to master->Admin->Front page settings->Reports-> Admin SQL and run the following query (after executing the upgrade):
    SELECT * FROM mdl_course WHERE format='folderview' OR format='flexpage'
    The output should be: Nothing to display.
    3. Alternatively the following query can be executed and see the query results.
    SELECT * FROM mdl_course WHERE format='topics', no folderview or flexpage values should appear under the format column.
*/

PARA EJECUTAR EL UPGRADE DESDE CONSOLA (CAMBIOS HECHOS SOBRE upgrade.php)
php admin/cli/upgrade.php

en el caso que le llegue a salir algo de que no esta inicializado el servidor de selenium, escriba esto `behat-servers-start` (edited)

a todo enter cuando kow up y luego si para incializar el behat se manda este comando `php admin/tool/behat/cli/init.php`

Esto es para el ticket 13698 Behat tests
vendor/bin/behat --config /srv/moodledata/behat_moodledata/behatrun/behat/behat.yml /vagrant/www/moodle/theme/snap/tests/behat/ajax_logout_msg.feature
vendor/bin/behat --config /srv/moodledata/behat_moodledata/behatrun/behat/behat.yml /vagrant/www/moodle/theme/snap/tests/behat/assignment_grading_capabilities.feature
vendor/bin/behat --config /srv/moodledata/behat_moodledata/behatrun/behat/behat.yml /vagrant/www/moodle/theme/snap/tests/behat/personal_menu_messages.feature
vendor/bin/behat --config /srv/moodledata/behat_moodledata/behatrun/behat/behat.yml /vagrant/www/moodle/theme/snap/tests/behat/personalmenu_grades.feature
vendor/bin/behat --config /srv/moodledata/behat_moodledata/behatrun/behat/behat.yml /vagrant/www/moodle/theme/snap/tests/behat/course_category_colors_setting.feature

XPATH
And I click on "//a[@file='repo_upload_file']]" "xpath_element"
//input[@type='file']

PARA QUITAR UN ARCHIVO DEL COMMIT
git reset HEAD /path/to/file/file.xyz
git status
git commit -m "INT-123: Descripcion 123 abc xyz"

PARA SUBIR EL PHPUnit
php admin/tool/phpunit/cli/init.php
vendor/bin/phpunit path/to/file

PARA CORRER LA PRUEBA
vendor/bin/phpunit path/to/file
Ejemplo:
  vendor/bin/phpunit local/mrooms/tests/course_test.php

PARA IMPRIMIR EN REGUS
regus.tierrafirme@regus.com

PARA HACER EL AMEND
Agregar los archivos modificados:
  git add path/to/files
git comit --amend
(luego se hace el push forzado)
git push -f origin nombre_branch

git push -f origin feature/INT-13902_superficial-rattlesnake
git push -f origin feature/INT-13698_substantial-newt

PARA AGREGAR LOS MODIFICADOS Y NO LOS NUEVOS
git add . -u

PARA MIRAR EL LOG DEL GIT
git log

PARA CREAR UNA NUEVA BRANCH Y LUEGO HACER EL KOW PUSH ( EN EL CASO DE QUE NO EXISTA UNA BRANCH e.g: MR 3.5 MP 1 no existe)
git checkout -b (feature or update)/INT-XXXXX_<NAME-OF-THE-BRANCH>
  git checkout -b update/INT-14022_heuristic-salamander
kow push -p

PARA HACER EL GIT CHERRY-PICK
git cherry-pick <commit-hash>
  estos hash de los commits estan en mroomstech dentro del pull request y toca hacerlo del mas viejo al ultimo

PARA REBASE
  ```git pull origin release/3.5+1 --rebase```
