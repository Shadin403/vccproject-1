<script setup></script>

<template>
    <!-- Brand Logos Section -->
    <section class="container px-6 py-12 mx-auto">
        <div class="marquee-container">
            <div class="marquee">
                <div class="marquee-group">
                    <!-- UPS Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/United_Parcel_Service_logo_2014.svg/1280px-United_Parcel_Service_logo_2014.svg.png"
                            alt="UPS Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- Etsy Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Etsy_logo.svg/1280px-Etsy_logo.svg.png"
                            alt="Etsy Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- eBay Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/EBay_logo.svg/1280px-EBay_logo.svg.png"
                            alt="eBay Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- Walmart Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Walmart_logo.svg/1280px-Walmart_logo.svg.png"
                            alt="Walmart Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- Amazon Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1280px-Amazon_logo.svg.png"
                            alt="Amazon Logo"
                            class="h-12"
                        />
                    </div>
                </div>
                <div class="marquee-group" aria-hidden="true">
                    <!-- UPS Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/United_Parcel_Service_logo_2014.svg/1280px-United_Parcel_Service_logo_2014.svg.png"
                            alt="UPS Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- Etsy Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Etsy_logo.svg/1280px-Etsy_logo.svg.png"
                            alt="Etsy Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- eBay Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/EBay_logo.svg/1280px-EBay_logo.svg.png"
                            alt="eBay Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- Walmart Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Walmart_logo.svg/1280px-Walmart_logo.svg.png"
                            alt="Walmart Logo"
                            class="h-12"
                        />
                    </div>

                    <!-- Amazon Logo -->
                    <div class="logo">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1280px-Amazon_logo.svg.png"
                            alt="Amazon Logo"
                            class="h-12"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.marquee-container {
    overflow: hidden;
    width: 100%;
}

.marquee {
    display: flex;
    gap: 2rem;
}

.marquee-group {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    gap: 2rem;
    animation: marquee-scroll 30s linear infinite;
}

.logo {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    filter: grayscale(100%);
    transition: filter 0.3s ease;
}

.logo:hover {
    filter: grayscale(0%);
}

@keyframes marquee-scroll {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-100%);
    }
}
</style>
