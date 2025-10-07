const passwordInput = document.getElementById("password");
const strengthBar = document.getElementById("passwordStrengthBar");
const strengthText = document.getElementById("passwordStrengthText");

const rules = {
    minLength: document.getElementById("min-length"),
    letters: document.getElementById("letters"),
    mixed: document.getElementById("mixed"),
    numbers: document.getElementById("numbers"),
    symbols: document.getElementById("symbols"),
};

passwordInput.addEventListener("input", function () {
    const value = passwordInput.value;

    const checks = {
        minLength: value.length >= 8,
        letters: /[a-zA-Z]/.test(value),
        mixed: /[a-z]/.test(value) && /[A-Z]/.test(value),
        numbers: /\d/.test(value),
        symbols: /[!@#$%^&*(),.?":{}|<>]/.test(value),
    };

    // Update setiap aturan
    let score = 0;
    Object.keys(checks).forEach((rule) => {
        if (checks[rule]) {
            hideRule(rules[rule]);
            score++;
        } else {
            showRule(rules[rule]);
        }
    });

    updateStrength(score);
});

function hideRule(element) {
    if (element.style.display !== "none") {
        element.classList.add("fade-out");
        setTimeout(() => (element.style.display = "none"), 300);
    }
}

function showRule(element) {
    if (element.style.display === "none") {
        element.style.display = "list-item";
        element.classList.remove("fade-out");
    }
}

function updateStrength(score) {
    const width = (score / 5) * 100;
    let color, text;

    switch (score) {
        case 0:
        case 1:
            color = "bg-danger";
            text = "Sangat lemah";
            break;
        case 2:
            color = "bg-warning";
            text = "Lemah";
            break;
        case 3:
            color = "bg-info";
            text = "Sedang";
            break;
        case 4:
            color = "bg-primary";
            text = "Kuat";
            break;
        case 5:
            color = "bg-success";
            text = "Sangat kuat";
            break;
    }

    strengthBar.className = "progress-bar " + color;
    strengthBar.style.width = width + "%";
    strengthText.textContent = "Kekuatan password: " + text;
}
