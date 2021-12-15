// Space to add the content informations to creation of the cards
const data = {};
const dataRecived;
const cardsStruture = {
    "teste":`<div class="card-group mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">vacina tall</h5>
            <p class="card-text">Descrição das informações</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Data e tals</small>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">vacina tall</h5>
            <p class="card-text">Descrição das informações</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Data e tals</small>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">vacina tall</h5>
            <p class="card-text">Descrição das informações</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Data e tals</small>
          </div>
        </div>
      </div>`
}

function cardCreation() {
    try {
        // Space call function to get the data from de BD to turn into cards

        // Space to recive the data from the BD and turn to an object and divide to an array
        const propertyValues = Object.values(dataRecived);
        
    }
    catch (err) {
        document.getElementById("demo").innerHTML = err.message;
    }
    finally{
        cardCreated();
    }

}

function cardCreated() {
    document.getElementById("cadsSpace").innerHTML = data.toString();
}

window.addEventListener("load", cardCreation);