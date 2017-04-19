# Dokuwiki 

This is an ansible role which sets up a dokuwiki instance and configures the wiki and the ldap authentication for the users.

## Requirements

This role needs an apt based packager manager.


## Role Variables

To see all vars possible for dokuwiki see 
[dokuwiki config page](https://www.dokuwiki.org/config)

There are no mandatory variables for this role. It will be a generic dokuwiki without specified variables though.

## Dependencies

This role needs the php-fpm and nginx role installed on the host to function with the variables from the group_vars of dokuwiki.yml. 

## Playbook

### Group Vars of the dokuwiki for example the nginx-role:

```yml
[...]
served_domains:
  - domains: 
    - dokuwiki
    - wiki
    privkey_path: /etc/ssl/wiki_cert.pem  # privkey.pem will placed there
    fullchain_path: /etc/ssl/wiki_fullchain.pem  # fullchain.pem will placed there
    default_server: [true|false*]
    allowed_ip_ranges:
      - 172.27.10.0/24
    https: true
    index:
      - index.php
      - index.html
    locations:
      - condition: /
        content:
        | 
          try_files $1 $uri $uri/ /index.php$is_args$args;
      - condition: ~ ^/index\.php(.*)$
        content:
        | 
         fastcgi_index index.php;
         include /etc/nginx/fastcgi_params;
         try_files $uri =404;
         fastcgi_split_path_info ^(.+\.php)(/.+)$;
         fastcgi_pass unix:/run/php/php7.0-fpm.sock;
         fastcgi_param SCRIPT_FILENAME /usr/share/icingaweb2/public/index.php;
         fastcgi_param ICINGAWEB_CONFIGDIR /etc/icingaweb2;
         fastcgi_param REMOTE_USER $remote_user;
```
So when a host is being set up with this role those values will be taken instead of the default values set in the nginx role or the host variables.

### All.yml

```yml
- hosts: dokuwiki
  become: yes
  roles:
    - php-fpm
    - nginx
    - dokuwiki
```
Here it is speciefied that the roles php-fpm and nginx are to be played before
dokuwiki is being played on the hosts that belong to dokuwiki.

### Result
A running dokuwiki instance on the host.

## License

This work is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/).


## Author Information

 * [Florian Greinert (sryneklar)](https://github.com/sryneklar) _florian.greinert@stuvus.uni-stuttgart.de_
