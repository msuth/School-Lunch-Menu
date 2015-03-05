# School-Lunch-Menu

This is a project for my daughter's school website. I have a hard coded
version similar to this on the existing website but it involves a lot of
manual updating each week.

The school has a 4 weekly cycle for the lunch menu so has a total of 20
days.
The next starting date for week 1 is 2015-03-16
I would like to display at a glance the meal for today/tomorrow and the
current lunch week.
I have given each of the 20 days their first Date and intend to repeat
their display every 28 days.

I wrote the Initial-Notes.txt in my bed at 5am as I couldn't sleep.

I've spent a solid 12 hours working on this tonight.

<h3>Things I've done:</h3>
<ol>
	<li>Came up with the database
		<ol>
			<li>Ended up having to add a column called ID as I couldn't extract individual records on the includes/week-X-mobile-X.php files</li>
		</ol>
	</li>
	<li>Downloaded a free theme to get under way with this project (http://htmlcoder.me/)</li>
	<li>Laid out the home page and figured out how to have different views depending on whether the user is on a pc/phone.</li>
	<li>Managed to extract all info from the DB into 4 individual tables. </li>
	<li>Tables were fine on PC/Tablet but didn't work on a Phone as they contained too much data.
		<ol>
			<li>Decided to use accordion panels when viewing on phone.</li>
		</ol>
	</li>
	<li>Ran into problems when using multiple accordions on single page. Each accordion needs a unique 'id','data-parent' and 'href' (prefixed all with WeekX)</li>
</ol>

<h3>Still to do:</h3>
<ol>
	<li>Need to figure out a way to display today's menu in the specified initial page section. (drafts can be seen in includes/date.php</li>
	<li>Between 00.00 and 15.59 it should display the meals for that day. Between 16.00 and 23.59 it should display the meals for the next day.</li>
	<li>On Saturday and Sunday, I want to display "School Closed" and the following Monday's menu (If $today = Sat OR Sun AND Week = 1 then echo $Main1 for Day=Mon and Week=2 etc.)</li>
</ol>