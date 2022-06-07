
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
                { id: 0, name: 'name', type: 'text', label: 'Nom :' },
                { id: 1, name: 'password', type: 'password', label: 'Mot de passe :' },
            ],
            submit: { id: 0, type:"submit", value: 'Entrer' }
        }
    },
    methods : {

 validate: function(event) {

    message = "";
    this.isThereAFieldEmpty();
    let isNameValid = this.validateName();
    let isPasswordValid = this.validatePassword();
    if (
        isNameValid &&
        isPasswordValid ) {
        message = "Le formulaire est valide.";
        this.setValid(this.$errorMessageID, this.$message);
    }
},
isThereAFieldEmpty: function() {
    if ((document.getElementById("name").value === '') ||
        (document.getElementById("password").value === '')) {
        alert("Un champ est vide");
    }
},
validateName: function() {
    var isValid = true;
    value = document.getElementById("name").value;
    if (/[1-9]/.test(value)) {
        var messageName1 = "<br/>Le champ Nom n'est pas valide.";
        this.$message += messageName1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (value === '') {
        var messageName1 = "<br/>Le champ Nom est vide.";
        this.$message += messageName1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    return isValid;
},
validatePassword: function() {
    var isValid = true;
    var value = document.getElementById("password").value;
    if (value === '') {
        var messageAge1 = "<br/>Le champ Mot de Passe est vide.";
        this.$message += messageAge1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    // Ici nous pourrions ajouter tous les caractères spéciaux qui ne doivent pas non plus être inclus.
    if (/[a-zA-Z]/.test(value)) {
        var messageAge1 = "<br/>Le champ Age n'est pas valide.";
        this.$message += messageAge1;
        this.setError(this.$errorMessageID, this.$message);
        isValid = false;
    }
    if (value <= 0) {
        var messageAge2 = "<br/>L'age n'est peut pas être zéro ou négatif.";
        this.$message += messageAge2;
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
    document.getElementById(errorID).style.visibility = "hidden";
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