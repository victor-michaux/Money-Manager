<template>
    <div id="operation-form" class="card">
        <div class="card-header text-center" v-bind:class="name">
            <h4>New {{ name }}</h4>
        </div>
        <div class="card-block">
            <div id="form-operation">
                <div class="form-group row">
                    <label for="title" class="col-4 col-sm-4 col-lg-3 col-xl-2 col-form-label">Title</label>
                    <div class="col">
                        <input type="text" class="form-control col" id="title" name="title" v-model="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-4 col-sm-4 col-lg-3 col-xl-2 col-form-label">Date</label>
                    <div class="col">
                        <input type="date" class="form-control col" id="date" value="2017-05-09" v-model="date" placeholder="Date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="amount" class="col-4 col-sm-4 col-lg-3 col-xl-2 col-form-label">Amount</label>
                    <div class="col">
                        <input type="number" class="form-control col" id="amount" name="amount" value="0" v-model="amount" placeholder="Amount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-4 col-sm-4 col-lg-3 col-xl-2 col-form-label">Category</label>
                    <div class="col">
                        <select class="form-control" id="category" v-model="category">
                            <option v-for="category in categories" v-bind:value="category.id" class="form-control col">{{ category.name }}</option>
                        </select>
                    </div>

                </div>
                <div class="text-center"><div @click="storeOperation" id="submit-button" class="btn btn-block btn-lg btn-primary">Add {{ name }}</div></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            type: { required: true},
            name: { required: true}
        },
        data: function () {
            return {
                title: "",
                date: new Date().toLocaleDateString(),
                amount: 0,
                category: 1,
                categories: []
            }
        },
        methods: {
            storeOperation: function () {
                axios.post('http://concordia.app:8000/api/operations', {
                    title: this.title,
                    date: this.date,
                    amount: this.amount,
                    type: this.type,
                    category: this.category
                }).then(function (response) {
                    window.location.replace("/operations");
                });
            }
        },
        created() {
            var self = this;
            axios.get('http://concordia.app:8000/api/categories').then(function (response) {
                self.categories = response.data.data;
            });
        }
    }
</script>