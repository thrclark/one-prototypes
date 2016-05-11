  $(document).ready(function() {

        var loadTasks = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('Title'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '../json/tasks-all.json'
        });



        loadTasks.initialize();

        $('.typeahead2').typeahead({
            highlight: false
        }, {
            name: 'Title',
            displayKey: 'Title',
            source: loadTasks.ttAdapter(),
            templates: {
                header: '<h3 class="">Tasks</h3>',
                suggestion: Handlebars.compile('<div class="row" style="margin-right: 0px;"><div class="col-xs-9"><strong style=""><a href="#" style="color:#555555; text-decoration:none;">{{Title}}</a></strong><div class="text-muted" style="padding-left:10px"><small>{{Campuses}}</small></div></div><div class="col-xs-3 text-right"><span class="label label-info">{{Type}}</span></div></div>')

            }
        });

    });