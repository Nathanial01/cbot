<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Assistance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-black">

    <!-- Chatbot Toggle Button -->
    <button
        id="chatbot-icon"
        class="fixed bottom-4 right-4 inline-flex items-center justify-center text-sm font-medium disabled:pointer-events-none disabled:opacity-50 border rounded-full w-16 h-16 bg-black hover:bg-gray-700 m-0 cursor-pointer border-gray-200 p-0 normal-case leading-5 hover:text-gray-900"
        type="button" aria-haspopup="dialog" aria-expanded="false">

        <svg width="102" height="67" viewBox="0 0 1028 673" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 21l1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" class="border-gray-200"></path>
            <path
                d="M729.394 491.505C735.388 518.483 718.773 542.008 691.981 545.922C670.917 548.999 650.521 546.899 630.422 540.339C626.624 539.1 622.543 538.513 618.975 536.82C611.035 533.053 604.145 535.19 596.808 538.858C551.334 561.586 504.859 582.055 457.101 599.527C430.6 609.222 403.628 617.353 375.334 619.54C349.884 621.507 324.836 618.39 300.057 612.261C267.666 604.249 229.797 565.902 232.815 521.028C234.436 496.922 243.105 475.341 255.018 454.416C271.331 425.762 295.198 404.511 319.77 383.679C323.328 380.663 326.779 377.499 330.518 374.725C333.628 372.418 333.584 370.612 330.846 368.022C318.983 356.801 307.216 345.477 295.452 334.151C275.521 314.961 257.247 300.424 237.787 274.528C224.392 256.703 222.699 255.624 207.506 226.124C197.891 207.454 191.726 195.123 194.793 173.873C195.756 167.198 196.295 163.3 199.006 157.124C202.163 149.932 204.652 145.86 210.506 140.624C220.823 131.397 233.792 129.558 244.239 129.753C272.26 130.274 299.561 134.999 325.496 146.162C330.39 148.269 335.285 150.373 340.173 152.496C341.922 153.255 343.42 153.636 345.2 152.129C355.696 143.238 368.987 145.596 373.6 158.366C376.308 165.861 380.925 169.189 387.301 172.489C407.276 182.828 426.908 193.814 445.43 206.654C446.661 207.507 447.931 208.348 448.997 209.385C450.478 210.827 452.852 212.191 451.308 214.738C449.807 217.215 447.503 216.181 445.522 215.266C443.106 214.149 440.741 212.909 438.411 211.619C420.773 201.854 403.018 192.327 384.42 184.465C378.557 181.987 373.109 181.02 366.724 183.977C357.393 188.299 347.905 183.478 345.41 173.218C344.049 167.625 341.178 165.451 336.079 163.877C312.462 156.589 288.723 150.103 263.785 149.615C258.62 149.514 253.497 149.86 248.354 150.649C225.526 154.151 220.268 172.385 222.699 187.736C225.445 205.081 233.889 220.027 242.697 234.8C266.197 274.211 297.579 306.71 331.937 336.617C345.388 348.325 358.966 359.874 373.011 370.865C374.812 372.276 376.681 373.6 378.512 374.96C381.304 372.199 383.742 369.732 386.242 367.327C397.578 356.422 412.999 359.83 421.572 367.89C436.211 381.656 443.924 398.49 440.573 419.033C439.806 423.734 441.09 426.3 444.97 428.895C483.168 454.439 523.816 475.516 565.179 495.313C573.744 499.412 582.357 503.414 590.841 507.673C593.378 508.946 595.28 508.768 597.756 507.452C635.764 487.249 667.473 459.154 696.979 428.328C704.808 420.149 712.55 411.833 719.673 403.046C736.448 382.354 748.098 360.282 750.506 329.08C751.506 316.124 743.506 294.227 715.666 280.143C704.603 274.546 681.006 266.124 681.006 266.124C681.006 266.124 671.012 263.985 667.006 262.624C673.506 262.06 683.006 264.124 683.006 264.124C683.006 264.124 711.051 270.832 727.328 277.664C733.773 280.369 747.506 290.124 747.506 290.124C747.506 290.124 768.527 311.302 769.264 329.08C770.645 362.375 760.197 391.975 740.882 418.791C733.361 429.233 725.063 438.99 716.014 448.098C713.551 450.577 713.463 452.447 715.055 455.452C721.071 466.809 725.875 478.689 729.394 491.505ZM413.305 452.71C393.703 462.154 369.571 448.964 366.476 425.068C365.449 417.137 366.369 409.472 367.102 401.713C367.281 399.824 367.761 398.13 365.944 396.768C360.621 392.777 355.349 388.718 350.012 384.747C346.966 382.481 344.286 383.148 341.526 385.621C336.07 390.507 330.253 394.994 324.868 399.954C309.634 413.985 295.481 428.922 285.193 447.167C275.448 464.448 272.64 483.502 270.34 502.72C268.228 520.372 274.892 534.564 287.615 546.408C298.344 556.395 310.502 564.182 323.948 569.86C344.555 578.562 365.987 581.971 388.356 579.609C405.16 577.835 421.293 573.155 437.591 569.139C479.981 558.695 521.805 546.481 562.024 529.262C566.651 527.28 571.276 525.291 576.186 523.183C573.848 520.767 571.454 520.027 569.152 519.119C527.322 502.615 487.622 482.127 450.89 456.053C444.926 451.82 438.733 447.91 432.64 443.861C428.995 441.439 425.859 441.927 422.98 445.302C420.476 448.236 417.342 450.471 413.305 452.71ZM662.559 529.383C670.648 529.9 678.495 528.533 686.155 526.106C694.472 523.471 702.541 520.342 707.927 512.838C718.576 498.002 718.4 473.703 707.495 458.697C707.332 458.474 706.906 458.443 705.91 458.048C681.584 480.938 654.915 501.496 626.507 521.975C638.803 526.187 649.894 529.135 662.559 529.383Z"
                fill="#ffff" />
            <path
                d="M547.569 363.485C525.771 364.739 504.589 364.408 483.629 359.201C464.454 354.436 455.359 342.863 453.965 321.222C452.571 299.583 459.452 279.453 467.249 259.748C474.602 241.164 483.57 223.282 492.579 205.443C496.119 198.435 496.78 191.149 494.462 183.639C493.745 181.313 492.611 179.02 489.696 179.439C485.299 180.071 482.229 178.934 480.705 174.448C478.859 169.011 477.776 163.699 482.448 159.098C485.559 156.034 489.234 153.745 493.246 152.001C510.847 144.346 529.336 141.754 548.365 142.509C555.018 142.773 558.57 146.863 559.2 154.469C559.869 162.534 558.873 170.398 556.347 178.113C552.306 190.449 548.889 202.99 544.128 215.089C543.707 216.158 543.205 217.261 543.788 218.551C545.486 220.201 547.197 218.839 548.797 218.287C562.963 213.402 577.623 211.434 592.504 211.392C600.636 211.37 608.668 210.28 616.911 210.964C639.317 212.824 654.319 230.484 657.347 253.029C662.363 290.374 644.201 316.265 615.98 336.907C602.93 346.453 588.548 353.881 573.051 359.009C564.876 361.715 556.383 362.047 547.569 363.485ZM586.977 314.08C594.709 298.821 594.723 282.912 590.193 266.933C588.047 259.365 583.281 253.04 575.662 250.05C565.761 246.164 555.303 244.822 544.732 245.992C537.421 246.801 531.039 249.529 527.114 256.605C518.427 272.266 515.189 289.221 516.826 306.686C518.236 321.729 526.688 329.892 540.145 332.187C545.229 333.055 550.397 333.335 555.577 333.182C569.353 332.775 580.571 328.102 586.977 314.08Z"
                fill="#ffff" />
            <path
                d="M635.205 412.391C632.962 419.89 629.463 422.422 621.059 422.887C610.545 423.468 600.144 421.665 589.665 421.356C561.039 420.511 532.437 420.315 503.918 423.485C494.003 424.588 484.095 425.773 474.199 427.04C470.192 427.553 468.314 425.762 467.713 421.998C466.847 416.576 465.738 411.191 464.984 405.755C463.557 395.472 468.84 388.564 479.186 388.444C500.819 388.193 522.453 388.257 544.095 388.943C568.374 389.713 592.687 389.962 616.953 388.194C619.391 388.017 621.758 386.922 624.166 386.283C630.821 384.519 633.799 386.386 635.265 393.15C636.625 399.431 636.541 405.702 635.205 412.391Z"
                fill="#ffff" />
            <path
                d="M477.714 85.9566C482.096 85.9996 486.073 86.2309 490.051 86.2766C526.354 86.6942 562.612 84.7047 598.899 84.2179C605.719 84.1265 612.533 83.6124 619.352 83.3841C621.736 83.3043 623.77 82.8619 625.798 81.307C629.05 78.8137 633.077 79.9933 634.118 83.9462C636.719 93.8181 635.636 103.481 630.524 112.364C628.337 116.164 624.211 116.824 619.994 116.805C602.175 116.724 584.351 116.484 566.537 116.777C535.745 117.284 504.987 118.807 474.274 121.059C469.047 121.442 466.404 119.463 465.463 114.594C464.377 108.971 464.16 103.316 465.691 97.7675C467.346 91.7674 470.786 87.3299 477.714 85.9566Z"
                fill="#ffff" />
        </svg>
    </button>


    <!-- Chatbox container -->
    <div id="chatbox" style="min-height: 500px; min-width: 100px; " class="fixed bottom-24 right-6 bg-none min-w-1\0 max-w-96  border-none flex flex-col hidden space-y-6">
        <!-- Chat Heading -->
        <div class="flex flex-col space-y-2 pb-2 px-3 pt-4 bg-gray-100 dark:bg-gray-800 rounded-md">
            <h6 class="font-semibold text-lg tracking-tight text-black dark:text-white">Chatbot</h6>
            <p class="text-sm text-gray-600 dark:text-gray-400 leading-3">Powered by OpenAI</p>
        </div>

        <div id="messages"
            style="min-height: 156px;"
            class="pr-4 flex-grow p-6 overflow-y-auto bg-gray-100 dark:bg-gray-800 rounded-md">
            <!-- AI Chat Message (example format) -->
        </div>

        <!-- Chat Input -->
        <div class="flex items-center pt-4">
            <form id="chatbot-form" class="flex items-center justify-center w-full space-x-2">
                <input id="prompt" class="flex h-10 w-full  rounded-md border border-[#e5e7eb] bg-gray-100 dark:bg-gray-800 dark:border-gray-700 px-3 py-2 text-sm placeholder-[#6b7280] dark:placeholder-gray-400 focus:outline-none focus:ring-0 focus:ring-[#9ca3af] dark:focus:ring-gray-600 disabled:cursor-not-allowed disabled:opacity-50 text-[#030712] dark:text-white focus-visible:ring-offset-2" placeholder="Type your message" value="">
                <button type="submit" class="ml-3 p-2 rounded-lg bg-none hover:fill-gray-700 text-white">
                    <svg class="hover:fill-gray-700 text-white" width="30" height="30" viewBox="0 0 2 2" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.2 0v0.8h0.8V0zm0.1 0.1h0.6v0.6h-0.6z" style="transform-origin: center; animation: zoomIn 1s infinite alternate;" fill="#add8e6" />
                        <path d="M0.3 0.3v0.8h0.1V0.4h0.7V0.3" fill="#ffff" />
                        <path d="M1.7 1.7v-0.8h-0.1v0.7h-0.7v0.1" fill="#ffff" />
                        <path d="M0 1.2v0.8h0.8v-0.8zm0.1 0.1h0.6v0.6H0.1z" style="transform-origin: center; animation: zoomIn 1s infinite alternate 1.5s;" fill="#add8e6" />
                        <style>
                            @keyframes zoomIn {
                                0% {
                                    transform: scale(0.1);
                                }

                                100% {
                                    transform: scale(1);
                                }
                            }
                        </style>
                    </svg>
                </button>
            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatbotIcon = document.getElementById('chatbot-icon');
            const chatbox = document.getElementById('chatbox');
            const messagesDiv = document.getElementById('messages');
            const form = document.getElementById('chatbot-form');
            const promptInput = document.getElementById('prompt');
            let chatboxOpened = false;
            const NotificationSound = new Audio('/audio/level-up-3-199576.mp3'); // Correct path

            // Function to adjust chatbox height dynamically
            function adjustChatboxHeight() {
                const messagesHeight = messagesDiv.scrollHeight; // Get total height of messages
                const maxHeight = 900; // Set a maximum height for the chatbox
                const newHeight = Math.min(messagesHeight + 50, maxHeight); // Calculate new height with padding
                chatbox.style.height = `${newHeight}px`; // Apply the new height
                chatbox.style.overflowY = messagesHeight + 50 > maxHeight ? 'scroll' : 'hidden'; // Enable scroll if needed
            }

            // Function to adjust chatbox width dynamically
            function adjustChatboxWidth() {
                const messagesWidth = messagesDiv.scrollWidth; // Get total width of messages
                const maxWidth = 350; // Set a maximum width for the chatbox
                const newWidth = Math.min(messagesWidth + 50, maxWidth); // Calculate new width with padding
                chatbox.style.width = `${newWidth}px`; // Apply the new width
                chatbox.style.transition = "width 0.3s ease"; // Smooth transition
            }

            // Combine height and width adjustment
            function adjustChatboxDimensions() {
                adjustChatboxHeight(); // Adjust height
                adjustChatboxWidth(); // Adjust width
            }

            // Toggle chatbot visibility when icon is clicked
            chatbotIcon.addEventListener('click', function() {
                chatbox.classList.toggle('hidden');
                if (!chatboxOpened) {
                    const initialMessage = `
            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                    <div class="rounded-full bg-none">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="25" height="25" style="shape-rendering: auto; display: block; background:none;" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g transform="translate(31,31)">
  <rect fill="#037ef3" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="-0.5s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g>
<g transform="translate(69,31)">
  <rect fill="#f85a40" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="-0.33333333333333337s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g>
<g transform="translate(31,69)">
  <rect fill="#00ffbf" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="0s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g>
<g transform="translate(69,69)">
  <rect fill="#0a8ea0" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="-0.16666666666666669s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g><g></g></g><!-- [ldio] generated by https://loading.io --></svg>
                    </div>
                </span>
                <p class="leading-relaxed">
                    <span class="block font-bold text-gray-700">AI</span> Hi, how can I help you today?
                </p>
            </div>`;
                    messagesDiv.insertAdjacentHTML('beforeend', initialMessage);
                    adjustChatboxDimensions(); // Adjust dimensions after adding the initial message
                    chatboxOpened = true;
                    messagesDiv.scrollTop = messagesDiv.scrollHeight;
                    NotificationSound.play(); // Play sound when the chatbot opens
                }
            });

            // Handle form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                const prompt = promptInput.value.trim(); // Get user input
                if (prompt === '') return; // Don't submit if input is empty

                promptInput.value = ''; // Clear the input field

                // Display user message in the chat
                const userMessage = `
                    <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1 justify-end ps-3">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                    <div class="rounded-full bg-none">
<svg fill="#000000" width="25px" height="25px" viewBox="0 0 0.75 0.75" id="user" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path id="primary" d="M0.656 0.625a0.063 0.063 0 0 1 -0.063 0.063H0.156a0.063 0.063 0 0 1 -0.063 -0.063 0.188 0.188 0 0 1 0.188 -0.188h0.188a0.188 0.188 0 0 1 0.188 0.188m-0.281 -0.25a0.156 0.156 0 1 0 -0.156 -0.156 0.156 0.156 0 0 0 0.156 0.156" style="fill: rgb(0, 0, 0);"/></svg>
                    </div>
                </span>
            <p class="leading-relaxed">
                <span class="block font-bold text-gray-700">You</span> ${prompt}
            </p>
        </div>`;
                messagesDiv.insertAdjacentHTML('beforeend', userMessage);
                adjustChatboxDimensions(); // Adjust dimensions after user reply

                // Send POST request to generate response
                fetch("{{ route('chatbot.generate') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // CSRF token for security
                        },
                        body: JSON.stringify({
                            prompt: prompt
                        }), // Send user input
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.response) {
                            const botMessage = `
    <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1 ">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                    <div class="rounded-full bg-none">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="25" height="25" style="shape-rendering: auto; display: block; background:none;" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g transform="translate(31,31)">
  <rect fill="#037ef3" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="-0.5s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g>
<g transform="translate(69,31)">
  <rect fill="#f85a40" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="-0.33333333333333337s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g>
<g transform="translate(31,69)">
  <rect fill="#00ffbf" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="0s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g>
<g transform="translate(69,69)">
  <rect fill="#0a8ea0" height="14" width="14" y="-7" x="-7">
    <animateTransform begin="-0.16666666666666669s" values="2;1" keyTimes="0;1" dur="1.6666666666666667s" repeatCount="indefinite" type="scale" attributeName="transform"></animateTransform>
  </rect>
</g><g></g></g><!-- [ldio] generated by https://loading.io --></svg>
                    </div>
                </span><h1 class="font-bold text-gray-700"
font-bold text-gray-700"">Ai</h1>
                 <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                        <div>${data.response}</div>
                    </div>`;
                            messagesDiv.insertAdjacentHTML('beforeend', botMessage);
                            adjustChatboxDimensions(); // Adjust dimensions after bot reply
                            messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the latest message
                            NotificationSound.play(); // Play sound after receiving AI response
                        }
                    })
                    .catch((error) => console.error('Error:', error)); // Handle errors
            });
        });
    </script>
</body>

</html>