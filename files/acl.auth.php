# acl.auth.php
# <?php exit()?>
# Don't modify the lines above
#
# Access Control Lists
#
# Editing this file by hand shouldn't be necessary. Use the ACL
# Manager interface instead.
#
# If your auth backend allows special char like spaces in groups
# or user names you need to urlencode them (only chars <128, leave
# UTF-8 multibyte chars as is)
#
# none   0
# read   1
# edit   2
# create 4
# upload 8
# delete 16
#
*       @ALL    0
*       @user   1
aks:ak_computer:*       @ALL    0
aks:ak_computer:*       @faveve%2dit    16
aks:ak_ese:*    @ak%2dese       16
aks:ak_ese:*    @user   1
aks:ak_nili:*   @nili   16
aks:ak_nili:*   @ALL    0
aks:ak_pgvs:*   @pg%2dvs        2
aks:ak_pgvs:*   @user   2
aks:ak_poe:*    @ak%2dpoe       16
aks:ak_zeitung:*        @zeitung        16
archiv:*        @user   1
fgen:fg_chem:*  @ALL    0
fgen:fg_chem:*  @fs%2dchem      1
fgen:fg_chem:*  @fs%2dchem%2ddokuwiki   16
how-tos:*       @faveve%2dit    16
how-tos:*       @user   8
kandidatensammlung      @ALL    2
playground:*    @user   4
public:*        @ALL    1
public:*        @faveve%2dit    16
referate:*      @user   8
referate:finanzen:*     @ALL    0
referate:finanzen:*     @stab   16
referate:vorsitz:*      @ALL    0
referate:vorsitz:*      @stab   16
start   @user   2
uno:*   @user   8
veranstaltungen:*       @user   8
vereine:*       @pegasus        1
vereine:*       @ALL    0
vereine:*       @centaurus      1
vereine:centaurus:*     @centaurus      16
vereine:foerderung:*    @ALL    0
vereine:foerderung:*    tobiashaas      16
vereine:foerderung:*    tanja   16
vereine:foerderung:*    eva     16
vereine:pegasus:*       @pegasus        16
windows-probleme        @user   2
aks:ak_computer:netz:openvpn    @user   1
