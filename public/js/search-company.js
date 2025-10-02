document.getElementById("entity_search").addEventListener("keyup", function () {
    let query = this.value;
    let suggestionBox = document.getElementById("entitySuggestions");
    let hiddenEntityCode = document.getElementById("entity_code");
    let newEntityInput = document.getElementById("newEntityInput");

    if (query.length < 2) {
        suggestionBox.innerHTML = "";
        return;
    }

    let url = window.Laravel.url;

    fetch(`${url}/?q=${encodeURIComponent(query)}`)
        .catch((err) => console.error(err))
        .then((res) => res.json())
        .then((data) => {
            suggestionBox.innerHTML = "";

            if (data.length > 0) {
                data.forEach((entity) => {
                    let item = document.createElement("a");
                    item.href = "javascript:void(0)";
                    item.classList.add(
                        "list-group-item",
                        "list-group-item-action",
                        "fs-8"
                    );
                    item.textContent = entity.entity_name;
                    item.onclick = () => {
                        document.getElementById("entity_search").value =
                            entity.entity_name;
                        hiddenEntityCode.value = entity.entity_code;
                        suggestionBox.innerHTML = "";
                        newEntityInput.classList.add("d-none");
                        newEntityInput
                            .querySelectorAll("input, textarea")
                            .forEach((el) => {
                                el.removeAttribute("required");
                                el.value = "";
                                el.disabled = true;
                            });
                    };
                    suggestionBox.appendChild(item);
                });
            } else {
                let item = document.createElement("a");
                item.href = "javascript:void(0)";
                item.classList.add(
                    "list-group-item",
                    "list-group-item-action",
                    "text-success",
                    "fs-8"
                );
                item.textContent = `+ Tambah "${query}" sebagai perusahaan baru`;
                item.onclick = () => {
                    hiddenEntityCode.value = "new";
                    document.getElementById("entity_name").value = query;
                    newEntityInput.classList.remove("d-none");
                    newEntityInput
                        .querySelectorAll("input, textarea")
                        .forEach((el) => {
                            el.setAttribute("required", true);
                            el.disabled = false;
                        });
                    suggestionBox.innerHTML = "";
                };
                suggestionBox.appendChild(item);
            }
        });
});
