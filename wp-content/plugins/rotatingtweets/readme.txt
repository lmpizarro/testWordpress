=== Rotating Tweets (Twitter widget and shortcode) ===
Contributors: mpntod
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9XCNM4QSVHYT8
Tags: shortcode,widget,twitter,rotating,rotate,rotator,tweet,tweets,animation,jquery,jquery cycle,cycle,multilingual,responsive
Requires at least: 2.6
Tested up to: 3.5.1
Stable tag: 1.4.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Twitter widget and shortcode to show your latest tweets one at a time an animated rotation

== Description ==
* **Replaces a [shortcode](http://codex.wordpress.org/Shortcode) such as `[rotatingtweets screen_name='your_twitter']`, or a [widget](http://codex.wordpress.org/WordPress_Widgets), with a rotating display of your most recent tweets**
* **Supports v 1.1 of the Twitter API** - yes! it will keep working after [May 2013](https://dev.twitter.com/calendar)
* **Space efficient** - instead of showing all your tweets at once, shows one at a time and then smoothly replaces it with the next one. After showing all your tweets, loops back to the beginning again.
* **Reliable** - keeps showing your latest Tweets even if the Twitter website is down.
* **Customisable** - you decide whose tweets to show, how many to show, whether to include retweets and replies, and whether to show a follow button. You can also decide how quickly the tweets rotate and what type of animation to use.
* **Responsive** - resizes as your page resizes
* Gives you the option to show a fully customisable Twitter 'follow' button
* Replaces [t.co](http://t.co) links with the original link
* Caches the most recent data from Twitter to avoid problems with rate limiting
* Uses [jQuery](http://jquery.com/) and [jQuery.Cycle](http://jquery.malsup.com/cycle/) to produce a nice smooth result.
* **Multi-lingual** - now set up to be multi-lingual. The Twitter 'follow' button is automatically translated to match your site's language setting [if Twitter has made the appropriate language available](https://dev.twitter.com/docs/api/1.1/get/help/languages). Also uses [Wordpress's multi-lingual capability](http://codex.wordpress.org/I18n_for_WordPress_Developers) to enable translation of all the other text used by the plug-in via language packs.

Currently the following languages are available:

* US English *(complete)*
* British English *(complete - mainly changing 'favorite' to 'favourite'!)*
* German *(basic tweet display only)*
* Spanish *(basic tweet display only)*
* Italian *(basic tweet display only)*
* Dutch *(basic tweet display only)*
* French *(almost complete - many thanks to [Alexandre Trudel](http://wordpress.org/support/profile/alexandretrudel) for his help on this)*

If you have made the plug-in work in your language, please send the translations you'd like to see or, even better, the relevant [gettext PO and MO files](http://codex.wordpress.org/I18n_for_WordPress_Developers) to [me](http://www.martintod.org.uk/contact-martin/) and I will then share them with everyone else. You can download [the latest POT file](http://plugins.svn.wordpress.org/rotatingtweets/trunk/languages/rotatingtweets.pot), and [PO files in each language](http://plugins.svn.wordpress.org/rotatingtweets/trunk/languages/) from this site. You may find [Poedit](http://www.poedit.net/) rather useful for translation and creation of PO and MO files - although the PO files themselves are quite simple text files and can be edited in Notepad or [Notepad++](http://notepad-plus-plus.org/).

If you'd like to see what the plug-in looks like in action, you can [see the plug-in working here](http://www.martintod.org.uk/2012/05/29/new-twitter-plugin-to-show-tweets-in-rotation/).

== Installation ==
= Installation =
1. Upload the contents of `rotatingtweets.zip` to the `/wp-content/plugins/` directory or use the Wordpress installer
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to the [My applications page](https://dev.twitter.com/apps) on the Twitter website to set up your website as a new Twitter 'application'. You may need to log-in using your Twitter user name and password.
1. If you don't already have a suitable 'application' to use for your website, set one up on the [Create an Application page](https://dev.twitter.com/apps/new). It's normally best to use the name, description and website URL of the website where you plan to use Rotating Tweets. You don't need a Callback URL.
1. After clicking **Create your Twitter application**, on the following page, click on **Create my access token**.
1. Copy the **Consumer key**, **Consumer secret**, **Access token** and **Access token secret** from your Twitter application page into the Rotating Tweets settings page. Hit save. If there is a problem, you will see an error message.
1. Place a shortcode such `[rotatingtweets screen_name='mpntod']` in your post or page, or use a widget

= Set-up =
Options include:

1. Going to the Widgets menu on the admin page and adding the Rotating Tweets widget. Options include the name of the Twitter account to show, whether to show retweets and the speed of rotation.
1. Using the basic Rotating Tweets shortcode, for example `[rotatingtweets screen_name='mpntod']`
1. Using a more complicated Rotating Tweets shortcode, for example `[rotatingtweets screen_name='mpntod' include_rts='1' tweet_count='7' timeout='3000']`

= Shortcode variables =
Possible variables for the shortcode include:

* **Required settings** - at least one of the following three settings is required for the short-code to function:
	* `screen_name` = Twitter user name
	* `url` = Twitter user URL. If `screen_name` is empty and this link is valid, `screen_name` will be set to the user name included in `url`
	* `search` = a term to search for
* **Twitter options**
	* `include_rts` = `'0'` or `'1'` - include retweets - optional - default is `'0'`
	* `exclude_replies` = `'0'` or `'1'` - exclude replies - optional - default is `'0'`
	* `tweet_count` = number of tweets to show - optional - default is `5`
	* `get_favorites` = `'0'` or `'1'` - show someone's favorites rather than their timeline - default is `'0'`
	* `list` = `'list-slug'` - the 'slug' used by someone's list (something like `my-list`)
* **Display options**
	* `official_format` = `'1'` or `'2'` - show official format - optional - default is `'0'`
	* `timeout` = time that each tweet is shown in milliseconds - optional - default is `'4000'` (i.e. 4 seconds)
	* `links_in_new_window` = `'0'` or `'1'` - show links in a new tab or window - default is `'0'`
	* `rotation_type` = any of the options listed on the [jQuery.cycle website](http://jquery.malsup.com/cycle/browser.html) - default is `'scrollUp'`
	* `url_length` = sets the length that the URL should be trimmed to...
	* `show_meta_timestamp` = `'0'` or `'1'` - show the time and date of each tweet - optional - default is `'1'`
	* `show_meta_screen_name` = `'0'` or `'1'` - show who posted each tweet - optional - default is `'1'`
	* `show_meta_via` = `'0'` or `'1'` - show how each tweet was posted - optional - default is `'1'`
	* `show_meta_reply_retweet_favorite` = `'0'` or `'1'` - show 'reply', 'retweet' and 'favorite' buttons - optional - default is `'0'`
	* `no_rotate` = `'0'` or `'1'` - switch off rotation - default is `'0'`
	* `show_meta_prev_next` = `'0'` or `'1'` - show 'next', 'prev' links - optional - default is `'0'`
		* `prev` = content for the prev button (default `'prev'`)
		* `next` = content for the next button (default `'next'`)
		* `middot` = content for the space between the buttons (default `' &amp;middot; '`)
		* `np_pos` = position for 'next' and 'prev' buttons - `'top'` or `'bottom'` (default `'top'`)
* **Twitter follow button**
	* `show_follow` = `'0'` or `'1'` - show follow button - optional - default is `'0'`
	* `no_show_count` = `'0'` or `'1'` - remove the follower count from the Twitter follow button - optional - default is `'0'`
	* `no_show_screen_name` = `'0'` or `'1'` - remove the screen name from the Twitter follow button - optional - default is `'0'`

== Credits ==
Most of this is my own work, but special thanks are owed to:

* The [jQuery](http://jquery.com/) team
* [Mike Alsup](http://jquery.malsup.com/cycle/) for [jQuery.Cycle](http://jquery.malsup.com/cycle/)
* [Syd Lawrence](http://sydlawrence.com/) for introducing me to jQuery and jQuery.Cycle
* [Abraham Williams](http://abrah.am) for [TwitterOAuth](https://github.com/abraham/twitteroauth)
* [Liam Gaddy](http://profiles.wordpress.org/lgladdy/) at [Storm Consultancy](http://www.stormconsultancy.co.uk/) for [his work](http://www.stormconsultancy.co.uk/blog/development/tools-plugins/oauth-twitter-feed-for-developers-library-and-wordpress-plugin/) on [oAuth Twitter Feed for Developers](http://wordpress.org/extend/plugins/oauth-twitter-feed-for-developers/) (although I ended up using it for inspiration rather than plugging it in directly).
* All the people who have given advice and suggested improvements

== Frequently Asked Questions ==
= How often does the plug-in call Twitter =
In most cases, each use (or "instance") of this plug-in gets data from Twitter every 2 minutes. The exception is when two or more instances share the same settings (screen name etc.), in which case they share the same data rather than each calling it separately.

= How can I pull information from two accounts into one widget =
The easiest way is to use a search term like `'from:account1 OR from:account2'`.

= My widget is too wide! =
Try putting:
`
div.widget_rotatingtweets_widget, div.rotatingtweet, div.widget_rotatingtweets_widget div.widget-title {
	max-width: 123px;
}
`
into your CSS - changing `123px;` to the width you're aiming at - either via putting `rotatingtweets.css` into `wp-content/uploads` or by editing your own template files.

= How can I add a Twitter bird to the left of my tweets? =
You can do this by going to the `rotatingtweets/css` directory and renaming `rotatingtweets-sample.css` to `rotatingtweets.css` and putting it in the `wp-content/uploads/` directory.  This displays a Twitter bird to the left of your tweets.  Any CSS you put into `rotatingtweets.css` won't be overwritten when the plug-in is upgraded to the latest version.

= The Rotating Tweets are not rotating. What can I do? =
This normally happens if there is more than one copy of `jQuery` installed on a page - or more than one copy of `jQuery.cycle`.

To see if this is the case, search the HTML on your website to see if either script is called more than once.  To do this:

1. Open the page.
1. Right click and select 'View Page Source' or 'View Source'
1. Hit `[CTRL]+F` and search for `jquery`
1. Look out for lines that contain `jquery.min.js` or `jquery.cycle.all.min.js`.  Neither script should appear more than once.

The problem is that the second (or third) copy of the script overwrites all previous versions and the scripts that go with them.  This is particularly likely to happen with old templates or plug-ins.

If this is the case:

1. Check is that you have upgraded your template or your plug-in to the latest version.
1. If this still doesn't work, please let me know which plug-in or template is causing the problem and I'll see if I can build a fix into the next version of Rotating Tweets.

If there is only one copy of `jquery` and of `jquery.cycle` on your page, the best way to look for the problem is to open the 'console'. To do this:

1. Press `[F12]` (in Chrome or IE) or `[CTRL]+[SHIFT]+K` (in Firefox)
1. Load the page where you have a problem
1. In Chrome or IE, select the tab marked 'console'.
1. Read the diagnostics and look for any problems that relate to JavaScript. This will normally tell you which JavaScript (if any) is having problems.

= What can I do if I get the WordPress error code: `http_request_failed - name lookup timed out`? =

Try installing the [Core Control plug-in](http://wordpress.org/extend/plugins/core-control/) and disabling cURL. You can read more about the problem via [this support page](http://wordpress.org/support/topic/wp-351-wordpress-error-code-http_request_failed-name-lookup-timed-out).

Thank you to [darkiko](http://wordpress.org/support/profile/darkiko) for sharing their solution to this problem.

== Upgrade notice ==
= 1.4.5 =
* Deletes old cache entries if unused for more than 30 days
* Fixes a jQuery cycle clash with the [Oxygen theme](http://wordpress.org/extend/themes/oxygen/).

= 0.700 (1.3.0) =
* Upgrade needed for Rotating Tweets to keep working after May 2013. Supports version 1.1 of the Twitter API.

== Changelog ==
= 1.4.5 =
* Deletes old cache entries if unused for more than 30 days
* Fixes a jQuery cycle clash with the [Oxygen theme](http://wordpress.org/extend/themes/oxygen/).
* Added `readme.txt` instructions for dealing with the WordPress error code: `http_request_failed - name lookup timed out`.

= 1.4.4 =
* Adds an option to switch off verification of SSL connections to Twitter
* Adds a short code option (`no_rotate`) to switch off rotation

= 1.4.3 =
* Removes two lines of CSS causing formatting problems
* Improves responsiveness going from narrow to wider layouts

= 1.4.2 =
* Corrected minor error with resizing of `.rtw_meta` div

= 1.4.1 =
* Now works with responsive formats
* Adjusted width overflow issues
* Added [instructions on how to deal with width issues](http://wordpress.org/extend/plugins/rotatingtweets/faq/)

= 1.4.0 =
* Support for search, favorites and lists via Rotating Tweets widgets.

= 1.3.18 =
* Improved and clearer error messages. 
* Removed search bug. 
* 'Next' and 'Prev' buttons for shortcodes. 

= 1.3.17 =
* Adds the opportunity to show lists. 
* Tackles a very odd box height problem that has just appeared in Chrome (but not Firefox or IE).

= 1.3.16 =
* Making sure hashtags have a space or the start of a line before them. 
* Tidying up errors found when running plug-in with `wp_debug` set to `true`

= 1.3.15 =
* Minor correction to hashtag code

= 1.3.14 =
* Fixes accents in hashtags (hopefully). 
* Adds beta of search to the shortcode API. 
* Adds new format of Tweet display.

= 1.3.13 =
* Strips `@` from screen names to avoid API problems.

= 1.3.12 =
* Removes accents from screen names (and otherwise cleans them up). 
* Add test option (currently for shortcodes only) to access favorites. 
* Solves clash between PECL OAuth library and the Rotating Tweets OAuth library.

= 1.3.11 =
* Supports cyrillic hashtags!

= 1.3.10 =
* Fixed hashtag links

= 1.3.9 =
* Moved to [Semantic Versioning](http://semver.org/)

= 0.712 (1.3.8) =
* Fixed bug with `console.log` javascript on IE.

= 0.711 (1.3.7) =
* Fixed up a significant problem with cacheing.

= 0.709 (1.3.6) =
* Tidying up error reporting.

= 0.707 (1.3.5) =
* Fixes major bug resulting from upgrade to handle Twitter API v 1.1

= 0.706 (1.3.4) =
* Change to JavaScript to improve width handling for tweets.

= 0.703 (1.3.3) =
* Minor code tidying to improve debugging and increase speed!

= 0.702 (1.3.2) =
* Adjustment to javascript and CSS to cope with long links or long words

= 0.701 (1.3.1) =
* Very minor mistake in rendering code

= 0.700 (1.3.0) =
* Important upgrade needed for Rotating Tweets to keep working after March 2013. Supports version 1.1 of the Twitter API.

= 0.625 (1.2.4) =
* Enabled users to make all links open in a new tab or window

= 0.623 (1.2.3) =
* Fixed a problem where a short name fitted inside a long one - e.g. @rotary and @rotarycrocus

= 0.622 (1.2.2) =
* Escaped title tags

= 0.621 (1.2.1) =
* Fixed timezone problem.

= 0.620 (1.2.0) =
* Added option to show links in a new window
* Fix problem with selection of 20 second rotating speed.

= 0.613 (1.1.6) =
* Fixed instructions in plug-ins list.

= 0.612 (1.1.5) =
* Fixed error message caused by last fix causing tweets to repeat.

= 0.611 (1.1.4) =
* Finally ran with debug and removed all the error messages.

= 0.610 (1.1.3) =
* Starts to add options to allow for different length URLs

= 0.602 (1.1.2) =
* Fixes bug with Javascript

= 0.601 (1.1.1) =
* Fixes problem with stylesheet

= 0.600 (1.1.0) =
*Now includes options consistent with Twitter display options
* Tidied up code.

= 0.505 (1.0.0) =
* Minimised Javascript. 
* Set-up for I18n.

= 0.502 (0.4.1) =
* Javascript fix for zero height tweets problem

= 0.500 (0.4.0) =
* Adds options for how tweet information is displayed and how the tweet rotates.

= 0.492 (0.3.1) =
* Solves `Cannot use string offset as an array` error on line 232

= 0.491 (0.3.0) =
* Lets you customise the Twitter 'follow' button. 
* Fixes problem with media links. 
* Sorts problem of overlong links reshaping widgets.

= 0.48 (0.2.6) =
* More detailed error messages for Wordpress installations unable to access Twitter.
* Fixes problem on the zeeBizzCard template and sets up fix for other templates that use their own install of the `jquery-cycle` javascript.

= 0.471 (0.2.5) = 
* Making sure that cache never gets overwritten unless new, valid twitter data has been downloaded.
* Dealing with the problem that someone in a long conversation may not get enough valid tweets to show by asking for only 20 tweets from Twitter.

= 0.46 (0.2.4) = 
* Properly handles rate-limiting by Twitter

= 0.44 (0.2.3) = 
* Removes follow button if Twitter has returned an empty value

= 0.43 (0.2.2) = 
* Improved error checking if Twitter has returned an empty value

= 0.42 (0.2.1) =
* Fixed major bug causing crashes when Twitter goes down

= 0.40 (0.2.0) =
* Added ability to alter speed of rotation

= 0.30 (0.1.8) =
* Fixes bug - problem with `get_object_vars()` on line 193

= 0.29 (0.1.7) =
* Better handling of retweets. No longer cuts off the end of the text on longer RTs.

= 0.28 (0.1.6) =
* Properly fixes flaw in how flags are handled.

= 0.27 (0.1.5) =
* Fixed flaw in how flags are handled.

= 0.26 (0.1.4) =
* Stops display and cacheing of non-existent twitter feeds

= 0.25 (0.1.3) =
* Stops display and cacheing of faulty twitter feeds

= 0.21 (0.1.2) =
* Replaced a missing `</div>` in the follow-button code (with thanks to [jacobp](http://wordpress.org/support/profile/jacobp) for spotting it and suggesting a fix)

= 0.2 (0.1.1) =
* Fixed a problem with cacheing

= 0.1 (0.1.0) =
* First published version

== Screenshots ==
1. This animation shows rotating tweets inserted into a blog-post via a short code. It is slightly faster than the default setting, but gives a sense of what you get.
2. You can add rotating tweets via a Widget:
3. Or by using a shortcode:
