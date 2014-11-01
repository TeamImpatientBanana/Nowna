NowNa
==============
NowNa is a small webapp that grabs your current location and shows you tweets taking place around you. The tweets must have included geolocation data when made.

This app was made with Twitter Bootstrap and https://github.com/J7mbo/twitter-api-php .

This app was originally made by the NowNa team at RevolutionUC spring 2014, which included Team Impatient Banana members. The app is now being updated by Team Impatient Banana.

##To use

Visit http://nowna.impatientbanana.com/ .

##To install on your own server

Upload the Master branch to your LAMP server. Make sure Curl is installed properly and is set up to work with SSL! (ie, probably don't try to run this on XAMPP like I did).

Make sure that you have a Twitter API key. If not, get one. Then rename the defaultconfig.php to config.php while including your API info inside.

Finally, go to the address of where you are hosting the app in your browser and it should work.