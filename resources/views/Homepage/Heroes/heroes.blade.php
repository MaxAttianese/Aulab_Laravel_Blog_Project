<x-main :title="$title">
    <main>

        <h2 class="text-center pt-5">Supereroi:</h2>

        <div class="container pt-4">
            <div class="row" id="appendHeroes">

            </div>
        </div>

    </main>

    <script>

        let heroesContainer = document.getElementById("appendHeroes");


        function createDom(objsserver) {

            console.log(objsserver);

            let cardContainer = document.createElement("div");
            cardContainer.classList.add("col-12", "col-md-6", "col-xl-3", "p-4", "text-center");
            heroesContainer.appendChild(cardContainer);

            let card = document.createElement("div");
            card.classList.add("card", "pt-3");
            card.setAttribute("style", "width: 18rem");
            cardContainer.appendChild(card);

            let cardBody = document.createElement("div");
            cardBody.classList.add("card-body");
            card.appendChild(cardBody);

            let heroName = document.createElement("h3");
            heroName.textContent = objsserver.name;
            cardBody.appendChild(heroName);

            let heroage = document.createElement("span");
            heroage.classList.add("fst-italic");
            heroage.textContent = "Age: " + objsserver.age;
            cardBody.appendChild(heroage);

            let heroUniverse = document.createElement("p");
            heroUniverse.classList.add("fw-bold", "lead", "pt-3");
            heroUniverse.textContent = objsserver.universe;
            cardBody.appendChild(heroUniverse);

        }


        async function getHeroes(url) {

            let Response = await fetch(url);

            let objsserver = await Response.json();

            for (let i = 0; i < objsserver.length; i++) {

                createDom(objsserver[i]);
            }
        }

        getHeroes("api/superhero");
    </script>
</x-main>