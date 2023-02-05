<template>
    <select :id="id"
            class="bg-gray-50 border border-gray-300
            text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block  dark:bg-gray-700 dark:border-gray-600
            dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full p-3.5"
            :class="classes"
    >
        <option selected>Choose an option</option>
        <option value="US">Option 1</option>
        <option value="CA">Option 2</option>
        <option value="FR">Option 3</option>
        <option value="DE">Option 4</option>
    </select>
</template>

<script>
import _ from 'lodash';

export default {
    name: "Select",
    props: {
        classes: Array
    },
    data() {
        return {
            id: ''
        }
    },
    beforeMount() {
        this.id = _.uniqueId('filter-select-')
    }
}
</script>