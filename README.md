# Team_2-TA_APPLICATION
This is the application that students use to apply for a TAship and rank their preferences and submit any needed info etc that may help people decide to give them a TAship or not. 

![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/team2_deezed.png "Team 2")

## Sprint Review #2 Instructions and Comments

* Upstream:
	1. Using team 1's schema and dummy data structure to pull course information for the form
	2. Using team 3's TA (create account, login) feature to auto populate parts of the form

* Downstream:
	1. Team 4 is using our form table schema 
	2. Team 6 is using our form and form_relational table 

### How this works
1. The start, [visit our page and create an account as a TA](https://applicationform.herokuapp.com/index.php).
2. The middle, login and click on TA Form.
3. The end, fill out the application, click Submit.

### How does downstream get the data?
1. For team 4 and team 6 - [query form table](https://applicationform.herokuapp.com/includes/query_form.php)
2. For team 6 - [query form relational table](https://applicationform.herokuapp.com/includes/query_form_relational.php)


### Next steps
* Move to integrated repo

Thanks,
Team 2 Good.



## Scrum Board
**Online Scrum Board:**  https://trello.com/b/RqcySuLG/team-2-application-form

**Guidelines (How we use the online board):**

* The online Scrum board contains 4 lists: 

	1. To Do Tasks
	2. In Progress Tasks
	3. Done Tasks
	4. Backlog
	
* All team members have edit access to the online board

* All team members can make changes to tasks

* Tasks in current sprint should have a short description

* Tasks in current sprint should have assinged members

* Tasks can be moved between list (drag and drop tasks)

* Tasks can have: Checklists, Labels, Due dates, and Attachments

* Team members have the ability move, copy, archive, and subscribe to tasks

* Team members can add comments on tasks


## Production
**URL:** https://applicationform.herokuapp.com/taform.php

**Deploying to Prod:**

For our application, production will be held on heroku. The Application name is "applicationform".

Access for the app is at the URL https:// team-2-ta-application-prod.herokuapp.com. This application automatically updates after a user merges to master. 


IMPORTANT: When developing, always ensure that you branch and have code reviewed by team before pushing to master / production. If this protocol is not followed, possible errors may be pushed into production, leading to a broken production build.

## Team Members
| Team Member Quest ID  | Team Member Preferred Name | Team Member GitHub Username | Open PRs |
| --------------------- | -------------------------- | --------------------------- | -------- |
| s8bansal | Sumit |sumit894| [Open PRs](https://github.com/Team_2-TA_APPLICATION/pulls/sumit894) |
| gchane | Gagan | gaganchane | [Open PRs](https://github.com/Team_2-TA_APPLICATION/pulls/gaganchane) |
| gemmett | Geoff | gemmett | [Open PRs](https://github.com/Team_2-TA_APPLICATION/pulls/gemmett) |
| ajamaled | Ahmad | ajamaleddin | [Open PRs](https://github.com/Team_2-TA_APPLICATION/pulls/ajamaleddin) |
| j2kan | Johnson | j2kan | [Open PRs](https://github.com/Team_2-TA_APPLICATION/pulls/j2kan) |
| je2mcdon | Jared | je2mcdon | [Open PRs](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/pulls/je2mcdon) |
| kapandya | << Karan Pandya | karanpmb | [Open PRs](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/pulls/karanpmb) |


## Setup Instructions
Feel free to leverage our connect-db.py script to create, drop tables from your db with python scripts
Note: look up how to pip install psycopq2 and also setting up environment variables to use this script.

Notice how you can see our script but have no idea what our DB connection, user name and password? 
Environment variables allows me to do that.

The following are instructions for:

1. Create heroku app
2. Connect app to your team github
3. Addon Postgres db (you can use clearDB or any DB you want)

Tip: You can connect to your Postgres db via Clojure, Go,  Java,  Node, PHP,  Python,  Ruby or  Scala 

##Heroku Setup
Go to create your app
![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/p1-Create_New_App_Heroku.png "Part 1")

Name your app name
![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/p2-Create_app.png "Part 2")

Connect this app to your TEAM GitHub, search for your team repo name
![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/p3-Connect_github.png "Part 3")

Add your groupmates to be collaborators of this Heroku App
![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/p3-2-Add-Collaborators.png "Part 3.2")


##Postgres Setup
Click Find more add-ons, we decided to use Postgres for it's flexibility. Select Hobby Dev (FREE VERSION)
![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/p4-Create_Postgres_db.png "Part 4")
After add-on, click on Heroku Postgres :: Database 
Here you can find your connection details which you can use to connect to your database.
![Alt text](https://github.com/UWaterlooMSCI342/Team_2-TA_APPLICATION/blob/master/img/p5-Connection_settings.png "Part 5")

