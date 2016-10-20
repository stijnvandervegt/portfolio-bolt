var jQuery = require('jquery');
var _ = require('underscore');
var Portfolio = {
    data: {},
    getFeed: function(callback) {
        var self = this;
        jQuery.getJSON('/json/showcases', function(result) {

            console.log(result);
            self.data = self.mapData(result);
            console.log(self.data);
            callback(self.getData());

        }).error(function(error) {
            console.log(error);
        });
    },
    getData: function() {
        return this.data;
    },
    mapData: function(result) {
        return _.map(result.data, function(project) {
            var tags = [];

            if(typeof project.attributes.taxonomy !== 'undefined') {

                _.mapObject(project.attributes.taxonomy.tags, function(val, key) {
                    tags.push(val);
                    return val + 5;
                });

                project.attributes.taxonomy.tags = tags;

            }

            project.attributes.showModal = false;

            return project;

        })
    }

}

module.exports = Portfolio;