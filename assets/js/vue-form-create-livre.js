Vue.prototype.$errorMessageID = "errorMessage";
Vue.prototype.$message = "";

Vue.component('form-validation', {
    template: `    
    <section class="frame">
            <article>
                <form id="app" @submit="validate">
                    <table>
                        <inputs v-for="input in inputs" v-bind:data="input" v-bind:key="input.id"></inputs>
                        <submit v-bind:data="submit"></submit>
                    </table>
                </form>
                <div id="errorMessage"></div>
            </article>
        </section>
    `,
   
    data() {
        return {
            inputs: [
                { id: 0, name: 'titre', type: 'text', label: 'Titre :' },
                { id: 1, name: 'datepubli', type: 'date', label: 'Date de publication :' },
                { id: 2, name: 'editeur', type: 'name', label: 'Editeur :' },
                { id: 3, name: 'collection', type: 'text', label: 'Collection :' },
                { id: 4, name: 'edition', type: 'text', label: 'Edition :' },
                { id: 5, name: 'nomauteur', type: 'name', label: 'Nom Auteur :' },
            ],
            submit: { id: 0, type:"submit", value: 'Entrer' }
        }
    },
    methods : {

 validate: function(event) {

    message = "";
    this.isThereAFieldEmpty();
    let isTitreValid = this.validateTitre();
    let isDateValid = this.validateDate();
    let isEditeurValid = this.validateEditeur();
    let isCollectionValid = this.validateCollection();
    let isEditionValid = this.validateEdition();
    let isAuteurValid = this.validateAuteur();
    if (
        isTitreValid && isDateValid && isEditeurValid && isCollectionValid && isEditionValid && isAuteurValid) {
        message = "L'enregistrement a été enregistré et est en attente d'approbation.";
        this.setValid(this.$errorMessageID, this.$message);
    }
},
isThereAFieldEmpty: function() {
    if ((document.getElementById("titre").value === '') || (document.getElementById("datepubli").value === '') 
    || (document.getElementById("editeur").value === '') || (document.getElementById("collection").value === '')
    || (document.getElementById("edition").value === '') || (document.getElementById("nomauteur").value === '') ) {
        alert("Le formulaire n'est pas valide");
    }
},
validateTitre: function() {
    var isValid = true;
    value = document.getElementById("titre").value;
    if (/[a-zA-Z]/.test(value)) {
        var messageName1 = "<br/>Le champ Titre n'est pas valide.";
        this.$message += messageName1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (value === '') {
        var messageName1 = "<br/>Le champ Titre est vide.";
        this.$message += messageName1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateDate: function() {
    var isValid = true;
    var value = document.getElementById("date").value;
    if (value === '') {
        var messageDate1 = "<br/>Le champ Date de publication est vide.";
        this.$message += messageDate1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[1-9]/.test(value)) {
        var messageDate1 = "<br/>Le champ Date de publi n'est pas valide.";
        this.$message += messageDate1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateEditeur: function() {
    var isValid = true;
    var value = document.getElementById("editeur").value;
    if (value === '') {
        var messageEditeur1 = "<br/>Le champ Editeur est vide.";
        this.$message += messageEditeur1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageEditeur1 = "<br/>Le champ Editeur n'est pas valide.";
        this.$message += messageEditeur1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateCollection: function() {
    var isValid = true;
    var value = document.getElementById("collection").value;
    if (value === '') {
        var messageCollection1 = "<br/>Le champ Collection est vide.";
        this.$message += messageCollection1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageCollection1 = "<br/>Le champ Collection n'est pas valide.";
        this.$message += messageCollection1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateEdition: function() {
    var isValid = true;
    var value = document.getElementById("edition").value;
    if (value === '') {
        var messageEdition1 = "<br/>Le champ Edition est vide.";
        this.$message += messageEdition1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageEdition1 = "<br/>Le champ Edition n'est pas valide.";
        this.$message += messageEdition1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateAuteur: function() {
    var isValid = true;
    var value = document.getElementById("nomauteur").value;
    if (value === '') {
        var messageAuteur1 = "<br/>Le champ Auteur est vide.";
        this.$message += messageAuteur1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageAuteur1 = "<br/>Le champ Auteur n'est pas valide.";
        this.$message += messageAuteur1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},

setError: function(errorID, message) {
    document.getElementById(errorID).innerHTML = message;
    document.getElementById(errorID).style.color = 'red';
    document.getElementById(errorID).style.visibility = "visible";
},
setValid: function(errorID, message) {
    document.getElementById(errorID).innerHTML = message;
    document.getElementById(errorID).style.color = 'green';
    document.getElementById(errorID).style.visibility = "visible";
}

    }
})

Vue.component('inputs', {
    props: ['data'],
    template: `
    <tr>
        <td><label :name="data.name">{{ data.label }}</label></td>
        <td><input :id="data.name" :name="data.name" :type="data.type" /></td>
    </tr>
    `
})

Vue.component('submit', {
    props: ['data'],
    template: `
    <tr>
        <td></td>
        <td><input type="data.type" :value="data.value" /></td>
    </tr>
    `
})

var validation = new Vue({
    el: "#app-validation"
})
