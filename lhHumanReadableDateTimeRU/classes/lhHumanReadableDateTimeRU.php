<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lhHumanReadableDateTimeRU
 *
 * @author Πέτρος Ιωαννίδης
 */
class lhHumanReadableDateTimeRU {
    
    const SECONDS_IN_A_DAY = 86400;
    const RU_MONTHS = ['', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    
    private $time;
    private $now;

    public function __construct($time='time()', $now='time()') {
        $timestamp = time();
        $this->time = new DateTime('@'. ($time == 'time()' ? $timestamp : strtotime($time)));
        $this->now = new DateTime('@'. ($now == 'time()' ? $timestamp : strtotime($now)));
    }
    
    public function day() {
        $theday_start = strtotime($this->time->format('Y-m-d\T00:00:00P'));
        $today_start = strtotime($this->now->format('Y-m-d\T00:00:00P'));
        $diff = ($theday_start-$today_start) / self::SECONDS_IN_A_DAY;
        
        switch ($diff) {
            case 0: 
                return 'сегодня';
            case 1: 
                return 'завтра';
            case 2:
                return 'послезавтра';
            case 3:
                return 'через три дня';
            case -1:
                return 'вчера';
            case -2:
                return 'позавчера';
            case -3:
                return 'три дня назад';
            default:
                return $this->time->format('j') . ' ' . self::RU_MONTHS[$this->time->format('n')];
        }
    }
    
    public function at() {
        return $this->time->format('в G:i');
    }
    
    public function when() {
        return $this->day() . ' ' . $this->at();
    }
}
