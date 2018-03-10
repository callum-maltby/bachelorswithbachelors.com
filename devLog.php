<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Development Log</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">

	</script>
</head>

<script type="text/javascript" src="jquery.js"></script>

<body>
<div id="menuBackground">
    <div id="menuContainer">           
		<ul id="menu">
			<li><a href="/">Home</a></li>
			<li><a href="becomeBachelor.php">Become a Bachelor</a></li>
			<li><a href="404page.php">Testimonials</a></li>
			<li><a href="merchandise.php">Merchandise</a></li>
			<li><a href="devLog.php">Development Log</a></li>
        </ul>
	</input>
    </div>
 </div>
 
 
 <div id="leadingText">
	<h1> Website Development Log </h1>
	<p> This website is something I've thought about and ignored for a long time. I'm the sort of person who finds this concept really funny, so I'm planning on using that enthusiasm to spur me on to learn how to design websites. This testbench can (if desired) require a whole range of new skills, including dynamic design, mySQL, PHP and Javascript in addition to the html itself. </p>
	<p> I hope to regularly log my progress, not only to clear things up for myself and to provide a record, but perhaps to help somebody else in the same position as me [read: somebody making a weird dating website after-hours]. Note that I'm coming at all this stuff fresh, so please don't take any of this as gospel. </p>
	<p> I want to make it abundantly clear to everyone that I'm doing this for a laugh. This idea just grew out of a terrible pun, and I'm using it to learn how to make a rubbish website.  </p>
	<p> Anyway, hope you have a great day, Cal.  </p>
	<div id="clear"></div>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Features to Implement</h2>
	<p class="devLogDate">Updated 25/9/17</p>
	<div id="clear"></div>

	<p> There is a lot of work to get this thing up and running: </p>
	
	<ul class="featureList">
		<li class="tick"> Start a development log</li>
		<li class="tick"> Fade in monologue with jquery </li>
		<li class="tick"> Setup Git, no matter how much I don't want to  </li>
		<li> Complete/improve the layout for each bachelor's "card" </li>
		<li> Add small heart at lower right, hover and click change this to red. See below. Style pulled from https://dribbble.com/shots/1454695-Etiolate-Tumblr-Theme/attachments/215438  </li>
		<li> Buttons to show/hide profiles and increment some rank metric  </li>
		<li class="tick"> Think about how contact can be established. Perhaps a PASS/FAIL button can increase card size to include contact details. belay  </li>
		<li class="tick"> Remove the horizontal offset in the monologue, and vertically centre it. Centre the header links for equal spacing too  </li>
		<li class="tick"> Set up mySQL database  </li>
		<li class="tick"> Allow form submission into this database  </li>
		<li class="tick"> Fill container elements via php get requests  </li>
		<li> Dynamic rearranging/resizing for mobiles, two cards wide on PC  </li>
		<li> Secure side for me to delete profiles, and perhaps and ESP8266-based piece of hardware to take down the site as a party-piece  </li>
		<li> Fix rotating of phone camera images, and consider resizing for loading speed </li>
		<li> Avoid duplicating image names, perhaps append username on  </li>
		<li class="tick"> Add a store link in banner </li>
		<li> Remove slight gap at bottom of bachelor card </li>
		<li> Rank and remove empty profiles </li>
		<li> Fix no-space text overflow in cards, mostly email addresses on the cards where the picture is displayed on left </li>
		<li> Prevent becomeBachelor page from zooming out, might be a matter of using the proforma from other pages as a guide, and otherwise fixing the form. devLog.php does this too now </li>
		<li> Look at https://webdesign.tutsplus.com/articles/making-websites-location-aware-with-html5-geolocation--webdesign-10495 for making search results filter to around the users location. However, this starts getting creepy, if the core concept wasn't odd enough for you</li>
		<li> Improve the image upload button aesthetic in <i>becomeBachelor.php</i></li>
		<li class="cross"> Give up on this pointless venture</li>
	  <!--
		<ul>
		  <li class="cross">fourht</li>
		  <li class="tick">5</li>
		  <li class="cross">6</li>
		</ul> 
	  </li>
	  -->
	  
	</ul>  
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Captchas and Stopping the <del>Boats</del>Spam</h2>
	<p class="devLogDate">11/3/18</p>
	<div id="clear"></div>
	
	<p>For months the bachelor upload feature had been disabled, because Dylan/some spammers were making profiles every half hour advertising viagra and personal loans. My broad brush method for dealing with this was to remove the form action from:</p>
	
	<i> <xmp><form class="signupForm" action="insertBachelor.php" method="post" enctype="multipart/form-data"></xmp> </i>
	
	<p>Obviously, that was a terrible mechanism, since fixing it turned out to be super easy. I just followed the guide provided at https://codeforgeek.com/2014/12/google-recaptcha-tutorial/. I had initially opted for the invisible captcha, but I had issues with my <i>recaptcha_get_html()</i> function not being found, so I opted for the visible captcha instead. As a high level explanation, the <i>becomeBachelor.php</i> page passes the inputs data fields and the recaptcha state to the <i>insertBachelor.php</i> functions which actually places the entry in the database. The mySQL insertion code is simply sitting inside an <i>if</i> statement whose guard is the result of the captcha challenge. One trick not mentioned in the article was the requirement that both the remote domain <i>bachelorswithbachelors.com</i> and my localhost IP needed to be added to the recaptcha list of approved domain to prevent the captcha having a hissy when I was deving locally.</p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">The Umpteenth Sprint</h2>
	<p class="devLogDate">8/3/18</p>
	<div id="clear"></div>
	
	<p>My buddy Joe works in an office that embraces the idea of work sprints: short achieveable tasks that can be completed in a timeframe that is within reach. In that spirit, I would like to: </p>
	
	<ul class="featureList">
		<li> Implement a Captcha and re-enable profile uploads. Timestamp uploaded images</li>
		<li> Fix the Chrome cut-off issue</li>
		<li> Stop some pages from zooming out</li>
		<li> Investigate setting up Amazon link-in store</li>
		<li class="tick"> Make things load faster, but not using massive .jpgs</li>
		<li class="tick""> Set up Git and Github, find a way to not upload my SQL passwords in so doing</li>
	</ul>
	
	<p>As to whether this happens, let's see.</p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Proper Responsive Design</h2>
	<p class="devLogDate">27/9/17</p>
	<div id="clear"></div>
	
	<p>	I finally did it. I'm very proud of myself. As it turns out, making responsively designed webpages is actually alternately pretty fun and amazingly frustrating. I goal was to emulate the visual appeal of a site like https://dribbble.com/shots/1454695-Etiolate-Tumblr-Theme/attachments/215438, but tailored to my specific circumstance.  </p>
	
	<p>	Let's explain a little more in detail. On the home page, information about multiple bachelors is displayed, where each bachelor has their photo and details contained within one <i>card</i>. These cards allow for some really clean looks later on down the track. I would also like the website to be responsive, meaning that it should change depending on the screen resolution of the viewing device, rather than just zoom out. At present, the signup form page doesn't do this, and I suspect that the form is to blame. This is another problem on a long list of problems to fix, although for the time being, when viewed on a phone the background images looks really good. Moving back to discussion of responsive design, I wanted the cards to be able to rearrange themselves depending on the available screen width: on a phone there would be one column, and more columns would appear for larger screens. Importantly, I wanted the horizontal breaks to be staggered, allowing for clean display of different height cards. </p>
	
	<p> To help me achieve this, I downloaded <i>materialise.css</i>, which is a pre-defined style sheet freely available on the web. This is nothing more than a heap of predefined div, input, text, etc types, the exact thing you'd put in your own <i>myStyle.css</i> file. Because it's generic, there are a heap of things you're unlikely to use. I may pull out just the bits that I want, fold these into my own style sheet, and remove the full .css file. The .css comes in a full and compressed form, however I must have made changes to the compressed form, so it works where the uncompressed file doesn't.</p>
	
	<p>I did this incrementally, first downloading sample html code from https://codepen.io/mike-north/pen/MwVoYp for getting responsive design going with their <i>divs</i>. This displayed the cards in one to three columns. I then changed the card class to my bachelorCard, and it still worked. I then copied my full <i>while</i> loop <i>php</i> code into the container, and it worked like a charm, albeit with a little finagling that I can't recall. I had to fix something, but I can't remember what. I added padding to the cards and the container, and here we are.</p>
	
	<p>Now. Some of you may be viewing this site using Chrome. Apparently, 54% of site visits are using Chrome, but that's an aside. You'll notice that the cards exhibit wraparound at the start and end of the full container. This behaviour isn't seen in IE, and I have no idea about other browsers. Apparently, there is a known bug in Chrome, and there seems to be a a workaround where you substitute <i>margin-left</i> in place for <i>transform</i>. But, this may be for dynamic cards. I'll chase this down later on.</p>
	
	<p>Lastly, I put a background image on the <i>body</i> because I though the origami looked nice, and styled it using the following to get the image to be static and fully-covering, while the cards moved independently. I might see if the menu can be static too, but only for larger screens.

	<i> <xmp>
	body {
		background-image: url("images/origami_1.jpg");
		background-attachment: fixed;
		background-size: cover;
		margin:0 auto;
		padding: 0;
		font: 15px Century Gothic; 
		text-align: center;
	}
	</xmp> </i> 
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Changing Database Values</h2>
	<p class="devLogDate">25/9/17</p>
	<div id="clear"></div>
	
	<p>So Jake took advantage of a mate's rates deal to signed his mate Matt up to the service for free. However, upon reflection, he decided that he wanted the email address changed. This placed the site admin in the invidious position of having to learn how to do something for his website. However, silver lining: Jake stopped responding to messages, and provided no clear advice on what he wanted to email address changed to. Naturally, the site admin exercised his questionable judgement, the results of which can be seen on the landing page.</p>
	
	<p>To change elements in the table, the following SQL query should be executed. <i> <xmp>UPDATE `bachelors` SET `email`='finalemail@address.com' WHERE `age`=39</xmp> </i>However, this had to be executed within the phpMyAdmin site, and even then only when the table elements were visible on the right of the screen. Otherwise, I believe, the SQL operations are conducted on the database as a whole, rather than be filtered to just the <i>bachelors</i> table.</p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Welcome Back</h2>
	<p class="devLogDate">25/9/17</p>
	<div id="clear"></div>
	
	<p>	Eagle eyed observers may notice that the website has aesthetically changed very little over the last five months. There is a very simple explanation for this: I have done no dev work <b> at all </b>. I sort of just did other things with my free time. However, this lax attitude is finally coming to a temporary end, because I got a message from a friend today that motivated me to come back and do some dev work. Below is an exhaustive list of my goals for the next few days, before I inevitably get a little tired of this again, and go back to do some hardware dev.</p>
	
	<p>	1. Make the website better</p>
	
	<p>	Specifically, I'd like to add a merch store tab (probably not with actual being-able-to-buy-things functionality, but we'll see), make the front end look cleaner (partially achieved with the rounding), allow two card columns when viewed on a PC, neaten the colour scheme, neaten all my .css nonsense, add some backend for me to be able to execute SQL queries without having to log into phpMyAdmin. </p>
	
	<p>It's now 1am, so I'll attack the dynamic problem tomorrow. I would like the cards to display without padding being required so that all cards start at the same height. This may require sorting them into columns, but I'm not smart enough (now or when sufficiently rested) to know whether a database can be sorted per user. Heaps of better websites are able to achieve this functionality, so it must be possible. I'd also like to have a clean card, better text. Thin pictures on small screens have text continuing below the base of the image, which I'd like to fix. I also want to add (comment out code partially does this, I need to fold it in) a footer for each card with 'date added', and an upvote button that turns red on over-hover, like the menu tabs. Lots to do. Night all </p>
	
	
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Buttons, the bane of my existence</h2>
	<p class="devLogDate">25/4/17</p>
	<div id="clear"></div>

	<p> Today I put in some buttons to allow a user to 'like' of 'dislike' a profile. Disliking was remove those buttons, and decrement a rank metric. Liking a profile would hide the buttons, show the contact details, and increment a rank metric. I started off making the button itself, before I wired it to anything. I pulled some examples from https://tympanus.net/Development/CreativeButtons/, which actually has some pretty sweet designs. I had to be a little sneaky to get to the css though. After a fair amount of rigmalore (induced solely because I'm bad at this) I managed to integrate a dummy button into my index.php fle. Remember, I have to boot Apache and SQL through Xampp because my divs are filled from a local database. When I uploaded this to eHost, the cool styling is gone, and it doesn't perform the Java functions like it did locally. I still don't know what's happened. </p>

	<p>	My buttons execute Java code through <i> <xmp><button class="btn btn-3 btn-right" onclick="showDetails('detailsDiv');">Swipe Right</button></xmp> </i>where the <i>showDetails()</i>function is stored in <i>jquery.js</i>. This just un/shows a particular div. However, another unsolved issue: even locally the changes only apply to the top div. Something I don't understand is happening when I read out values from the database. </p>
	
	<p>	I also put in a piece of SQL code to sort the database in descending order whenever somebody adds a new profile. This is a temporary measure before I write a proper ranking algorithm, incorporating likeability and recentness. Embedding SQL code in php turned out to b fairly easy: <i> <xmp>$sortQuery = "ALTER TABLE bachelors ORDER BY dateTimeAdded DESC"; mysqli_query($link, $sortQuery);</xmp> </i>This makes a string, which is executed via a query into my database. The link argument is a setup parameter to connect into the database. </p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Coming Back to Work</h2>
	<p class="devLogDate">25/4/17</p>
	<div id="clear"></div>

	<p> As astute followers might realise, I haven't done any work on this site for ages. I got it to a point where it was (barely) functional, then the motivation ran out. But, I'm here to fix that. First let me say that it's oddly gratifying to have people actually sign up for this site. I may have just provided another mechanism for cyber-bullying, but at least they're doing it on my site.</p>

	<p>	I've got a long list of things I want to do in this sprint. I want to fix the image rotation that occurs when people take photos directly from their phone. I've read that this is possible, so I'll leave that for now. More importantly, I want to make it more interactive. I want to put in buttons to allow a female browser (like Opera...(http://www.opera.com/) ...great joke Cal) to either approve or disapprove of a bachelor. An approval will display the bachelor's contact details, and increment a rank metric. Disapproval will decrement this metric. Ideally, I'll have the bachelors displayed in order of quality. Now that I'm writing this, that sounds pretty mean, but I'd be good to filter down profiles without image, or that are accidental uploads. Perhaps I can automatically remove profiles without a picture.	</p>
	
	<p>	I'll put up a testimonials page, and perhaps actually put a submission form in their in the future. I will need to do something smarter to ensure that no duplicate image filenames exist: at the moment the system is pretty terrible. I'll also make a 'secure side' for me, where I can downvote profiles to remove them from the main site. That'll probably just remove 10000 points from their rank metric, and I might have a -100 cutoff below which profiles aren't shown. </p>
	
	<p> Anyway, lots to do, so I'll get cracking. </p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Starting Backend Work</h2>
	<p class="devLogDate">31/3/17</p>
	<div id="clear"></div>

	<p> Quick note, the responsive design works on reduced size browsers, but not phones. But, that's a problem for another time, because I've started to get my backend working. Note, this entry is going to be a big one. I installed <i>xampp</i> which bundles together Apache for running the server, mySQL for doing the database, and a bunch of other stuff I'm not using. Now, when I write documents with php in them, or that call .php files, I have to load them through the Apache server. Operationally, this means that instead of loading the /html file straight from a browser, I have to type <i>localhost/index.html</i> to get my php executed through Apache. My <i>xampp</i> was installed at c:/, but I've moved the location of localhost through xampp > Apache > config > Apache httpd.conf then changing DocumentRoot and Directory. I initially was unable to get hyperlinks working from .html  to .php files, so I 'fixed' this by just making everything a .php file.</p>

	<p>	I began by filling a <i>bachelors</i> table within my <i>bachelorswithbachelors</i> database. Note, I may have to add <i>bachelo1_</i> as a suffix to that database name, and use my online user profile details on the local setting to prevent having to change the linking code for databases between local and hosted. The input form calls a .php file which makes a connection to my database table, and generates and fills a new row when the submit button is pressed. However, getting image uploading was more difficult. In the end, the easiest solution appeared to be uploading the image to a separate folder, and making a database element that contains just the file name, although this does introduce the possibility of subsequent uploads overwriting new ones. This isn't an immediate concern, mostly because there are far worse problems with the site, and because I doubt I'll have anywhere near enough users (that aren't me) to make that statistically likely. A likely fix will be hashing the filename, or perhaps doing something tricky like convolving the filename with the upload time. I'm sure that already exists, I just don't know about it.	</p>
	
	<p>	To clear a local database table, navigate to the database level in phpMyAdmin, then empty the table. I had to do that repeatedly, because I continually used a picture of Dyl as a test. Uploading my local database to eHost proved a bit of a trial: in the end I went through the mySQL wizard to make a database, make a password protected user and assign me every privilege. Then, I could upload my database through the import tool. Prior, I was getting a #1046 error. Then, lastly, I had to remember to change the setup line of php, to change the database name to what the online wizard made it. Then, to do a quick system test, I uploaded a profile of Hugh Grant through the hosted website to prove it works. And it does! I'm pretty chuffed, and tired, and chuffed again. </p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Cheating at Responsive Design</h2>
	<p class="devLogDate">24/3/17</p>
	<div id="clear"></div>

	<p> So I realised that the website before now looks rubbish on a mobile phone, which is how most youths nowadays access the internet. Because proper responsive design sounds hard, I decided to cheat a little bit until I'm good enough to do it properly. To do this, in <i>myStyle.css</i> I just set my div widths at a percentage of the screen width, while asserting a max-width equal to the div widths before this edit. This means that horizontal scrolling is no longer required on smaller-screened devices. I've still got to look at making the text size smaller on mobiles, but that's a problem for another time. </p>	
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Upcoming: Front-End Design</h2>
	<p class="devLogDate">16/3/17</p>
	<div id="clear"></div>

	<p> Next, I'll spend some time attempting to make each page responsive. I'd like the menu bar to just be a horizontally contracted version on mobile devices, but the devLog and bachelor cards are fixed width at present. </p>	
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Website Works Nicely Locally but not Online</h2>
	<p class="devLogDate">15/3/17</p>
	<div id="clear"></div>

	<p> Something frustrating happened when I pushed my development log changes online: they looked as designed when the local .html files were viewed in Chrome, but appeared as jibberish when I uploaded them to the website and viewed the live copy. As it turns out, fixing this just requires clearing your cache in Chrome. </p>	
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">JQuery to Fade in Monologue</h2>
	<p class="devLogDate">15/3/17</p>
	<div id="clear"></div>

	<p> Up until now I have had my elevator pitch monologue as a separate series of independent pages that iterate through on a timer. This worked fine, but wasn't ideal. Luckily, JQuery provided the solution I was after. Being new to this, I was a little annoyed to not be instantly amazing at Javascript (js), but I put my functions in <i>jquery.js</i> in the same directory as <i>index.html</i> and linked the js to html via a script tag after the header section. I was able to avoid installing js on my machine by using a version of js hosted (I think) by Google. </p>	
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Front Page Card Layout</h2>
	<p class="devLogDate">14/3/17</p>
	<div id="clear"></div>

	<p> I wanted to get some cards up on the front page to get an idea of how <i>index.html</i> could look. I used grey boxes with internal margins as placeholders, but these sort of grew on me to the point that I'm using that look for individual dev log entries. Note that I'm using the word 'card' to refer to each entire grey box containing all the information about a single bachelor (intended). </p>	
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Responsive Design for Different Devices</h2>
	<p class="devLogDate">1/3/17</p>
	<div id="clear"></div>

	<p> This entry and topic, I'm guessing, will never be completed to my liking. I don't want to get too pessimistic here, but I highly doubt I'm good enough to pull this off. Mostly, people will be looking at this site on their mobiles, so I should be designing the site for that, but I'm lazily going for a desktop version first. I copied some fancy code across a while ago the change my horizontal menu bar into a pressable dropdown menu, but this needs lots of work. </p>

	<p> So, in summary, I'm roughly 0% finished this component. </p>
</div>

<div id="devLogContainer">
	<h2 class="devLogTitle">Hosting and Circumventing cPanel's File Manager</h2>
	<p class="devLogDate">24/1/17</p>
	<div id="clear"></div>

	<p> After talking to friends at work about this, I woke up at 4am on Tuesday morning and decided to buy the domain name for this site. I went with eHost, because it provided the cheapest hosting I could find. Not expecting significant traffic, bandwidth ceilings weren't super important in my decision making process. I opted for a cPanel setup, so I could really get into the nitty-gritty of the design, but I ran up against the annoying method of uploading files to eHost through the cPanel FTP interface. I was able to <a href="https://www.youtube.com/watch?v=y2WaVhAF9TE">circumvent</a> this by setting up a connection through Filezilla > File > Site Manager. This provides a far better drag-and-drop interface that allows, crucially, multiple files to be queued for upload at once. Cannot recommend it enough. </p>	
</div>

 </body>
 </html>

 