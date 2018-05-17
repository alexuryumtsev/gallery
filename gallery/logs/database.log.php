<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2017 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.46
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/logs/log_header.inc.php $
  $Revision: 8873 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

?>May 17, 2018 at 05:56 AM - While executing query 'SELECT DISTINCT c.cid, c.rgt, c.name FROM cop_albums AS a RIGHT JOIN cop_categories AS c ON a.category = c.cid WHERE c.cid = 1 OR a.owner = 1 OR uploads = "YES" ORDER BY lft' in include/functions.inc.php on line 6034 the following error was encountered: 
Expression #1 of ORDER BY clause is not in SELECT list, references column 'symfony.c.lft' which is not in SELECT list; this is incompatible with DISTINCT
---
May 17, 2018 at 05:56 AM - While executing query 'SELECT DISTINCT c.cid, c.rgt, c.name FROM cop_albums AS a RIGHT JOIN cop_categories AS c ON a.category = c.cid WHERE c.cid = 1 OR a.owner = 1 OR uploads = "YES" ORDER BY lft' in include/functions.inc.php on line 6034 the following error was encountered: 
Expression #1 of ORDER BY clause is not in SELECT list, references column 'symfony.c.lft' which is not in SELECT list; this is incompatible with DISTINCT
---
May 17, 2018 at 05:56 AM - While executing query 'SELECT DISTINCT c.cid, c.rgt, c.name FROM cop_albums AS a RIGHT JOIN cop_categories AS c ON a.category = c.cid WHERE c.cid = 1 OR a.owner = 1 OR uploads = "YES" ORDER BY lft' in include/functions.inc.php on line 6034 the following error was encountered: 
Expression #1 of ORDER BY clause is not in SELECT list, references column 'symfony.c.lft' which is not in SELECT list; this is incompatible with DISTINCT
---
May 17, 2018 at 05:56 AM - While executing query 'SELECT DISTINCT c.cid, c.rgt, c.name FROM cop_albums AS a RIGHT JOIN cop_categories AS c ON a.category = c.cid WHERE c.cid = 1 OR a.owner = 1 OR uploads = "YES" ORDER BY lft' in include/functions.inc.php on line 6034 the following error was encountered: 
Expression #1 of ORDER BY clause is not in SELECT list, references column 'symfony.c.lft' which is not in SELECT list; this is incompatible with DISTINCT
---
May 17, 2018 at 06:03 AM - While executing query 'SELECT DISTINCT c.cid, c.rgt, c.name FROM cop_albums AS a RIGHT JOIN cop_categories AS c ON a.category = c.cid WHERE c.cid = 1 OR a.owner = 1 OR uploads = "YES" ORDER BY lft' in include/functions.inc.php on line 6034 the following error was encountered: 
Expression #1 of ORDER BY clause is not in SELECT list, references column 'symfony.c.lft' which is not in SELECT list; this is incompatible with DISTINCT
---
