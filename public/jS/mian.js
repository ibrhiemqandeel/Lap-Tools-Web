/* ---------------------------------------------------------------
   mian.js — JavaScript نقي 100% (بدون أي كود Blade)
   يجلب قائمة الصفحات من ملف JSON ثابت: /js/pages.json
   ويُعدّ نتائج البحث منه مباشرة.
   ---------------------------------------------------------------- */

(function () {
    "use strict";

    const PAGES_JSON_URL = "/jS/pages.json";   // إذا المجلد اسمه jS بالضبط
    const searchInput = document.getElementById("searchInput");
    const searchResults = document.getElementById("searchResults");
    

    if (!searchInput || !searchResults) {
        console.warn("⚠️ لم يتم العثور على عنصري #searchInput أو #searchResults في الصفحة.");
        return;
    }

    let validPages = [];
    let currentFiltered = [];
    let activeIndex = -1;
    let debounceTimer = null;

    /* -------------------- تحميل بيانات الصفحات -------------------- */
    async function loadPages() {
        try {
            const res = await fetch(PAGES_JSON_URL, { cache: "force-cache" });

            if (!res.ok) {
                throw new Error(`HTTP ${res.status}`);
            }

            const pages = await res.json();

            validPages = pages.filter((page) => {
                if (!page.url) {
                    console.warn(
                        `⚠️ تحذير: الصفحة "${page.title}" (route: "${page.routeName}") لا تملك رابطًا صحيحًا — تحقق من ملف pages.json أو routes/web.php.`
                    );
                    return false;
                }
                return true;
            });
        } catch (err) {
            console.error("❌ فشل تحميل قائمة الصفحات من pages.json:", err);
            validPages = [];
        }
    }

    /* -------------------- عرض النتائج -------------------- */
    function renderResults(filtered) {
        searchResults.innerHTML = "";
        currentFiltered = filtered;
        activeIndex = -1;

        if (filtered.length === 0) {
            const li = document.createElement("li");
            li.textContent = "No results found.";
            li.classList.add("no-result");
            searchResults.appendChild(li);
            return;
        }

        const fragment = document.createDocumentFragment();

        filtered.forEach((page, index) => {
            const li = document.createElement("li");
            li.textContent = page.title;
            li.setAttribute("role", "option");
            li.id = `search-option-${index}`;

            // mousedown بدل click لمنع تعارض فقدان التركيز (blur) قبل تسجيل الانتقال
            li.addEventListener("mousedown", (e) => {
                e.preventDefault();
                window.location.href = page.url;
            });

            fragment.appendChild(li);
        });

        searchResults.appendChild(fragment);
    }

    /* -------------------- التنقل بالكيبورد -------------------- */
    function setActive(index) {
        const items = searchResults.querySelectorAll("li:not(.no-result)");
        if (!items.length) return;

        items.forEach((item) => item.classList.remove("active-item"));

        if (index < 0) index = items.length - 1;
        if (index >= items.length) index = 0;

        activeIndex = index;
        const activeItem = items[activeIndex];
        activeItem.classList.add("active-item");
        activeItem.scrollIntoView({ block: "nearest" });

        searchInput.setAttribute("aria-activedescendant", activeItem.id);
        searchInput.value = currentFiltered[activeIndex].title;
    }

    /* -------------------- منطق البحث (مع debounce) -------------------- */
    function performSearch(value) {
        const query = value.trim().toLowerCase();

        if (query === "") {
            hideResults();
            return;
        }

        const filtered = validPages.filter((page) =>
            page.title.toLowerCase().includes(query)
        );

        renderResults(filtered);
        searchResults.style.display = "block";
    }

    function hideResults() {
        searchResults.style.display = "none";
        searchResults.innerHTML = "";
        currentFiltered = [];
        activeIndex = -1;
    }

    /* -------------------- ربط الأحداث -------------------- */
    function initEvents() {
        searchInput.addEventListener("input", function () {
            clearTimeout(debounceTimer);
            const value = this.value;
            debounceTimer = setTimeout(() => performSearch(value), 150);
        });

        searchInput.addEventListener("keydown", function (e) {
            if (searchResults.style.display !== "block" || currentFiltered.length === 0) {
                return;
            }

            switch (e.key) {
                case "ArrowDown":
                    e.preventDefault();
                    setActive(activeIndex + 1);
                    break;
                case "ArrowUp":
                    e.preventDefault();
                    setActive(activeIndex - 1);
                    break;
                case "Enter":
                    e.preventDefault();
                    if (activeIndex >= 0 && currentFiltered[activeIndex]) {
                        window.location.href = currentFiltered[activeIndex].url;
                    } else if (currentFiltered.length > 0) {
                        window.location.href = currentFiltered[0].url;
                    }
                    break;
                case "Escape":
                    hideResults();
                    break;
            }
        });

        document.addEventListener("click", function (e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                hideResults();
            }
        });

        searchInput.addEventListener("focus", function () {
            if (this.value.trim() !== "" && currentFiltered.length > 0) {
                searchResults.style.display = "block";
            }
        });
    }

    /* -------------------- دالة عامة لفتح/تركيز البحث -------------------- */
    window.search = function () {
        searchInput.focus();
    };

    /* -------------------- التشغيل -------------------- */
    loadPages().then(initEvents);
})();
