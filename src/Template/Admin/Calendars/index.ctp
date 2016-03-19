<?php

use Cake\I18n\I18n;
use Cake\View\Helper\UrlHelper;

$language  = substr(I18n::locale(), 0, 2);
$this->Html->css([
    '/bower_components/fullcalendar/dist/fullcalendar.css'
], ['block' => true]);
$this->Html->script([
    '/bower_components/moment/min/moment.min.js',
    '/bower_components/fullcalendar/dist/fullcalendar.min.js',
    "/bower_components/fullcalendar/dist/lang/$language.js"
], ['block' => true]);
?>
<div class="calendars row-fluid">
    <h3><?php echo __('Calendars') ?></h3>
    <hr/>
    <div class="row">
        <div class="col-lg-3">
            <ul class="list-group">
                <div class="list-group">

                    <?php
                    $displayed = $this->request->session()->read('calendars.displayed');
                    #debug($displayed);
                    #
                    foreach ($calendars as $calendar):
                        ?>
                        <li 
                            class="list-group-item calendar" 
                            data-id="<?php echo $calendar->id; ?>" 
                            style="background:<?php echo $calendar->color; ?>"
                            >
                                <?php
                                echo $calendar->id;
                                echo '-';
                                echo $calendar->name;
                                ?>
                            <div class="btn-group pull-right">
                                <?php
                                $class    = 'btn btn-default btn-xs toggleCalendarAction ';
                                $disabled = (!in_array($calendar->id, $displayed));
                                $class.= ($disabled) ? '' : 'displayed';
                                echo $this->Html->link('<i class="fa fa-eye"></i> ', ['#' => ''], [
                                    'id'       => '',
                                    'class'    => $class,
                                    'disabled' => $disabled,
                                    'data-id'  => $calendar->id,
                                    'escape'   => false
                                ]);
                                echo $this->Html->link('<i class="fa fa-pencil"></i> ', ['action' => 'edit', $calendar->id], ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                                echo $this->Form->postLink('<i class="fa fa-times"></i> ', ['action' => 'delete'], [
                                    'class'   => 'btn btn-default btn-xs',
                                    'escape'  => false,
                                    'confirm' => __('Are you sure you want to delete the calendar "{0}" ?', $calendar->name)
                                ]);
                                ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-lg-9">
            <div id="calendar"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        if ($('#calendar').hasClass('.fc')) {
            return;
        }
        var calendar = $('#calendar');
        var displayed = [];
        var fetchedCalendars = [];
        var calendars = [];

        $(document).on('click', '.toggleCalendarAction', function(e) {
            e.preventDefault();
            calendars = [];
            $(this).toggleClass('displayed');
            $(this).attr('disabled', function(index, attr) {
                return attr === 'disabled' ? null : 'disabled';
            });
            ;
            $(".toggleCalendarAction.displayed").each(function(index, item) {
                calendars.push($(this).attr('data-id'));
            });
            console.info(calendars);
            calendar.fullCalendar('refetchEvents');
            return;
        });

        calendar.fullCalendar({
            events: {
                url: '<?php echo $this->Url->build([ 'controller' => 'events', 'action' => 'getCalendarsEvents']) ?>',
                type: 'GET',
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                cache: true,
                data: function() {
                    return {
                        // start and end params are automatically
                        // included by fullcalendar
                        calendars: calendars
                    };
                }
            }
        });
    });
</script>
<?php
return;
