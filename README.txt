# MyBB-GoMobile 1.4
--------------------
MyBB GoMobile free mobile solution for MyBB Forums



GENERAL INFO
______________________________________________________________________
It is My latest version of MyBB Gomobile which is forked by Orginal myBB
Gomobile by Jason liehr on Github. I modified it and its theme to be best
work on mybb 1.8X. What is fixed in this plugin?
Switching versions is now working
New Redesign with bootstrap
Added Font awesome icons in theme
Added a custom 404 error page
Quote system is fully working
Registration and login bugs are fixed
and finding other bugs which i ll fixed as soon they ll identified, help
us in the development of myBB Gomobile by testing it, telling us bugs.
______________________________________________________________________




Read ME
-----------------
- This product is licensed under the GNU/GPL v3 license, meaning you are
  free to do anything within the scope of the license. Within this package,
  you should find a copy of the license titled 'License.txt'.
- This version is intended for use with MyBB 1.8.X. You will not receive
  support if you are not running at least this version, as things are likely
  to break.



DEMO
--------
- You can find the working demo of this plugin at http://mybbgm.0demo.gq
- If you have best and working demo of this plugin feel free to add it on
  this list of github readme.txt
- Users are free to create their own demos with this plugin



WARNINGS: PLEASE READ BEFORE INSTALLING
---------------------------------------
- Before installing, please make a backup of your database and forum. This
  version implements some new installation features to reduce conflicts and
  has not been thoroughly tested, therefore caution should be exercised.



UPGRADING
---------
You must follow these steps to avoid any annoying issues from occuring.
- 1. Uninstall your current version of GoMobile completely (delete the theme
     as well), BEFORE uploading the new files. Each beta has it's own set of
     install/uninstall instructions, thus trying to uninstall one beta using
     another set of instructions will lead to errors about missing tables
     and such.
- 2. Delete all old GoMobile files to reduce clutter (optional, mainly just
     the images/mobile folder)
- 3. Upload the new files, overwriting any old ones
- 4. Install & Activate the new version



INSTALLATION
------------
- 1. Upload the contents of the "Upload" folder to the root of your forums,
     keeping the folder structure intact.
- 2. Visit your ACP > Configuration > Plugins sections and hit 'Install &
     Activate' for MyBB GoMobile



SUPPORT
-------
- If you require support with this release of MyBB GoMobile, the best place to
  get it is at http://forums.techvsnewb.com
- Besides getting support for GoMobile, you can also report bugs and get the
  latest updates
- The "cutting edge" version of GoMobile, which may contain bugs, can be found
  on GitHub (to use, click the small gray "ZIP" button near the top of the page)
  : https://github.com/Scoutie44/MyBB-GoMobile
-- Please be cautious when using any versions found on GitHub, since they are
   likely NOT thoroughly tested and may contain bugs


OTHER NOTES
-----------
- If you wish to limit GoMobile to certain usergroups, enable the corresponding
  setting in the GoMobile settings page and then set theme permissions as you
  would for any other theme
- You can use any combination of HTML/Text/Images in the "Mobile Board Name"
  field of the MyBBGM settings, although text-only is recommended for compatibility,
  speed and simplicity
- The "Theme ID" field of the MyBBGM settings area should have been filled
  automatically during installation; if it is not, visit the Templates & Style
  section of your Admin CP, and hover your mouse over the "MyBB GoMobile" theme.
  You will notice a number at the end of the URL, such as "tid=19"; this is the
  number (19) that you type into the Theme ID field



WORKING 404
-----------
- First login to you admin panel then head over to themes and templates open
  templates for your default theme as we already added 404 to our mobile theme
- Create a new template with name "404"without quotes(") and paste the following
  code(available below) into it and save it.
____________________________________________
404 CODE TO BE PASTE
____________________________________________

<head>
<title>Oops! content not found</title>
{$headerinclude}
</head>
<body>
{$header}
<center><h1>Oops! The content you are looking for is not available<br />
	Please Inform Website Administrator If you getting this error all over the site<br />
	<a href="javascript:history.back()">Go Back To your previous page</a></h1></center>
{$footer}
</body>
</html>

____________________________________________
END HERE
____________________________________________

- Thats all you need to do for a working 404 error page on default or every theme
  of your forum/forums.




Thanks for using GoMobile!
