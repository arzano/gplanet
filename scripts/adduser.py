#!/usr/bin/env python

# A simple help script to create a new planet/universe config for a new user
# Run it inside the planet/ topdir
# WARNING: Always check the changes that are made by this script before commiting
# Many thanks to Arfrever Frehtes Taifersar Arahesis (arfrever@gentoo.org) for his suggestions

# Author: Theo Chatzimichos <tampakrap@gentoo.org>
# Feel free to contact me via IRC or email

import sys
import hashlib

# the following makes it python3 compatible
if sys.version_info[0] == 2:
	input = raw_input

def check_mail(email):
	# http://commandline.org.uk/python/email-syntax-check/

	# Ditch nonsense email addresses.

	GENERIC_DOMAINS = "aero", "asia", "biz", "cat", "com", "coop", \
	"edu", "gov", "info", "int", "jobs", "mil", "mobi", "museum", \
	"name", "net", "org", "pro", "tel", "travel"

	# Checks for a syntactically invalid email address.
	# Email address must be 7 characters in total.
	if len(email) < 7:
		return False # Address too short

	 # Split up email address into parts.
	try:
		localpart, domainname = email.rsplit('@', 1)
		host, toplevel = domainname.rsplit('.', 1)
	except ValueError:
		return False # Address does not have enough parts

	# Check for Country code or Generic Domain.
	if len(toplevel) != 2 and toplevel not in domains:
		return False # Not a domain name.

	for i in '-_.%+.':
		localpart = localpart.replace(i, "")
	for i in '-_.':
		host = host.replace(i, "")

	if localpart.isalnum() and host.isalnum():
		return True # Email address is fine.
	else:
		return False # Email has funny characters

def create_gravatar(email):
	h = hashlib.md5()
	h.update(email)
	return h.hexdigest()

def create_config(feed,path,nickname,realname,gravatar):
	if feed:
		f = open('configs/%s/%s' % (path,nickname), 'w')
		f.write('[%s]\nusername = %s\nname = %s\ngravatar = %s' % (feed,nickname,realname,gravatar))
		f.close()
		print('%s config created successfully' % path)
	else:
		print('No %s config will be created' % path)

def main():
	realname = input('Real Name: ')
	nickname = input('Nickname: ')
	email = input('Email: ')
	if check_mail(email):
		gravatar = create_gravatar(email)
		print('Gravatar hash: %s' % gravatar)
	else:
		print('Not a valid email address\n')
		sys.exit(0)
	planet = input('Planet Feed: ')
	create_config(planet,'planet',nickname,realname,gravatar)
	universe = input('Universe Feed: ')
	create_config(universe,'universe',nickname,realname,gravatar)

if __name__ == '__main__':
	main()
