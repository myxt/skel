<?php /*

[DatabaseSettings]
DatabaseImplementation=ezmysqli
Server=127.0.0.1
User=site_user
Password=site_pass
Database=site_database

[FileSettings]
VarDir=var/site

[MailSettings]
AdminEmail=sander@myxt.nl
EmailSender=noreply@myxt.nl

[UserSettings]
RegistrationEmail=sander@myxt.nl

[InformationCollectionSettings]
EmailReceiver=sander@myxt.nl

[SiteSettings]
SiteList[]=site_admin
SiteList[]=site_web
SiteList[]=site_mobile

[SiteAccessSettings]

AvailableSiteAccessList[]=site_admin
AvailableSiteAccessList[]=site_web
AvailableSiteAccessList[]=site_mobile

HostMatchMapItems[]=webadmin.domain.com;site_admin
HostMatchMapItems[]=www.domain.com;site_web
HostMatchMapItems[]=m.domain.com;site_mobile

HostMatchMapItems[]=webadmin.domain.localhost;site_admin
HostMatchMapItems[]=www.domain.localhost;site_web
HostMatchMapItems[]=m.domain.localhost;site_mobile

[SiteSettings]
AdditionalLoginFormActionURL=http://webadmin.domain.com/user/login

*/ ?>
