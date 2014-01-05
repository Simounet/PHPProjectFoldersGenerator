PHP PROJECT FOLDERS GENERATOR
=============================
It's a PHP CLI tool to generate init project folders:

USE
===
- clone this project (git clone https://github.com/Simounet/PHPProjectFolderGenerator.git)
- go to your bin folder (cd /usr/bin)
- do a symbolic link (ln -s /path/to/PHPProjectFolderGenerator/src/PHPProjectFolderGenerator/PHPProjectFolderGenerator.php ppfg)
- go to your workspace's folder (cd /data/workspace)
- use the tool (ppfg NameOfMyProject)

TROUBLES
========
After these steps, if you can't use ppfg, check if PHPProjectFolderGenerator.php is able to be executed.

RESULT
======
    phpprojectfoldersgenerator
       ├── .git
       ├── src
       │   └── PHPProjectFoldersGenerator
       └── tests

TIPS
====
If you have the git command installed, it will do a git init into the project's folder.

LICENSE
=======
- [WTFPL](http://www.wtfpl.net/)

