<style>
    html{
        scroll-behavior: smooth;
    }
    .loading_container{
        position: fixed;
        z-index: 10000;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        top:0;
        left:0;
        background-color: rgba(0,0,0,0.5);
    }
    .loader {
        width: 40px;
        height: 40px;
        border: 3px solid #FFF;
        border-bottom-color: transparent;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>