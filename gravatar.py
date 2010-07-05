#!/usr/bin/env python

import hashlib
import sys

h = hashlib.md5()
h.update(sys.argv[1])
print h.hexdigest()
