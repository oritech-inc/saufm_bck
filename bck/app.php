<style>

    .loader-cont {
        position: relative;
        width: 80px;
        height: 80px;
    span {
        animation: pulse 5s linear infinite;
        opacity: 0.7;
        transform: scale(0);
        display: block;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale(0);
        border-radius: 50%;
        width: 100%;
        height: 100%;
        border: 1px solid #000;
    // box-shadow: 0px 0px 1px rgba(#000, 1);
    }
    span:nth-child(2) {
        animation-delay: 1s;
    }
    @keyframes pulse {
        to {
            transform: translate(-50%, -50%) scale(1.5);
            opacity: 0;
        }
    }
    }

</style>
<div class="preloader">
    <!--  Loader -->
    <div class="loader loader-cont">
    <span></span>
    <span></span>
</div>
</div>