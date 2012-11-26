vt-phplist-integration - SQL
============================

This folder includes SQL used to reverse-engineer the functionality of both applications, and one file used to build a bridge between the two. A disadvantage of this approach is that if the database schema for either of the 2 apps cvhanges, this code will most likely break.

However, due to time constraints, that is the best possible approach for now.

* process_sql (reverse-engineering tests for both Vtiger and PHPList)
* jointable.sql (MySQL import file for the 2 tables needed to bridge Vtiger and PHPList together.)