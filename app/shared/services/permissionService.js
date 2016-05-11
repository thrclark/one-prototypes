/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function PermissionService($http, $q) {
	
	this.getPermissionTypes = function() {
		return [
             {
            	 name: AndExpression.label,
            	 value: AndExpression.class
             },
             {
            	 name: NotExpression.label,
            	 value: NotExpression.class
             },
             {
            	 name: OrExpression.label,
            	 value: OrExpression.class
             }/*,
             {
            	 name: GroupExpression.label,
            	 value: GroupExpression.class,
            	 fields: [
            	 	{
            	    	name: 'Group Name',
            	    	key: 'key',
            	    	type: 'text'
            		}
            	]
             }*/, {
            	 name: PersonAttributeExpression.label,
            	 value: PersonAttributeExpression.class,
            	 fields: [
            	 	{
            	    	name: 'Value',
            	    	key: 'key',
            	    	type: 'select'
            	    },
            	    {
            	        name: 'Is Equal To',
            	         key: 'value',
             	    	type: 'text'
            	    }
            	]
             }
		];
	};
	
	this.getAttributes = function(tenantId) {
		var url = contextPath + '/admin/attributeMappings';
		if (tenantId != null && tenantId.length > 0) {
			url += '?tenantId=' + tenantId;
		}
		return $http({method: 'GET', url: url});
	}
	
	this.parseExpression = function(inputExpression) {
		var expression = null;
		switch(inputExpression.class)
		{
		case AndExpression.class:
			expression = new AndExpression();
			if (inputExpression.children && inputExpression.children.length > 0) {
				for (var i=0; i< inputExpression.children.length; i++) {
					expression.children.push(this.parseExpression(inputExpression.children[i]));
				}
			}
			break;
		case OrExpression.class:
			expression = new OrExpression();
			if (inputExpression.children && inputExpression.children.length > 0) {
				for (var i=0; i< inputExpression.children.length; i++) {
					expression.children.push(this.parseExpression(inputExpression.children[i]));
				}
			}
			break;
		case NotExpression.class:
			expression = new NotExpression();
			if (inputExpression.children && inputExpression.children.length > 0) {
				for (var i=0; i< inputExpression.children.length; i++) {
					expression.children.push(this.parseExpression(inputExpression.children[i]));
				}
			}
			break;
		case GroupExpression.class:
			expression = new PersonAttributeExpression('groups', inputExpression.key);
			break;
		case PersonAttributeExpression.class:
			expression = new PersonAttributeExpression(inputExpression.key, inputExpression.value);
			break;
		}
		return expression;
	};
	
	this.buildExpression = function(type, args) {
		var expression = null;
		switch(type)
		{
		case AndExpression.class:
			expression = new AndExpression();
			break;
		case OrExpression.class:
			expression = new OrExpression();
			break;
		case NotExpression.class:
			expression = new NotExpression();
			break;
		case GroupExpression.class:
			expression = new GroupExpression();
			break;
		case PersonAttributeExpression.class:
			expression = new PersonAttributeExpression();
			break;
		}
		
		if (args) {
			for (var prop in args) {
				if (args.hasOwnProperty(prop)) {
					expression[prop] = args[prop];
			    }
			}
		}
		
		return expression;
	};
};


function NonLeafExpression() {
};

function AndExpression() {
	this.class = AndExpression.class;
	this.children = [];
};
AndExpression.prototype = new NonLeafExpression();
AndExpression.prototype.constructor = AndExpression;
AndExpression.prototype.display = function(){return AndExpression.label;};
AndExpression.class = 'edu.iu.es.espd.sd.expressions.AndExpression';
AndExpression.label = 'And';

function OrExpression() {
	this.class = OrExpression.class;
	this.children = [];
};
OrExpression.prototype = new NonLeafExpression();
OrExpression.prototype.constructor = OrExpression;
OrExpression.prototype.display = function(){return OrExpression.label;};
OrExpression.class = 'edu.iu.es.espd.sd.expressions.OrExpression';
OrExpression.label = 'Or';

function NotExpression() {
	this.class = NotExpression.class;
	this.children = [];
};
NotExpression.prototype = new NonLeafExpression();
NotExpression.prototype.constructor = NotExpression;
NotExpression.prototype.display = function(){return NotExpression.label;};
NotExpression.class = 'edu.iu.es.espd.sd.expressions.NotExpression';
NotExpression.label = 'Not';

function GroupExpression(group) {
	this.class = GroupExpression.class;
	this.key = group;
};
GroupExpression.prototype.display = function(){return GroupExpression.label + ': ' + this.key;};
GroupExpression.class = 'edu.iu.es.espd.sd.expressions.GroupExpression';
GroupExpression.label = 'Group';

function PersonAttributeExpression(key, value) {
	this.class = PersonAttributeExpression.class;
	this.key = key;
	this.value = value;
};
PersonAttributeExpression.prototype.display = function(attributeMappings) {
	var key = this.key;
	if (typeof attributeMappings != 'undefined' && typeof attributeMappings[this.key] != 'undefined' && attributeMappings[this.key] != null) {
		key = attributeMappings[this.key];
	}
	
	return key + ' = ' + this.value;
};
PersonAttributeExpression.class = 'edu.iu.es.espd.sd.expressions.PersonAttributeExpression';
PersonAttributeExpression.label = 'Condition';