'use strict';



/*eslint-disable*/



var ScheduleList = [];
var ScheduleList1 = [];
var SCHEDULE_CATEGORY = [
    'milestone',
    'task'
];



function ScheduleInfo() {
    this.id = null;
    this.calendarId = null;
	
	

    this.title = null;
    this.body = null;
    this.location = null;
    this.isAllday = false;
    this.start = null;
    this.end = null;
    this.category = '';
    this.dueDateClass = '';



    this.color = null;
    this.bgColor = null;
    this.dragBgColor = null;
    this.borderColor = null;
    this.customStyle = '';
	
	

    this.isFocused = false;
    this.isPending = false;
    this.isVisible = true;
    this.isReadOnly = false;
    this.isPrivate = false;
    this.goingDuration = 0;
    this.comingDuration = 0;
    this.recurrenceRule = '';
    this.state = '';



    this.raw = {
        memo: '',
        hasToOrCc: false,
        hasRecurrenceRule: false,
        location: null,
        creator: {
            name: '',
            avatar: '',
            company: '',
            email: '',
            phone: ''
        }
    };
}




function generateRandomSchedule() {
    var schedule = new ScheduleInfo();
	console.log(schedule);	
   var schedule=[
   {
	  "title" : "The BAH HUMBUG SHOW",
	  "id" :101,
	  "calenderId": 1,
	  "location" : "Foxbridge Golf Club, UX" ,
	  "bgColor": "green",
	  "color" : "white",
	  "isReadOnly" : false,
	  "category" : "time",
	  "body" : "Please note this is different from a demo day. Fitting Days are reserved for people interested in purchasing the clubs after being fit.",
	  "start" : "Feb 11 2022 11:32:36",
	  "end" : "Feb 11 2022 12:00:36",
	  "isPrivate" : true,
	  "isAllday" : false,
	   },
//{id: 489273, title: 'Workout for 2020-04-05', isAllDay: false, start: '2020-02-01T11:30:00+09:00', end: '2020-02-01T12:00:00+09:00', goingDuration: 30, comingDuration: 30, color: '#ffffff', isVisible: true, bgColor: '#69BB2D', dragBgColor: '#69BB2D', borderColor: '#69BB2D', calendarId: 'Post', category: 'time', dueDateClass: '', customStyle: 'cursor: default;', isPending: false, isFocused: false, isReadOnly: false, isPrivate: false, location: '', attendees: '', recurrenceRule: '', state: ''},

   {
	  "title" : "CHRISTMAS PARTY",
	  "id" :102,
	  "calenderId": 2,
	  "location" : "Foxbridge Golf Club, UX" ,
	  "bgColor": "green",
	  "color" : "white",
	  "category" : "time",
	  "body" : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. ",
	  "start" : "Feb 11 2022 12:32:36",
	  "end" : "Feb 12 2022 12:32:36",
	  "isPrivate" : true,
	  "isAllday" : false,
	   },
	   
	      {
	  "title" : "WEDDING PARTY",
	  "id" :103,
	  "calenderId": 3,
	  "location" : "Foxbridge Golf Club, UX" ,
	  "bgColor": "#a5811d",
	  "color" : "white",
	  "category" : "time",
	  "body" : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. ",
	  "start" : "Feb 20 2022 12:32:36",
	  "end" : "Feb 21 2022 12:32:36",
	  "isPrivate" : true,
	  "isAllday" : false,
	   },
   
   
   
         {
	  "title" : "THOMAS KOVACS MUSICAL SHOW",
	  "id" :104,
	  "calenderId": 4,
	  "location" : "Foxbridge Golf Club, UX" ,
	  
	  "color" : "blue",
	  "category" : "time",
	  "body" : " Once again Thomas Kovacs will be singing your favorite songs <br> <b>Date:</b> APRIL 27th 2022 (Wednesday)",
	  "start" : "Apr 27 2022 12:32:36",
	  "end" : "Apr 27 2022 03:32:36",
	  "isPrivate" : true,
	  "isAllday" : false,
	   },
	   
	       {
	  "title" : "OPEN MIC - Mother's day Special",
	  "id" :105,
	  "calenderId": 5,
	  "location" : "Foxbridge Golf Club, UX" ,
	  
	  "color" : "green",
	  "category" : "time",
	  "body" : "Showcase your Talent <br> <b>Date:</b> MAY 08th 2022 (Sunday)",
	  "start" : "May 08 2022 12:32:36",
	  "end" : "May 08 2022 03:32:36",
	  "isPrivate" : true,
	  "isAllday" : false,
	   },
   
   ];
   
   for (var i=0; i < schedule.length;i += 1){
	   console.log(schedule[i]);
	   
	   ScheduleList1.push(schedule[i]);
	   }

    ScheduleList = ScheduleList1 
}
 ScheduleList = [];
generateRandomSchedule();
	
function generateSchedule(viewName, renderStart, renderEnd) {
   /* ScheduleList = [];
	generateRandomSchedule(calendar, renderStart, renderEnd);*/
}