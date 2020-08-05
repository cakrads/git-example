# TRAIN GIT


# TO DO:

## FORK THIS REPO
Use github UI to fork this repo to your repository, look top right screen..

## CLONE TO YOUR LOCAL
```
git clone https://github.com/[username]/[this-repository]
```

## CREATE UPSTREAM REMOTE
git remote add upstream https://github.com/cakrads/git-example.git

## CHANGE TO DEVELOP BRANCH  
```
git checkout develop
```

## CREATE NEW BRANCH
Create new branch, the branch name is feature-[your-name]
```
git branch -b feature-cakra
```

check if your branch has been created
```
git branch
```

## CREATE YOUR OWN FOLDER
1. Create your own folder in person folder
2. create index.js or php.js
3. Create algorithm for show number 1 until n, 
but change all a multiple of two to "GOOD", and a multiple of four to "BEST".
And change a multiple of two and four to "AWESOME".
example, if we put n=10 will show:
```1 GOOD 3 BEST 5 6 7 AWESOME 9 10```
4. you can copy the structure from person/cakra/index.js

## INSERT YOUR BIO
insert your bio in bio.txt file.
just put your fullname and your github.

## PULL FROM UPSTREAM
pull from upstream to get the newest update
```
git pull upstream develop
```
fix if there is a conflict

## ADD YOUR CHANGE
check your change once again, and add your change 
```
git add .
```
*will add all your change to stage

## COMMIT YOUR CHANGE
```
git commit -m "add feature [your-name]"
```

## CHECKOUT TO BRANCH DEVELOP
```
git checkout develop
```

## MERGE YOUR FEATURE BRANCH TO BRANCH DEVELOP
```
git merge feature-[your-name]
```

## PUSH TO YOUR REPOSITORY
```
git push origin develop
```

## CREATE MERGE REQUEST IN GITHUB
create merge request, and wait till merge