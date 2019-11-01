# git - 简易指南

[](https://www.bootcss.com/p/git-guide/)



## 创建新仓库

在当前目录新建一个 git 仓库
`git init`

新建一个目录，将其初始化为 git 仓库
`git init [project-name]`

下载(克隆)一个项目和它的整个代码历史
`git clone [url]`



## 添加与提交

你可以计划改动（把它们添加到缓存区），使用如下命令：

`git add <filename>`
`git add *`

这是 git 基本工作流程的第一步；使用如下命令以实际提交改动：

`git commit -m "代码提交信息"`

现在，你的改动已经提交到了 HEAD，但是还没到你的远端仓库。



## 推送改动

你的改动现在已经在本地仓库的 HEAD 中了。执行如下命令以将这些改动提交到远端仓库：

`git push origin master`

可以把 `master` 换成你想要推送的任何分支。

如果你还没有克隆现有仓库，并欲将你的仓库连接到某个远程服务器，你可以使用如下命令添加：

`git remote add origin <server>`

如此你就能够将你的改动推送到所添加的服务器上去了。

[git diff提示filemode发生改变（old mode 100644、new mode 10075）](https://blog.csdn.net/scm002/article/details/84897737)



## 更新与合并

要更新你的本地仓库至最新改动，执行：
`git pull` 或 `git pull origin master`
以在你的工作目录中 获取（fetch） 并 合并（merge） 远端的改动。

要合并其他分支到你的当前分支（例如 master），执行：
`git merge <branch>`

两种情况下，git 都会尝试去自动合并改动。不幸的是，自动合并并非次次都能成功，并可能导致 冲突（conflicts）。 这时候就需要你修改这些文件来人肉合并这些 冲突（conflicts） 了。改完之后，你需要执行如下命令以将它们标记为合并成功：
`git add <filename>`

在合并改动之前，也可以使用如下命令查看：
`git diff <source_branch> <target_branch>`

-----
```
# 取回远程仓库的变化，并与本地分支合并
$ git pull [remote] [branch]
```

同步，也可以称之为拉取，在Git中是非常频繁的操作，和SVN不同，Git的所有仓库之间是平等的，所以，为了保证代码一致性，尽可能的在每次操作前进行一次同步操作，具体的为在工作目录下执行如下命令:
`git pull origin master`

其中`origin`代表的是你远程的仓库，可以通过命令 `git remote -v` 查看，`master`是分支名，如果你本地是其他分支，请换成其他分支的名字，另，因为远程仓库与你本地仓库可能存在冲突，故当存在冲突时，请参考进阶篇的如何处理冲突

