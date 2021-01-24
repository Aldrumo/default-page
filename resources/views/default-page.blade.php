<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Aldrumo- Laravel CMS</title>
        <meta name="author" content="Mike Barlow">
        <meta name="description" content="Aldrumo is a modular Laravel CMS">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                font-family: "Helvetica", "Arial", "sans-serif";
            }

            .text-blue-950 {
                color: #14213D;
            }
        </style>
    </head>

    <body class="bg-gray-200 font-sans">
        <div class="container mx-auto mt-40 text-center">
            <svg class="w-80 mx-auto" viewBox="0 0 1361 323" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M484.26 86.7H452.94L393 235.2H429.36L440.34 205.5H496.86L507.84 235.2H544.2L484.26 86.7ZM485.34 175.8H451.86L468.42 132.6H468.78L485.34 175.8Z" fill="#14213D"/>
                <path d="M583.832 86.7H549.992V235.2H634.952V205.5H583.832V86.7Z" fill="#14213D"/>
                <path d="M651.77 86.7V235.2H694.79C735.65 235.2 769.67 204.24 769.67 160.86C769.67 117.66 735.47 86.7 694.79 86.7H651.77ZM685.61 204.96V116.94H690.83C716.03 116.94 733.13 136.2 733.13 161.04C732.95 185.88 715.85 204.96 690.83 204.96H685.61Z" fill="#14213D"/>
                <path d="M784.66 86.7V235.2H818.5V176.52L863.86 235.2H906.88L855.76 173.82C873.94 168.06 886.18 153.12 886.18 130.8C886.18 101.64 865.3 86.7 837.76 86.7H784.66ZM818.5 152.58V113.7H822.46C835.24 113.7 850.54 114.6 850.54 133.14C850.54 151.68 835.24 152.58 822.46 152.58H818.5Z" fill="#14213D"/>
                <path d="M1027.63 86.7H993.788V172.56C993.788 197.4 986.228 204.6 969.668 204.6C953.108 204.6 945.548 197.4 945.548 172.56V86.7H911.708V182.46C911.708 219.18 931.868 237.9 969.668 237.9C1007.47 237.9 1027.63 219.18 1027.63 182.46V86.7Z" fill="#14213D"/>
                <path d="M1170.21 235.2H1204.05L1190.73 86.7H1154.73L1121.79 172.38L1088.85 86.7H1052.85L1039.53 235.2H1073.37L1080.39 147.18H1081.29L1111.71 234.3H1131.87L1162.29 147.18H1163.19L1170.21 235.2Z" fill="#14213D"/>
                <path d="M1211.13 160.86C1211.13 204.24 1242.09 237.9 1286.01 237.9C1328.67 237.9 1360.71 204.24 1360.71 160.86C1360.71 117.48 1327.23 84 1286.01 84C1245.15 84 1211.13 117.48 1211.13 160.86ZM1247.67 160.86C1247.67 138.72 1259.91 116.58 1286.01 116.58C1312.29 116.58 1324.17 138.72 1324.17 160.86C1324.17 183 1313.01 205.14 1286.01 205.14C1258.29 205.14 1247.67 183 1247.67 160.86Z" fill="#14213D"/>

                <path d="M148.228 46.0253C148.228 50.1664 149.318 54.2345 151.388 57.8209L281.401 283.009C287.268 293.172 298.112 299.432 309.847 299.432L319.101 299.432C332.13 299.432 342.693 288.87 342.693 275.841C342.693 271.7 341.602 267.632 339.532 264.046L209.519 38.8572C203.652 28.6946 192.809 22.4342 181.074 22.4342L171.819 22.4342C158.79 22.4342 148.228 32.9963 148.228 46.0253Z" fill="#14213D"/>
                <path d="M12.9524 276.042C12.9524 271.901 14.0424 267.832 16.113 264.246L146.126 39.0575C151.993 28.8949 162.836 22.6345 174.571 22.6345L183.826 22.6345C196.855 22.6345 207.417 33.1966 207.417 46.2256C207.417 50.3667 206.327 54.4349 204.257 58.0212L74.2438 283.21C68.3765 293.372 57.5331 299.633 45.7984 299.633L36.5435 299.633C23.5145 299.633 12.9524 289.071 12.9524 276.042Z" fill="#14213D"/>
                <path d="M96.2166 276.323C96.2165 272.182 97.3066 268.114 99.3772 264.527L229.39 39.3388C235.257 29.1762 246.101 22.9158 257.835 22.9158L267.09 22.9158C280.119 22.9158 290.681 33.4779 290.681 46.5069C290.681 50.648 289.591 54.7162 287.521 58.3025L157.508 283.491C151.641 293.654 140.797 299.914 129.063 299.914L119.808 299.914C106.779 299.914 96.2166 289.352 96.2166 276.323Z" fill="#F59E0B"/>
                <path d="M185.31 276.323C185.31 272.182 186.4 268.114 188.47 264.527L318.483 39.3388C324.35 29.1762 335.194 22.9158 346.929 22.9158L356.183 22.9158C369.212 22.9158 379.775 33.4779 379.775 46.5069C379.775 50.648 378.684 54.7162 376.614 58.3025L246.601 283.491C240.734 293.654 229.891 299.914 218.156 299.914L208.901 299.914C195.872 299.914 185.31 289.352 185.31 276.323Z" fill="#059669"/>
            </svg>

            <p class="text-lg text-blue-950 my-10">This is the default Aldrumo page, you can now begin setting up your pages via the admin panel.</p>

            <div class="mx-auto w-full flex text-base">
                <a href="{{ route('admin.dashboard') }}" target="_blank" rel="noopener" class="mr-8 flex flex-grow justify-end text-blue-950 hover:text-green-600">
                    <x-heroicon-s-pencil-alt class="w-4 h-4 mr-2 mt-1"/>
                    Admin Panel
                </a>

                <a href="https://aldrumo.com/docs" target="_blank" rel="noopener" class="mr-8 flex text-blue-950 hover:text-green-600">
                    <x-heroicon-s-support class="w-4 h-4 mr-2 mt-1"/>
                    Documentation
                </a>

                <a href="https://github.com/aldrumo" target="_blank" rel="noopener" class="mr-8 flex text-blue-950 hover:text-green-600">
                    <x-fab-github class="w-4 h-4 mr-2 mt-1"/>
                    Github
                </a>

                <a href="https://twitter.com/aldrumo" target="_blank" rel="noopener" class="mr-8 flex flex-grow text-blue-950 hover:text-green-600">
                    <x-fab-twitter class="w-4 h-4 mr-2 mt-1"/>
                    Twitter
                </a>
            </div>
        </div>
    </body>
</html>
