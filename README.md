# Bug_Book_Repo
An app that will allow you to post your bugs and then allow the testers in a community to ease the process of bug posting. This app takes on a role of miniaturization of the bug posting concept to the android level.

This app uses API level 19, through servlet POST method all the values that you post will get stored in a database which can be viewed with the URL:http://bmsceieee.com/lab/BugBookScripts/show.php.

The heart of the app lies in the Post Activity where you can type in the description, functionality and choose the severity from a spinner with three preset values: low, medium and high. 

On clicking the post button, the values get converted into JSON format and is accepted by the database through a PHP script. The entire bug gets posted with a tag MESSAGE and each value in it(comprised of description, functionality and severity) gets segregated into its columns with the help of the PHP script.
