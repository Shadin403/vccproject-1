# Development Setup Guide

## Auto-Build Development Server

আপনার deployment issue solve করার জন্য আমি একটা auto-build system তৈরি করেছি।

### কিভাবে ব্যবহার করবেন:

#### Method 1: Batch File (সবচেয়ে সহজ)

```bash
# Windows এ double-click করুন
start-dev.bat
```

#### Method 2: Command Line

```bash
npm run dev:auto
```

#### Method 3: Manual Build (যদি প্রয়োজন হয়)

```bash
npm run build
```

### এই system কি করে:

1. **File Watching**: আপনার Vue, JS, CSS files এ changes detect করে
2. **Auto Build**: কোনো change হলে automatically `npm run build` চালায়
3. **Real-time Updates**: Browser refresh করলেই নতুন changes দেখতে পাবেন

### Development Commands:

-   `npm run dev` - Normal Vite dev server (hot reload)
-   `npm run dev:auto` - Auto-build server (file watching + auto build)
-   `npm run build` - One-time production build
-   `npm run build:watch` - Vite build with watch mode

### Production Deployment:

Production এ deploy করার সময়:

```bash
npm run build
```

### Troubleshooting:

1. **Port conflicts**: যদি port issue হয়, `vite.config.js` এ port change করুন
2. **Permission issues**: Administrator হিসেবে run করুন
3. **Node modules**: যদি error হয়, `npm install` চালান

### File Structure:

```
├── dev-auto-build.js    # Auto-build script
├── start-dev.bat        # Windows batch file
├── package.json         # Updated with new scripts
└── vite.config.js       # Vite configuration
```

এখন আপনি কোনো file edit করলেই automatically build হয়ে যাবে এবং browser এ refresh করলেই changes দেখতে পাবেন! 🚀
