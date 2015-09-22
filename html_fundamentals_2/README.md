# Prototype - HTML Text Formatting/Styling

Expand your HTML knowledge with basic formatting elements and adding basic inline CSS styling. As you work through this
prototype we will be building out aspects of the portfolio project v1 (Explanation Coming Soon). This prototype is based
on the information that you obtained through the following resources (<b>If you haven't gone through these then please do so now</b>).

- Readings
 - HTML Heading - <a href="http://www.w3s..._headings.asp" target="_blank">Link</a>
 - HTML Paragraphs - <a href="http://www.w3s...aragraphs.asp" target="_blank">Link</a>
- HTML Formatting & HTML Styling (<a href="https://drive.google.com/open?id=0B6mn1BHjNxTgUDBsRlVRUnFCQjg">Presentation</a>, <a href="https://plus.google.com/events/ci7qcssg1ob5289bt32okg6qmkk" target="_blank">Video</a>)

## Code Setup Details

#####1. Open PHPStorm

#####2. Navigate to prototypes

> Insert this command in the terminal tab

> `cd prototypes`

> - this changes the directory to the prototypes folder
> - If you get an error with the above command its probably because you are already within the correct directory

#####3. Create a feature grouping (*Create feature branch*)

> Insert this command in the terminal tab

> `git checkout -b html_fundamentals_2`

> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "html_fundamentals_2" is the branch name.


## Coding Instructions

#### Feature Set 1 - Creating Structure & Content

> 1. Start using the file "index.html" provided in the same folder as this readme
> 1. Create a basic HTML Skeleton, including
>	- doctype
>	- html
>	- head
>	- body
> 1. Make a Heading & paragraph for each of the following sections
>	1. About Me
> 		1. Heading - About Me
>		1. Paragraph - Description about yourself
>	1. Skills
> 		1. Heading - Skills
>		1. Paragraph - List out 3 skills that you want to learn and what they mean to you (description)
>	1. Experience
>		1. Heading - Experience
>		1. Paragraph - Write a paragraph that describes any of your past job experience

### Feature Set 2 - Adding Styling

> 1. Add inline styling to the About Me header to be your favorite color
> 1. Make the about me paragraph font size equal to 12px
> 1. Italicize the Skills header either by inline style or formatting elements
> 1. Bold each skill title but not the description
> 1. Add the font family of Arial to the Experience header
> 1. Add a background color of green to the experience paragraph

### Feature Set 3 - Research other formatting options

> 1. Add a inline style that would increase the spacing between each line of a paragraph tag
> 1. Add a border around the Experience Heading without a bottom border that is the color red
> 1. Add a border around the Experience paragraph without a top border that is black
> 1. Make the border of the paragraph tag not solid

## After Coding Details
##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "html_fundamentals_2 - EJ020586"`
> - EJ020586 should be replaced with your username
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin html_fundamentals_2`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature branch/group <b>html_fundamentals_2</b>

##### 4. See if your feature fits with what everyone else was working on (Pull Request)

> ####Step 4.1 Click Pull request tab to open the pull request list

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/1.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/1.jpg?raw=true" width="350"/></a>

> ---

> ####Step 4.2 Click "New Pull request" button

> <a href="https://github.com/Learning-Fuze/prototypes/blo b/assets/assets/example/2.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/2.jpg?raw=true" width="800" /></a>

> ---

> ####Step 4.3 Comparing Changes
> During this step there are a hand full of highlighted things that need to be taken into consideration.

> 1. Click the compare across forks link (pictured below)

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/7.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/7.jpg?raw=true" width="800" /></a>

>> 1. `base fork: Learning-Fuze/prototypes`
>>   1. For all prototypes this will always remain the same
>> 1. `base: C#_userName`
>>   1. Here you will select the option that matches your username
>>   1. If you can not locate an option that has your username, contact an instructor
>> 1. `head fork: [your_user_name]/prototypes`
>>   1. Here you will select the option that matches your username / prototypes
>>   1. If you can not locate an option that has your username / prototypes, contact an instructor
>> 1. `compare: html_fundamentals_2`
>>   1. Here you will locate the branch name (or feature name) you created at the beginning of the prototype
>>   1. This will usually be the same as the name of the prototype
>> 1. Github.com will let you know if the code can be merged automatically (without needing a manual merge)
>>   1. If the text says something other than "able to merge". <b>Contact an instructor</b>
>>   1. Sometimes a manual merge is necessary, it just has a couple more steps when completing the request (done by instructors at start)
>> 1. Once we have verified #1 - #4 and noted #5, we click the "Create Pull request" button (#5 in the image below)

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/4.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/4.jpg?raw=true" width="800" /></a>

> ---

> ####Step 4.4 Add details into the pull request
> 1. Give the pull request a title, by default its the name of the last commit (package) message that was saved
>   1. Title the pull request with the name of the prototype followed by your first and last name
>       1. <b>Example: </b> Example - EJ020586
> 		1. [prototype Name] - [your user name]
> 1. <b>Don't assign a user.</b> (An Instructor will select who this gets assigned too)
>   1. Further into the cohort we will have students learn to review pull requests
> 1. Click on "Create pull Request"

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/5.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/5.jpg?raw=true" width="800" /></a>

> ---

##### 5. Collaborate on feedback

> Within the Github.com UI another developer or in this case an instructor will review the Pull Request you made - <b>Is your feature working</b>. Collaboration happens through github UI & the notifications are sent through email when comments are added to pull requests

> - Students should make modifications to there code based on the instructors feedback
> - Instructors will be giving an initial assessment based on the pull request. <b>Any additional collaboration after the instructor has been feedback will be on a requested basis only.</b>

##### 6. Pull Request Closed
> - In the LearningFuze workflow the pull requests are closed to indicate assessment has been given to the student and recorded.
