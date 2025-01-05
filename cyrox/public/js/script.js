document.addEventListener('DOMContentLoaded', function () {
    const chatbotIcon = document.getElementById('chatbot-icon');
    const chatbox = document.getElementById('chatbox');
    const form = document.getElementById('chatbot-form');
    const messagesDiv = document.getElementById('messages');
    const promptInput = document.getElementById('prompt');
    let chatboxOpened = false;
    const NotificationSound = new Audio('/vendor/cyrox/chatbot/audio/level-up-3-199576.mp3');
    const userImage = "{{ Auth::check() ? asset('images/' . Auth::user()->profile_image) : asset('img/logo.svg') }}";

    // Toggle chatbot visibility
    chatbotIcon.addEventListener('click', function () {
        chatbox.classList.toggle('hidden');
        if (!chatboxOpened) {
            messagesDiv.insertAdjacentHTML('beforeend', `
                <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                    <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                        <div class="rounded-full bg-gray-100 border p-1">
                            <!-- SVG Icon -->
                        </div>
                    </span>
                    <p class="leading-relaxed">
                        <span class="block font-bold text-gray-700">AI</span> Hi, how can I help you today?
                    </p>
                </div>
            `);
            chatboxOpened = true;
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
            NotificationSound.play();
        }
    });

    // Handle form submission
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const prompt = promptInput.value.trim();
        if (prompt === '') return;

        promptInput.value = '';
        messagesDiv.insertAdjacentHTML('beforeend', `
            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1 justify-end">
                <span class="relative flex shrink-0 overflow-hidden rounded-full w-10 h-10">
                    <img src="${userImage}" alt="User" class="profile-picture w-10 h-10">
                </span>
                <p class="leading-relaxed">
                    <span class="block font-bold text-gray-700">You</span> ${prompt}
                </p>
            </div>
        `);
        messagesDiv.scrollTop = messagesDiv.scrollHeight;

        fetch("{{ route('chatbot.generate') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ prompt: prompt })
        })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.response) {
                    messagesDiv.insertAdjacentHTML('beforeend', `
                    <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                        <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                            <div class="rounded-full bg-gray-100 border p-1">
                                <!-- SVG Icon -->
                            </div>
                        </span>
                        <p class="leading-relaxed">
                            <span class="block font-bold text-gray-700">AI</span> ${data.response}
                        </p>
                    </div>
                `);
                    messagesDiv.scrollTop = messagesDiv.scrollHeight;
                    NotificationSound.play();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Optionally display an error message in the chat
                messagesDiv.insertAdjacentHTML('beforeend', `
                <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1">
                    <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                        <div class="rounded-full bg-gray-100 border p-1">
                            <!-- SVG Icon -->
                        </div>
                    </span>
                    <p class="leading-relaxed">
                        <span class="block font-bold text-gray-700">Error</span> Sorry, I couldn't get a response.
                    </p>
                </div>
            `);
                messagesDiv.scrollTop = messagesDiv.scrollHeight;
            });
    });

    promptInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            form.dispatchEvent(new Event('submit'));
        }
    });
});
