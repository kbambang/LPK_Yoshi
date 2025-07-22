const label = document.getElementById("translateLabel");
const spinner = document.getElementById("spinner");
const btn = document.getElementById("translateBtn");

let originalTexts = new Map();
let isTranslated = localStorage.getItem("lang") === "ja";

async function translateText(text, targetLang) {
    const res = await fetch("https://libretranslate.de/translate", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            q: text,
            source: targetLang === "ja" ? "id" : "ja",
            target: targetLang,
            format: "text"
        })
    });
    const data = await res.json();
    return data.translatedText;
}

function getTextElements() {
    return [...document.body.querySelectorAll("*")]
        .filter(el =>
            el.children.length === 0 &&
            el.textContent.trim().length > 0 &&
            el.tagName !== "SCRIPT" &&
            el.tagName !== "STYLE"
        );
}

async function translatePage(targetLang) {
    const elements = getTextElements();

    spinner?.classList.remove("d-none");

    for (const el of elements) {
        const original = el.innerText.trim();

        if (!originalTexts.has(el)) {
            originalTexts.set(el, original);
        }

        try {
            const translated = await translateText(original, targetLang);
            el.innerText = translated;
        } catch (error) {
            console.error("Error translate:", error);
        }
    }

    localStorage.setItem("lang", targetLang);
    isTranslated = targetLang === "ja";
    if (label) label.textContent = isTranslated ? "Bahasa" : "日本語";

    spinner?.classList.add("d-none");
}

function restoreOriginalText() {
    spinner?.classList.remove("d-none");

    originalTexts.forEach((text, el) => {
        el.innerText = text;
    });

    localStorage.setItem("lang", "id");
    isTranslated = false;
    if (label) label.textContent = "日本語";

    setTimeout(() => {
        spinner?.classList.add("d-none");
    }, 300);
}

// Event tombol (jika ada tombol)
btn?.addEventListener("click", () => {
    if (isTranslated) {
        restoreOriginalText();
    } else {
        translatePage("ja");
    }
});

// Jalankan otomatis kalau sebelumnya user sudah ubah ke Jepang
window.addEventListener("DOMContentLoaded", () => {
    if (isTranslated) {
        translatePage("ja");
    }
});
