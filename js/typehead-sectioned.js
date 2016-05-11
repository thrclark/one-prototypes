$(document).ready(function(){

var tasks = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('Title'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,	
  prefetch: '../json/tasks-all.json'
});
 
var taskcenters = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('CenterTitle'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '../json/task-center.json'
});
 
tasks.initialize();
taskcenters.initialize();
 
$('.typeahead2').typeahead({
  highlight: false
},
{
  name: 'task',
  displayKey: 'Title',
  source: tasks.ttAdapter(),
  templates: {
    header: '<h3 class="">Tasks</h3>',
	suggestion: Handlebars.compile('<div class="row" style="margin-right: 0px;"><div class="col-xs-6"><strong style="">{{Title}}</strong></div><div class="col-xs-6"><div class="text-muted" style="padding-left:10px">{{Campuses}}</div></div></div>')
  }
},
{
  name: 'task-center',
  displayKey: 'CenterTitle',
  source: taskcenters.ttAdapter(),
  templates: {
    header: '<h3 class="">Task Centers</h3>'
  }
});

});