function filterPage(config) {

    var self = this; // to be used in future functions (in jQuery) as a reference

    // default configuration
    this.config = {
        nr_of_people: null, // number of people for searched activities (to be received in config)
        date: null, // date for searched activities (to be received in config)
        budget_select_id: 'exampleFormControlSelect1', // id of the budget select field
        search_input_id: 'search_activity', // id of the search input field
        activities_id: 'activities',
        search_url: null, // this needs to come from the constructor argument
    }

    // replace the default values with what configuration we got in the constructor
    for(var key in config) {
        this.config[key] = config[key];
    }

    // other initial values
    this.search_cache = {}; // will contain all the previous search results so that when you type
                            // it doesn't search for every letter when the string has been already
                            // searched for before

    // find the elements
    this.budget_select = $('#'+this.config.budget_select_id);
    this.search_input = $('#'+this.config.search_input_id);
    this.activities = $('#'+this.config.activities_id);


    // initialize the budget select
    this.budget_select.change(function(ev) {
        self.search();
    });

    // initialize the text input
    this.search_input.on('keydown keyup click change', function(ev) {
        self.search();
    });


}

$.extend(filterPage.prototype, {

    /**
     * runs an AJAX request to search in activities based on what we now have stored
     * in this object (text, budget, nr_of_people, date)
     */
    search: function() {

        var self = this; // to be used in future functions (in AJAX) as a reference

        // if the current state of things is found in the cache we just generate
        // the activities from cache
        if(typeof(this.search_cache[this.generateCacheString()]) != 'undefined') {
            return this.renderActivities(this.search_cache[this.generateCacheString()]);
        }

        // otherwise we run a new AJAX request
        this.activities.addClass('loading');
        $.ajax({
            method: 'get',
            url: this.config.search_url,
            data: {
                text: this.search_input.val(),
                budget: this.budget_select.val(),
                people: this.config.nr_of_people,
                date: this.config.date
            },
            success: function(data) {
                self.activities.removeClass('loading');

                console.log(data);
            }
        })


    },
 
    /**
     * takes the current search data and generates a unique string to be used 
     * as a key for this.search_cache
     */
    generateCacheString: function() {
        return JSON.stringify({
            text: this.search_input.val(),
            budget: this.budget_select.val(),
            people: this.config.nr_of_people,
            date: this.config.date
        });
    }

});