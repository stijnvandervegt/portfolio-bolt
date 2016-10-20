var Vue = require('vue');
var PortfolioManager = require('../managers/portfolio');

Vue.component('modal', {
    template: '#modal-template',
    props: {
        show: {
            type: Boolean,
            required: true,
            twoWay: false
        },
        project: Object
    }
});

var PortfolioComponent = Vue.component('portfolio', {
    template: '#portfolioTemplate',
    data: function() {
        return {
            projects: []
        }
    },
    created: function() {
        var self = this;

        PortfolioManager.getFeed(function(result) {
            self.projects = result;
        });
    },
    methods: {
        showModal: function(project) {
            project.attributes.showModal = true;
        },
        checkModal: function(project) {
            return project.attributes.showModal == '1' ? true : false;
        }
    }
});

module.exports = PortfolioComponent;