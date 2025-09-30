import NProgress from "nprogress";
import { router } from "@inertiajs/vue3";

// Configure NProgress
NProgress.configure({
    showSpinner: false,
    easing: "ease",
    speed: 500,
});

// Add progress bar hooks
router.on("start", () => NProgress.start());
router.on("finish", () => NProgress.done());
