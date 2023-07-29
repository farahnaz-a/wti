<?php

function allCourses(){
    return \App\Models\Course::all();
}
function settings(){
    return \App\Models\GeneralSetting::first();
}