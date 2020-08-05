# TRAIN GIT


# TO DO:

## 1. FORK THIS REPO
Use github UI to fork this repo to your repository, look top right screen..

## 2. CLONE TO YOUR LOCAL
```
git clone https://github.com/[username]/[this-repository]
```

## 3. CREATE UPSTREAM REMOTE
git remote add upstream https://github.com/cakrads/git-example.git
check use 
```
git remote -v
```

it should looks like this:
```
origin      https://github.com/[username]/git-example (fetch)
origin      https://github.com/[username]/git-example (push)
upstream    https://github.com/cakrads/git-example.git (fetch)
upstream    https://github.com/cakrads/git-example.git (push)
```

## 4. CHANGE TO DEVELOP BRANCH  
```
git checkout develop
```

## 5. CREATE NEW BRANCH
Create new branch, the branch name is feature-[your-name]
```
git branch -b feature-cakra
```

check if your branch has been created
```
git branch
```

## 6. CREATE YOUR OWN FOLDER
1. Create your own folder in person folder
2. create index.js or php.js
3. Create algorithm for show number 1 until n, 
but change all a multiple of two to "GOOD", and a multiple of four to "BEST".
And change a multiple of two and four to "AWESOME".
example, if we put n=10 will show:
```1 GOOD 3 BEST 5 6 7 AWESOME 9 10```
4. you can copy the structure from person/cakra/index.js

## 7. INSERT YOUR BIO
insert your bio in bio.txt file.
just put your fullname and your github.

## 8. PULL FROM UPSTREAM
pull from upstream to get the newest update
```
git pull upstream develop
```
fix if there is a conflict

## 9. ADD YOUR CHANGE
check your change once again, and add your change 
```
git add .
```
*will add all your change to stage

## 10. COMMIT YOUR CHANGE
```
git commit -m "add feature [your-name]"
```

## 11. CHECKOUT TO BRANCH DEVELOP
```
git checkout develop
```

## 12. MERGE YOUR FEATURE BRANCH TO BRANCH DEVELOP
```
git merge feature-[your-name]
```

## 13. PUSH TO YOUR REPOSITORY
```
git push origin develop
```

## 14. CREATE MERGE REQUEST IN GITHUB
create merge request, and wait till merge