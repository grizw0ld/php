 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 7 No Soup for you!</title>
 </head>
 <body>
 <h1>Books and Chapters</h1>
 <?php //script 7.4 books.php
    $phpvqs = array(
     1 =>'Getting Started with PHP',
     'Variables',
     'HTML forms and PHP',
     'Using Numbers');
     
     $phpadv = array (
     1 => 'Advanced PHP Techniques',
     'Developing Web Applications',
     'Advanced Databse Concepts',
     'Security Techniques');
     
     $phpmysql = array (
     1 => 'Introduction to PHP',
     'Programming with PHP',
     'Creating Dynamic Web Sites',
     'Introduction to MySQL');
     
     $books = array (
     'PHP VQS' => $phpvqs,
     'PHP Advanced VQP' => $phpadv,
     'PHP and MySQL VQP' => $phpmysql);
     
     print "<p>The third chapter of my first book is
     <i>{$books['PHP VQS'][3]}</i></p>";
     
     print "<p>The first chapter of my second book is
     <i>{$books['PHP Advanced VQP'][1]}</i></p>";
     
     print "<p>The fourth chapter of my fourth book is
     <i>{$books['PHP and MySQL VQP'][4]}</i></p>";
     
     foreach ($books as $title => $chapter){
        print "<p><b>Title: $title</b></p>\n";
            foreach ($chapter as $number => $chapter ){
                print "<p>Chapter $number: $chapter</p>\n";
            }
     }
 

 ?>
 </body>
 </html>
