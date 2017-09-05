# Dokuwiki 

This is an ansible role which sets up a dokuwiki instance and configures the wiki and the ldap authentication for the users.

## Requirements

This role needs an apt based packager manager.


## Role Variables

If you set useacl to 1 you can place a acl.auth.php in the hosts file folder in your repository it will be copied over.
Same is if you set dokuwiki_custom_logo to true, then you can place a logo.png in the file folder and it will be copied.
To see all vars possible for dokuwiki see 
[dokuwiki config page](https://www.dokuwiki.org/config)

There are no mandatory variables for this role. It will be a generic dokuwiki without specified variables though.

## Dependencies

This role needs the [php-fpm](https://github.com/stuvusIT/php-fpm) and [nginx](https://github.com/stuvusIT/nginx) role installed on the host to function with the variables from the group_vars of dokuwiki.yml. 

## Playbook

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
