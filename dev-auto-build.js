#!/usr/bin/env node

const { spawn } = require("child_process");
const chokidar = require("chokidar");
const path = require("path");

console.log("🚀 Starting Auto-Build Development Server...\n");

// Watch for changes in Vue, CSS, and JS files
const watcher = chokidar.watch(
    [
        "resources/js/**/*.vue",
        "resources/js/**/*.js",
        "resources/css/**/*.css",
        "tailwind.config.js",
        "vite.config.js",
    ],
    {
        ignored: /node_modules/,
        persistent: true,
    }
);

let buildProcess = null;

const runBuild = () => {
    console.log("📦 Building assets...");

    if (buildProcess) {
        buildProcess.kill();
    }

    buildProcess = spawn("npm", ["run", "build"], {
        stdio: "inherit",
        shell: true,
    });

    buildProcess.on("close", (code) => {
        if (code === 0) {
            console.log("✅ Build completed successfully!\n");
        } else {
            console.log("❌ Build failed with code:", code);
        }
    });
};

// Initial build
runBuild();

// Watch for changes
watcher.on("change", (filePath) => {
    console.log(`🔄 File changed: ${path.relative(process.cwd(), filePath)}`);
    runBuild();
});

watcher.on("add", (filePath) => {
    console.log(`➕ File added: ${path.relative(process.cwd(), filePath)}`);
    runBuild();
});

watcher.on("unlink", (filePath) => {
    console.log(`🗑️ File removed: ${path.relative(process.cwd(), filePath)}`);
    runBuild();
});

console.log("👀 Watching for file changes...");
console.log("Press Ctrl+C to stop\n");

// Handle graceful shutdown
process.on("SIGINT", () => {
    console.log("\n🛑 Stopping auto-build server...");
    if (buildProcess) {
        buildProcess.kill();
    }
    watcher.close();
    process.exit(0);
});
