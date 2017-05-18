<template>
    <div class="card">
        <div class="card-header text-center">
            <h4>{{ title }}</h4>
        </div>
        <div class="card-block">
            <p>Total = {{ total }}</p>
            <div v-show="displayProgress" class="progress">
                <div class="progress-bar income" role="progressbar" v-bind:style="{ width: progressIncome }" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar expense" role="progressbar" v-bind:style="{ width: progressExpense }" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <table class="table" @click="total">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                <operation-item v-if="display(operation)" v-for="operation in operations" :key="operation.id" v-bind:operation="operation"></operation-item>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['operations', 'listType', 'title', 'displayProgress'],
        methods: {
            display: function (operation) {
                return operation.type === this.listType || this.listType === "all"
            },
            operationsSortedByDate: function() {
                function compare(a, b) {
                    if (a.date > b.date)
                        return -1;
                    if (a.date < b.date)
                        return 1;
                    return 0;
                }

                return this.operations.sort(compare);
            }
        },
        computed: {
            total: function () {
                var total = 0;
                this.displayedOperations.forEach(function (child) {
                    var amount = child.operation.amount;
                    total += (child.operation.type === "expense" ? (amount * -1) : (amount * 1));
                });
                return total;
            },
            progressIncome: function () {
                let nb = 0;
                this.displayedOperations.forEach(function (child) {
                    if(child.operation.type === "income") {
                        nb++;
                    }
                });
                return (nb / this.displayedOperations.length) * 100 + "%";
            },
            progressExpense: function () {
                let nb = 0;
                this.displayedOperations.forEach(function (child) {
                    if(child.operation.type === "expense") {
                        nb++;
                    }
                });
                return (nb / this.displayedOperations.length) * 100 + "%";
            }
        },
        data: function () {
            return {
                displayedOperations: []
            }
        },
        created: function () {
            this.displayedOperations = this.$children;
        }
    }
</script>