Nova.booting((Vue, router, store) => {
    Vue.component('index-mask-field', require('./components/IndexField'))
    Vue.component('detail-mask-field', require('./components/DetailField'))
    Vue.component('form-mask-field', require('./components/FormField'))
})
