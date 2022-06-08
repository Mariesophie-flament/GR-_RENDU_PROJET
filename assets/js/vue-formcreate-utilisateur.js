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
                { id: 0, name: 'pseudo', type: 'text', label: 'Pseudo :' },
                { id: 1, name: 'nom', type: 'name', label: 'Nom :' },
                { id: 2, name: 'prenom', type: 'name', label: 'Prenom :' },
                { id: 3, name: 'datenaissance', type: 'date', label: 'Date de Naissance :' },
                { id: 4, name: 'adressemail', type: 'text', label: 'Adresse Mail :' },
                { id: 5, name: 'motdepasse', type: 'text', label: 'Mot de Passe :' },
            ],
            submit: { id: 0, type:"submit", value: 'Entrer' }
        }
    },
    methods : {

 validate: function(event) {

    message = "";
    this.isThereAFieldEmpty();
    let isPseudoValid = this.validatePseudo();
    let isNomValid = this.validateNom();
    let isPrenomValid = this.validatePrenom();
    let isDateNaissanceValid = this.validateDateNaissance();
    let isAdresseMailValid = this.validateAdresseMail();
    let isMdPValid = this.validateMdP();
    if (
        isPseudoValid && isNomValid && isPrenomValid && isDateNaissanceValid && isAdresseMailValid && isMdPValid) {
        message = "Le formulaire est valide.";
        this.setValid(this.$errorMessageID, this.$message);
    }
},
isThereAFieldEmpty: function() {
    if ((document.getElementById("pseudo").value === '') || (document.getElementById("nom").value === '') 
    || (document.getElementById("prenom").value === '') || (document.getElementById("datenaissance").value === '')
    || (document.getElementById("adressemail").value === '') || (document.getElementById("motdepasse").value === '') ) {
        alert("Un champ est vide");
    }
},
validatePseudo: function() {
    var isValid = true;
    value = document.getElementById("pseudo").value;
    if (/[a-zA-Z]/.test(value)) {
        var messagePseudo1 = "<br/>Le champ Pseudo n'est pas valide.";
        this.$message += messagePseudo1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (value === '') {
        var messagePseudo1 = "<br/>Le champ Pseudo est vide.";
        this.$message += messagePseudo1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateNom: function() {
    var isValid = true;
    var value = document.getElementById("nom").value;
    if (value === '') {
        var messageNom1 = "<br/>Le champ Nom est vide.";
        this.$message += messageNom1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageNom1 = "<br/>Le champ Nom n'est pas valide.";
        this.$message += messageNom1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validatePrenom: function() {
    var isValid = true;
    var value = document.getElementById("prenom").value;
    if (value === '') {
        var messagePrenom1 = "<br/>Le champ Prenom est vide.";
        this.$message += messagePrenom1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messagePrenom1 = "<br/>Le champ Prenom n'est pas valide.";
        this.$message += messagePrenom1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateDateNaissance: function() {
    var isValid = true;
    var value = document.getElementById("datenaissance").value;
    if (value === '') {
        var messageDateNaissance1 = "<br/>Le champ DateNaissance est vide.";
        this.$message += messageDateNaissance1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[1-9]/.test(value)) {
        var messageDateNaissance1 = "<br/>Le champ DateNaissance n'est pas valide.";
        this.$message += messageDateNaissance1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateAdresseMail: function() {
    var isValid = true;
    var value = document.getElementById("adressemail").value;
    if (value === '') {
        var messageAdresseMail1 = "<br/>Le champ AdresseMail est vide.";
        this.$message += messageAdresseMail1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageAdresseMail1 = "<br/>Le champ AdresseMail n'est pas valide.";
        this.$message += messageAdresseMail1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validateMdP: function() {
    var isValid = true;
    var value = document.getElementById("motdepasse").value;
    if (value === '') {
        var messageMdP1 = "<br/>Le champ Mot de Passe est vide.";
        this.$message += messageMdP1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (/[a-zA-Z]/.test(value)) {
        var messageMdP1 = "<br/>Le champ Mot de Passe n'est pas valide.";
        this.$message += messageMdP1;
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