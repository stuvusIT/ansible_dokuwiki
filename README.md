# Role 

This is an ansible role which sets up a dokuwiki instance and configures the wiki and the ldap authentication for the users.

## Requirements

This role needs an apt based packager manager.


## Role Variables

To see all vars possible for dokuwiki see 
[dokuwiki config page](https://www.dokuwiki.org/config)


```yml
```


## Dependencies

This role needs the php-fpm and nginx role installed on the host to function with the variables from the group_vars of dokuwiki.yml. 


## Example Playbook

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:


### Playbook

```yml
```


### Vars

```yml
```


### Result

A host on which a dokuwiki is installed and configured for use with ldap user access control. Content migration is not part of this.

## License

This work is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/).


## Author Information

 * [Florian Greinert (sryneklar)](https://github.com/sryneklar) _florian.greinert@stuvus.uni-stuttgart.de_
