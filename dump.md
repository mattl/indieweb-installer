* GNU social http://gnu.io/social/
* GNU FM http://gnu.io/fm/
* Known http://withknown.com/

Goal of an open source / free software installer to which drop-in packages could be made by projects. There are options like Softaculous for cpanel - but getting them to support indieweb projects may not be possible and it isn't open
FLOSS alternatives to cpanel - http://www.zpanelcp.com/ , see also http://en.wikipedia.org/wiki/Comparison_of_web_hosting_control_panels#Free.2FLibre_Control_Panels

Considered Composer for PHP ( https://getcomposer.org ) - but many shared hosts won't support it or give command-line access.

Beyond installing, how do you keep the software current? Some privacy issues surrounding phoning home to know what version is installed.

Wordpress has "self-update": minor version updates for now. You can also enter your FTP details and the central server will log in and overwrite your files.
http://codex.wordpress.org/Configuring_Automatic_Background_Updates  - how you can add items to your wp-config 

On Reclaim Hosting, major versions are upgraded as well as minor versions. The user can choose which updates they receive: major, minor, fixes, or just notifications. This can be chosen on a per-installation basis.

It's challenging to package web software as .deb or .rpm packages. Requires a lot of knowledge of these systems.

Packaging in a Docker container is an option.

Would be interesting for the installer to check the environment for supported installation methods, and react accordingly. eg, check for Composer to see if that can be used. "What's the best we can do?"

Could an indieweb installer be a project on its own? (Support from mattl, timmmmyboy, benwerd)
http://indiewebcamp.com/Indie_Box

Freedombox.
http://freedomboxfoundation.org/
http://installatron.com/  plugin for cpanel (SDK http://installatron.com/developer/apps?s=VDleKq3AWmIAAD7nCncAAAAI)

Could publish internal Puppet, Chef, Ansible, Salt, etc. config for use by others.

Python: could potentially use pypi https://pypi.python.org/pypi

Mozilla MakeDrive. https://wiki.mozilla.org/Webmaker/MakeDrive 

"The Fedora Environment and Stacks Working Group will research and develop new or improved methods of developing, testing, packaging and deploying software for the Fedora community." -- http://fedoraproject.org/wiki/Env_and_Stacks

How do we carry on the conversation? https://github.com/mattl/indieweb-installer ;)

DebConf14 session: "Outsourcing your webapp maintenance to Debian"

https://summit.debconf.org/debconf14/meeting/16/outsourcing-your-webapp-maintenance-to-debian/

Video recording: http://meetings-archive.debian.net/pub/debian-meetings/2014/debconf14/webm/Outsourcing_your_webapp_maintenance_to_Debian.webm
