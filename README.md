# TRAIN GIT


# TO DO:

### 1. Frok this Repo
Use github UI to fork this repo to your repository, look top right screen..

### 2. Clone to your Local 
```
git clone https://github.com/[username]/[this-repository]
```

### 3. Create Upstream Remote
create upstream remote..
```
git remote add upstream https://github.com/cakrads/git-example.git
```
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

explanation:
so we will have two repo, origin and upstream,
origin is our repo, the ownership is us, the developer.
upstream is main repo, the ownership is the maintener.
we can pull from origin and upstream, but we can only push to origin.
If we wan't push our changed/feature to upstream(main) repository
we must use pull request to upstream, 
and let the maintener review our code (code review).

### 4. Change to Branch Develop  
```
git checkout develop
```

### 5. Create New Branch
Create new branch, the branch name is feature-[your-name]
```
git branch -b feature-cakra
```

check if your branch has been created
```
git branch
```

### 6. Create Your Own Folder do The Task
1. Create your own folder in person folder
2. create index.js or index.php. Use one, PHP OR JS
3. Create algorithm for show number 1 until n, 
but change all a multiple of two to "GOOD", and a multiple of four to "BEST".
And change a multiple of two and four to "AWESOME".
example, if we put n=10 will show:
```1 GOOD 3 BEST 5 6 7 AWESOME 9 10```
4. you can copy the structure from person/cakra/index.js
5. if you use PHP, just create something like point 4.

### 7. Insert Your Bio
insert your bio in bio.txt file.
just put your fullname

### 8. Pull From Upstream
pull from upstream to get the newest update
```
git pull upstream develop
```
fix if there is a conflict

### 9. Add Your Changed
check your change once again, and add your change 
```
git add .
```
*will add all your change to stage

### 10. Commit Your Changed
```
git commit -m "add feature [your-name]"
```

### 11. Checkout To Branch Develop
```
git checkout develop
```

### 12. Merge Your Feature Branch to Branch Develop
```
git merge feature-[your-name]
```

### 13. Push to Your Repository
```
git push origin develop
```

### 14. Create Pull Request In Github
create pull request to cakrads/git-example, and wait till merge
