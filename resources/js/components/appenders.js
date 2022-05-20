import $ from 'jquery';

function appendCards(store) {
    $('.results').append(`     
    <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-header png-bg-color-superLight p-4">
                <a href="/lokale/${store.name}"><img class="img-fluid w-100" src="images/cards/web/png/${store.name}.png" alt=""></a>
            </div>
            <div class="card-body">
                <h3 class="mt-4 mb-2">Lokal ${store.name}</h3>
                <p>Metraż: <span class="fw-light"> ${store.metric}</span></p>
                <p>Piętro: <span class="fw-light"> ${store.floor}</span></p>
                <p>Pokój sanitarny:<span class="fw-light"> ${store.sanitary}</span></p>

                <p class="mt-4 font-size-l">Cena:<span class="fw-light"> ${store.buyPrice}</span></p>
                <a href="/kontakt/${store.name}"><button type="button" class="btn btn-secondary font-size-m mt-2 mr-2">Zapytaj</button></a>
                <a href="/lokale/${store.name}"><button type="button" class="btn btn-outline-secondary text-center font-size-m mt-2">Podgląd</button></a>
            </div>
        </div>
    </div>
    `
    );
}

function appendAppFloor(store) {
    document.getElementById(`results-3d-floor-${store.floor}`).innerHTML += `  
    <polygon id="_${store.name}" class="svg-store cursor_expand" data-name="${store.floor}" points="${store.points}"/>
`
}

export { appendCards, appendAppFloor }