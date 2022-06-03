import $ from 'jquery';

function appendCards(store) {
    let availableColor, availablePhrase

    if (store.available == "Dostępne") {
        availableColor = "green"
        availablePhrase = "Dostępne"
    } else if (store.available == "Sprzedane") {
        availableColor = "red"
        availablePhrase = "Sprzedane"
    } else if (store.available == "Zarezerwowane") {
        availableColor = "red"
        availablePhrase = "Zarezerwowane"
    } else if (store.available == "Wynajęte") {
        availableColor = "red"
        availablePhrase = "Wynajęte"
    }

    if (store.visible == "Niewidoczne") return
    $('.results').append(`     
    <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-header png-bg-color-superLight p-4">
            <div class="diagonal badge ${availableColor}">
                <span>${availablePhrase}</span>
            </div>
            <a href="/lokale/${store.name}"><img class="img-fluid w-100" src="images/cards/web/png/${store.name}.png" alt=""></a>
            </div>
            <div class="card-body">
                <h3 class="mt-4 mb-2">Lokal ${store.name}</h3>
                <p>Metraż: <span class="fw-light"> ${store.metric}m²</span></p>
                <p>Piętro: <span class="fw-light"> ${store.floor}</span></p>
                <p>Pokój sanitarny:<span class="fw-light"> ${store.sanitary}</span></p>

                <div class="">
                    <a href="/kontakt/${store.name}"><button type="button" class="btn btn-secondary text-center font-size-m mt-2 mr-2 w-100">Zapytaj</button></a>
                </div>
                <div class="">
                    <a href="/lokale/${store.name}"><button type="button" class="btn btn-outline-secondary text-center font-size-m mt-2 w-100">Podgląd</button></a>
                </div>
            </div>
        </div>
    </div>
    `
    );
}

function appendAppFloor(store) {
    let fill
    let href
    let classes

    if (store.available == "Dostępne") {
        fill = "#a1c4a1"
        href = "/lokale/" + store.name
        classes = "svg-store cursor_expand"
    } else if (store.available == "Sprzedane") {
        fill = "#111111"
        href = ""
        classes = "cursor_shrink"
    } else if (store.available == "Zarezerwowane") {
        fill = "#111111"
        href = ""
        classes = "cursor_shrink"
    } else if (store.available == "Wynajęte") {
        fill = "#111111"
        href = ""
        classes = "cursor_shrink"
    }

    document.getElementById(`results-3d-floor-${store.floor}`).innerHTML += `
    <polygon id="_${store.name}" class="${classes}" fill="${fill}" data-href="${href}" data-tooltip-available="${store.available}" data-name="${store.floor}" data-tooltip data-tooltip-name="${store.name}" data-tooltip-metric="${store.metric}" data-tooltip-floor="${store.floor}"  data-tooltip-buy-price="${store.buyPrice}" points="${store.points}"/>`
}

export { appendCards, appendAppFloor }