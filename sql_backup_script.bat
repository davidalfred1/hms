@echo off
:: Set Variables
set DB_NAME=hms
set DB_USER=root
set PROJECT_DIR=C:\xampp\htdocs\HMS
set TIMESTAMP=%DATE:~10,4%-%DATE:~4,2%-%DATE:~7,2%_%TIME:~0,2%-%TIME:~3,2%
set BACKUP_FILE=%PROJECT_DIR%\hms_%TIMESTAMP%.sql

:: Ensure Project Directory Exists
if not exist "%PROJECT_DIR%" mkdir "%PROJECT_DIR%"

:: Export MySQL Database (Overwrites old backup)
echo Exporting database...
mysqldump -u %DB_USER% %DB_NAME% > "%BACKUP_FILE%"

:: Navigate to Project Directory (Git Repo)
cd /d %PROJECT_DIR%

:: Git Commands to Push Backup
echo Adding backup to Git...
git add .
git commit -m "Updated database backup on %DATE% %TIME%"
git push origin main

echo Backup completed and pushed to GitHub.
exit
