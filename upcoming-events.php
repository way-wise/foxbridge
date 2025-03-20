<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
 
  <title>Upcoming events at Foxbridge Golf Club</title>
  <meta name="description" content="We have various events happening at the Club, so please browse this page to stay updated" />
	<link rel="icon" href="images/fave_icon.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mutual-temp.css">
    
      <link rel="stylesheet" type="text/css" href="events/tui-calendar.css">
  <link rel="stylesheet" type="text/css" href="events/default.css">
  
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="owl/css/owl.carousel.css">
	    
        <script src="js/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-226072037-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-226072037-1');
</script>

  </head>
 
  <body>
  <?php echo implode('',file('include/header.php' )); ?>
    <div class="contactbanner">
  <div class="container">
  <h2 class="meberTilte">Upcoming Events</h2>
  </div>
  </div>

  	 <div class="container" style="position:relative;">
        <div class="row">
        <div class="col-lg-12"> 
        <!--=====IF NOW UPCOMING EVENT THEN REMOVE COMMENTS FOR BELOW LINE======-->
        
        <!--<div class="alert alert-info  m-4">There are no upcoming events currently. The below calender will be updated once the events are confirmed </div>-->
        <div class="code-html">
    <div id="menu">
      <span id="menu-navi">
        <button type="button" class="btn-default btn-sm move-today movebutton" data-action="move-today">Today</button>
        <button type="button" class="btn-default btn-sm move-day movebutton" data-action="move-prev">
          <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
        </button>
        <button type="button" class="btn-default btn-sm move-day movebutton" data-action="move-next">
          <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
        </button>
      </span>
      <span id="renderRange" class="render-range"></span>
    </div>

    <div id="calendar"></div>
  </div>
        
        
        </div>
        </div>
        </div>
   <div style="clear:both"></div>
   <?php echo implode('',file('include/footer.php'));?>
  
  <a href="#" ID="backToTop"></a>
  
  
<script src="owl/js/owl.carousel.js"></script>
<script src="js/custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
                    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   
    <script src="events/tui-code-snippet.js"></script>
  <script src="events/moment.js"></script>
   <script src="events/tui-calendar.js"></script>
  <script src="events/calendars.js"></script>
   <script src="events/schedules.js"></script>
   <script type="text/javascript" class="code-js">
  // register templates 	
  
  var templates = {
	  
    popupIsAllDay: function() {
      return 'All Day';
    },
	
    popupStateFree: function() {
      return 'Free';
    },
    popupStateBusy: function() {
      return 'Busy';
    },
    titlePlaceholder: function() {
      return 'Subject';
    },
    locationPlaceholder: function() {
      return 'Location';
    },
    startDatePlaceholder: function() {
      return 'Start date';
    },
    endDatePlaceholder: function() {
      return 'End date';
    },
    popupSave: function() {
      return 'Save';
    },
    popupUpdate: function() {
      return 'Update';
    },
    popupDetailDate: function(isAllDay, start, end) {
      var isSameDate = moment(start).isSame(end);
      var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

      if (isAllDay) {
        return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
      }

      return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
    },
    popupDetailLocation: function(schedule) {
      return 'Location : ' + schedule.location;
    },
    popupDetailUser: function(schedule) {
      return 'User : ' + (schedule.attendees || []).join(', ');
    },
    popupDetailState: function(schedule) {
      return 'State : ' + schedule.state || 'Busy';
    },
    popupDetailRepeat: function(schedule) {
      return 'Repeat : ' + schedule.recurrenceRule;
    },
    popupDetailBody: function(schedule) {
      return 'Body : ' + schedule.body;
    },
    popupEdit: function() {
      return 'Edit';
    },
	
    popupDelete: function() {
      return 'Delete';
    }
	
  };
  var COMMON_CUSTOM_THEME = {
    'common.border': '1px solid #ffbb3b',
    'common.backgroundColor': '#ffbb3b0f',
    'common.holiday.color': '#f54f3d',
    'common.saturday.color': '#3162ea',
    'common.dayname.color': '#333'
  };
  var cal = new tui.Calendar('#calendar', {
	 
    defaultView: 'month',	
    template: templates,
    useCreationPopup: false,
    useDetailPopup: true,
	disableClick: true,
	disableDblClick: true,
	 theme: COMMON_CUSTOM_THEME ,
	 isReadOnly: true
	   });
  
  </script>
   <script src="events/default.js"></script>
</body>
 </html>
   
                    