
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leedi-Fintech Translation API</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
 <style> 
{
  background-color: #f4f8fb;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.hero {4
    background-color: #ffffff;
    padding: 50px 0;
    text-align: center;
}

.hero .title {
    font-size: 2.5em;
    color: #023047;
    margin-bottom: 0.5em;
}

.hero .subtitle {
    color: #555;
    font-size: 1.2em;
    margin-bottom: 1.5em;
}

.query-box {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
}

.result-box {
    background-color: #ffffff;
    border: 2px solid #1e88e5; /* Primary color border */
    border-radius: 5px;
    padding: 15px;
    margin-top: 20px;
    display: none;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}

.how-to-use-section, .features-section {
    padding: 50px 0;
    background-color: #f4f8fb;
    
}

.how-to-use-section .title, .features-section .title {
    color: #333;
}

.how-to-use-section .card, .features-section .card {
    border: 1px solid #e0e0e0;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.how-to-use-section .card:hover, .features-section .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.how-to-use-section .icon, .features-section .icon {
    font-size: 2.5em;
    color: #1e88e5;
    margin-bottom: 15px;
}

.code-box {
    background-color: #2e2e2e;
    color: #d4d4d4;
    border-radius: 0 0 5px 5px;
    padding: 20px;
    border: 1px solid #444;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: relative;
}

.code-header {
    background-color: #1e1e1e;
    padding: 10px 15px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #c586c0;
    border-bottom: 1px solid #444;
}

.code-title {
    margin: 0;
}

.code-tabs {
    display: flex;
    gap: 10px;
}

.code-tab {
    padding: 5px 10px;
    background-color: #444;
    color: #ddd;
    border-radiusHere's the continuation and completion of the CSS code for the code box tabs:

```css
.code-tab {
    padding: 5px 10px;
    background-color: #444;
    color: #ddd;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.code-tab:hover {
    background-color: #666;
}

.code-tab.active {
    background-color: #333;
    color: #fff;
}

.code-content {
    font-family: 'Courier New', Courier, monospace;
    font-size: 0.9em;
    white-space: pre-wrap;
    word-wrap: break-word;
}

.response-title {
    font-weight: bold;
    margin-bottom: 10px;
}

.error-text {
    color: #ff3860;
}
.loading-spinner {
    margin-left: 10px;
    font-size: 1em;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<body>

    <!-- Header -->
    <nav class="navbar is-spaced">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                <img src="https://firebasestorage.googleapis.com/v0/b/hp-mart-eec86.appspot.com/o/Artboard%203%20(1).png?alt=media&token=e2de6518-68c4-481a-9ea9-bcc6fcbbbabf" alt="Yoruba API Logo" style="max-height: 80px;">

                </a>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
          
                    <a class="navbar-item has-text-black" href="#">Features</a>
                    <a class="navbar-item has-text-black" href="#">Pricing</a>
                    <a class="navbar-item has-text-black" href="#">API</a>
                    <a class="navbar-item button is-primary" href="#">Let's Talk</a>
                </div>
            </div>
        </div>
    </nav>
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="title">One API, Instant Translation for Fintech</h1>
        <h2 class="subtitle">Provide real-time English to Yoruba  translation with our robust and secure API.</h2>
        <div class="query-box">
            <input class="input is-medium" type="text" placeholder="Enter English text for translation" id="query-input">
            <button class="button is-primary is-medium" onclick="testApi()" id="translate-button">
                <span id="button-text">Translate</span>
                <span class="loading-spinner" id="loading-spinner" style="display: none;">⏳</span>
            </button>
        </div>
        <div class="result-box" id="result-box">
            <p class="response-title">Translation Result:</p>
            <p id="result-text" class="has-text-centered">Your translation will appear here...</p>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="section features-section">
    <div class="container">
        <h2 class="title has-text-centered">Explore Our Key Features</h2>
        <div class="columns is-multiline">
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-content has-text-centered">

                        <h3 class="title is-5">Real-time Translation</h3>
                        <p>Translate Yoruba to English instantly with our state-of-the-art API.</p>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-content has-text-centered">
                      <h3 class="title is-5">API Integration</h3>
                        <p>Easy integration into your fintech applications using our robust API.</p>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-content has-text-centered">
                    <h3 class="title is-5">Accurate and Reliable</h3>
                        <p>High accuracy translations you can rely on for critical fintech operations.</p>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-content has-text-centered">

                        <h3 class="title is-5">Customizable</h3>
                        <p>Tailor our services to meet your specific needs and requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Use Our API Section -->
<section class="section how-to-use-section">
    <div class="container">
        <h2 class="title">How to Use Our API</h2>
        <div class="columns">
            <div class="column is-one-third">
                <!-- Steps as cards -->
                <div class="card">
                    <div class="card-content">
                        <h3 class="title is-5">Step 1: Sign Up</h3>
                        <p>Create an account to access our API and start using translation services.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h3 class="title is-5">Step 2: Get API Key</h3>
                        <p>Obtain your unique API key from the dashboard to authenticate requests.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h3 class="title is-5">Step 3: Make a Request</h3>
                        <p>Send a request with the text to be translated, and get instant results.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h3 class="title is-5">Step 4: Analyze Results</h3>
                        <p>Review the translation results and implement them into your application.</p>
                    </div>
                </div>
            </div>
            <div class="column is-two-thirds">
                <!-- Code box with a darker theme -->
                <div class="code-box">
                    <div class="code-header">
                        <div class="code-tabs">
                            <div class="code-tab active">index.js</div>
                            <div class="code-tab">style.css</div>
                            <div class="code-tab">README.md</div>
                        </div>
                        <span class="material-icons">close</span>
                    </div>
                    <pre class="code-content">
// Example JavaScript Code to Use the API
import fetch from 'node-fetch';

// Function to make a translation request
async function translateText(apiKey, text) {
    const url = `http://44.201.173.182/translate?text=${encodeURIComponent(text)}&key=${apiKey}`;
    try {
        const response = await fetch(url);
        const data = await response.json();
        console.log('Translation:', data.translation);
    } catch (error) {
        console.error('Error:', error);
    }
}

// Example usage
const apiKey = 'YOUR_API_KEY';
const textToTranslate = 'Maximum Deposit';
translateText(apiKey, textToTranslate);
                    </pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script for API Testing -->
<script>
    function testApi() {
        const query = document.getElementById('query-input').value;
        const resultBox = document.getElementById('result-box');
        const resultText = document.getElementById('result-text');

        if (query) {
            fetch('http://44.201.173.182:5000/translate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ text: query })
            })
            .then(response => response.json())
            .then(data => {
                resultText.textContent = data.translation || "No translation available.";
                resultBox.style.display = 'block';
            })
            .catch(error => {
                resultText.textContent = "Error: " + error;
                resultText.classList.add('error-text');
                resultBox.style.display = 'block';
            });
        } else {
            resultText.textContent = "Please enter some text to translate.";
            resultText.classList.add('error-text');
            resultBox.style.display = 'block';
        }
    }
</script>


    <script>
        function testApi() {
    const query = document.getElementById('query-input').value;
    const resultBox = document.getElementById('result-box');
    const resultText = document.getElementById('result-text');
    const translateButton = document.getElementById('translate-button');
    const buttonText = document.getElementById('button-text');
    const loadingSpinner = document.getElementById('loading-spinner');

    if (query) {
        // Start loading state
        translateButton.disabled = true;
        buttonText.style.display = 'none';
        loadingSpinner.style.display = 'inline-block';

        fetch('http://44.201.173.182:5000/translate', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ text: query })
        })
        .then(response => response.json())
        .then(data => {
            resultText.textContent = data.translation || "No translation available.";
            resultBox.style.display = 'block';
        })
        .catch(error => {
            resultText.textContent = "Error: " + error;
            resultText.classList.add('error-text');
            resultBox.style.display = 'block';
        })
        .finally(() => {
            // Stop loading state
            translateButton.disabled = false;
            buttonText.style.display = 'inline';
            loadingSpinner.style.display = 'none';
        });
    } else {
        resultText.textContent = "Please enter some text to translate.";
        resultText.classList.add('error-text');
        resultBox.style.display = 'block';
    }
}

    </script>

</body>
</html>
