import os

os.system("git add . && " +
		"git add -u && " +
		"git ci -m 'update' && " +
		"git push origin master && " + 
		"ssh pi@collabkings.com 'python deploy.py'")