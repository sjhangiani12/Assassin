<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('kunaals.github.io/SeniorAssassin');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('kunaal@live.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'',
                      /*password*/'',
                      /*database name*/'StudentDirectory',
                      /*table name*/'Student');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('HI1brsLTvwulQfO');

?>