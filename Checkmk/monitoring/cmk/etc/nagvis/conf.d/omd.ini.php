; <?php return 1; ?>
; -----------------------------------------------------------------
; Don't touch this file. It is under control of OMD. Modifying this
; file might break the update mechanism of OMD.
;
; If you want to customize your NagVis configuration please use the
; etc/nagvis/nagvis.ini.php file.
; -----------------------------------------------------------------

[global]
sesscookiepath="/cmk/nagvis"
authorisation_group_perms_file="/omd/sites/cmk/etc/nagvis/perms.db"

[paths]
base="/omd/sites/cmk/share/nagvis/"
local_base="/omd/sites/cmk/local/share/nagvis/"
cfg="/omd/sites/cmk/etc/nagvis/"
mapcfg="/omd/sites/cmk/etc/nagvis/maps/"
geomap="/omd/sites/cmk/etc/nagvis/geomap/"
var="/omd/sites/cmk/tmp/nagvis/"
sharedvar="/omd/sites/cmk/tmp/nagvis/share/"
profiles="/omd/sites/cmk/var/nagvis/profiles/"
htmlbase="/cmk/nagvis"
local_htmlbase="/cmk/nagvis/local"
htmlcgi="/cmk/check_mk"

[defaults]
backend="cmk"
hosturl="[htmlcgi]/view.py?view_name=host&site=&host=[host_name]"
hostgroupurl="[htmlcgi]/view.py?view_name=hostgroup&site=&hostgroup=[hostgroup_name]"
serviceurl="[htmlcgi]/view.py?view_name=service&site=&host=[host_name]&service=[service_description]"
servicegroupurl="[htmlcgi]/view.py?view_name=servicegroup&site=&servicegroup=[servicegroup_name]"
host_downtime_url=""
host_ack_url=""
service_downtime_url=""
service_ack_url=""

[backend_cmk]
backendtype="mklivestatus"
socket="unix:/omd/sites/cmk/tmp/run/live"

[backend_cmk_bi]
backendtype="mkbi"
base_url="http://localhost/cmk/check_mk/"
auth_user="automation"
auth_secret_file="/omd/sites/cmk/var/check_mk/web/automation/automation.secret"
timeout=10
