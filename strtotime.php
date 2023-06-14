<?php
strtotime('first day of last month'); 
strtotime('last day of last month'); 
strtotime('first of last week'); 
strtotime('first of this week'); 
strtotime('this week midnight'); // returns Monday midnight of this week 
strtotime('last week midnight'); // returns Monday midnight of last week 
strtotime('last week Sunday midnight'); // returns Sunday midnight of this week 
strtotime('-2 weeks Sunday midnight'); // returns Sunday midnight of last week 

date_default_timezone_set('Asia/Shanghai'); 
$first_day_of_month = date('Y-m',time()) . '-01 00:00:01'; 
$t = strtotime($first_day_of_month); 
print_r(array( 
 
date('Y年m月',$t), 
date('Y年m月',strtotime('- 1 month',$t)), 
date('Y年m月',strtotime('- 2 month',$t)), 
