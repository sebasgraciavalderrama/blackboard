# This file is part of Moodle - http://moodle.org/
#
# Moodle is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# Moodle is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
#
# Tests for Exception Forum posts report.
#
# @package    block_reports
# @author     Sebastian Gracia <sebastian.gracia@blackboard.com>
# @copyright  Copyright (c) 2018 Blackboard Ltd.
# @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later

@block @block_reports
Feature: Test Exception Reports Forum Posts filter.
  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                 |
      | student  | Student   | User     | student@example.com   |
      | student1 | Student1  | User1    | student1@example.com  |
      | student2 | Student2  | User2    | student2@example.com  |
      | student3 | Student3  | User3    | student3@example.com  |
      | teacher  | Teacher   | Teach    | teacher@example.com   |

    And the following "courses" exist:
      | fullname | shortname | category | groupmode |
      | Course 1 | C1        | 0        | 1         |

    And the following "activities" exist:
      | activity | name               | intro         | course | idnumber |
      | hsuforum | Test hsuforum name | Test hsuforum | C1     | hsuforum |
      | forum    | Test forum name    | Test forum    | C1     | forum    |

    And the following "course enrolments" exist:
      | user     | course | role    |
      | student  | C1     | student |
      | student1 | C1     | student |
      | student2 | C1     | student |
      | student3 | C1     | student |
      | student3 | C1     | student |
      | teacher  | C1     | teacher |

  @javascript
  Scenario: A admin sets up block collect.
    And I log in as "admin"
    And I navigate to "Plugins > Blocks > Collect" in site administration
    Then I should see "Force data collection cron to run now."
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect_excludehidden']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/course_enabled']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/course_enabledpoints_grade']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/coursexuser_enabled']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/coursexuser_enabledpoints_enrolend']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/coursexuser_enabledpoints_enrolstart']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/coursexuser_enabledpoints_grade']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/coursexuser_enabledpoints_progress']" "xpath_element"
    And I click on "//input[@type='checkbox' and @id='id_s_blocks/collect/coursexuser_enabledpoints_view']" "xpath_element"
    And I press "Save changes"
      # And I click on "Force data collection cron to run now." "link"
    # And I follow "Continue" "Link"
    And I log out

  Scenario: An admin adds the collect block in Course 1.
    Given I log in as "admin"
    And I am on "Course 1" course homepage with editing mode on
    And I add the "Collect" block
    And I log out

  @javascript
  Scenario: Student's create first discussion.
    And I log in as "student"
    And I am on "Course 1" course homepage
    And I add a new discussion to "Test forum name" forum with:
      | Subject | Discussion subject |
      | Message | Discussion subject |
    And I wait to be redirected
    And I should see "Discussion subject"
    And I log out

    And I log in as "student1"
    And I am on "Course 1" course homepage
    And I follow "Test hsuforum name"
    And I add a new discussion to "Test hsuforum name" Open Forum with:
      | Subject | Discussion subject |
      | Message | Discussion subject |
    And I wait to be redirected
    And I should see "Discussion subject"
    And I log out

    And I log in as "student1"
    And I am on "Course 1" course homepage
    And I reply "Discussion subject" post from "Test forum name" forum with:
      | Message | Reply for Discussion subject Test forum name |
    And I wait to be redirected
    And I log out

    And I log in as "student"
    And I am on "Course 1" course homepage
    And I reply "Discussion subject" post from "Test hsuforum name" Open Forum with:
      | Message | Reply for Discussion subject Test hsuforum name |
    And I wait to be redirected
    And I log out

  @javascript
  Scenario: An admin forces data collection cron tu run.
    And I log in as "admin"
    And I navigate to "Plugins > Blocks > Collect" in site administration
    And I click on "Force data collection cron to run now." "link"
    And I press "Continue"
    And I log out

  @javascript
  Scenario: FINAL SCENARIO - An admin uses the filter.
    And I log in as "admin"
    And I trigger cron
    And I am on "Course 1" course homepage
    And I follow "Course 1"
    And I navigate to "Open Reports" in current page administration
    And I click on "category-overlay-toggle" "link"
    And I click on "category_reports_joule_exception" "link"
    And I click on "report-overlay-toggle" "link"
    And I click on "report_jouleexceptionforumposts" "link"
    And I click on "//input[@type='checkbox' and @id='id_date_range_sc']" "xpath_element"
    And I click on "Generate report" "button"
    And I wait "60" seconds
    And I should see "Nothing to display"
    And I log out
