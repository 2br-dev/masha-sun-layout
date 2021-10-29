<?php if(time() > 1635494285){return null;} return array (
  'success' => true,
  'message' => '',
  'total' => 0,
  'errors' => 
  array (
  ),
  'object' => 
  array (
    'html' => '<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/NmxFkgEliSY/4106" target="_blank">MODX Revolution 2.8.3 is Now Available for Download</a></h2>
    <span class="content">
            <p>MODX contributors and the integration team are proud to announce MODX Revolution 2.8.3. MODX Revolution 2.8.3 adds additional compatibility for PHP 8 and fixes a number of bugs and security issues.</p>
<p><strong>Note: Sites that use rich text editors such as <em>TinyMCE RTE</em>, <em>TinyMCE Wrapper</em>, and similar will have issues with 2.8.2 related to the <em>media browser</em>. 2.8.3 provides resolution for these issues.</strong></p>
<h2>
<a name="highlights-1" class="anchor" href="https://community.modx.com#highlights-1"></a>Highlights</h2>
<p>You can get a full list of changes by reviewing the <a href="https://github.com/modxcms/revolution/blob/9f34bc936bcfa604d462a3f8b8fa3a36586b4395/core/docs/changelog.txt">changelog</a>, but below are some of the significant revisions in this release.</p>
<h3>
<a name="security-2" class="anchor" href="https://community.modx.com#security-2"></a>Security</h3>
<ul>
<li>XSS issues reported by Solar Security (<span class="hashtag">#15720</span>)</li>
<li>Adjust filtering of placeholders and accessible options for <code>@SELECT</code> (<span class="hashtag">#15714</span>)</li>
<li>Pass auth token to Browser controller config (<span class="hashtag">#15692</span>)</li>
<li>Update to PHPMailer 6.4.1 (<span class="hashtag">#15693</span>)</li>
</ul>
<h3>
<a name="other-changes-3" class="anchor" href="https://community.modx.com#other-changes-3"></a>Other Changes</h3>
<ul>
<li>Patch MagpieRSS for basic use in PHP 8 (<span class="hashtag">#15721</span>)</li>
<li>Avoid setting headers for modStaticResource when returning content (<span class="hashtag">#15715</span>)</li>
<li>Fix incorrect id format (<span class="hashtag">#15709</span>)</li>
<li>Fix filesize() calculation for static resources (<span class="hashtag">#15697</span>)</li>
<li>Return content from non-binary static resources (<span class="hashtag">#15702</span>)</li>
<li>Fix PHP 8 compatibility with phpThumb (<span class="hashtag">#15706</span>)</li>
<li>Fix PHP 8 warnings in modPhpThumb (<span class="hashtag">#15705</span>)</li>
<li>Fix PHPMailer version display (<span class="hashtag">#15704</span>)</li>
<li>PHP 8 compatibility (<span class="hashtag">#15699</span>)</li>
</ul>
<h2>
<a name="security-is-a-habit-4" class="anchor" href="https://community.modx.com#security-is-a-habit-4"></a>Security is a Habit</h2>
<p>Staying up-to-date with new releases is a good habit to keep your MODX-powered websites secure. The security issues addressed in this release are limited to users that have a valid login to access the MODX Manager. A couple of the issues allowed changes or access beyond limited Manager users’ permissions. As such <strong>we recommend you upgrade as soon as possible</strong>.</p>
<h2>
<a name="special-notes-on-upgrading-to-283-5" class="anchor" href="https://community.modx.com#special-notes-on-upgrading-to-283-5"></a>Special Notes on Upgrading to 2.8.3</h2>
<p>Some of the security improvements in 2.8.3 will affect certain site configurations. Read about these changes and how to make any appropriate adjustments when <a href="https://docs.modx.com/current/en/getting-started/maintenance/upgrading/2.8.2">upgrading to 2.8.3</a>.</p>
<h2>
<a name="it-takes-a-village-6" class="anchor" href="https://community.modx.com#it-takes-a-village-6"></a>It Takes a Village…</h2>
<p>The release would not be possible without the attention and effort of our community contributors including wfoojjaec, Jason Coward, Mark Hamstra, MODX Bot, Murray Wood, Ivan Bochkarev Ivan and many more.</p>
<p><a href="https://modx.com/download">Download MODX Revolution 2.8.3</a><br>
<a href="https://modx.com/content-management-framework#hosting">Try it in MODX Cloud</a></p>
            <p><small>1 post - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-revolution-2-8-3-is-now-available-for-download/4106">Read full topic</a></p>
          </span>
    <span class="date_stamp">28.05.2021 22:11:15</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/1d0kcs_btdw/3978" target="_blank">MODX Revolution 2.8.2 is Now Available for Download</a></h2>
    <span class="content">
            <p>MODX contributors and the integration team are proud to announce MODX Revolution 2.8.2. MODX Revolution 2.8.2 adds compatibility for PHP 8 and fixes a number of bugs and security issues.</p>
<p><strong>Note: Sites that use rich text editors such as TinyMCE RTE, TinyMCE Wrapper and similar will have issues with 2.8.2 related to the media browser. We’re integrating a fix and 2.8.3 will be available in the next week.</strong></p>
<h2>
<a name="highlights-1" class="anchor" href="https://community.modx.com#highlights-1"></a>Highlights</h2>
<p>You can get a full list of changes by reviewing the <a href="https://github.com/modxcms/revolution/blob/440488414a73fe16cc6cae31b52c9449ea41e558/core/docs/changelog.txt">changelog</a>, but below are some of the significant revisions in this release.</p>
<h3>
<a name="security-2" class="anchor" href="https://community.modx.com#security-2"></a>Security</h3>
<ul>
<li>Prevent access to sensitive user data [<span class="hashtag">#15678</span>]</li>
<li>Add permissions to enforce access to specific resource types [<span class="hashtag">#15655</span>]</li>
<li>Flatten nested lexicon parameters by dot notation [<span class="hashtag">#15490</span>]</li>
<li>Restrict static resources to predefined path [<span class="hashtag">#15656</span>]</li>
<li>Prevent XSSI access to <code>MODx.config</code> by requiring auth token [<span class="hashtag">#15644</span>]</li>
</ul>
<h3>
<a name="other-changes-3" class="anchor" href="https://community.modx.com#other-changes-3"></a>Other Changes</h3>
<ul>
<li>PHP 8 Compatibility [<span class="hashtag">#15335</span>]</li>
<li>Fix Plugin and Template name validation [<span class="hashtag">#15349</span>]</li>
<li>Support SameSite attribute in session cookies [<span class="hashtag">#15666</span>]</li>
<li>Fix bug with special chars in directory or file names [<span class="hashtag">#15505</span>]</li>
<li>Update PHPMailer to 6.4.0 [<span class="hashtag">#15618</span>]</li>
<li>Update xPDO to version 2.8.3-pl</li>
<li>Update Smarty to 3.1.39 [<span class="hashtag">#15566</span>]</li>
</ul>
<h2>
<a name="security-is-a-habit-4" class="anchor" href="https://community.modx.com#security-is-a-habit-4"></a>Security is a Habit</h2>
<p>Staying up-to-date with new releases is a good habit to keep your MODX-powered websites secure. The security issues addressed in this release are limited to users that have a valid login to access the MODX Manager. A couple of the issues allowed changes or access beyond limited Manager users’ permissions. As such <strong>we recommend you upgrade as soon as possible</strong>.</p>
<h2>
<a name="special-notes-on-upgrading-to-282-5" class="anchor" href="https://community.modx.com#special-notes-on-upgrading-to-282-5"></a>Special Notes on Upgrading to 2.8.2</h2>
<p>Some of the security improvements in 2.8.2 will affect certain site configurations. Read about these changes and how to make any appropriate adjustments when <a href="https://docs.modx.com/current/en/getting-started/maintenance/upgrading/2.8.2">upgrading to 2.8.2</a>.</p>
<h2>
<a name="it-takes-a-village-6" class="anchor" href="https://community.modx.com#it-takes-a-village-6"></a>It Takes a Village…</h2>
<p>The release would not be possible without the attention and effort of our community contributors including Mark Hamstra, Jason Coward, Thomas Jakobi, Bochkarev Ivan, Ivan Klimchuk, Ruslan Aleev, Sergey Shlokov, Raffy, Bruno17, wfoojjaec, and many more.</p>
<p><a href="https://bullpen.modx.com/download/other-versions?releaseKey=revolution-2.8.2-pl">Download MODX Revolution 2.8.2</a><br>
<a href="https://modx.com/content-management-framework#hosting">Try it in MODX Cloud</a></p>
            <p><small>2 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-revolution-2-8-2-is-now-available-for-download/3978">Read full topic</a></p>
          </span>
    <span class="date_stamp">28.04.2021 23:04:27</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/Txx5TmOcv1o/2584" target="_blank">Calling All MODX Developers & Extra Authors (or those that want to be)</a></h2>
    <span class="content">
            <p><strong>Calling All MODX Developers &amp; Extra Authors (or those that want to be)</strong></p>
<p>We’re pleased to announce the first <strong>virtual MODX Meetup</strong> on a subject that’s near and dear to MODX developers and Extra authors: creating packages to install via the MODX Extras Installer and to publish in the <a href="https://modx.com/extras/">MODX Extras Repo</a>.</p>
<p>Brought to you by awesome MODXers at Springbok Agency, this live session is set for <a href="https://time.is/compare/1900_7_May_2020_in_Amsterdam/New_York/Chicago/San_Francisco/Sydney"> <strong>7th May at 19:00 (CEST)</strong> </a>. Joshua Lückers, MODX Core Integrator and Senior Developer at Springbok Agency, will demo a <strong>Step-by-Step Process on How to Create and Package an Extra</strong> (amongst other things). Read <a href="https://modx.amsterdam">more information on the sign-up page</a>.</p>
<p><strong>Registration is required</strong> and attendance is limited to the first 100 to sign up. We look forward to seeing old friends and hope to see new faces as well <img src="https://community.modx.com/images/emoji/apple/grinning.png?v=9" title=":grinning:" class="emoji" alt=":grinning:">.</p>
<p>Access the <strong>sign-up page</strong> at the following URL: <a href="https://modx.amsterdam/"> <strong>https://modx.amsterdam</strong> </a>.</p>
<p><strong>Keep safe and see you soon!</strong></p>
            <p><small>2 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/calling-all-modx-developers-extra-authors-or-those-that-want-to-be/2584">Read full topic</a></p>
          </span>
    <span class="date_stamp">27.04.2020 23:19:13</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/LKJXF8Go7aw/2220" target="_blank">We need your help!</a></h2>
    <span class="content">
            <p>Please share your feedback about MODX in a brief survey that should take about 10 minutes of time—unless you have lots to share.</p>
<p>We hope the survey will accomplish three key things:</p>
<ul>
<li>Help us better describe the benefits of MODX to newcomers or people evaluating it in plain, non-expert language,</li>
<li>Get feedback on key features that are missing or need improvement, and</li>
<li>Understand the types of organizations that currently using MODX and how they do so.</li>
</ul>
<p>We’ll use your responses as we make updates to <a href="http://modx.com">modx.com</a> and spread the word about the creative freedom MODX brings. We’ll also take your product feedback into account for future releases.</p>
<p>Your feedback is really important in helping shape the future of MODX. Thanks in advance for taking a few minutes to share your thoughts.</p>
<p><a href="https://modx-research.typeform.com/to/LGCs20">Complete the Survey Now!</a></p>
            <p><small>2 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/we-need-your-help/2220">Read full topic</a></p>
          </span>
    <span class="date_stamp">06.02.2020 0:33:40</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/DLyj7DguCHw/2200" target="_blank">MODX Revolution 3.0.0-alpha2 Released</a></h2>
    <span class="content">
            <p>We have released the second alpha of MODX Revolution 3.0.0. You can get it from our <a href="https://modx.com/download/prerelease">prerelease download page</a>, or if you have a MODX Cloud account, you can create an alpha2 instance to experiment with. The core team has been focusing on making sure we preserve as much backward compatibility as possible once we get to the beta releases. We appreciate all the input, including testing, bug reports, and pull requests we have gotten during the first alpha cycle.</p>
<p>We look forward to seeing even more community participation as we progress to a final MODX 3 release.</p>
<h2>Highlights</h2>
<p>There are many great bug fixes and enhancements we incorporated since the previous alpha release. More notably, there are a few major changes that we made as a result of working to adapt extras to the new core.</p>
<h3>Improved PSR-4 Support in xPDO</h3>
<p>One significant change in xPDO 3 had to be incorporated to support custom namespaces in extras properly. Before alpha2, if you wanted to use PSR-4 namespaces MODX 3, you could not include the namespace prefix in the package name when using the setPackage or addPackage methods. If multiple packages in extras tried to follow similar conventions, they would end up with the same package name, effectively overwriting the existing package. By allowing the namespace prefix as a parameter to these methods, we can now calculate the path properly while allowing the entire namespace as the package name. Problem solved.</p>
<p>We’ll have updated documentation on this soon.</p>
<h3>Bootstrapping Component Namespaces</h3>
<p>Another problem extras were facing while trying to follow the conventions of the new core was adding custom autoloading logic when they don’t have an xPDO model. After some brainstorming, John Peca and Jason Coward came up with the idea of looking for a bootstrap file for each component namespace. In this way, we can register autoloading and handle other component-specific initialization needs when loading MODX. This approach will effectively replace the need for extension packages and could also reduce the need for service classes.</p>
<p>See the Bootstrapping Services section in the documentation covering <a href="https://docs.modx.com/3.x/en/extending-modx/namespaces">Namespaces</a> for more information.</p>
<h3>Say Hello to Dependency Injection</h3>
<p>Speaking of services, we also added a more capable dependency injection container for alpha2. For those that know what dependency injection is, we have included <a href="https://pimple.symfony.com/">Pimple</a>. This simple but effective DI container from Symfony does everything we need it to do while providing backward compatibility with accessing legacy MODX services as if they are just an array. Jason wrapped it with a simple PSR-11 implementation to meet our needs, and now we can utilize this container throughout the MODX core, as well as in custom xPDO models.</p>
<p>Learn more about using the <a href="https://docs.modx.com/3.x/en/extending-modx/di-container">Dependency Injection Container</a> in the documentation.</p>
<h3>Changes to the way legacy deprecated classes are loaded</h3>
<p>The inclusion of the deprecated class aliases in the composer autoload caused several problems, so we refactored that slightly. Now it loads after the main modX class does, allowing us to make core initialization consistent across the board. Some additional legacy classes were added to the list of aliases, as well.</p>
<h3>Removal of modAction and legacy controller support</h3>
<p>Finally, we removed the long-deprecated modAction model along with legacy manager controller support. Dumping these paved the way to improve the loading of manager controllers overall. You can review the <a href="https://docs.modx.com/3.x/en/extending-modx/custom-manager-pages">Custom Manager Pages</a> documentation to learn more about these changes.</p>
<h2>What’s Next for MODX 3.0.0</h2>
<p>We are planning on just one additional alpha release cycle, and then the focus will be on locking down backward compatibility and features in preparation for a beta. As always, the more testing and other contributions we can get from the community during this process, the faster we can progress. MODX is a robust and flexible project, and, as they say, it takes a village.</p>
            <p><small>2 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-revolution-3-0-0-alpha2-released/2200">Read full topic</a></p>
          </span>
    <span class="date_stamp">31.01.2020 19:34:33</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/_IGmHUpqVmo/1586" target="_blank">MODX Revolution 2.7.2 Released</a></h2>
    <span class="content">
            <p>MODX contributors and the integration team are proud to announce the second patch release of MODX Revolution 2.7. MODX 2.7.2 features many bug fixes to improve the experience of working with all of the new features that 2.7 introduced.</p>
<h2>Highlights</h2>
<p>You can get a full list of changes by reviewing the <a href="https://github.com/modxcms/revolution/blob/2e6c61eeb0802be20fe9e0451b1e353777ba49a0/core/docs/changelog.txt">changelog</a>, but below are some of the significant revisions in this release.</p>
<ul>
<li>Update PHPMailer to 5.2.27 to address a small but potential vulnerability</li>
<li>Upon setup completion, the <code>setup</code> directory is locked</li>
<li>Updated phpThumb to a version that fixes images getting a black background color when converting an image with transparency to a format without alpha support</li>
<li>The default RSS feed URLs <code>feed_modx_security</code> and <code>feed_modx_news</code> now use HTTPS</li>
<li>Fix for thumbnails not rendering for media sources with spaces in URL’s</li>
<li>Restore PHP 5.3 compatibility</li>
</ul>
<h2>Security is a Habit</h2>
<p>Staying up-to-date with new releases is a good habit to keep your MODX-powered website as secure as possible. While no critical security issues appear in version 2.7.0, we recommend you upgrade as soon as possible.</p>
<h2>It Takes a Village…</h2>
<p>The release would not be possible without the attention and effort of our community contributors, including Jason Coward, Joshua Lückers, Thomas Jakobi, Ruslan Aleev, Bochkarev Ivan, Ivan Klimchuk, Mark Hamstra, Mina Gerges, Jake Scaltreto, Greg Crown, ian-emsens-sb, Serge Kudashev, Joshua Lückers, GulomovCreative, Intersel, ЕвгенийWebinmd, gregcrown, John Penny, nizart91, tolanych, and Roel Zeilstra.</p>
<ul>
<li><a href="https://modx.com/download/other-versions?releaseKey=revolution-2.7.12-pl">Download MODX Revolution 2.7.2</a></li>
<li><a href="https://modxcloud.com/">Try it in MODX Cloud</a></li>
</ul>
            <p><small>2 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-revolution-2-7-2-released/1586">Read full topic</a></p>
          </span>
    <span class="date_stamp">26.09.2019 19:20:02</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/lhi8VQ5TpfU/768" target="_blank">Forum Maintenance (May 9th 2019 at 12AM Eastern Time GMT-4) (Completed)</a></h2>
    <span class="content">
            <p>We’re doing a short maintenance that will require some downtime for about 15 minutes tonight, May 9th 2019 at 12AM ET (GMT-4).</p>
            <p><small>8 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/forum-maintenance-may-9th-2019-at-12am-eastern-time-gmt-4-completed/768">Read full topic</a></p>
          </span>
    <span class="date_stamp">08.05.2019 23:11:39</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/gJjDJOLrva0/648" target="_blank">MODX setup/ Directory Site Exploit</a></h2>
    <span class="content">
            <p>There is currently an active exploit of sites with an intact MODX Revolution <code>setup/</code> directory. This can give <em>anyone</em> on the internet complete access to your site and possibly your server with trivial effort. This directory should <em>never</em> be left in place once a site is installed.</p>
<p>You can check if your site is vulnerable by entering your site URL with a <code>/setup/</code> added at the end, for example:</p>
<p><strong><a href="https://www.example.com/setup/">https://www.example.com/setup/</a></strong></p>
<p>If you see a MODX installation utility, you should log into your server via FTP or SSH <strong>immediately</strong>, and remove this directory. If your site is working as expected, your site may be safe, but please review the additional information below.</p>
<p>Using the MODX installation script above, a malicious individual can re-install MODX and point to any database they wish including remote databases. Once a site is “re-installed” they can then use the Manager’s file manager to upload other back door files to your server. This can potentially lead to more severe issues such as having the entire server <a href="https://en.wikipedia.org/wiki/Rootkit">rootkitted</a>, setting up spam mailers, or uploading crypto miners to take advantage of computing resources on your server.</p>
<p>If your site has been compromised or is not working correctly, and the setup folder per the above was in place, you must first re-connect your site to the correct database and server. Ask your web host or sysadmin to reset your database password and give you the new database credentials. Once you have those, update the MODX config file—by default located at <code>core/config/config.inc.php</code>—with the correct settings.</p>
<p>You should also upgrade your MODX version to the latest production release (currently 2.7.1) and upgrade all Extras if they are not current. Keeping up with updates is critical to maintaining a secure site, as it plays a key role in <a href="https://support.modx.com/hc/en-us/articles/360010644353-How-Websites-Get-Hacked-and-How-to-Protect-Yourself">helping prevent sites from compromise</a>.</p>
<p>Finally, you should run a malware scanner to make sure other exploits haven’t already been uploaded to your site as described above. We have a series of articles that walks you through recovering from a site compromise, which hopefully will help in this effort:</p>
<ul>
<li>
<p><strong><a href="https://modx.com/blog/recovering-from-a-hacked-site-part-1">https://modx.com/blog/recovering-from-a-hacked-site-part-1</a></strong></p>
</li>
<li>
<p><strong><a href="https://modx.com/blog/recovering-from-a-hacked-site-part-2">https://modx.com/blog/recovering-from-a-hacked-site-part-2</a></strong></p>
</li>
<li>
<p><strong><a href="https://modx.com/blog/recovering-from-a-hacked-site-part-3">https://modx.com/blog/recovering-from-a-hacked-site-part-3</a></strong></p>
</li>
</ul>
<p>If your web host, developer or sysadmin is not able to help, you can open a commercial support ticket directly with MODX by visiting <a href="https://support.modx.com/">https://support.modx.com</a> and clicking the blue “Submit a request” link in the header (please mention this post and provide your site URL). In order to assist we will need access to your server, most likely via your cPanel login.</p>
            <p><small>1 post - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-setup-directory-site-exploit/648">Read full topic</a></p>
          </span>
    <span class="date_stamp">24.04.2019 18:36:05</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/SbWqi8xsPmg/241" target="_blank">New MODX Community</a></h2>
    <span class="content">
            <p>Say <em>“Hello”</em> to the new MODX Community Forums.</p>
<p>We hope to provide a new, faster, more positive experience for everyone to learn and share their MODX knowledge.</p>
<p>These new forums replace our longstanding, Discuss-based Forums. As there is such a wealth of knowledge in our old forums, we will be archiving them and keeping them for public reference. You can find them at their old link: <a href="https://forums.modx.com/">forums.modx.com</a>.</p>
<p>We hope you’ll come to find answers and stay and become part of the community.</p>
<p>Have any problems, or feedback? Use our <a href="https://community.modx.com/c/ux-and-feedback">Feedback Section</a> or drop us an email at <a href="mailto:support@modx.com">support@modx.com</a>.</p>
<p>On behalf of the entire MODX Team, welcome.</p>
            <p><small>2 posts - 2 participants</small></p>
            <p><a href="https://community.modx.com/t/new-modx-community/241">Read full topic</a></p>
          </span>
    <span class="date_stamp">27.03.2019 1:28:30</span>
</div>
<div class="news_article">
    <h2><a href="http://feedproxy.google.com/~r/modx-announce/~3/3iuxpyRC4mQ/15" target="_blank">About the Announcements category</a></h2>
    <span class="content">
            <p>Important announcements by the MODX core team.</p>
            <p><small>1 post - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/about-the-announcements-category/15">Read full topic</a></p>
          </span>
    <span class="date_stamp">11.09.2018 1:45:54</span>
</div>',
  ),
);