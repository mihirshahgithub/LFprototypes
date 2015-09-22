#Example Prototype

In this example we are going to walk through the process of working on a new prototype and the set of instructions that go with it.<b>The instructions below are used for video recording reasons and are not used within the curriculum or being graded by the instructors.</b>

###<a href="https://youtu.be/-DF-LV9jdGw" target="_blank">Watch This Video First</a>

## Overview - How to complete the Prototype

> <h4>Code Setup - <a href="https://github.com/Learning-Fuze/prototypes/tree/example/example#code-setup-details">Details</a></h4>
>> 1. Open PhpStorm
>> 1. Fork Repository
>> 1. Copy locally (Clone the Repo)
>> 1. Create a feature grouping (Create feature branch)

> <h4>Coding Instructions (Scope) - <a href="https://github.com/Learning-Fuze/prototypes/tree/example/example#coding-instructions-scope-details">Details</a></h4>
>> 1. HTML Basics
>> 1. Basic Styling

> <h4>After Coding - <a href="https://github.com/Learning-Fuze/prototypes/tree/example/example#after-coding-details">Details</a></h4>
>> 1. Save files to Git
>> 1. Package (group) all saved git files with a commit message
>> 1. Allow others to see your changes by uploading them to the Github website
>> 1. See if your feature fits with what everyone else was working on (Pull Request)
>> 1. Watch perfect prototype
>> 1. Collaborate on feedback
>> 1. Pull Request Closed

## Code Setup Details

##### 1. Fork Repository
> Forking the repoistory or Repo will give you a copy of this repo under your own GitHub user account. We will be starting with a Learning-Fuze account repo.

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/6.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/6.jpg?raw=true" width="800" /></a>

#####2. Copy locally (Clone the Repo)
> `git clone https://github.com/[your-user-name]/prototypes.git`

> <b>[your-user-name] should be replaced with your exact github account name</b>

> Cloning a repository is making a copy of the repo that was forked on github.com/[your_account_name]/prototypes (in the step above) and saving it too your computer (Local Machine).

#####3. Create a feature grouping (Create feature branch)

> `cd prototypes` - change the directory to the prototypes folder that was just copied

> `git checkout -b feature-1`

> Creating feature groupings allow users to modify code without causing issues with the current functioning code. 
> *Any modifications to these files after <b>branching</b> can be undone*
> *"feature-1" is the branch name.  In the future, you can use any descriptive name you want*

## Coding Instructions (Scope) Details

##### HTML Basics
> 1. Create an html file inside the example folder
>   1. Insert the basic HTML structure tags (html,head,body)
> 1. Add a header and h1 tag with the text "This is a test header"
> 1. Add 5 content sections inside the appropriate tag to make a paragraph.
>   1. Inside the content sections add Lorem Ipsum text from here - http://www.lipsum.com/feed/html)
>       1. <a href="http://www.lipsum.com" target="_blank">What is Lorem Ipsum</a>

##### Basic Styling
> 1. Make the font size of the h1 tag equal to 28 pixels
> 1. Add a class "test-class" to the content section
> 1. Italicize the font of the first paragraph tag

## After Coding Details
##### 1. Save files to Git - Add all modified & created files 
> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message
> `git commit -m "Example Prototype - EJ020586"`

> Grouping files with a message allows those changes to be seen by others a referenced for specific states of code

##### 3. Allow others to see your changes by uploading them to the Github website
> `git push origin feature-1`

> When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature branch/group <b>feature-1</b>

##### 4. See if your feature fits with what everyone else was working on (Pull Request)

> ####Step 1. Click Pull request tab to open the pull request list

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/1.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/1.jpg?raw=true" width="350"/></a>

> ---

> ####Step 2. Click "New Pull request" button

> <a href="https://github.com/Learning-Fuze/prototypes/blo b/assets/assets/example/2.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/2.jpg?raw=true" width="800" /></a>

> ---

> ####Step 3. Select the <b>feature-1</b> branch from the drop down

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/3.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/3.jpg?raw=true" width="800" /></a>

> ---

> ####Step 4. Comparing Changes
> During this step there are a hand full of highlighted things that need to be taken into consideration.

> 1. Click the compare across forks link (pictured below)

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/7.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/7.jpg?raw=true" width="800" /></a>

> 1. `base fork: Learning-Fuze/prototypes`
>   1. For all prototypes this will always remain the same
> 1. `base: C#_userName`
>   1. Here you will select the option that matches your username
>   1. If you can not locate an option that has your username, contact an instructor
> 1. `head fork: scbowler/prototypes-1`
>   1. Here you will select the option that matches your username / prototypes
>   1. If you can not locate an option that has your username / prototypes, contact an instructor
> 1. `compare: feature-1`
>   1. Here you will locate the branch name (or feature name) you created at the beginning of the prototype
>   1. This will usually be the same as the name of the prototype
> 1. Github.com will let you know if the code can be merged automatically (without needing a manual merge)
>   1. If the text says something other than "able to merge". <b>Contact an instructor</b>
>   1. Sometimes a manual merge is necessary, it just has a couple more steps when completing the request (done by instructors at start)
> 1. Once we have verified #1 - #4 and noted #5, we click the "Create Pull request" button (#5 in the image below)

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/4.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/4.jpg?raw=true" width="800" /></a>

> ---

> ####Step 5. Add details into the pull request
> 1. Give the pull request a title, by default its the name of the last commit (package) message that was saved
>   1. Title the pull request with the name of the prototype followed by your first and last name
>       1. <b>Example:</b> Example Prototype - Eric Johnson
> 1. <b>Don't assign a user.</b> (An Instructor will select who this gets assigned too)
>   1. Further into the cohort we will have students learn to review pull requests
> 1. Click on "Create pull Request"

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/5.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/5.jpg?raw=true" width="800" /></a>

> ---

##### 5. Watch perfect prototype

> <b><a href="https://youtu.be/-DF-LV9jdGw" target="_blank">Perfect Prototype Video Here</a></b>
>>  - *This is the same video from above*
>>  - Once you have completed and submitted your prototype you will gain access to a Perfect Prototype code example, video or both 

##### 6. Collaborate on feedback 

> Within the Github.com UI another developer or in this case an instructor will review the Pull Request you made - <b>Is your feature working</b>. Collaboration happens through github UI & the notifications are sent through email when comments are added to pull requests

> + Make additional modification based on feedback
>   + more commits to the same branch

##### 7. Pull Request Closed
> + Pull request assignee Merges and Closes Pull Request through Github.com UI.

> *<b>Common Issues</b>*

> + Code can't be automatically merged
>   + Needs manual merge