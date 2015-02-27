#!/bin/sh
# For this CGI script to work, it must not have group or other write access
echo "Content-type: text/html"
echo ""
echo "<html><head><title>Git Pull</title></head><body>"
echo "<h1>Git Pull</h1><p>Running in "
/bin/pwd
echo " as "
/usr/bin/whoami
echo "</p><tt>"
/usr/bin/git pull
echo "</tt></body></html>"
