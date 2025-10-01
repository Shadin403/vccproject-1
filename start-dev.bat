@echo off
echo Starting Auto-Build Development Server...
echo.
echo This will automatically build your assets whenever you make changes.
echo Press Ctrl+C to stop.
echo.

cd /d "%~dp0"
npm run dev:auto

pause
