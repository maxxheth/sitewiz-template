{{-- resources/views/components/llm-modal.blade.php --}}
<div id="llm-modal" class="modal">
    <div class="modal-box w-11/12 max-w-2xl">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" id="close-llm-modal">&times;</button>
        </form>
        
        <h3 id="llm-modal-title" class="text-2xl font-bold text-brand-blue-dark mb-5">LLM Suggestions</h3>
        
        <div id="llm-modal-content-wrapper" class="max-h-[60vh] overflow-y-auto pr-2">
            <div id="llm-modal-content" class="text-brand-gray-medium leading-relaxed">
                <div id="llm-loading" class="hidden text-center py-8">
                    <span class="loading loading-spinner loading-lg text-brand-red"></span>
                    <p class="mt-3 text-sm text-brand-gray-dark">Generating suggestions, please wait...</p>
                </div>
                <div id="llm-result-text" class="prose prose-sm max-w-none"></div>
                <div id="llm-error-text" class="hidden alert alert-error">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const llmModal = document.getElementById('llm-modal');
    const llmModalTitle = document.getElementById('llm-modal-title');
    const llmLoading = document.getElementById('llm-loading');
    const llmResultText = document.getElementById('llm-result-text');
    const llmErrorText = document.getElementById('llm-error-text');

    function openLlmModal(title) {
        llmModalTitle.textContent = title || 'LLM Suggestions';
        llmResultText.innerHTML = '';
        llmErrorText.classList.add('hidden');
        llmLoading.classList.remove('hidden');
        llmModal.showModal();
    }

    function closeLlmModal() {
        llmModal.close();
    }

    // Gemini API Integration
    const apiKey = ""; // Your API key here
    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${apiKey}`;

    async function callGeminiAPI(prompt) {
        const payload = {
            contents: [{ role: "user", parts: [{ text: prompt }] }]
        };
        
        try {
            const response = await fetch(apiUrl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload)
            });
            
            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(`API Error: ${response.status} ${response.statusText}. ${errorData?.error?.message || ''}`);
            }
            
            const result = await response.json();
            if (result.candidates?.[0]?.content?.parts?.[0]?.text) {
                return result.candidates[0].content.parts[0].text;
            } else {
                throw new Error('Unexpected response structure from API.');
            }
        } catch (error) {
            console.error('Error calling Gemini API:', error);
            throw error;
        }
    }

    // Safety Tips Feature
    document.querySelectorAll('.generate-safety-plan-btn').forEach(button => {
        button.addEventListener('click', async () => {
            const card = button.closest('.card');
            const serviceTitleElement = card.querySelector('.service-title');
            if (!serviceTitleElement) return;
            
            const serviceTitle = serviceTitleElement.textContent.trim();
            openLlmModal(`Safety Tips for ${serviceTitle}`);

            const prompt = `Based on the service "${serviceTitle}", suggest 3-5 key safety tips or considerations for a typical commercial building. Present them as an HTML unordered list (<ul><li>...</li></ul>). Ensure the HTML is simple and well-formed.`;
            
            try {
                const generatedText = await callGeminiAPI(prompt);
                llmResultText.innerHTML = generatedText;
            } catch (error) {
                llmErrorText.querySelector('span').textContent = `Failed to generate safety tips: ${error.message}`;
                llmErrorText.classList.remove('hidden');
            } finally {
                llmLoading.classList.add('hidden');
            }
        });
    });

    // Job Description Feature
    document.querySelectorAll('.generate-job-desc-btn').forEach(button => {
        button.addEventListener('click', async () => {
            const card = button.closest('.card');
            const jobTitleElement = card.querySelector('.job-title');
            const jobBriefElement = card.querySelector('.job-brief');

            if (!jobTitleElement || !jobBriefElement) return;
            
            const jobTitle = jobTitleElement.textContent.trim();
            const briefDescription = jobBriefElement.textContent.trim();

            openLlmModal(`Draft Job Description: ${jobTitle}`);

            const prompt = `Draft a compelling job description for the role of "${jobTitle}". The current brief is: "${briefDescription}". Expand on responsibilities, required qualifications, and desirable skills. Make it engaging for potential candidates. Format the output as simple HTML with headings (e.g., <h4>Responsibilities</h4>), paragraphs (<p>), and unordered lists (<ul><li>...</li></ul>).`;

            try {
                const generatedText = await callGeminiAPI(prompt);
                llmResultText.innerHTML = generatedText;
            } catch (error) {
                llmErrorText.querySelector('span').textContent = `Failed to draft job description: ${error.message}`;
                llmErrorText.classList.remove('hidden');
            } finally {
                llmLoading.classList.add('hidden');
            }
        });
    });

    window.openLlmModal = openLlmModal;
    window.closeLlmModal = closeLlmModal;
});
</script>